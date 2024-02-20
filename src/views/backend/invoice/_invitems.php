<?php

use yii\bootstrap\Tabs;
use siripravi\nyiixta\models\Payments;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="invoice-update">
    <?= $this->render('edit', ['model' => $model, 'stmt' => $stmt, 'items' => $model->lineItems, 'angular' => $angular]); ?>

</div>