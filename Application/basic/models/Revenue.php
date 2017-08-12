<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "revenue".
 *
 * @property integer $id
 * @property double $gRateRev
 * @property double $actualRev
 * @property double $budgetRev
 * @property double $lastYearRev
 * @property integer $room_has_monthYear_id
 *
 * @property RoomHasMonthyear $roomHasMonthYear
 */
class Revenue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'revenue';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gRateRev', 'actualRev', 'budgetRev', 'lastYearRev', 'room_has_monthYear_id'], 'required'],
            [['gRateRev', 'actualRev', 'budgetRev', 'lastYearRev'], 'number'],
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
            'gRateRev' => 'G Rate Rev',
            'actualRev' => 'Actual Rev',
            'budgetRev' => 'Budget Rev',
            'lastYearRev' => 'Last Year Rev',
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
