<?php

namespace Application;

use Application\DependencyInjection\ApplicationExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new ApplicationExtension();
    }
}