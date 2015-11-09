'use strict';

+ function ($) {
    var Calendar = function ($element) {
        this.picker = $element.on({
            click: $.proxy(this.click, this)
        });
        this.el = $element;
        this.date = new Date();
        this.date.setHours(0);
        this.date.setMinutes(0);
        this.date.setSeconds(0);
        this.date.setMilliseconds(0);
        this.viewDate = new Date(this.date.getFullYear(), this.date.getMonth(), 1, 0, 0, 0, 0);
        this.getActiveDays();
    }

    Calendar.prototype = {
        
        getActiveDays: function ($element) {
            var _this = this;
            
            $.ajax({
                type: 'GET',
                url: _this.el.attr('data-getdays'),
                data: {
                    month: _this.viewDate.getMonth(),
                    year: _this.viewDate.getFullYear()
                },
                success: function (data) {
                    _this.fill(JSON.parse(data));
                }
            });
            
            
        },

        fill: function (activeDays) {
            var d = this.viewDate,
                year = d.getFullYear(),
                month = d.getMonth(),
                currentDate = this.date;

            currentDate.setHours(0);
            currentDate.setMinutes(0);
            currentDate.setSeconds(0);
            currentDate.setMilliseconds(0);

            this.picker.find('.calendar-widget-title').text(CalendarSettings.months[month] + ' ' + year);

            var prevMonth = new Date(year, month - 1, 28, 0, 0, 0, 0),
                day = CalendarHelpers.getDaysInMonth(prevMonth.getFullYear(), prevMonth.getMonth());

            prevMonth.setDate(day);
            prevMonth.setDate(day - (prevMonth.getDay() - 1 + 7) % 7); //Неделя начинается с ПН а не с ВС

            var nextMonth = new Date(prevMonth);
            nextMonth.setDate(nextMonth.getDate() + 42);

            var html = [];

            var clsName,
                target,
                prevY,
                prevM;

            while (prevMonth.valueOf() < nextMonth.valueOf()) {
                clsName = '';
                target = '#';
                prevY = prevMonth.getFullYear();
                prevM = prevMonth.getMonth();

                if (prevM < month || prevM > month) {
                    clsName = 'inactive';
                } else if (prevMonth.valueOf() === currentDate.valueOf()) {
                    clsName = 'current';
                }
                
                var el = this.el;

                $(activeDays.days).each(function (i, day) {
                    if (prevMonth.getDate() == day && clsName !== 'inactive') {
                        clsName += ' active';
                        target = el.attr('data-type') + day + '.' + (month+1) + '.' + year;
                    }
                })

                html.push('<a href="' + target + '" class="' + clsName + '">' + prevMonth.getDate() + '</a>');

                prevMonth.setDate(prevMonth.getDate() + 1);
            }

            this.picker.find('.calendar-widget-table-body').empty().append(html.join(''));

        },

        click: function (e) {
            var $target = $(e.target),
                d = this.viewDate,
                year = d.getFullYear(),
                month = d.getMonth();

            if ($target.closest('.calendar-widget-control.left').length) {

                this.viewDate = new Date(year, month - 1, 28, 0, 0, 0, 0);
                this.getActiveDays();
            };

            if ($target.closest('.calendar-widget-control.right').length) {
                this.viewDate = new Date(year, month + 1, 28, 0, 0, 0, 0);
                this.getActiveDays();
            };

        },

        mousedown: function (e) {
            e.stopPropagation();
            e.preventDefault();
        }
    }

    var CalendarHelpers = {
        isLeapYear: function (year) {
            return (((year % 4 === 0) && (year % 100 !== 0)) || (year % 400 === 0))
        },

        getDaysInMonth: function (year, month) {
            return [31, (CalendarHelpers.isLeapYear(year) ? 29 : 28), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][month]
        }
    }

    var CalendarSettings = {
        months: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"]
    }

    $(window).on('load', function () {
        $('.calendar-widget').each(function () {
            new Calendar($(this));
        })
    })
}(jQuery)