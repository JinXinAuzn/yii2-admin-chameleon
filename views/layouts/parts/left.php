<?php

use jx\admin_chameleon\components\MenuHelper;
use jx\admin_chameleon\components\Menu;

/**
 * @param $menu
 * @return array
 */
$callback = function ($menu) {
    $data = json_decode($menu['data'], true);
    $items = $menu['children'];
    $return = [
        'label' => $menu['name'],
        'url' => [$menu['route']],
    ];
    //处理我们的配置
    if ($data) {
        //visible
        isset($data['visible']) && $return['visible'] = $data['visible'];
        //icon
        isset($data['icon']) && $data['icon'] && $return['icon'] = $data['icon'];
        //other attribute e.g. class...
        $return['options'] = $data;
    }
    //没配置图标的显示默认图标
    (!isset($return['visible']) || !$return['visible']) && $return['visible'] = true;
    $items && $return['items'] = $items;
    return $return;
};
?>

<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true"
     data-img="<?=$AssetUrl.'/images/admin/04.jpg'?>">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row position-relative">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="/">
                    <img class="brand-logo" src="<?=$AssetUrl.'/images/admin/logo.png'?>" alt=""/>
                    <h3 class="brand-text"><?=Yii::t('rbac-admin','Admin_name')?></h3>
                </a>
            </li>
            <li class="nav-item d-none d-md-block nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i>
                </a>
            </li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="navigation-background"></div>
    <div class="main-menu-content">
        <?= Menu::widget([
            'options' => ['class' => 'navigation navigation-main', 'id' => 'main-menu-navigation', 'data-menu' => 'menu-navigation'],
            'items' => MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callback),
        ]); ?>
    </div>
</div>
<!-- END: Main Menu-->