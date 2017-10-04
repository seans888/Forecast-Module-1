<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "roomsegmentation".
 *
 * @property integer $id
 * @property string $roomType
 * @property double $actualRNS
 * @property double $budgetRNS
 * @property double $lastYearRNS
 * @property double $actualARR
 * @property double $budgetARR
 * @property double $lastYearARR
 * @property double $growthRateRNS
 * @property double $growthRateARR
 * @property double $actualR
 * @property double $budgetR
 * @property double $lastYearR
 * @property double $growthRateR
 * @property integer $monthYear_id
 *
 * @property Monthyear $monthYear
 */
class Roomsegmentation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roomsegmentation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['roomType', 'actualRNS', 'budgetRNS', 'lastYearRNS', 'actualARR', 'budgetARR', 'lastYearARR', 'growthRateRNS', 'growthRateARR', 'actualR', 'budgetR', 'lastYearR', 'growthRateR', 'monthYear_id'], 'required'],
            [['actualRNS', 'budgetRNS', 'lastYearRNS', 'actualARR', 'budgetARR', 'lastYearARR', 'growthRateRNS', 'growthRateARR', 'actualR', 'budgetR', 'lastYearR', 'growthRateR'], 'number'],
            [['monthYear_id'], 'integer'],
            [['roomType'], 'string', 'max' => 45],
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
            'roomType' => 'Room Type',
            'actualRNS' => 'Actual Rns',
            'budgetRNS' => 'Budget Rns',
            'lastYearRNS' => 'Last Year Rns',
            'actualARR' => 'Actual Arr',
            'budgetARR' => 'Budget Arr',
            'lastYearARR' => 'Last Year Arr',
            'growthRateRNS' => 'Growth Rate Rns',
            'growthRateARR' => 'Growth Rate Arr',
            'actualR' => 'Actual R',
            'budgetR' => 'Budget R',
            'lastYearR' => 'Last Year R',
            'growthRateR' => 'Growth Rate R',
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
