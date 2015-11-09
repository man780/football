<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_clubs".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 * @property string $inform
 * @property integer $status
 */
class Clubs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_clubs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['inform'], 'string'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 255]
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
            'img' => Yii::t('app', 'Photo'),
            'inform' => Yii::t('app', 'Information'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

}
