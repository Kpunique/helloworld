<?php

use yii\helpers\Html;

$newArray = array("Learn", "Grow", "Code", "Fun");
array_push($newArray, "$model->item");

$count = count($newArray);

$part1 = array_slice($newArray, 0, $count - 1);
$sentence = implode(",", $part1) . ' and ' . $newArray[$count - 1];


//echo Html::encode($sentence); 
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Array value</label>: <?= Html::encode($model->item) ?></li>
</ul>

<p> your array value in a sentence is <?= Html::encode($sentence) ?></p>