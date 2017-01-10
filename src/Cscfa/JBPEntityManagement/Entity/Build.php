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
use Cscfa\JBPEntityManagement\Entity\Project;
use Cscfa\JBPEntityManagement\Entity\Status;
use Doctrine\Common\Collections\ArrayCollection;
use Cscfa\JBPEntityManagement\Entity\BuildFile;
use Cscfa\JBPEntityManagement\Entity\Traits\EntityIdTrait;
use Cscfa\JBPEntityManagement\Entity\Traits\EntityNameTrait;

/**
 * Build
 *
 * The main jenkins build publisher build entity
 *
 * @category Entity
 * @package  JBPEntitiesManagement
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class Build
{
    use EntityIdTrait,
        EntityNameTrait;

    /**
     * Project
     *
     * The build entity relation to it's parent project
     *
     * @var string
     */
    private $project;

    /**
     * Status
     *
     * The build entity relation to it's status
     *
     * @var string
     */
    private $status;

    /**
     * Files
     *
     * The build entity relation to it's files
     *
     * @var string
     */
    private $files;

    /**
     * Constructor
     *
     * The default build constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->files = new ArrayCollection();
    }

    /**
     * Set project
     *
     * This method allow to set the build project
     *
     * @param Project $project The build parent project
     *
     * @return Build
     */
    public function setProject(Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * This method return the parent project
     *
     * @return Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set status
     *
     * This method allow to set the build status
     *
     * @param Status $status The build status
     *
     * @return Build
     */
    public function setStatus(Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * This method return the build status
     *
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Add file
     *
     * This method allow to add a file to the build
     *
     * @param BuildFile $file The file to add
     *
     * @return Build
     */
    public function addFile(BuildFile $file)
    {
        $this->files[] = $file;

        return $this;
    }

    /**
     * Remove file
     *
     * This method allow to remove a file from the build
     *
     * @param BuildFile $file The file to remove
     *
     * @return void
     */
    public function removeFile(BuildFile $file)
    {
        $this->files->removeElement($file);
    }

    /**
     * Get files
     *
     * This method return the build files
     *
     * @return ArrayCollection
     */
    public function getFiles()
    {
        return $this->files;
    }
}
