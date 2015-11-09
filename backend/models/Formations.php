<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_formations".
 *
 * @property integer $id
 * @property integer $id_match
 * @property string $soccers1
 * @property string $soccers2
 */
class Formations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_formations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_match', 'soccers1', 'soccers2'], 'required'],
            [['id_match'], 'integer'],
            [['soccers1', 'soccers2'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_match' => Yii::t('app', 'O`yin'),
            'soccers1' => Yii::t('app', 'O`yinchilar 1'),
            'soccers2' => Yii::t('app', 'O`yinchilar 2'),
        ];
    }
}
