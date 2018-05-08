<?php

namespace App\Shape;

/**
 * Class Square
 *
 * @package App\Shape
 */
class Square extends AbstractShape
{
    /**
     * {@inheritdoc}
     */
    public function display(): void
    {
        for ($row = 0; $row < $this->height; $row++) {
            for ($column = 0; $column < $this->width; $column++) {
                $this->output('*');
            }

            $this->output('', true);
        }
    }
}
