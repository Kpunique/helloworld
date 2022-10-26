<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

//http://localhost:8080/index.php?r=site%2Farray
?>


<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'item') ?>


<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>