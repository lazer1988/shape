<?php

namespace App\Shape;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class AbstractShape
 *
 * @package App\Shape
 */
abstract class AbstractShape
{
    /**
     * @var int
     */
    protected $width;

    /**
     * @var int
     */
    protected $height;

    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * @param OutputInterface $output
     *
     * @return $this
     */
    public function setOutput(OutputInterface $output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * @param int $width
     *
     * @return $this
     */
    public function setWidth(int $width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @param int $height
     *
     * @return $this
     */
    public function setHeight(int $height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * display shape to console
     */
    abstract public function display(): void;

    /**
     * @param string $string
     * @param bool   $breakLine
     */
    protected function output(string $string, bool $breakLine = false): void
    {
        if ($this->output) {
            if ($breakLine) {
                $this->output->writeln($string);
            } else {
                $this->output->write($string);
            }
        }
    }
}
