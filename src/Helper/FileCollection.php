<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/19
 * Time: 16:40
 */

namespace Camunda\Helper;

class FileCollection
{
    protected $files = [];

    public function addFile($name, $contents, $filename)
    {
        if ($name && $contents && $filename) {
            $tmpArray = [];

            $tmpArray['name'] = $name;
            $tmpArray['contents'] = $contents;
            $tmpArray['filename'] = $filename;

            array_push($this->files, $tmpArray);
        }

        return $this;
    }

    public function getFiles()
    {
        return $this->files;
    }
}