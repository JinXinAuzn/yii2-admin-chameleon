<?php

use jx\admin_chameleon\components\Helper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model jx\admin_chameleon\models\Menu */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac-admin', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->renderFile('@jx/admin_chameleon/views/layouts/parts/section.php');

?>
<?= $this->blocks['sectionOne'] ?>
<div class="list-table list-table ibox panel-dep-edit">
    <?php if (Helper::checkRoute('update')) {
        echo Html::a(Yii::t('rbac-admin', 'Update'), ['update', 'id' => $model->id], [
            'class' => 'btn btn-success'
        ]);
    }
    ?>
    &nbsp;
    <?php if (Helper::checkRoute('delete')) {
        echo Html::a(Yii::t('rbac-admin', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]);
    }
    ?>
    &nbsp;
    <?= Html::a(Yii::t('rbac-admin', 'Return'), 'javascript:history.go(-1)', ['class' => 'btn btn-default']) ?>
    <?=
    DetailView::widget([
        'model' => $model,
        'options' => ['class' => "text-center kv-grid-table table table-bordered table-striped kv-table-wrap"],
        'attributes' => [
            'menuParent.name:text:Parent',
            'name',
            'route',
            'order',
        ],
    ])
    ?>
</div>
<?= $this->blocks['sectionTwo'] ?>
