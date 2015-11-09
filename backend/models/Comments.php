<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_comments".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_news
 * @property integer $id_champ
 * @property integer $id_club
 * @property integer $id_country
 * @property integer $id_soccer
 * @property integer $id_coach
 * @property string $title
 * @property string $text
 * @property integer $date
 * @property integer $status
 * @property integer $like
 * @property integer $dislike
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'title', 'text', 'date', 'status', 'like', 'dislike'], 'required'],
            [['id_user', 'id_news', 'id_champ', 'id_club', 'id_country', 'id_soccer', 'id_coach', 'date', 'status', 'like', 'dislike'], 'integer'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_user' => Yii::t('app', 'Foydalanuvchi'),
            'id_news' => Yii::t('app', 'Yangilik'),
            'id_champ' => Yii::t('app', 'Chemoionat'),
            'id_club' => Yii::t('app', 'Klub'),
            'id_country' => Yii::t('app', 'Terma jamoa'),
            'id_soccer' => Yii::t('app', 'O`yinchi'),
            'id_coach' => Yii::t('app', 'Murabbiy'),
            'title' => Yii::t('app', 'Sarlavha'),
            'text' => Yii::t('app', 'Tekst'),
            'date' => Yii::t('app', 'Vaqti'),
            'status' => Yii::t('app', 'Status'),
            'like' => Yii::t('app', 'Yoqdi'),
            'dislike' => Yii::t('app', 'Yoqmadi'),
        ];
    }
}
