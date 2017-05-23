<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2016
 * @package yii2-widgets
 * @subpackage yii2-widget-switchinput
 * @version 1.3.1
 */

namespace bogdik\switchinput;

use yii\web\AssetBundle;

/**
 * Asset bundle for Switch Widget
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class SwitchInputAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath= __DIR__ . '/assets';
        $this->css        = [
            YII_ENV_DEV ? 'css/bootstrap-switch.css' : 'css/bootstrap-switch.min.css',
            YII_ENV_DEV ? 'css/bootstrap-switch-kv.css' : 'css/css/bootstrap-switch-kv.min.css',
        ];
        $this->js         = [
            YII_ENV_DEV ? 'js/bootstrap-switch.js' : 'js/bootstrap-switch.min.js',
        ];
        parent::init();
    }
}
