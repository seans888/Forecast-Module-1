<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $id
 * @property string $roomType
 * @property string $roomSegment
 *
 * @property RoomHasMonthyear[] $roomHasMonthyears
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['roomType', 'roomSegment'], 'required'],
            [['roomType'], 'string', 'max' => 10],
            [['roomSegment'], 'string', 'max' => 35],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'roomType' => 'Room Type',
            'roomSegment' => 'Room Segment',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomHasMonthyears()
    {
        return $this->hasMany(RoomHasMonthyear::className(), ['room_id' => 'id']);
    }
}
