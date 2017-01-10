<?php
/**
 * This file is part of the Hephaistos project management API.
 *
 * As each files provides by the CSCFA, this file is licensed
 * under the MIT license.
 *
 * PHP version 5.6
 *
 * @category Entity
 * @package  JBPEntitiesManagement
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */

namespace Cscfa\JBPEntityManagement\Entity;

use Cscfa\JBPEntityManagement\Entity\Traits\EntityIdTrait;
use Cscfa\JBPEntityManagement\Entity\Traits\EntityNameTrait;

/**
 * Status
 *
 * The build status entity
 *
 * @category Entity
 * @package  JBPEntitiesManagement
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class Status
{
    use EntityIdTrait,
        EntityNameTrait;

    /**
     * Success
     *
     * The default success status name
     *
     * @var string
     */
    const SUCCESS = 'success';
    /**
     * Failed
     *
     * The default failed status name
     *
     * @var string
     */
    const FAILED = 'failed';
    /**
     * Unstable
     *
     * The default unstable status name
     *
     * @var string
     */
    const UNSTABLE = 'unstable';
    /**
     * Unknown
     *
     * The default unknown status name
     *
     * @var string
     */
    const UNKNOWN = 'unknow';
}
