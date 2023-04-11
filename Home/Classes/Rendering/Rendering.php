<?php

namespace Phpcourse\Myproject\Classes\Rendering;

use Phpcourse\Myproject\Classes\Traits\DebugTrait;

class Rendering{
    use DebugTrait;
    public function __construct(array $data){
        foreach ($data as $key => $value){
            echo $key . ' = ' . $value . '<br>';
            self::debugConsole($key . ' = ' . $value . '<br>');
        }
    }
}
