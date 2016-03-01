<?php

namespace Application\Infrastructure;

use Application\Infrastructure\DependencyInjection\InfrastructureExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class InfrastructureBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new InfrastructureExtension();
    }
}