<?php

namespace backend\modules\licenciaturainvolucrada\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\licenciaturainvolucrada\models\Licenciaturainvolucrada;

/**
 * LicenciaturainvolucradaSearch represents the model behind the search form of `backend\modules\licenciaturainvolucrada\models\Licenciaturainvolucrada`.
 */
class LicenciaturainvolucradaSearch extends Licenciaturainvolucrada
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'clave_licenciatura'], 'integer'],
            [['nombre_licenciatura'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Crears data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Licenciaturainvolucrada::find();

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
            'clave_licenciatura' => $this->clave_licenciatura,
        ]);

        $query->andFilterWhere(['like', 'nombre_licenciatura', $this->nombre_licenciatura]);

        return $dataProvider;
    }
}
