<?php

namespace PhpZendo\Dumper;

class Dumper
{
    /**
     * 打印变量的相关信息
     *
     * @param mixed $expression
     * @param string|null $title
     * @return void
     */
    public function dump($expression, $title = null)
    {
        echo ($title ?: '调试：') . '<pre>';
        var_dump($expression);
        echo '</pre>';
    }
}

