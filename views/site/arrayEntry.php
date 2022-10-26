<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;


$newArray = array("Learn", "Grow", "Code", "Fun");

$count = count($newArray);

$part1 = array_slice($newArray, 0, $count - 1);
$sentence = implode(",", $part1) . ' and ' . $newArray[$count - 1];

echo Html::encode($sentence);
?>
<br>



<div id="buttons">
    <label>enter a new string </label>
    <input type="submit" value="update">
    <input type="hidden" name="action" value="updateArray" /><br>
    <label>&nbsp;</label>

</div>
<br>

<div class="row">
    <div class="col-lg-5">

        <?php $form = ActiveForm::begin(['id' => 'updateArray']); ?>

        <?= $form->field($model, 'update')->textInput(['autofocus' => true]) ?>



        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'updateButton']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>