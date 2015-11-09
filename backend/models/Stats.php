<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_stats".
 *
 * @property integer $id
 * @property integer $id_match
 * @property integer $y_card1
 * @property integer $y_card2
 * @property integer $r_card1
 * @property integer $r_card2
 * @property integer $shots1
 * @property integer $shots2
 * @property integer $sh_on_ts1
 * @property integer $sh_on_ts2
 * @property integer $corners1
 * @property integer $corners2
 * @property integer $foul1
 * @property integer $foul2
 * @property integer $offsides1
 * @property integer $offsides2
 */
class Stats extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_stats';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_match', 'r_card1', 'r_card2', 'shots1', 'shots2', 'sh_on_ts1', 'sh_on_ts2', 'corners1', 'corners2', 'foul1', 'foul2', 'offsides1', 'offsides2'], 'required'],
            [['id_match', 'y_card1', 'y_card2', 'r_card1', 'r_card2', 'shots1', 'shots2', 'sh_on_ts1', 'sh_on_ts2', 'corners1', 'corners2', 'foul1', 'foul2', 'offsides1', 'offsides2'], 'integer']
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
            'y_card1' => Yii::t('app', 'Y Card1'),
            'y_card2' => Yii::t('app', 'Y Card2'),
            'r_card1' => Yii::t('app', 'R Card1'),
            'r_card2' => Yii::t('app', 'R Card2'),
            'shots1' => Yii::t('app', 'Shots1'),
            'shots2' => Yii::t('app', 'Shots2'),
            'sh_on_ts1' => Yii::t('app', 'Sh On Ts1'),
            'sh_on_ts2' => Yii::t('app', 'Sh On Ts2'),
            'corners1' => Yii::t('app', 'Corners1'),
            'corners2' => Yii::t('app', 'Corners2'),
            'foul1' => Yii::t('app', 'Foul1'),
            'foul2' => Yii::t('app', 'Foul2'),
            'offsides1' => Yii::t('app', 'Offsides1'),
            'offsides2' => Yii::t('app', 'Offsides2'),
        ];
    }
}
