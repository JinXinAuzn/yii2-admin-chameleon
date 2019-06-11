<?php

namespace jx\admin_chameleon\assets;


use yii\web\AssetBundle;

/**
 * @author Au zn <690550322@qq.com>
 * @since Full version
 */
class LoginAsset extends AssetBundle
{
	public $sourcePath = '@jx/admin_chameleon/web';
	public $css = [
		'css/login/reset.css',
		'css/login/login.css',
	];
	public $js=[
		'js/login/FSS.js'
	];
	public $depends = [
		'yii\web\YiiAsset',
	];
}
