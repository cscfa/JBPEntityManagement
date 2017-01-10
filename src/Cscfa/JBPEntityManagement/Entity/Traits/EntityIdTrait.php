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
 * EntityIdTrait
 *
 * The main jenkins build publisher entity trait for id purpose
 *
 * @category EntityTrait
 * @package  JBPEntitiesManagement
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait EntityIdTrait
{
    /**
     * Id
     *
     * The entity id
     *
     * @var string
     */
    private $id;

    /**
     * Get id
     *
     * This method return the entity id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
