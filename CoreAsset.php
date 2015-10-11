<?php

namespace net\frenzel\textareaautosize;

use Yii;
use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

class CoreAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@bower/dynatable';

    /**
     * [$css description]
     * @var array
     */
    public $css = [
        'jquery.dynatable.css'
    ];

    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'jquery.dynatable.js',
    ];
}
