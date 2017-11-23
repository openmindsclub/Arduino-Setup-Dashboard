<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Registration */

$this->title = "Participant : " .$model->nom . " " .$model->prenom ;
?>
<div class="registration-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nom',
            'prenom',
            'annee',
            'specialite',
            [
            'attribute' => 'usthb',
            'format' =>'raw',
            'value' => function($model)
            {
              if($model->usthb==1)
                return 'Interne';
              else
                return 'Externe';
            },
            ],
            'email:email',
            'telephone',
            [
             'attribute' => 'known',
              'foramt' => 'raw',
              'value'=> function ($model) {
                        if($model->known == 1)
                            return 'Oui';
                        else 
                            return 'Non';
                      },
            ],
            [
             'attribute' => 'level',
              'foramt' => 'raw',
              'value'=> function ($model) {
                        if($model->level == 0)
                            return 'Aucun';
                        elseif($model->level == 1)
                            return 'Débutant';
                        elseif($model->level == 2)
                            return 'Intermédiaire';
                        elseif($model->level == 3)
                            return 'Avancé';
                      },
            ],
            [
             'attribute' => 'coming',
              'foramt' => 'raw',
              'value'=> function ($model) {
                        if($model->coming == '2')
                            return '2 Décemnre';
                        elseif ($model->coming == '3') 
                            return '3 Décembre';
                        elseif ($model->coming == '2-3') 
                            return 'Les deux jours';
                      },
            ],
            [
             'attribute' => 'participated',
              'foramt' => 'raw',
              'value'=> function ($model) {
                        if($model->participated == 1)
                            return 'Oui';
                        else 
                            return 'Non';
                      },
            ],
            'interested:ntext',
            'id',
            [
             'attribute' => 'accepted',
              'foramt' => 'raw',
              'value'=> function ($model) {
                        if($model->accepted == 1)
                            return 'Accepté';
                        elseif($model->accepted == 2)
                            return 'En attente';
                        else
                          return 'Refusé';
                      },
            ],
        ],
    ]) ?>

    <p>
        <?php 
            if($model->accepted == 0 || $model->accepted == 2)
              {
               echo Html::a('Accepter', ['accept', 'id' => $model->email],[
             'class' => 'btn btn-success']);
              }
            ?>

            <?php 
            if($model->accepted == 1 || $model->accepted == 2)
              {
               echo Html::a('Refuser', ['refuse', 'id' => $model->email],[
             'class' => 'btn btn-danger']);
              }
            ?>

            <?php 
            if($model->accepted == 1 || $model->accepted == 0)
              {
               echo Html::a('Attente', ['wait', 'id' => $model->email],[
             'class' => 'btn btn-primary']);
              }
            ?>


          <?php 
            // if($model->accepted == 0 || $model->accepted == 1)
            //   {
            //    echo Html::a('Mettre en file d\'attente', ['waiting', 'id' => $model->email],[
            //  'class' => 'btn btn-primary']);
            //   }
           ?>

          <?php 
            // if($model->accepted == 1 || $model->accepted == 2)
            //     {
            //      echo Html::a('Refuser', ['refuse', 'id' => $model->email],[
            //    'class' => 'btn btn-danger']);
            //     }
           ?>
          <br> <br>
        <?= Html::a('Retour', ['index'],[
           'class' => 'btn btn-success'
          ]
          ) ?>
    </p>



</div>
