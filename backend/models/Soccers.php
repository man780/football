<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_soccers".
 *
 * @property integer $id
 * @property string $name
 * @property string $fname
 * @property string $oname
 * @property string $img
 * @property integer $goals
 * @property integer $assists
 * @property integer $id_club
 * @property integer $id_country
 */
class Soccers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_soccers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'fname'], 'required'],
            [['goals', 'assists', 'id_club', 'id_country'], 'integer'],
            [['name', 'fname', 'oname', 'img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Nomi'),
            'fname' => Yii::t('app', 'Familayasi'),
            'oname' => Yii::t('app', 'Otasining ismi'),
            'img' => Yii::t('app', 'Rasm'),
            'goals' => Yii::t('app', 'Goals'),
            'assists' => Yii::t('app', 'Assists'),
            'id_club' => Yii::t('app', 'Id Club'),
            'id_country' => Yii::t('app', 'Id Country'),
        ];
    }
}
