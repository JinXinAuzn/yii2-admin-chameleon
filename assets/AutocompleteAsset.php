<?php

namespace jx\admin_chameleon\assets;

use yii\web\AssetBundle;

/**
 * @author Au zn <690550322@qq.com>
 * @since Full version
 */
class AutocompleteAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
	public $sourcePath = '@jx/admin_chameleon/web';
    /**
     * @inheritdoc
     */
    public $css = [
        'css/admin/jquery-ui.css',
    ];
    /**
     * @inheritdoc
     */
    public $js = [
        'js/admin/jquery-ui.js',
    ];
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
