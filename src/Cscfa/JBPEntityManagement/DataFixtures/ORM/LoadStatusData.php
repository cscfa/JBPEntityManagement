<?php
/**
 * This file is part of the Hephaistos project management API.
 *
 * As each files provides by the CSCFA, this file is licensed
 * under the MIT license.
 *
 * PHP version 5.6
 *
 * @category FixtureLoader
 * @package  JBPEntitiesManagement
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */

namespace Cscfa\JBPEntityManagement\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cscfa\JBPEntityManagement\Entity\Status;

/**
 * LoadStatusData
 *
 * This class is used to load the status data fixtures
 *
 * @category Entity
 * @package  JBPEntitiesManagement
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class LoadStatusData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     * @see \Doctrine\Common\DataFixtures\FixtureInterface::load()
     */
    public function load(ObjectManager $manager)
    {
        $defaultStatus = array(
            Status::SUCCESS,
            Status::FAILED,
            Status::UNSTABLE,
            Status::UNKNOWN
        );

        $statusRepository = $manager->getRepository(Status::class);

        foreach ($defaultStatus as $statusName) {

            if ($statusRepository->findOneByName($statusName) !== null) {
                continue;
            }

            $status = new Status();

            $status->setName($statusName);

            $manager->persist($status);
        }

        $manager->flush();
    }
}
