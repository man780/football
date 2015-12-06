<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_stadions".
 *
 * @property integer $id
 * @property integer $id_country
 * @property integer $id_team
 * @property string $name
 * @property string $city
 * @property integer $capacity
 * @property string $img
 */
class Stadions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_stadions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_country', 'id_team', 'name', 'city', 'capacity'], 'required'],
            [['id_country', 'id_team', 'capacity'], 'integer'],
            [['name', 'city', 'img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_country' => Yii::t('app', 'Id Country'),
            'id_team' => Yii::t('app', 'Id Team'),
            'name' => Yii::t('app', 'Name'),
            'city' => Yii::t('app', 'City'),
            'capacity' => Yii::t('app', 'Capacity'),
            'img' => Yii::t('app', 'Img'),
        ];
    }
}
