<?php

use jx\admin_chameleon\components\Helper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel jx\admin_chameleon\models\searchs\Assignment */
/* @var $usernameField string */
/* @var $extraColumns string[] */

$this->title = Yii::t('rbac-admin', 'Assignments');
$this->params['breadcrumbs'][] = $this->title;
$this->renderFile('@jx/admin_chameleon/views/layouts/parts/section.php');
$_html = "<div class='summary'>符合搜索条件的数据共<strong class='text-danger'>{totalCount}</strong> 个" . (Yii::$app->request->queryParams ? Html::a('<u>' . '取消搜索' . '</u>', Url::to(['index']), ['class' => 'btn-search-cancel']) : '') . "</div>";
$_empty_html = "<div class='summary'>符合搜索条件的数据共<strong class='text-danger'>0</strong> 个" . (Yii::$app->request->queryParams ? Html::a('<u>' . '取消搜索' . '</u>', Url::to(['index']), ['class' => 'btn-search-cancel']) : '') . "</div>";
$columns = [
    ['class' => 'yii\grid\SerialColumn'],
    $usernameField,
];
if (!empty($extraColumns)) {
    $columns = array_merge($columns, $extraColumns);
}
$columns[] = [
    "header" => "操作",
    'headerOptions' => ['rowspan' => "2", 'style' => 'vertical-align:middle'],
    'class' => 'yii\grid\ActionColumn',
    'template' => Helper::filterActionColumn('{view}'),
    "buttons" => [
        "view" => function ($url, $model, $key) {
            return Html::a('<span class="glyphicon glyphicon-eye-open"></span> 分配权限', $url, ['class' => 'btn btn-xs btn-info activity-master-view']);
        }]
];
?>
<?= $this->blocks['sectionOne'] ?>
<div class="list-table list-table ibox panel-dep-edit">
    <div class="table-responsive">
        <?php Pjax::begin(); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'tableOptions' => ['class' => "table table-bordered list-table text-center table-rowspan"],
            'columns' => $columns,
            'summary' => $_html,
            'emptyText' => $_empty_html,
        ]); ?>
        <?php Pjax::end(); ?>
    </div>
</div>
<?= $this->blocks['sectionTwo'] ?>
