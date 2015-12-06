<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 11/24/15
 * Time: 8:04 PM
 * To change this template use File | Settings | File Templates.
 */
namespace frontend\widgets\google;
use frontend\widgets\google\GoogleAsset;
use yii\helpers\Html;
use yii\web\View;
use Yii;
/**
 * Description of Language
 *
 * @author murod
 */
class GooglePlaceAutoload extends \yii\bootstrap\Widget {
    public $model;
    public $attribute = 'google-map-input';
    public $location = [
        'lat' => '50.4501',
        'lng' => '30.5234',
    ];
    public function init() {
        parent::init();
        $view = Yii::$app->getView();
        $this->registerAssets();
        $view->registerJs($this->getJs());
    }
    public function run() {
        $content = Html::label('Google maps location');
        $text = isset($this->model) ? $this->model->{$this->attribute} : '';
        $content .= Html::input('text', $this->attribute, htmlspecialchars_decode($text),['id' => 'pac-input', 'class'=>'controls', 'placeholder' => "Enter a location"]);
        $content .= Html::tag('div', null, ['id'=>'map-canvas']);
        $output = Html::tag('div', $content,['id' => 'google_maps_div', 'style' => 'margin-bottom: 10px;']);
        return $output;
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        GoogleAsset::register($view);
    }

    private function getJs() {
        $js = [];
        $js [] = "function initialize() {";
        $js [] = "var mapOptions = {";
        $js [] = "center: new google.maps.LatLng({$this->location['lat']}, {$this->location['lng']}),";
        $js [] = "zoom: 11,";
        $js [] = "};";
        $js [] = "var map = new google.maps.Map(document.getElementById('map-canvas'),";
        $js [] = "mapOptions);";
        $js [] = "var input = /** @type {HTMLInputElement} */(";
        $js [] = "document.getElementById('pac-input'));";
        $js [] = "var types = document.getElementById('type-selector');";
        $js [] = "map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);";
        $js [] = "map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);";
        $js [] = "var autocomplete = new google.maps.places.Autocomplete(input);";
        $js [] = "autocomplete.bindTo('bounds', map);";
        $js [] = "var infowindow = new google.maps.InfoWindow();";
        $js [] = "var marker = new google.maps.Marker({";
        $js [] = "map: map,";
        $js [] = "anchorPoint: new google.maps.Point(0, -29)";
        $js [] = "});";
        $js [] = "google.maps.event.addListener(autocomplete, 'place_changed', function() {";
        $js [] = "infowindow.close();";
        $js [] = "marker.setVisible(false);";
        $js [] = "var place = autocomplete.getPlace();";
        $js [] = "if (!place.geometry) {";
        $js [] = "return;";
        $js [] = "}";
        $js [] = "if (place.geometry.viewport) {";
        $js [] = "map.fitBounds(place.geometry.viewport);";
        $js [] = "} else {";
        $js [] = "map.setCenter(place.geometry.location);";
        $js [] = "map.setZoom(17);  // Why 17? Because it looks good.";
        $js [] = "}";
        $js [] = "marker.setIcon(/** @type {google.maps.Icon} */({";
        $js [] = "url: place.icon,";
        $js [] = "size: new google.maps.Size(71, 71),";
        $js [] = "origin: new google.maps.Point(0, 0),";
        $js [] = "anchor: new google.maps.Point(17, 34),";
        $js [] = "scaledSize: new google.maps.Size(35, 35)";
        $js [] = "}));";
        $js [] = "marker.setPosition(place.geometry.location);";
        $js [] = "marker.setVisible(true);";
        $js [] = "var address = '';";
        $js [] = "if (place.address_components) {";
        $js [] = "address = [";
        $js [] = "(place.address_components[0] && place.address_components[0].short_name || ''),";
        $js [] = "(place.address_components[1] && place.address_components[1].short_name || ''),";
        $js [] = "(place.address_components[2] && place.address_components[2].short_name || '')";
        $js [] = "].join(' ');";
        $js [] = "}";
        $js [] = "infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);";
        $js [] = "infowindow.open(map, marker);";
        $js [] = "});";
        $js [] = "}";
        $js [] = "google.maps.event.addDomListener(window, 'load', initialize);";
        return implode("\n", $js);
    }
}