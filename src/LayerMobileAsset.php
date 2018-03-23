<?php
/**
 * Created by PhpStorm.
 * User: Choate
 * Date: 2018/3/23
 * Time: 11:55
 */

namespace choate\yii2\layer;


use yii\web\AssetBundle;

class LayerMobileAsset extends AssetBundle
{
    public $sourcePath = '@bower/layer/dist';

    public $js = [
        'mobile/layer.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}