<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = 'Create Post with Not CKEditor';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('formnock', [
        'model' => $model,
    ]) ?>

</div>