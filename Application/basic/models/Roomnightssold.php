<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "roomnightssold".
 *
 * @property integer $id
 * @property double $gRateRNS
 * @property double $actualRNS
 * @property double $budgetRNS
 * @property double $lastYearRNS
 * @property integer $room_has_monthYear_id
 *
 * @property RoomHasMonthyear $roomHasMonthYear
 */
class Roomnightssold extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roomnightssold';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gRateRNS', 'actualRNS', 'budgetRNS', 'lastYearRNS', 'room_has_monthYear_id'], 'required'],
            [['gRateRNS', 'actualRNS', 'budgetRNS', 'lastYearRNS'], 'number'],
            [['room_has_monthYear_id'], 'integer'],
            [['room_has_monthYear_id'], 'exist', 'skipOnError' => true, 'targetClass' => RoomHasMonthyear::className(), 'targetAttribute' => ['room_has_monthYear_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gRateRNS' => 'G Rate Rns',
            'actualRNS' => 'Actual Rns',
            'budgetRNS' => 'Budget Rns',
            'lastYearRNS' => 'Last Year Rns',
            'room_has_monthYear_id' => 'Room Has Month Year ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomHasMonthYear()
    {
        return $this->hasOne(RoomHasMonthyear::className(), ['id' => 'room_has_monthYear_id']);
    }
}
