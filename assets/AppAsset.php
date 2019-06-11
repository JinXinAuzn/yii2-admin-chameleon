<?php

namespace jx\admin_chameleon\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Au zn <690550322@qq.com>
 * @since Full version
 */
class AppAsset extends AssetBundle
{
	public $sourcePath = '@jx/admin_chameleon/web';
    public $css = [

    ];
    public $depends = [
        'backend\assets\AppAsset',
	    'jx\admin_chameleon\assets\AdminAsset',
    ];
}
