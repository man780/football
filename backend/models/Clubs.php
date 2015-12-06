<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_clubs".
 *
 * @property integer $id
 * @property integer $id_country
 * @property string $city
 * @property string $name
 * @property string $img
 * @property string $inform
 * @property integer $status
 */
class Clubs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_clubs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_country', 'city', 'name'], 'required'],
            [['id_country', 'status'], 'integer'],
            [['inform'], 'string'],
            [['city', 'name', 'img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_country' => Yii::t('app', 'Id Country'),
            'city' => Yii::t('app', 'City'),
            'name' => Yii::t('app', 'Name'),
            'img' => Yii::t('app', 'Img'),
            'inform' => Yii::t('app', 'Inform'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    public static function getClub($id)
    {
        if (($model = Clubs::findOne($id)) !== null) {
            return $model;
        } else {
            throw new \yii\web\NotFoundHttpException('The requested post does not exist.');
        }
    }

    public static function getClubName($id)
    {
        if (($model = Clubs::findOne($id)) !== null) {
            return $model->name;
        } else {
            throw new \yii\web\NotFoundHttpException('The requested post does not exist.');
        }
    }
}
