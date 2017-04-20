<?php
/**
 * Created by PhpStorm.
 * Author: houpeng
 * DateTime: 2017/04/15 11:30
 * Description:
 */
namespace xiaochengfu\migrate\assets; 

class MigrationAsset extends  \yii\web\AssetBundle
{
    public $sourcePath = '@backend/modules/migration/static';
    public $css = [
        'migration.css',
    ];
    public $js = [
        'migration.js'
    ];
    public $depends = [
        '\backend\assets\AppAsset',
    ];
}