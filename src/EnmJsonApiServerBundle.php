<?php
declare(strict_types=1);

namespace Enm\Bundle\JsonApi\Server;

use Enm\Bundle\JsonApi\Server\DependencyInjection\Compiler\RequestHandlerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
class EnmJsonApiServerBundle extends Bundle
{
    /**
     * Builds the bundle.
     *
     * It is only ever called once when the cache is empty.
     *
     * This method can be overridden to register compilation passes,
     * other extensions, ...
     *
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass(new RequestHandlerPass());
    }
}
