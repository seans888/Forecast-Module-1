<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actual".
 *
 * @property integer $id
 * @property double $roomsRevenue
 * @property double $roomsIndividual
 * @property double $roomsGroup
 * @property double $roomsOthers
 * @property double $roomsAvailable
 * @property double $roomsSold
 * @property double $occupancy
 * @property double $adr
 * @property double $roomsRevPar
 * @property integer $monthYear_id
 *
 * @property Monthyear $monthYear
 */
class Actual extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actual';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['roomsRevenue', 'roomsIndividual', 'roomsGroup', 'roomsOthers', 'roomsAvailable', 'roomsSold', 'occupancy', 'adr', 'roomsRevPar', 'monthYear_id'], 'required'],
            [['roomsRevenue', 'roomsIndividual', 'roomsGroup', 'roomsOthers', 'roomsAvailable', 'roomsSold', 'occupancy', 'adr', 'roomsRevPar'], 'number'],
            [['monthYear_id'], 'integer'],
            [['monthYear_id'], 'exist', 'skipOnError' => true, 'targetClass' => Monthyear::className(), 'targetAttribute' => ['monthYear_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'roomsRevenue' => 'Rooms Revenue',
            'roomsIndividual' => 'Rooms Individual',
            'roomsGroup' => 'Rooms Group',
            'roomsOthers' => 'Rooms Others',
            'roomsAvailable' => 'Rooms Available',
            'roomsSold' => 'Rooms Sold',
            'occupancy' => 'Occupancy',
            'adr' => 'Adr',
            'roomsRevPar' => 'Rooms Rev Par',
            'monthYear_id' => 'Month Year ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonthYear()
    {
        return $this->hasOne(Monthyear::className(), ['id' => 'monthYear_id']);
    }
}
