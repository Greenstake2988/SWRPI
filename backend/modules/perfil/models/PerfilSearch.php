<?php

namespace backend\modules\perfil\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\perfil\models\Perfil;

/**
 * PerfilSearch represents the model behind the search form of `backend\modules\perfil\models\Perfil`.
 */
class PerfilSearch extends Perfil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idperfil', 'idgradoacademico', 'user_id'], 'integer'],
            [['nombre_perfil', 'apellido_perfil', 'genero_perfil', 'ingenieria_perfil', 'SNI', 'promep_perfil', 'tc_perfil'], 'safe'],
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
        $query = Perfil::find();

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
            'idperfil' => $this->idperfil,
            'idgradoacademico' => $this->idgradoacademico,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'nombre_perfil', $this->nombre_perfil])
            ->andFilterWhere(['like', 'apellido_perfil', $this->apellido_perfil])
            ->andFilterWhere(['like', 'genero_perfil', $this->genero_perfil])
            ->andFilterWhere(['like', 'ingenieria_perfil', $this->ingenieria_perfil])
            ->andFilterWhere(['like', 'SNI', $this->SNI])
            ->andFilterWhere(['like', 'promep_perfil', $this->promep_perfil])
            ->andFilterWhere(['like', 'tc_perfil', $this->tc_perfil]);

        return $dataProvider;
    }
}
