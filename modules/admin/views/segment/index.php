<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Segment */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Segments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="segment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Segment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'icon',
            [
                    'label' => 'Компании',
                    'format' => 'html',
                    'value' => function($model){
                        $companies = '';
                        foreach ($model->companies as $company){
                            $companies .= "<td>{$company->name}, </td>";
                        }
                        return $companies;
                    }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
