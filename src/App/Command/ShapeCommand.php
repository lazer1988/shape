<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use App\Shape\AbstractShape;
use App\Factory\ShapeFactory;
use App\Exception\ShapeException;

/**
 * Class ShapeCommand
 *
 * @package App\Command
 */
class ShapeCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('shape')
            ->addOption('type', 't', InputOption::VALUE_REQUIRED, 'shape type (square, triangle, tree etc.)')
            ->addOption('width', 'wi', InputOption::VALUE_REQUIRED, 'shape width')
            ->addOption('height', 'he', InputOption::VALUE_REQUIRED, 'shape height')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $type = $input->getOption('type');
        $width = $input->getOption('width') ?? 0;
        $height = $input->getOption('height') ?? 0;

        if (empty($type)) {
            throw new ShapeException("shape type is required");
        }

        $shape = ShapeFactory::create($type);
        $shape
            ->setHeight($height)
            ->setWidth($width)
            ->setOutput($output)
        ;

        $shape->display();
    }
}
