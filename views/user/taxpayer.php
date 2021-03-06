<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Taxpayer';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="user-index">
    <h3>Manage Taxpayer</h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>  
        <p>
            <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?=GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'rowOptions' => function($model) {
                $url = Url::to(['user/view', 'id' => $model['user_id']]);
                return ['onclick' => "window.location.href='{$url}'"];
            },
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'name:ntext',
                'username',
                'password',

                //['class' => 'yii\grid\ActionColumn'],
            ],
        ]); 
       ?>
</div>




  

