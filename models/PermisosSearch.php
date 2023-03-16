<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Permisos;

/**
 * PermisosSearch represents the model behind the search form of `app\models\Permisos`.
 */
class PermisosSearch extends Permisos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_permiso', 'id_rol', 'id_comuna', 'id_empresa', 'id_etapa'], 'integer'],
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
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Permisos::find();

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
            'id_permiso' => $this->id_permiso,
            'id_rol' => $this->id_rol,
            'id_comuna' => $this->id_comuna,
            'id_empresa' => $this->id_empresa,
            'id_etapa' => $this->id_etapa,
        ]);

        return $dataProvider;
    }
}
