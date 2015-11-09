<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_tags".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_news
 * @property integer $id_champs
 * @property integer $id_country
 * @property integer $id_club
 * @property integer $id_soccer
 * @property integer $id_coach
 */
class Tags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['id_news', 'id_champs', 'id_country', 'id_club', 'id_soccer', 'id_coach'], 'integer'],
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
            'name' => Yii::t('app', 'Name'),
            'id_news' => Yii::t('app', 'Id News'),
            'id_champs' => Yii::t('app', 'Id Champs'),
            'id_country' => Yii::t('app', 'Id Country'),
            'id_club' => Yii::t('app', 'Id Club'),
            'id_soccer' => Yii::t('app', 'Id Soccer'),
            'id_coach' => Yii::t('app', 'Id Coach'),
        ];
    }
}
