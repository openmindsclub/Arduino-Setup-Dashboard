<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Registration */

$this->title = 'Create Registration';
$this->params['breadcrumbs'][] = ['label' => 'Registrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registration-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    

</div>
