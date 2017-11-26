
<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\export\ExportMenu;
use kartik\dialog\Dialog;
use backend\models\Registration;
use backend\models\RegistrationSearch;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RegistrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = "Dashbord Selection";
?>

<h4> Exporter tous les participants</h4>
<?php
$gridColumns = [
'id',
'email',
'nom',
'prenom',
'annee',
'specialite',
'known',
'level',
'coming',
'participated',
'interested'
];

$searchModel = new RegistrationSearch();
$dataAccepted = $searchModel->searchSpecial(Yii::$app->request->queryParams);

echo ExportMenu::widget([
    'dataProvider' =>$dataAccepted,
    'columns' => $gridColumns
    ]);
?>


<h4> Exporter les participants acceptés</h4>
<?php
$gridColumns = [
'id',
'email',
'nom',
'prenom',
'annee',
'specialite',
'known',
'level',
'coming',
'participated',
'interested'
];

$searchModel = new RegistrationSearch();
$dataAccepted = $searchModel->searchAccepted(Yii::$app->request->queryParams);

echo ExportMenu::widget([
    'dataProvider' =>$dataAccepted,
    'columns' => $gridColumns
    ]);
?>
<h4>Exporter les participants en attente</h4>
<?php
$gridColumns = [
'id',
'email',
'nom',
'prenom',
'annee',
'specialite',
'known',
'level',
'coming',
'participated',
'interested'
];

$searchModel = new RegistrationSearch();
$dataWaiting = $searchModel->searchWaiting(Yii::$app->request->queryParams);

echo ExportMenu::widget([
    'dataProvider' =>$dataWaiting,
    'columns' => $gridColumns
    ]);
?>

<br><br>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' =>function($model){
            if($model->accepted == 0)
                return ['class' => 'danger'];
            elseif($model->accepted == 1)
                return ['class' => 'success'];
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            

            'id',
            'email',
            'nom',
            'prenom',
            'annee',
            'specialite',
            //'email:email',
            // 'telephone',
            
             'known',
             'level',
             'coming',
             'participated',
             'interested',
             'accepted',
             
            // 'accepted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

<?php Pjax::end(); ?></div>
