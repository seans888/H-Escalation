<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EscalationTicketHistory */

$this->title = 'Update Escalation Ticket History: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Escalation Ticket Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="escalation-ticket-history-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
