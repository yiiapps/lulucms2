<?php
namespace source\core\base;

use yii\base\BaseObject;

class ActionResult extends BaseObject
{

    public $controller;

    public $action;

    public $isExecuted = false;

    public $result;

    public function __toString()
    {
        return $this->result;
    }
}
