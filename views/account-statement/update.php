<?php
<<<<<<< HEAD

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AccountStatement */

$this->title = 'Update Account Statement: ' . $model->soa_id;
$this->params['breadcrumbs'][] = ['label' => 'Account Statements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->soa_id, 'url' => ['view', 'id' => $model->soa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="account-statement-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
=======

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AccountStatement */

$this->title = 'Update Account Statement: ' . $model->soa_id;
$this->params['breadcrumbs'][] = ['label' => 'Account Statements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->soa_id, 'url' => ['view', 'id' => $model->soa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="account-statement-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
>>>>>>> origin/db_branch
