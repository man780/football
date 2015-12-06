<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_matches".
 *
 * @property integer $id
 * @property integer $tur
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
class Matches extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_matches';
    }

    public function getChamp()
    {
        return $this->hasOne(Champs::className(), ['id' => 'id_champ']);
    }

    public function getTeam1()
    {
        return $this->hasOne(Clubs::className(), ['id' => 'id_team1']);
    }

    public function getTeam2()
    {
        return $this->hasOne(Clubs::className(), ['id' => 'id_team2']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tur', 'id_champ', 'date', 'id_team1', 'id_team2', 'score1', 'score2',], 'required'],
            [['tur', 'id_champ', 'date', 'id_team1', 'id_team2', 'score1', 'score2', 'score11', 'score21'], 'integer'],
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
            'tur' => Yii::t('app', 'Tur'),
            'id_champ' => Yii::t('app', 'Id Champ'),
            'date' => Yii::t('app', 'Date'),
            'id_team1' => Yii::t('app', 'Id Team1'),
            'id_team2' => Yii::t('app', 'Id Team2'),
            'score1' => Yii::t('app', 'Score1'),
            'score2' => Yii::t('app', 'Score2'),
            'score11' => Yii::t('app', 'Score11'),
            'score21' => Yii::t('app', 'Score21'),
            'text' => Yii::t('app', 'Text'),
        ];
    }
}
