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

use Cscfa\JBPEntityManagement\Entity\Build;
use Cscfa\JBPEntityManagement\Entity\Traits\EntityIdTrait;
use Cscfa\JBPEntityManagement\Entity\Traits\EntityNameTrait;

/**
 * BuildFile
 *
 * The main jenkins build publisher build file entity
 *
 * @category Entity
 * @package  JBPEntitiesManagement
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class BuildFile
{
    use EntityIdTrait,
        EntityNameTrait;

    /**
     * Content type
     *
     * The build file entity content type
     *
     * @var string
     */
    private $contentType;

    /**
     * Content
     *
     * The build file entity content
     *
     * @var string
     */
    private $content;

    /**
     * Build
     *
     * The build file entity relation to it's parent build
     *
     * @var string
     */
    private $build;

    /**
     * Set contentType
     *
     * This method allow to set the content type of the file
     *
     * @param string $contentType The content type
     *
     * @return BuildFile
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get contentType
     *
     * This method return the file content type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set content
     *
     * This method allow to set the file content
     *
     * @param string $content The file content
     *
     * @return BuildFile
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * This method return the file content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set build
     *
     * This method allow to set the file parent build
     *
     * @param Build $build The parent build
     *
     * @return BuildFile
     */
    public function setBuild(Build $build = null)
    {
        $this->build = $build;

        return $this;
    }

    /**
     * Get build
     *
     * This method return the file parent build
     *
     * @return Build
     */
    public function getBuild()
    {
        return $this->build;
    }
}
