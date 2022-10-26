<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;


$newArray = array("Learn", "Grow", "Code", "Fun");

$count = count($newArray);

$part1 = array_slice($newArray, 0, $count - 1);
$sentence = implode(",", $part1) . ' and ' . $newArray[$count - 1];

echo Html::encode($sentence);
?>


<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item') ?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>



 