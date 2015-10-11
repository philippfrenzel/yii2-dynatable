yii2-dynatable
=====================
JQuery Dynatable Yii2 Extension
JQuery from: http://dynatable.com

Yii2 Extension by <philipp@frenzel.net>

[![Latest Stable Version](https://poser.pugx.org/philippfrenzel/yii2-dynatable/v/stable.svg)](https://packagist.org/packages/philippfrenzel/yii2-dynatable)
[![Build Status](https://travis-ci.org/philippfrenzel/yii2-dynatable.svg?branch=master)](https://travis-ci.org/philippfrenzel/yii2-dynatable)
[![Code Climate](https://codeclimate.com/github/philippfrenzel/yii2-dynatable.png)](https://codeclimate.com/github/philippfrenzel/yii2-dynatable)
[![Version Eye](https://www.versioneye.com/php/philippfrenzel:yii2-dynatable/badge.svg)](https://www.versioneye.com/php/philippfrenzel:yii2-dynatable)
[![License](https://poser.pugx.org/philippfrenzel/yii2-dynatable/license.svg)](https://packagist.org/packages/philippfrenzel/yii2dynatable)

Installation
============
Package is although registered at packagist.org - so you can just add one line of code, to let it run!

add the following line to your composer.json require section:
```json
  "philippfrenzel/yii2-dynatable":"*",
```

And ensure, that you have the follwing plugin installed global:

> php composer.phar global require "fxp/composer-asset-plugin:~1.0"

Changelog
---------

29-11-2014 Updated to latest 2.2.3 Version of the library

Usage
=====

Quickstart Looks like this:

```
  <?= net\frenzel\dynatable\yii2dynatable::widget([
    'id' => "nameofthetablethatwillbedynamised"
  ]);

```

Template for table:

```
<table id="nameofthetablethatwillbedynamised">
  <thead>
    <tr>
      <th data-dynatable-column="name">Name can contain anything now...</th>
      <th>Hobby</th>
      <th>Favorite Music</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Fred</td>
      <td>Roller Skating</td>
      <td>Disco</td>
    </tr>
    <tr>
      <td>Helen</td>
      <td>Rock Climbing</td>
      <td>Alternative</td>
    </tr>
    <tr>
      <td>Glen</td>
      <td>Traveling</td>
      <td>Classical</td>
    </tr>
  </tbody>
</table>
```

extended options are:
```
'clientOptions' => [
    'table' => [
        'defaultColumnIdStyle' => 'trimDash' //can be "underscore" too - look dynatable.js website for more options
    ],
    'dataset' => [
        'ajax' => true,
        'ajaxUrl' => Url::to('/your/route/to/json'),
        'ajaxOnLoad' => true,
        'records' => [],
    ],
    'features' => [
        'paginate' => false,
        'recordCount' => false,
        'sorting' => true,
        'search' => false
<<<<<<< HEAD
    ],
    'params' => [
        //'queries' => 'queries',
        'sorts' => 'sort',
        'page' => 'pageCount',
        'perPage' => 'perPage',
        'offset' => 'offset',
        'records' => 'items',
        'record' => 'item',
        'queryRecordCount' => 'totalCount',
        'totalRecordCount' => 'totalCount'
=======
>>>>>>> 21a6bd7913af3d29e0321c956ff2f507467f585d
    ]
]

```
<<<<<<< HEAD
If you set the params like above, the dynatable should work fine with the build in yii2 rest api.

=======
>>>>>>> 21a6bd7913af3d29e0321c956ff2f507467f585d

if you are using ajax, you need to ensure, that the response looks like this:
```json
{
  "records": [
    {
      "someAttribute": "I am record one",
      "someOtherAttribute": "Fetched by AJAX"
    },
    {
      "someAttribute": "I am record two",
      "someOtherAttribute": "Cuz it's awesome"
    },
    {
      "someAttribute": "I am record three",
      "someOtherAttribute": "Yup, still AJAX"
    }
  ],
  "queryRecordCount": 3,
  "totalRecordCount": 3
}
```
