<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "f_messages".
 *
 * @property integer $id
 * @property integer $id_parent
 * @property integer $id_user
 * @property integer $id_dialog
 * @property integer $status
 * @property string $text
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_parent', 'id_user', 'id_dialog', 'status', 'text'], 'required'],
            [['id_parent', 'id_user', 'id_dialog', 'status'], 'integer'],
            [['text'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_parent' => Yii::t('app', 'Id Parent'),
            'id_user' => Yii::t('app', 'Id User'),
            'id_dialog' => Yii::t('app', 'Id Dialog'),
            'status' => Yii::t('app', 'Status'),
            'text' => Yii::t('app', 'Text'),
        ];
    }
}
