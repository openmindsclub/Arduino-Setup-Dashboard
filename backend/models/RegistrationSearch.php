<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Registration;

/**
 * RegistrationSearch represents the model behind the search form about `backend\models\Registration`.
 */
class RegistrationSearch extends Registration
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nom', 'prenom', 'annee', 'specialite', 'email', 'coming', 'interested'], 'safe'],
            [['telephone', 'known', 'level', 'participated', 'id', 'accepted'], 'integer'],
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

    public function searchAccepted($params)
    {
        $query = Registration::find()->andwhere(['accepted' => 1]);

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
            'telephone' => $this->telephone,
            'known' => $this->known,
            'level' => $this->level,
            'participated' => $this->participated,
            'id' => $this->id,
            'accepted' => $this->accepted,
        ]);

        $query->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'prenom', $this->prenom])
            ->andFilterWhere(['like', 'annee', $this->annee])
            ->andFilterWhere(['like', 'specialite', $this->specialite])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'coming', $this->coming])
            ->andFilterWhere(['like', 'interested', $this->interested]);

        return $dataProvider;
    }
    
    public function searchWaiting($params)
    {
        $query = Registration::find()->andwhere(['accepted' => 2]);

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
            'telephone' => $this->telephone,
            'known' => $this->known,
            'level' => $this->level,
            'participated' => $this->participated,
            'id' => $this->id,
            'accepted' => $this->accepted,
        ]);

        $query->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'prenom', $this->prenom])
            ->andFilterWhere(['like', 'annee', $this->annee])
            ->andFilterWhere(['like', 'specialite', $this->specialite])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'coming', $this->coming])
            ->andFilterWhere(['like', 'interested', $this->interested]);

        return $dataProvider;
    }

    public function search($params)
    {
        $query = Registration::find();

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
            'telephone' => $this->telephone,
            'known' => $this->known,
            'level' => $this->level,
            'participated' => $this->participated,
            'id' => $this->id,
            'accepted' => $this->accepted,
        ]);

        $query->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'prenom', $this->prenom])
            ->andFilterWhere(['like', 'annee', $this->annee])
            ->andFilterWhere(['like', 'specialite', $this->specialite])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'coming', $this->coming])
            ->andFilterWhere(['like', 'interested', $this->interested]);

        return $dataProvider;
    }
}
