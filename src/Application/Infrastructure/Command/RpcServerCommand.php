<?php

namespace Application\Infrastructure\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RpcServerCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('cmobi:rpc-server:run')
            ->setDescription('Run rpcserver');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(date('Y-m-d H:i:s') . 'cmobi:rpc-server:run ................... Running Server');

        $server = $this->getContainer()->get('cmobi_rabbitmq.rpc_server');
        $server->run();

        $output->writeln(date('Y-m-d H:i:s') . 'cmobi:rpc-server:run ................... Exiting Server');
    }
}