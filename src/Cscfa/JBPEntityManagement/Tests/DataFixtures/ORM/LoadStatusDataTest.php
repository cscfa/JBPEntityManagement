<?php
/**
 * This file is part of the Hephaistos project management API.
 *
 * As each files provides by the CSCFA, this file is licensed
 * under the MIT license.
 *
 * PHP version 5.6
 *
 * @category Test
 * @package  JBPEntitiesManagement
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */

namespace Cscfa\JBPEntityManagement\Tests\DataFixtures\ORM;

use Doctrine\ORM\EntityManager;
use Cscfa\JBPEntityManagement\Entity\Repository\StatusRepository;
use Cscfa\JBPEntityManagement\Entity\Status;
use Cscfa\JBPEntityManagement\DataFixtures\ORM\LoadStatusData;

/**
 * Load status data test.
 *
 * This class is used to test the LoadStatusData instances.
 *
 * PHP version 5.6
 *
 * @category Test
 * @package  JBPEntitiesManagement
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class LoadStatusDataTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test load
     *
     * This method validate the load method logic.
     *
     * @return void
     */
    public function testLoad()
    {
        $entityManager = $this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $repository = $this->getMockBuilder(StatusRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $entityManager->expects($this->once())
            ->method('getRepository')
            ->with(Status::class)
            ->will($this->returnValue($repository));

        $entityManager->expects($this->exactly(4))
            ->method('persist')
            ->withConsecutive(
                $this->callback(function (Status $status) {
                    return $status->getName() == Status::SUCCESS;
                }),
                $this->callback(function (Status $status) {
                    return $status->getName() == Status::FAILED;
                }),
                $this->callback(function (Status $status) {
                    return $status->getName() == Status::UNSTABLE;
                }),
                $this->callback(function (Status $status) {
                    return $status->getName() == Status::UNKNOWN;
                })
            );

        $entityManager->expects($this->once())
            ->method('flush');

        $instance = new LoadStatusData();
        $instance->load($entityManager);
    }
}
