<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_countries".
 *
 * @property integer $id
 * @property integer $id_champ
 * @property integer $name
 * @property integer $img
 */
class Countries extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_countries';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_champ', 'name', 'img'], 'integer'],
            [['name'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_champ' => Yii::t('app', 'Champs'),
            'name' => Yii::t('app', 'Naming'),
            'img' => Yii::t('app', 'Photo'),
        ];
    }
}
