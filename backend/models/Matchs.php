<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_matchs".
 *
 * @property integer $id
 * @property integer $id_champ
 * @property integer $date
 * @property integer $id_team1
 * @property integer $id_team2
 * @property integer $score1
 * @property integer $score2
 * @property integer $score11
 * @property integer $score21
 * @property string $text
 */
class Matchs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_matchs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_champ', 'date', 'id_team1', 'id_team2', 'score1', 'score2', 'text'], 'required'],
            [['id_champ', 'date', 'id_team1', 'id_team2', 'score1', 'score2', 'score11', 'score21'], 'integer'],
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
            'id_champ' => Yii::t('app', 'Chempionat'),
            'date' => Yii::t('app', 'Sana'),
            'id_team1' => Yii::t('app', '1-jamoa'),
            'id_team2' => Yii::t('app', '2-jamoa'),
            'score1' => Yii::t('app', 'Hisob 1'),
            'score2' => Yii::t('app', 'Hisob 2'),
            'score11' => Yii::t('app', 'Penalti hisobi 1'),
            'score21' => Yii::t('app', 'Penalti hisobi 2'),
            'text' => Yii::t('app', 'Tekst'),
        ];
    }
}
