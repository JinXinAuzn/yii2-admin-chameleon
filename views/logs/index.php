<?php

use jx\admin_chameleon\models\Logs;
use \yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel jx\admin_chameleon\models\searchs\Logs */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = Yii::t('rbac-admin', 'Logs');
$this->params['breadcrumbs'][] = $this->title;
$this->renderFile('@jx/admin_chameleon/views/layouts/parts/section.php');
$_html = "<div class='summary'>符合搜索条件的数据共<strong class='text-danger'>{totalCount}</strong> 个" . (Yii::$app->request->queryParams ? Html::a('<u>' . '取消搜索' . '</u>', \yii\helpers\Url::to(['index']), ['class' => 'btn-search-cancel']) : '') . "</div>";
$_empty_html = "<div class='summary'>符合搜索条件的数据共<strong class='text-danger'>0</strong> 个" . (Yii::$app->request->queryParams ? Html::a('<u>' . '取消搜索' . '</u>', \yii\helpers\Url::to(['index']), ['class' => 'btn-search-cancel']) : '') . "</div>";
$_columns = [
    ['class' => 'yii\grid\SerialColumn'],
    [
        'attribute' => 'master_id',
        'content' => function ($model) {
            return $model->master ? $model->master->username : '---';
        },
        'filterInputOptions' => ['class' => 'form-control input-md'],
    ],
    [
        'attribute' => 'route',
        'filterInputOptions' => ['class' => 'form-control input-md'],
    ],
    [
        'headerOptions' => ['width' => '100'],
        'attribute' => 'ip',
        'filterInputOptions' => ['class' => 'form-control input-md'],
    ],
    [
        'headerOptions' => ['width' => '200'],
        'attribute' => 'remark',
        'filterInputOptions' => ['class' => 'form-control input-md'],
    ],
    [
        'headerOptions' => ['width' => '100'],
        'attribute' => 'type',
        'content' => function ($model) {
            $arr = Logs::getTypeCss();
            return array_key_exists($model->type, $arr) ? $arr[$model->type] : $model->type;
        },
        'filter' => Logs::getType(),
        'filterInputOptions' => ['class' => 'form-control input-md'],
    ],
    [
        'attribute' => 'created_at',
        'format' => ['date', 'php:Y-m-d'],
    ],
];
?>
<?= $this->blocks['sectionOne'] ?>
<div class="list-table list-table ibox panel-dep-edit">
    <div class="table-responsive">
        <?php Pjax::begin(); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'tableOptions' => ['class' => "table table-bordered list-table text-center"],
            'columns' => $_columns,
            'summary' => $_html,
            'emptyText' => $_empty_html,
        ]); ?>
        <?php Pjax::end(); ?>
    </div>
</div>
<?= $this->blocks['sectionTwo'] ?>
