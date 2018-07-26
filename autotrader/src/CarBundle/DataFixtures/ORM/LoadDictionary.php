<?php

namespace CarBundle\DataFixtures\ORM;

use CarBundle\Entity\Make;
use CarBundle\Entity\Model;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadDictionary extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $make = new Make();
        $make->setName('VW');

        $make1 = new Make();
        $make1->setName('BMW');

        $make2 = new Make();
        $make2->setName('OPEL');

        $manager->persist($make);
        $manager->persist($make1);
        $manager->persist($make2);

        $model = new Model();
        $model->setName('Golf');

        $model1 = new Model();
        $model1->setName('X5');

        $model2 = new Model();
        $model2->setName('Vectra');

        $manager->persist($model);
        $manager->persist($model1);
        $manager->persist($model2);
        $manager->flush();
        $this->addReference("Golf", $model);
        $this->addReference("X5", $model);
        $this->addReference("Vectra", $model2);
        $this->addReference("VW", $make);
        $this->addReference("BMW", $make1);
        $this->addReference("OPEL", $make2);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}