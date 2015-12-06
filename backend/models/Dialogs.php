<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_dialogs".
 *
 * @property integer $id
 * @property integer $id_creator
 * @property string $users
 * @property string $title
 * @property integer $gols
 * @property integer $rank
 * @property integer $status
 * @property integer $dcreated
 * @property integer $dmodified
 */
class Dialogs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_dialogs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_creator', 'title', 'gols', 'rank', 'status', 'dcreated'], 'required'],
            [['id_creator', 'gols', 'rank', 'status', 'dcreated', 'dmodified'], 'integer'],
            [['users'], 'string'],
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
            'id_creator' => Yii::t('app', 'Id Creator'),
            'users' => Yii::t('app', 'Users'),
            'title' => Yii::t('app', 'Title'),
            'gols' => Yii::t('app', 'Gols'),
            'rank' => Yii::t('app', 'Rank'),
            'status' => Yii::t('app', 'Status'),
            'dcreated' => Yii::t('app', 'Dcreated'),
            'dmodified' => Yii::t('app', 'Dmodified'),
        ];
    }
}
