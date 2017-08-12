<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "averageroomrate".
 *
 * @property integer $id
 * @property double $growthRateARR
 * @property double $actualARR
 * @property double $budgetARR
 * @property double $lastYearARR
 * @property integer $room_has_monthYear_id
 *
 * @property RoomHasMonthyear $roomHasMonthYear
 */
class Averageroomrate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'averageroomrate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['growthRateARR', 'actualARR', 'budgetARR', 'lastYearARR', 'room_has_monthYear_id'], 'required'],
            [['growthRateARR', 'actualARR', 'budgetARR', 'lastYearARR'], 'number'],
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
            'growthRateARR' => 'Growth Rate Arr',
            'actualARR' => 'Actual Arr',
            'budgetARR' => 'Budget Arr',
            'lastYearARR' => 'Last Year Arr',
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
