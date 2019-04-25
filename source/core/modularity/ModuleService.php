<?php
namespace source\core\modularity;

use source\core\base\BaseComponent;

abstract class ModuleService extends BaseComponent implements IModuleService
{

    abstract public function getServiceId();

    public function getModel($name)
    {

    }
}
