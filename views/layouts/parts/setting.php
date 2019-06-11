<?php
use yii\helpers\Html;
?>
<!-- BEGIN: Customizer-->
<div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block">
    <a class="customizer-close" href="#">
        <i class="ft-x font-medium-3"></i>
    </a>
    <a class="customizer-toggle bg-primary box-shadow-3" href="#" id="customizer-toggle-setting">
        <i class="ft-settings font-medium-3 spinner white"></i>
    </a>
    <div class="customizer-content p-2">
        <h5 class="mt-1 mb-1 text-bold-500">导航栏颜色选项</h5>
        <div class="navbar-color-options clearfix">
            <div class="solid-colors clearfix">
                <div class="bg-primary navbar-color-option" data-bg="bg-primary" title="primary"></div>
                <div class="bg-success navbar-color-option" data-bg="bg-success" title="success"></div>
                <div class="bg-info navbar-color-option" data-bg="bg-info" title="info"></div>
                <div class="bg-warning navbar-color-option" data-bg="bg-warning" title="warning"></div>
                <div class="bg-danger navbar-color-option" data-bg="bg-danger" title="danger"></div>
                <div class="bg-blue navbar-color-option" data-bg="bg-blue" title="blue"></div>
            </div>
        </div>
        <hr>
        <h5 class="my-1 text-bold-500">布局选项</h5>
        <div class="row">
            <div class="col-12">
                <div class="d-inline-block custom-control custom-radio mb-1 col-4">
                    <input type="radio" class="custom-control-input bg-primary" name="layouts" id="default-layout" checked>
                    <label class="custom-control-label" for="default-layout">默认</label>
                </div>
                <div class="d-inline-block custom-control custom-radio mb-1 col-4">
                    <input type="radio" class="custom-control-input bg-primary" name="layouts" id="fixed-layout">
                    <label class="custom-control-label" for="fixed-layout">固定</label>
                </div>
                <div class="d-inline-block custom-control custom-radio mb-1">
                    <input type="radio" class="custom-control-input bg-primary" name="layouts" id="boxed-layout">
                    <label class="custom-control-label" for="boxed-layout">盒子</label>
                </div>
                <div class="d-inline-block custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input bg-primary" name="layouts" id="right-side-icons">
                    <label class="custom-control-label" for="right-side-icons">右侧图标</label>
                </div>
            </div>
        </div>
        <hr>
        <h5 class="mt-1 mb-1 text-bold-500">侧边栏菜单背景</h5>
        <div class="row sidebar-color-options ml-0">
            <label for="sidebar-color-option" class="card-title font-medium-2 mr-2">白色模式</label>
            <div class="text-center mb-1">
                <input type="checkbox" id="sidebar-color-option" class="setting_checkbox"/>
            </div>
            <label for="sidebar-color-option" class="card-title font-medium-2 ml-2">暗模式</label>
        </div>
        <hr>
        <label for="collapsed-sidebar" class="font-medium-2">菜单折叠</label>
        <div class="float-right">
            <input type="checkbox" id="collapsed-sidebar" class="setting_checkbox"/>
        </div>
        <hr>
        <!--Sidebar Background Image Starts-->
        <h5 class="mt-1 mb-1 text-bold-500">侧边栏背景图像</h5>
        <div class="cz-bg-image row">
            <div class="col mb-3">
                <?= Html::img($AssetUrl . '/images/admin/01.jpg', ['class' => 'rounded sidiebar-bg-img', 'width' => '50', 'height' => '100']) ?>
            </div>
            <div class="col mb-3">
                <?= Html::img($AssetUrl . '/images/admin/02.jpg', ['class' => 'rounded sidiebar-bg-img', 'width' => '50', 'height' => '100']) ?>
            </div>
            <div class="col mb-3">
                <?= Html::img($AssetUrl . '/images/admin/03.jpg', ['class' => 'rounded sidiebar-bg-img', 'width' => '50', 'height' => '100']) ?>
            </div>
            <div class="col mb-3">
                <?= Html::img($AssetUrl . '/images/admin/04.jpg', ['class' => 'rounded sidiebar-bg-img', 'width' => '50', 'height' => '100']) ?>
            </div>
            <div class="col mb-3">
                <?= Html::img($AssetUrl . '/images/admin/05.jpg', ['class' => 'rounded sidiebar-bg-img', 'width' => '50', 'height' => '100']) ?>
            </div>
            <div class="col mb-3">
                <?= Html::img($AssetUrl . '/images/admin/06.jpg', ['class' => 'rounded sidiebar-bg-img', 'width' => '50', 'height' => '100']) ?>
            </div>
            <div class="col mb-3">
                <?= Html::img($AssetUrl . '/images/admin/08.jpg', ['class' => 'rounded sidiebar-bg-img', 'width' => '50', 'height' => '100']) ?>
            </div>
            <div class="col mb-3">
                <?= Html::img($AssetUrl . '/images/admin/09.jpg', ['class' => 'rounded sidiebar-bg-img', 'width' => '50', 'height' => '100']) ?>
            </div>
        </div>
        <!--Sidebar Background Image Ends-->
        <!--Sidebar BG Image Toggle Starts-->
        <div class="sidebar-image-visibility">
            <div class="row ml-0">
                <label for="toggle-sidebar-bg-img" class="card-title font-medium-2 mr-2">隐藏图片</label>
                <div class="text-center">
                    <input type="checkbox" id="toggle-sidebar-bg-img" class="setting_checkbox"  checked="checked"/>
                </div>
                <label for="toggle-sidebar-bg-img" class="card-title font-medium-2 ml-2">显示图片</label>
            </div>
        </div>
        <!--Sidebar BG Image Toggle Ends-->
    </div>
</div>
<!-- End: Customizer-->