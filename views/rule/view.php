<?php

use jx\admin_chameleon\components\Helper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var jx\admin_chameleon\models\AuthItem $model
 */
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac-admin', 'Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->renderFile('@jx/admin_chameleon/views/layouts/parts/section.php');

?>
<?= $this->blocks['sectionOne'] ?>
<?php if (Helper::checkRoute('update')): ?>
    <?= Html::a(Yii::t('rbac-admin', 'Update'), ['update', 'id' => $model->name], ['class' => 'btn  btn-success']) ?>
<?php endif; ?>
&nbsp;
<?php if (Helper::checkRoute('delete')) {
    echo Html::a(Yii::t('rbac-admin', 'Delete'), ['delete', 'id' => $model->name], [
        'class' => 'btn btn-danger',
        'data-confirm' => Yii::t('rbac-admin', 'Are you sure to delete this item?'),
        'data-method' => 'post',
    ]);
}

echo DetailView::widget([
    'model' => $model,
    'options' => ['class' => "text-center kv-grid-table table table-bordered table-striped kv-table-wrap"],
    'attributes' => [
        'name',
        'className',
    ],
]);
?>
<?= $this->blocks['sectionTwo'] ?>
