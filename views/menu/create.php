<?php

/* @var $this yii\web\View */
/* @var $model jx\admin_chameleon\models\Menu */

$this->title = Yii::t('rbac-admin', 'Create Menu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac-admin', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
