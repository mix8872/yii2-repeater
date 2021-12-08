<?php
/**
 * Created by PhpStorm.
 * User: prokhonenkov
 * Date: 19.03.19
 * Time: 17:19
 */

namespace mix8872\repeater\assets;

/**
 * Class AssetBundle
 * @package mix8872\repeater\assets
 */
class AssetBundle extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/mix8872/yii2-repeater/assets';

	public $css = [
		'css/repeater.css'
	];

	public $js = [
		'js/repeater.js'
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap4\BootstrapAsset',
	];
}
