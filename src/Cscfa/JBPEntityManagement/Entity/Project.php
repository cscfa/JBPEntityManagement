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

use Doctrine\Common\Collections\ArrayCollection;
use Cscfa\JBPEntityManagement\Entity\Build;
use Cscfa\JBPEntityManagement\Entity\Traits\EntityIdTrait;
use Cscfa\JBPEntityManagement\Entity\Traits\EntityNameTrait;

/**
 * Project
 *
 * The main jenkins build publisher project entity
 *
 * @category Entity
 * @package  JBPEntitiesManagement
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class Project
{
    use EntityIdTrait,
        EntityNameTrait;

    /**
     * Builds
     *
     * The project entity builds, as ArrayCollection
     *
     * @var ArrayCollection
     */
    private $builds;

    /**
     * Constructor
     *
     * The default project entity constructor
     *
     * @param string $name   [optional] The project name
     * @param array  $builds [optional] The project builds
     *
     * @return void
     */
    public function __construct($name = null, $builds = array())
    {
        if ($name !== null) {
            $this->setName($name);
        }

        $this->builds = new ArrayCollection();

        foreach ($builds as $build) {
            $this->addBuild($build);
        }
    }

    /**
     * Add build
     *
     * This method allow to add a build to the project
     *
     * @param Build $build The build to add
     *
     * @return Project
     */
    public function addBuild(Build $build)
    {
        $this->builds[] = $build;

        return $this;
    }

    /**
     * Remove build
     *
     * This method allow to remove a build from the project
     *
     * @param Build $build The build to remove
     *
     * @return void
     */
    public function removeBuild(Build $build)
    {
        $this->builds->removeElement($build);
    }

    /**
     * Get builds
     *
     * This method return the project builds
     *
     * @return ArrayCollection
     */
    public function getBuilds()
    {
        return $this->builds;
    }
}
