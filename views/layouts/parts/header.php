<?php
use yii\helpers\Html;
?>
<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav float-left">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle" href="#"><i class="ft-menu font-large-1"> </i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav nav-item d-none d-md-block" style="margin: 0 auto;color: #fff;"><?=Yii::t('rbac-admin','Backend_name')?></ul>
                <ul class="nav navbar-nav float-right" id="nav-admin">
                    <li class="dropdown dropdown-user nav-item">
                        <?=Html::a(isset(Yii::$app->user->identity->username) ? Yii::$app->user->identity->username : 'admin','#!',['class'=>'dropdown-toggle nav-link dropdown-user-link ','data-toggle'=>'dropdown'])?>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right">
                                <?= Html::a('<i class="ft-power"></i>'.Yii::t('rbac-admin','Logout'), ['/admin/master/logout'], ['class' => 'dropdown-item', 'data-method' => 'post']) ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->
