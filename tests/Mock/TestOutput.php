<?php

namespace Tests\Mock;

use Symfony\Component\Console\Output\Output;

/**
 * Class TestOutput
 *
 * @package Tests\Mock
 */
class TestOutput extends Output
{
    public $output = '';

    /**
     * clear output
     */
    public function clear()
    {
        $this->output = '';
    }

    /**
     * @param string $message
     * @param bool   $newline
     */
    protected function doWrite($message, $newline)
    {
        $this->output .= $message.($newline ? "\n" : '');
    }
}
