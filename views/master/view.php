<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use jx\admin_chameleon\components\Helper;

/* @var $this yii\web\View */
/* @var $model jx\admin_chameleon\models\Master */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac-admin', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->renderFile('@jx/admin_chameleon/views/layouts/parts/section.php');

?>
<?= $this->blocks['sectionOne'] ?>
<div class="list-table list-table ibox panel-dep-edit">
    <?php if (Helper::checkRoute('activate')) {
        $title = $model->status == 10 ? '禁用' : '启用';
        echo Html::a($title, ['activate', 'id' => $model->id], [
            'class' => 'btn btn-primary',
            'data' => [
                'confirm' => Yii::t('rbac-admin', 'Are you sure you want to revise it?'),
                'method' => 'post',
            ],
        ]);
    } ?>
    &nbsp;
    <?php if (Helper::checkRoute('delete')) {
        echo Html::a(Yii::t('rbac-admin', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]);
    } ?>
    &nbsp;
    <?= Html::a(Yii::t('rbac-admin', 'Return'), 'javascript:history.go(-1)', ['class' => 'btn btn-default']) ?>

    <?= DetailView::widget([
        'model' => $model,
        'options' => ['class' => "text-center kv-grid-table table table-bordered table-striped kv-table-wrap"],
        'attributes' => [
            'username',
            'email:email',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:Y-m-d'],
            ],
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->status == 0 ? Yii::t('rbac-admin', 'Inactive') : Yii::t('rbac-admin', 'Active');
                },
            ]
        ],
    ])
    ?>
</div>
<?= $this->blocks['sectionTwo'] ?>
