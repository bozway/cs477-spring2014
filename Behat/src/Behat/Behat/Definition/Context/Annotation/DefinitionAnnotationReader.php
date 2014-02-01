<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\Definition\Context\Annotation;

use Behat\Behat\Context\Annotation\AnnotationReader;
use Behat\Behat\Definition\Call\RuntimeDefinition;
use ReflectionMethod;

/**
 * Step definition annotation reader.
 *
 * Reads definition annotations of context class.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class DefinitionAnnotationReader implements AnnotationReader
{
    /**
     * @var string
     */
    private static $regex = '/^\@(given|when|then)\s+(.+)$/i';
    /**
     * @var string[]
     */
    private static $classes = array(
        'given' => 'Behat\Behat\Definition\Call\Given',
        'when'  => 'Behat\Behat\Definition\Call\When',
        'then'  => 'Behat\Behat\Definition\Call\Then',
    );

    /**
     * Loads step callees (if exist) associated with specific method.
     *
     * @param string           $contextClass
     * @param ReflectionMethod $method
     * @param string           $docLine
     * @param string           $description
     *
     * @return null|RuntimeDefinition
     */
    public function readCallee($contextClass, ReflectionMethod $method, $docLine, $description)
    {
        if (!preg_match(self::$regex, $docLine, $match)) {
            return null;
        }

        $type = strtolower($match[1]);
        $class = self::$classes[$type];
        $pattern = $match[2];
        $callable = array($contextClass, $method->getName());

        return new $class($pattern, $callable, $description);
    }
}
