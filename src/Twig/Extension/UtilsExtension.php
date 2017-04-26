<?php

namespace Bolt\Twig\Extension;

use Bolt\Twig\Runtime;
use Twig_Extension as Extension;
use Twig_SimpleFunction as TwigFunction;

/**
 * General-purpose utility functionality Twig extension.
 *
 * @internal
 *
 * @author Gawain Lynch <gawain.lynch@gmail.com>
 */
class UtilsExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        $deprecated = ['deprecated' => true];

        return [
            // @codingStandardsIgnoreStart
            new TwigFunction('file_exists', [Runtime\UtilsRuntime::class, 'fileExists'], $deprecated),
            new TwigFunction('firebug',     [Runtime\UtilsRuntime::class, 'printFirebug']),
            // @codingStandardsIgnoreEnd
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [];
    }
}
