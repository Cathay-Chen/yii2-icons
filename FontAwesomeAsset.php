<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yiichina\icons;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the javascript files for client validation.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome/svg-with-js';

    public $css = [
        'css/fa-svg-with-js.css',
    ];

    public $js = [
        'js/fontawesome-all.min.js',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,
    ];
}