<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_coachs".
 *
 * @property integer $id
 * @property string $name
 * @property string $fname
 * @property string $oname
 * @property string $img
 * @property integer $id_club
 * @property integer $id_country
 */
class Coachs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_coachs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'fname'], 'required'],
            [['id_club', 'id_country'], 'integer'],
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
            'name' => Yii::t('app', 'Name'),
            'fname' => Yii::t('app', 'Familiya'),
            'oname' => Yii::t('app', 'Otasining ismi'),
            'img' => Yii::t('app', 'Rasm'),
            'id_club' => Yii::t('app', 'Klub'),
            'id_country' => Yii::t('app', 'Terma jamoa'),
        ];
    }
}
