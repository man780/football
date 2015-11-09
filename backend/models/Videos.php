<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_videos".
 *
 * @property integer $id
 * @property integer $id_champ
 * @property integer $id_country
 * @property integer $id_club
 * @property integer $id_soccer
 * @property integer $id_coach
 * @property string $title
 * @property string $img
 * @property string $text
 * @property integer $counter
 */
class Videos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_videos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_champ', 'id_country', 'id_club', 'id_soccer', 'id_coach', 'counter'], 'integer'],
            [['text'], 'string'],
            [['counter'], 'required'],
            [['title', 'img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_champ' => Yii::t('app', 'Id Champ'),
            'id_country' => Yii::t('app', 'Id Country'),
            'id_club' => Yii::t('app', 'Id Club'),
            'id_soccer' => Yii::t('app', 'Id Soccer'),
            'id_coach' => Yii::t('app', 'Id Coach'),
            'title' => Yii::t('app', 'Title'),
            'img' => Yii::t('app', 'Img'),
            'text' => Yii::t('app', 'Text'),
            'counter' => Yii::t('app', 'Counter'),
        ];
    }
}
