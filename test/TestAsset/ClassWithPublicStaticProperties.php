<?php

/**
 * @see       https://github.com/laminas/laminas-hydrator for the canonical source repository
 * @copyright https://github.com/laminas/laminas-hydrator/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-hydrator/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace LaminasTest\Hydrator\TestAsset;

class ClassWithPublicStaticProperties
{
    /**
     * @var string
     */
    public static $foo = 'foo';

    /**
     * @var string
     */
    public static $bar = 'bar';

    /**
     * @var string
     */
    public static $baz = 'baz';
}
