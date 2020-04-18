<?php
/*
 * This file is part of the botman-bundle package.
 *
 * (c) Roman Yurchenko <yurchenkoromanvladimirovich@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Symlocker\BotManBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Symlocker\BotManBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @inheritDoc
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('symlocker_botman');
        $rootNode = $treeBuilder->getRootNode();
        $rootNode
            ->children()
                ->arrayNode('botman')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->integerNode('conversation_cache_time')->defaultValue(30)->end()
                        ->scalarNode('default_driver')->defaultValue('web')->end()
                    ->end()
                ->end()
            ->end()
        ;

        $this->addDriversSection($rootNode);

        return $treeBuilder;
    }

    private function addDriversSection(ArrayNodeDefinition $rootNode)
    {
        $rootNode
            ->children()
                ->arrayNode('drivers')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('web')->end()
                    ->end()
                ->end()
            ->end()
        ;
    }
}