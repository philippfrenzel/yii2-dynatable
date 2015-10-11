<?php

namespace net\frenzel\dynatable;

use Yii;
use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

class LocalAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@net/frenzel/dynatable/assets';

    /**
     * [$css description]
     * @var array
     */
    public $css = [
        'css/dynatable.css'
    ];

    /**
     * [$js description]
     * @var array
     */
    public $js = [
    ];
}
