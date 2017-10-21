<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/19
 * Time: 16:00
 */

namespace Camunda\Entity\Request;

class BasicRequest
{
    protected $fields = [];
    protected $object;

    public function set($key, $value)
    {
        if (in_array($key, $this->fields)) {
            $this->object[$key] = $value;
        }
        return $this;
    }

    public function get($key)
    {
        return array_key_exists($key, $this->object) ? $this->object[$key] : null;
    }

    public function getObject()
    {
        return $this->object;
    }
}
