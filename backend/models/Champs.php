<?php

namespace backend\models;

use Yii;
use yii\web\NotFoundHttpException;
/**
 * This is the model class for table "f_champs".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 */
class Champs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_champs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Naming'),
            'img' => Yii::t('app', 'Photo'),
        ];
    }

    public static function getChamp($id)
    {
        if (($model = Champs::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested post does not exist.');
        }
    }

    public static function getChamps()
    {
        if (($model = Champs::find()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested post does not exist.');
        }
    }

}
