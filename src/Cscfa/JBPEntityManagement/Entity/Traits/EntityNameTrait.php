<?php
/**
 * This file is part of the Hephaistos project management API.
 *
 * As each files provides by the CSCFA, this file is licensed
 * under the MIT license.
 *
 * PHP version 5.6
 *
 * @category EntityTrait
 * @package  JBPEntitiesManagement
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */

namespace Cscfa\JBPEntityManagement\Entity\Traits;

/**
 * EntityNameTrait
 *
 * The main jenkins build publisher entity trait for name purpose
 *
 * @category EntityTrait
 * @package  JBPEntitiesManagement
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait EntityNameTrait
{

    /**
     * Name
     *
     * The entity name
     *
     * @var string
     */
    private $name;

    /**
     * Set name
     *
     * This method allow to set the entity name as string
     *
     * @param string $name The entity name
     *
     * @throws \InvalidArgumentException
     * @return EntityNameTrait
     */
    public function setName($name)
    {
        if (
            !is_string($name) &&
            (
                gettype($name) === 'object' &&
                !method_exists($name, '__toString')
            )
        ) {
            throw new \InvalidArgumentException(
                sprintf(
                    'The \'name\' argument is expected to be a string or an '.
                    'object implementing toString. %s given',
                    gettype($name)
                )
            );
        }

        $this->name = (string)$name;

        return $this;
    }

    /**
     * Get name
     *
     * This method return the entity name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
