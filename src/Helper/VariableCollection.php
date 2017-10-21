<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/19
 * Time: 16:29
 */

namespace Camunda\Helper;

class VariableCollection
{
    protected $variables = [];

    public function addVariable($name, $value, $type = '', $valueInfo = [], $local = false)
    {
        if ($name && $value) {
            $this->variables[$name] = [];
            $this->variables[$name]['value'] = $value;

            if ($type) {
                $this->variables[$name]['type'] = $type;
            }

            if ($valueInfo) {
                $this->variables[$name]['valueInfo'] = $valueInfo;
            }

            if ($local) {
                $this->variables[$name]['local'] = $local;
            }
        }

        return $this;
    }

    public function getVariables()
    {
        return $this->variables;
    }
}
