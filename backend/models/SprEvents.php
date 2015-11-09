<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_spr_events".
 *
 * @property integer $id
 * @property string $title
 * @property string $icon
 */
class SprEvents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_spr_events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'icon'], 'required'],
            [['title', 'icon'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'icon' => Yii::t('app', 'Icon'),
        ];
    }
}
