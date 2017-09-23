<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "roomflash".
 *
 * @property integer $id
 * @property double $roomOtherActual
 * @property double $roomAvailableActual
 * @property double $roomIndividualLF
 * @property double $roomGroupLF
 * @property double $roomOtherLF
 * @property double $roomAvailableLF
 * @property double $roomSoldLF
 * @property double $roomIndividualBudget
 * @property double $roomGroupBudget
 * @property double $roomOtherBudget
 * @property double $roomAvailableBudget
 * @property double $roomSoldBudget
 * @property double $roomIndividualLY
 * @property double $roomGroupLY
 * @property double $roomOtherLY
 * @property double $roomAvailableLY
 * @property double $roomSoldLY
 * @property double $roomRevenueActual
 * @property double $roomIndividualActual
 * @property double $roomGroupActual
 * @property double $roomSoldActual
 * @property double $occupancyActual
 * @property double $adrActual
 * @property double $roomRevParActual
 * @property double $roomRevenueLF
 * @property double $occupancyLF
 * @property double $adrLF
 * @property double $roomRevParLF
 * @property double $roomRevenueBudget
 * @property double $occupancyBudget
 * @property double $adrBudget
 * @property double $roomRevParBudget
 * @property double $roomRevenueLY
 * @property double $occupancyLY
 * @property double $adrLY
 * @property double $roomRevParLY
 * @property double $roomRevenueVVB
 * @property double $roomIndividualVVB
 * @property double $roomGroupVVB
 * @property double $roomOtherVVB
 * @property double $roomAvailableVVB
 * @property double $roomSoldVVB
 * @property double $occupancyVVB
 * @property double $adrVVB
 * @property double $roomRevParVVB
 * @property double $roomRevenueVVLY
 * @property double $roomIndividualVVLY
 * @property double $roomGroupVVLY
 * @property double $roomOtherVVLY
 * @property double $roomAvailableVVLY
 * @property double $roomSoldVVLY
 * @property double $occupancyVVLY
 * @property double $adrVVLY
 * @property double $roomRevParVVLY
 * @property integer $monthYear_id
 *
 * @property Monthyear $monthYear
 */
class Roomflash extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roomflash';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['roomOtherActual', 'roomAvailableActual', 'roomIndividualLF', 'roomGroupLF', 'roomOtherLF', 'roomAvailableLF', 'roomSoldLF', 'roomIndividualBudget', 'roomGroupBudget', 'roomOtherBudget', 'roomAvailableBudget', 'roomSoldBudget', 'roomIndividualLY', 'roomGroupLY', 'roomOtherLY', 'roomAvailableLY', 'roomSoldLY', 'roomRevenueActual', 'roomIndividualActual', 'roomGroupActual', 'roomSoldActual', 'occupancyActual', 'adrActual', 'roomRevParActual', 'roomRevenueLF', 'occupancyLF', 'adrLF', 'roomRevParLF', 'roomRevenueBudget', 'occupancyBudget', 'adrBudget', 'roomRevParBudget', 'roomRevenueLY', 'occupancyLY', 'adrLY', 'roomRevParLY', 'roomRevenueVVB', 'roomIndividualVVB', 'roomGroupVVB', 'roomOtherVVB', 'roomAvailableVVB', 'roomSoldVVB', 'occupancyVVB', 'adrVVB', 'roomRevParVVB', 'roomRevenueVVLY', 'roomIndividualVVLY', 'roomGroupVVLY', 'roomOtherVVLY', 'roomAvailableVVLY', 'roomSoldVVLY', 'occupancyVVLY', 'adrVVLY', 'roomRevParVVLY', 'monthYear_id'], 'required'],
            [['roomOtherActual', 'roomAvailableActual', 'roomIndividualLF', 'roomGroupLF', 'roomOtherLF', 'roomAvailableLF', 'roomSoldLF', 'roomIndividualBudget', 'roomGroupBudget', 'roomOtherBudget', 'roomAvailableBudget', 'roomSoldBudget', 'roomIndividualLY', 'roomGroupLY', 'roomOtherLY', 'roomAvailableLY', 'roomSoldLY', 'roomRevenueActual', 'roomIndividualActual', 'roomGroupActual', 'roomSoldActual', 'occupancyActual', 'adrActual', 'roomRevParActual', 'roomRevenueLF', 'occupancyLF', 'adrLF', 'roomRevParLF', 'roomRevenueBudget', 'occupancyBudget', 'adrBudget', 'roomRevParBudget', 'roomRevenueLY', 'occupancyLY', 'adrLY', 'roomRevParLY', 'roomRevenueVVB', 'roomIndividualVVB', 'roomGroupVVB', 'roomOtherVVB', 'roomAvailableVVB', 'roomSoldVVB', 'occupancyVVB', 'adrVVB', 'roomRevParVVB', 'roomRevenueVVLY', 'roomIndividualVVLY', 'roomGroupVVLY', 'roomOtherVVLY', 'roomAvailableVVLY', 'roomSoldVVLY', 'occupancyVVLY', 'adrVVLY', 'roomRevParVVLY'], 'number'],
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
            'roomOtherActual' => 'Room Other Actual',
            'roomAvailableActual' => 'Room Available Actual',
            'roomIndividualLF' => 'Room Individual Lf',
            'roomGroupLF' => 'Room Group Lf',
            'roomOtherLF' => 'Room Other Lf',
            'roomAvailableLF' => 'Room Available Lf',
            'roomSoldLF' => 'Room Sold Lf',
            'roomIndividualBudget' => 'Room Individual Budget',
            'roomGroupBudget' => 'Room Group Budget',
            'roomOtherBudget' => 'Room Other Budget',
            'roomAvailableBudget' => 'Room Available Budget',
            'roomSoldBudget' => 'Room Sold Budget',
            'roomIndividualLY' => 'Room Individual Ly',
            'roomGroupLY' => 'Room Group Ly',
            'roomOtherLY' => 'Room Other Ly',
            'roomAvailableLY' => 'Room Available Ly',
            'roomSoldLY' => 'Room Sold Ly',
            'roomRevenueActual' => 'Room Revenue Actual',
            'roomIndividualActual' => 'Room Individual Actual',
            'roomGroupActual' => 'Room Group Actual',
            'roomSoldActual' => 'Room Sold Actual',
            'occupancyActual' => 'Occupancy Actual',
            'adrActual' => 'Adr Actual',
            'roomRevParActual' => 'Room Rev Par Actual',
            'roomRevenueLF' => 'Room Revenue Lf',
            'occupancyLF' => 'Occupancy Lf',
            'adrLF' => 'Adr Lf',
            'roomRevParLF' => 'Room Rev Par Lf',
            'roomRevenueBudget' => 'Room Revenue Budget',
            'occupancyBudget' => 'Occupancy Budget',
            'adrBudget' => 'Adr Budget',
            'roomRevParBudget' => 'Room Rev Par Budget',
            'roomRevenueLY' => 'Room Revenue Ly',
            'occupancyLY' => 'Occupancy Ly',
            'adrLY' => 'Adr Ly',
            'roomRevParLY' => 'Room Rev Par Ly',
            'roomRevenueVVB' => 'Room Revenue Vvb',
            'roomIndividualVVB' => 'Room Individual Vvb',
            'roomGroupVVB' => 'Room Group Vvb',
            'roomOtherVVB' => 'Room Other Vvb',
            'roomAvailableVVB' => 'Room Available Vvb',
            'roomSoldVVB' => 'Room Sold Vvb',
            'occupancyVVB' => 'Occupancy Vvb',
            'adrVVB' => 'Adr Vvb',
            'roomRevParVVB' => 'Room Rev Par Vvb',
            'roomRevenueVVLY' => 'Room Revenue Vvly',
            'roomIndividualVVLY' => 'Room Individual Vvly',
            'roomGroupVVLY' => 'Room Group Vvly',
            'roomOtherVVLY' => 'Room Other Vvly',
            'roomAvailableVVLY' => 'Room Available Vvly',
            'roomSoldVVLY' => 'Room Sold Vvly',
            'occupancyVVLY' => 'Occupancy Vvly',
            'adrVVLY' => 'Adr Vvly',
            'roomRevParVVLY' => 'Room Rev Par Vvly',
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
