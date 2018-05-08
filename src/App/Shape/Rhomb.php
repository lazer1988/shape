<?php

namespace App\Shape;

/**
 * Class Rhomb
 *
 * @package App\Shape
 */
class Rhomb extends AbstractShape
{
    /**
     * {@inheritdoc}
     */
    public function display(): void
    {
        $maxStars = $height = $this->height*2-1;

        for ($row = 1; $row <= $height; $row++) {
            $starsPerLine = $row*2-1;
            if ($starsPerLine > $maxStars) {
                $starsPerLine = $starsPerLine - (($starsPerLine - $maxStars)*2);
            }

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
