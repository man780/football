(function($){
$.fn.alphanumeric = function(p) {
p = $.extend({
ichars: "!@#$%^&*()+=[]\\\';,/{}|\":<>?~`.- ",
nchars: "",
allow: ""
}, p);
return this.each
(
function() 
{
if (p.nocaps) p.nchars += "ABCDEFGHIJKLMNOPQRSTUVWXYZЁЙЦУКЕНГШЩЗХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮ";
if (p.allcaps) p.nchars += "abcdefghijklmnopqrstuvwxyzёйцукенгшщзхъфывапролджэячсмитьбю";
s = p.allow.split('');
for ( i=0;i<s.length;i++) if (p.ichars.indexOf(s[i]) != -1) s[i] = "\\" + s[i];
p.allow = s.join('|');
var reg = new RegExp(p.allow,'gi');
var ch = p.ichars + p.nchars;
ch = ch.replace(reg,'');
$(this).keypress
(
function (e)
{
if (!e.charCode) k = String.fromCharCode(e.which);
else k = String.fromCharCode(e.charCode);
if (ch.indexOf(k) != -1) e.preventDefault();
if (e.ctrlKey&&k=='v') e.preventDefault();
}
);
$(this).bind('contextmenu',function () {return false});
}
);
};
$.fn.numeric = function(p) {
var az = "abcdefghijklmnopqrstuvwxyzёйцукенгшщзхъфывапролджэячсмитьбю";
az += az.toUpperCase();
p = $.extend({
nchars: az
}, p);
return this.each (function()
{
$(this).alphanumeric(p);
}
);
};

$.fn.alpha = function(p) {
var regl = new RegExp(/^[A-Za-z0-9_-]$/);
$(this).keypress(function (e){
if (!e.charCode) k = String.fromCharCode(e.which);
else k = String.fromCharCode(e.charCode);
if (!regl.test(k)) e.preventDefault();
});
};
$.fn.elogin = function(p) {
  var regl = new RegExp(/^[A-Za-z0-9 ]{3,20}$/);
  return regl.test(p);
};
})(jQuery);