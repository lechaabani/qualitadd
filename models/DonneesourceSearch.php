<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\Query ;
use app\models\Donneesource;

/**
 * DonneeSearch represents the model behind the search form about `app\models\Donnee`.
 */
class DonneesourceSearch extends Donneesource
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Libelle', 'Description', 'Code_systeme', 'Typologie', 'Format', 'Granularite', 'Application', 'Table', 'Etape', 'Mode_de_production', 'Origine', 'Frequence_de_mise_a_jour', 'Commentaires', 'Statut', 'Justification', 'Priorite'], 'safe'],
            [['Donnee_sensible'], 'integer'],
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
        // $query = Donnee::find();
		
		// var_dump($params);
		
		
		$query = (new Query())
		->select("donnee.*, GROUP_CONCAT(donneeentite.id_entite ORDER BY donneeentite.id_entite SEPARATOR ' - ') as Responsable")
		->from('donnee')
		->join('LEFT OUTER JOIN','donneeentite','donneeentite.id_donnee = donnee.identifiant')
		->where('donnee.identifiant not in (select id_source from donneesource where id_donnee = :identifiant)')
		->andWhere ('donnee.identifiant <> :identifiant')
		->params([':identifiant' => $params['id_donnee']])
		->groupBy('donnee.identifiant');

		// var_dump($query);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

		$dataProvider->sort->attributes['Identifiant'] = [
        'asc' => ['donnee.identifiant' => SORT_ASC],        
		'desc' => ['donnee.identifiant' => SORT_DESC],
        ];
		
		$dataProvider->sort->attributes['Libelle'] = [
        'asc' => ['donnee.libelle' => SORT_ASC],        
		'desc' => ['donnee.libelle' => SORT_DESC],
        ];
		
		$dataProvider->sort->attributes['Format'] = [
        'asc' => ['donnee.format' => SORT_ASC],        
		'desc' => ['donnee.format' => SORT_DESC],
        ];
		
		$dataProvider->sort->attributes['Application'] = [
        'asc' => ['donnee.application' => SORT_ASC],        
		'desc' => ['donnee.application' => SORT_DESC],
        ];
		
		$dataProvider->sort->attributes['Priorite'] = [
        'asc' => ['donnee.priorite' => SORT_ASC],        
		'desc' => ['donnee.priorite' => SORT_DESC],
        ];
		
		$dataProvider->sort->attributes['Responsable'] = [
        'asc' => ['donneeentite.id_entite' => SORT_ASC],        
		'desc' => ['donneeentite.id_entite' => SORT_DESC],
        ];

		$dataProvider->key = 'Identifiant' ;

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Donnee_sensible' => $this->Donnee_sensible,
        ]);

        $query->andFilterWhere(['like', 'Identifiant', $this->Identifiant])
            ->andFilterWhere(['like', 'Libelle', $this->Libelle])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'Code_systeme', $this->Code_systeme])
            ->andFilterWhere(['like', 'Typologie', $this->Typologie])
            ->andFilterWhere(['like', 'Format', $this->Format])
            ->andFilterWhere(['like', 'Granularite', $this->Granularite])
            ->andFilterWhere(['like', 'Application', $this->Application])
            ->andFilterWhere(['like', 'Table', $this->Table])
            ->andFilterWhere(['like', 'Etape', $this->Etape])
            ->andFilterWhere(['like', 'Mode_de_production', $this->Mode_de_production])
            ->andFilterWhere(['like', 'Origine', $this->Origine])
            ->andFilterWhere(['like', 'Frequence_de_mise_a_jour', $this->Frequence_de_mise_a_jour])
            ->andFilterWhere(['like', 'Commentaires', $this->Commentaires])
            ->andFilterWhere(['like', 'Statut', $this->Statut])
            ->andFilterWhere(['like', 'Justification', $this->Justification])
			// ->andFilterWhere(['like', 'Responsable', $this->Responsable])
            ->andFilterWhere(['like', 'Priorite', $this->Priorite]);


        return $dataProvider;
    }
}
