<?php

namespace mix8872\repeater;

use mix8872\bannerssystem\exceptions\InvalidConfigException;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;

/**
 * Class Repeater
 * @package mix8872\repeater
 */
class Repeater extends \yii\base\Module
{
	/**
	 * @var string
	 */
	private static $moduleId;
	/**
	 * @var string
	 */
	public $repeaterItemView = '@vendor/mix8872/yii2-repeater/src/widgets/views/_item';

    public function init()
    {
    	self::$moduleId = $this->uniqueId;

		parent::init();
    }

	/**
	 * @return string
	 */
	public static function getModuleId(): string
	{
		return self::$moduleId;
	}
}
