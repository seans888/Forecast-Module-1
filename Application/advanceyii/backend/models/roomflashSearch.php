<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\roomflash;

/**
 * roomflashSearch represents the model behind the search form about `app\models\roomflash`.
 */
class roomflashSearch extends roomflash
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'monthYear_id'], 'integer'],
            [['roomOtherActual', 'roomAvailableActual', 'roomIndividualLF', 'roomGroupLF', 'roomOtherLF', 'roomAvailableLF', 'roomSoldLF', 'roomIndividualBudget', 'roomGroupBudget', 'roomOtherBudget', 'roomAvailableBudget', 'roomSoldBudget', 'roomIndividualLY', 'roomGroupLY', 'roomOtherLY', 'roomAvailableLY', 'roomSoldLY', 'roomRevenueActual', 'roomIndividualActual', 'roomGroupActual', 'roomSoldActual', 'occupancyActual', 'adrActual', 'roomRevParActual', 'roomRevenueLF', 'occupancyLF', 'adrLF', 'roomRevParLF', 'roomRevenueBudget', 'occupancyBudget', 'adrBudget', 'roomRevParBudget', 'roomRevenueLY', 'occupancyLY', 'adrLY', 'roomRevParLY', 'roomRevenueVVB', 'roomIndividualVVB', 'roomGroupVVB', 'roomOtherVVB', 'roomAvailableVVB', 'roomSoldVVB', 'occupancyVVB', 'adrVVB', 'roomRevParVVB', 'roomRevenueVVLY', 'roomIndividualVVLY', 'roomGroupVVLY', 'roomOtherVVLY', 'roomAvailableVVLY', 'roomSoldVVLY', 'occupancyVVLY', 'adrVVLY', 'roomRevParVVLY'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = roomflash::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'roomOtherActual' => $this->roomOtherActual,
            'roomAvailableActual' => $this->roomAvailableActual,
            'roomIndividualLF' => $this->roomIndividualLF,
            'roomGroupLF' => $this->roomGroupLF,
            'roomOtherLF' => $this->roomOtherLF,
            'roomAvailableLF' => $this->roomAvailableLF,
            'roomSoldLF' => $this->roomSoldLF,
            'roomIndividualBudget' => $this->roomIndividualBudget,
            'roomGroupBudget' => $this->roomGroupBudget,
            'roomOtherBudget' => $this->roomOtherBudget,
            'roomAvailableBudget' => $this->roomAvailableBudget,
            'roomSoldBudget' => $this->roomSoldBudget,
            'roomIndividualLY' => $this->roomIndividualLY,
            'roomGroupLY' => $this->roomGroupLY,
            'roomOtherLY' => $this->roomOtherLY,
            'roomAvailableLY' => $this->roomAvailableLY,
            'roomSoldLY' => $this->roomSoldLY,
            'roomRevenueActual' => $this->roomRevenueActual,
            'roomIndividualActual' => $this->roomIndividualActual,
            'roomGroupActual' => $this->roomGroupActual,
            'roomSoldActual' => $this->roomSoldActual,
            'occupancyActual' => $this->occupancyActual,
            'adrActual' => $this->adrActual,
            'roomRevParActual' => $this->roomRevParActual,
            'roomRevenueLF' => $this->roomRevenueLF,
            'occupancyLF' => $this->occupancyLF,
            'adrLF' => $this->adrLF,
            'roomRevParLF' => $this->roomRevParLF,
            'roomRevenueBudget' => $this->roomRevenueBudget,
            'occupancyBudget' => $this->occupancyBudget,
            'adrBudget' => $this->adrBudget,
            'roomRevParBudget' => $this->roomRevParBudget,
            'roomRevenueLY' => $this->roomRevenueLY,
            'occupancyLY' => $this->occupancyLY,
            'adrLY' => $this->adrLY,
            'roomRevParLY' => $this->roomRevParLY,
            'roomRevenueVVB' => $this->roomRevenueVVB,
            'roomIndividualVVB' => $this->roomIndividualVVB,
            'roomGroupVVB' => $this->roomGroupVVB,
            'roomOtherVVB' => $this->roomOtherVVB,
            'roomAvailableVVB' => $this->roomAvailableVVB,
            'roomSoldVVB' => $this->roomSoldVVB,
            'occupancyVVB' => $this->occupancyVVB,
            'adrVVB' => $this->adrVVB,
            'roomRevParVVB' => $this->roomRevParVVB,
            'roomRevenueVVLY' => $this->roomRevenueVVLY,
            'roomIndividualVVLY' => $this->roomIndividualVVLY,
            'roomGroupVVLY' => $this->roomGroupVVLY,
            'roomOtherVVLY' => $this->roomOtherVVLY,
            'roomAvailableVVLY' => $this->roomAvailableVVLY,
            'roomSoldVVLY' => $this->roomSoldVVLY,
            'occupancyVVLY' => $this->occupancyVVLY,
            'adrVVLY' => $this->adrVVLY,
            'roomRevParVVLY' => $this->roomRevParVVLY,
            'monthYear_id' => $this->monthYear_id,
        ]);

        return $dataProvider;
    }
}
