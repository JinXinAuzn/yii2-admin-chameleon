<?php

use jx\admin_chameleon\components\Helper;
use yii\helpers\Html;
use yii\grid\GridView;
use jx\admin_chameleon\components\RouteRule;
use jx\admin_chameleon\components\Configs;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel jx\admin_chameleon\models\searchs\AuthItem */

$context = $this->context;
$labels = $context->labels();
$this->title = Yii::t('rbac-admin', $labels['Items']);
$this->params['breadcrumbs'][] = $this->title;
$this->renderFile('@jx/admin_chameleon/views/layouts/parts/section.php');
$rules = array_keys(Configs::authManager()->getRules());
$rules = array_combine($rules, $rules);
unset($rules[RouteRule::RULE_NAME]);
$_html = "<div class='summary'>符合搜索条件的数据共<strong class='text-danger'>{totalCount}</strong> 个" . (Yii::$app->request->queryParams ? Html::a('<u>' . '取消搜索' . '</u>', \yii\helpers\Url::to(['index']), ['class' => 'btn-search-cancel']) : '') . "</div>";
$_empty_html = "<div class='summary'>符合搜索条件的数据共<strong class='text-danger'>0</strong> 个" . (Yii::$app->request->queryParams ? Html::a('<u>' . '取消搜索' . '</u>', \yii\helpers\Url::to(['index']), ['class' => 'btn-search-cancel']) : '') . "</div>";
$_columns = [
    ['class' => 'yii\grid\SerialColumn'],
    [
        'attribute' => 'name',
        'label' => Yii::t('rbac-admin', 'Name'),
    ],
    [
        'attribute' => 'ruleName',
        'label' => Yii::t('rbac-admin', 'Rule Name'),
        'filter' => $rules
    ],
    [
        'attribute' => 'description',
        'label' => Yii::t('rbac-admin', 'Description'),
    ],
    [
        "header" => "操作",
        'headerOptions' => ['rowspan' => "2", 'style' => 'vertical-align:middle'],
        'class' => 'yii\grid\ActionColumn',
        'template' => Helper::filterActionColumn('{view} {update} {delete}'),
        'contentOptions' => [],
        "buttons" => [
            "view" => function ($url, $model, $key) {
                return Html::a('<span class="glyphicon glyphicon-eye-open"></span> 查看', $url, ['class' => 'btn btn-xs btn-success']);
            },
            "update" => function ($url, $model, $key) {
                return Html::a('<span class="glyphicon glyphicon-pencil"></span> 编辑', $url, ['class' => 'btn btn-xs btn-warning']);
            },
            "delete" => function ($url, $model, $key) {
                return Html::a('<span class="glyphicon glyphicon-trash"></span> 删除', $url,
                    [
                        'class' => 'btn btn-xs btn-danger',
                        'data' => [
                            'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            'method' => 'post',
                        ],
                    ]);
            }]
    ]
]
?>
<?= $this->blocks['sectionOne'] ?>
<?php if (Helper::checkRoute('create')): ?>
    <div class="well well-sm clearfix">
        <div class="pull-left">
            <?= Html::a('<i class="glyphicon glyphicon-plus"></i> ' . Yii::t('rbac-admin', 'Create'), ['create'], ['class' => 'btn btn-sm btn-info']) ?>
        </div>
        <div class="pull-right"></div>
    </div>
<?php endif; ?>
<div class="list-table list-table ibox panel-dep-edit">
    <div class="table-responsive">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => ['class' => "table table-bordered list-table text-center table-rowspan"],
        'columns' => $_columns,
        'summary' => $_html,
        'emptyText' => $_empty_html,
    ]) ?>
    </div>
</div>
<?= $this->blocks['sectionTwo'] ?>

