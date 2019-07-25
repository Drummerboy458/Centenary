<?php
/**
 * Team: 404NotFound,NKU
 * Coding by 李汶蔚 1711351, 20190713
 * This this the CUDA of ActActivity in frontend web.
 */
namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ActActivity;

/**
 * ActActivitySearch represents the model behind the search form about `frontend\models\ActActivity`.
 */
class ActActivitySearch extends ActActivity
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'content', 'published_at', 'holded_at', 'updated_at', 'sponsor', 'location'], 'safe'],
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
        $query = ActActivity::find()->orderby(['holded_at' => SORT_DESC]); //根据举办时间排序

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
            'published_at' => $this->published_at,
            'holded_at' => $this->holded_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'sponsor', $this->sponsor])
            ->andFilterWhere(['like', 'location', $this->location]);

        return $dataProvider;
    }
}
