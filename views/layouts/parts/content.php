<?php

use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\widgets\Breadcrumbs;
use \common\widgets\Alert;

?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <?= Alert::widget() ?>
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">
                    <?php if ($this->title !== null) {
                        echo Html::encode($this->title);
                    } else {
                        echo Inflector::camel2words(Inflector::id2camel($this->context->module->id));
                        echo ($this->context->module->id !== Yii::$app->id) ? '<small>Module</small>' : '';
                    } ?>
                </h3>
                <div class="breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper mr-1">
                        <?= Breadcrumbs::widget([
                            'tag' => 'ol',
                            'itemTemplate' => '<li class="breadcrumb-item">{link}</li>',
                            'activeItemTemplate' => '<li class="breadcrumb-item active">{link}</li>',
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body"><?= $content ?></div>
    </div>
</div>
<!-- END: Content-->


