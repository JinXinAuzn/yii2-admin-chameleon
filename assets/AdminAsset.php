<?php
namespace jx\admin_chameleon\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $sourcePath = '@jx/admin_chameleon/web';
    public $css = [
        'css/admin/google-font.css',
        'css/admin/vendors.min.css',
        'css/admin/bootstrap.min.css',
        'css/admin/bootstrap-extended.min.css',
        'css/admin/colors.min.css',
        'css/admin/components.min.css',
        'css/admin/vertical-menu-modern.css',
        'css/admin/style.css',
    ];
    public $js = [
        'js/admin/vendors.min.js',
        'js/admin/app-menu.min.js',
        'js/admin/app.min.js',
        'js/admin/customizer.min.js',
        'js/admin/jquery.sharrre.js',
        'js/admin/javascript.js',
    ];
    public $depends = [

    ];
}