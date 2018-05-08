<?php

namespace App\Shape;

/**
 * Class ChristmasTree
 *
 * @package App\Shape
 */
class Triangle extends AbstractShape
{
    /**
     * {@inheritdoc}
     */
    public function display(): void
    {
        $maxStars = $this->height*2-1;

        for ($row = 1; $row <= $this->height; $row++) {
            $starsPerLine = $row*2-1;

            $start = ($maxStars-$starsPerLine) / 2 + 1;
            $end = $start+$starsPerLine - 1;

            for ($column = 1; $column <= $maxStars; $column++) {
                if ($column >= $start && $column <= $end) {
                    $this->output('*');
                } else {
                    $this->output(' ');
                }
            }

            $this->output('', true);
        }
    }
}
