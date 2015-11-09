<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_banners".
 *
 * @property integer $id
 * @property integer $id_place
 * @property integer $interval
 * @property string $size
 */
class Banners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_banners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_place', 'size'], 'required'],
            [['id_place', 'interval'], 'integer'],
            [['size'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_place' => Yii::t('app', 'Joy'),
            'interval' => Yii::t('app', 'Interval'),
            'size' => Yii::t('app', 'Joy'),
        ];
    }
}
