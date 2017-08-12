<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room_has_monthyear".
 *
 * @property integer $id
 * @property integer $room_id
 * @property integer $monthYear_id
 *
 * @property Averageroomrate[] $averageroomrates
 * @property Revenue[] $revenues
 * @property Monthyear $monthYear
 * @property Room $room
 * @property Roomnightssold[] $roomnightssolds
 */
class RoomHasMonthyear extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room_has_monthyear';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'monthYear_id'], 'required'],
            [['room_id', 'monthYear_id'], 'integer'],
            [['monthYear_id'], 'exist', 'skipOnError' => true, 'targetClass' => Monthyear::className(), 'targetAttribute' => ['monthYear_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_id' => 'Room ID',
            'monthYear_id' => 'Month Year ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAverageroomrates()
    {
        return $this->hasMany(Averageroomrate::className(), ['room_has_monthYear_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRevenues()
    {
        return $this->hasMany(Revenue::className(), ['room_has_monthYear_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonthYear()
    {
        return $this->hasOne(Monthyear::className(), ['id' => 'monthYear_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomnightssolds()
    {
        return $this->hasMany(Roomnightssold::className(), ['room_has_monthYear_id' => 'id']);
    }
}
