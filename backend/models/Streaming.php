<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_streaming".
 *
 * @property integer $id
 * @property integer $id_match
 * @property string $time
 * @property integer $id_event
 * @property string $text
 */
class Streaming extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_streaming';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_match', 'time', 'id_event', 'text'], 'required'],
            [['id_match', 'id_event'], 'integer'],
            [['text'], 'string'],
            [['time'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_match' => Yii::t('app', 'Id Match'),
            'time' => Yii::t('app', 'Time'),
            'id_event' => Yii::t('app', 'Id Event'),
            'text' => Yii::t('app', 'Text'),
        ];
    }
}
