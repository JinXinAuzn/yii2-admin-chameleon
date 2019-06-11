<?php

/* @var $this yii\web\View */
/* @var $model jx\admin_chameleon\models\Menu */

$this->title = Yii::t('rbac-admin', 'Update Menu') . ': ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac-admin', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('rbac-admin', 'Update');
$this->renderFile('@jx/admin_chameleon/views/layouts/parts/section.php');

?>
<?= $this->blocks['sectionOne'] ?>
<div class="list-table list-table ibox panel-dep-edit">
    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>
</div>
<?= $this->blocks['sectionTwo'] ?>
