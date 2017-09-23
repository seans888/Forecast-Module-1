<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "monthyear".
 *
 * @property integer $id
 * @property string $month
 * @property string $year
 *
 * @property Roomflash[] $roomflashes
 * @property Roomsegmentation[] $roomsegmentations
 */
class Monthyear extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'monthyear';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['month', 'year'], 'required'],
            [['month'], 'string', 'max' => 15],
            [['year'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'month' => 'Month',
            'year' => 'Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomflashes()
    {
        return $this->hasMany(Roomflash::className(), ['monthYear_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomsegmentations()
    {
        return $this->hasMany(Roomsegmentation::className(), ['monthYear_id' => 'id']);
    }
    
}
