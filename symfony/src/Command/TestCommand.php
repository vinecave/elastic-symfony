<?php

namespace App\Command;

use App\Service\ElasticService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'test')]
class TestCommand extends Command
{
    public function __construct(
        private readonly ElasticService $elasticService
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->elasticService->addToIndex(
            [
                'game' => 2,
                'parameter' => 'goodParameter',
                'timestamp' => new \DateTime(),
            ]
        );

        return Command::SUCCESS;
    }
}