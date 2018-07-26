<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 26.07.18
 * Time: 13:42
 */

namespace CarBundle\DataFixtures\ORM;


use CarBundle\Entity\Car;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCars extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $car1 = new Car();
        $car1->setModel($this->getReference("X5"))
            ->setMake($this->getReference("BMW"))
            ->setPrice('200000')
            ->setYear('2014')
            ->setNavigation(true)
            ->setPromote(false);

        $car2 = new Car();
        $car2->setModel($this->getReference("Golf"))
            ->setMake($this->getReference("VW"))
            ->setPrice('5000')
            ->setYear('2006')
            ->setNavigation(false)
            ->setPromote(false);

        $car3 = new Car();
        $car3->setModel($this->getReference("Vectra"))
            ->setMake($this->getReference("OPEL"))
            ->setPrice('13000')
            ->setYear('2008')
            ->setNavigation(false)
            ->setPromote(false);

        $manager->persist($car1);
        $manager->persist($car2);
        $manager->persist($car3);
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }
}