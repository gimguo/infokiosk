






<?php

/** @var yii\web\View $this */

use yii\helpers\Html;


$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
<?= Html::img('/images/fon1.png', ['style' => ['width' => '1200px']]) ?>


    <code><?= __FILE__ ?></code>
</div>
