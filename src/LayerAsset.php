<?php

namespace choate\yii2\layer;


use yii\web\AssetBundle;

class LayerAsset extends AssetBundle
{
    public $sourcePath = '@bower/layer/dist/';

    public $js = [
        'layer.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}