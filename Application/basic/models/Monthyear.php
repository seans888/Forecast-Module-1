<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "monthyear".
 *
 * @property integer $id
 * @property string $month
 * @property integer $year
 *
 * @property Actual[] $actuals
 * @property Budget[] $budgets
 * @property Lastforecast[] $lastforecasts
 * @property Lastyear[] $lastyears
 * @property RoomHasMonthyear[] $roomHasMonthyears
 * @property Variancevsbudget[] $variancevsbudgets
 * @property Variancevslastyear[] $variancevslastyears
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
            [['year'], 'integer'],
            [['month'], 'string', 'max' => 9],
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
    public function getActuals()
    {
        return $this->hasMany(Actual::className(), ['monthYear_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBudgets()
    {
        return $this->hasMany(Budget::className(), ['monthYear_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLastforecasts()
    {
        return $this->hasMany(Lastforecast::className(), ['monthYear_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLastyears()
    {
        return $this->hasMany(Lastyear::className(), ['monthYear_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomHasMonthyears()
    {
        return $this->hasMany(RoomHasMonthyear::className(), ['monthYear_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVariancevsbudgets()
    {
        return $this->hasMany(Variancevsbudget::className(), ['monthYear_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVariancevslastyears()
    {
        return $this->hasMany(Variancevslastyear::className(), ['monthYear_id' => 'id']);
    }
}
