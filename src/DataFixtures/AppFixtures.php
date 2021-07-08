<?php

namespace App\DataFixtures;

use DateTime;
use Faker\Factory;
use App\Entity\Remboursement;
use App\Entity\RemboursementDetail;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Factory::create("fr_FR");
        $nom = $faker->lastName();
        $prenom = ['0',$faker->firstName(),$faker->firstName(),$faker->firstName(),$faker->firstName()];
        $refReglement = 0;
        for ($i=0; $i < 10; $i++) { 
            $refReglement++;
            $rand = random_int(1, 4);
            $remb = 0;
            $remboursement = new Remboursement();
            $remboursement
                ->setBeneficiaireReglement('beneficiaireReglement')
            ;
            $manager->persist($remboursement);
            $dateAct    = $faker->dateTimeBetween('-2 year', '-1 week');

            for ($j=0; $j < $rand; $j++) { 
                $randPrice  = random_int(1,500);
                $randSecu   = random_int(30,60);
                $randPrenom = random_int(1,4);
                $rembsecu   = $randPrice*(($randSecu)/100);
                $rembCol    = $randPrice - $rembsecu ;
                $remb       += $rembCol;

                $remboursementDetail = new RemboursementDetail;
                $remboursementDetail
                    ->setBeneficiaireSoin("$nom $prenom[$randPrenom]")
                    ->setComplementCgam("$rembCol")
                    ->setDateActe($dateAct)
                    ->setFraisReel("$randPrice")
                    ->setIdRemboursement("160505000237")
                    // ->setMontantRemboursement()
                    ->setRemboursementSecuriteSociale("$rembsecu" )
                    ->setResteCharge("0")
                    ->setStatut('statut')
                    ->setTauxSecuriteSociale("$randSecu")
                    ->setTypeActe('typeActe')
                    ->setRefReglement("$refReglement")
                    ->setAutreMutuelle('0')
                    ->setDecompteDispo(true)
                    ->setIsBloque(false)
                ;
                $manager->persist($remboursementDetail);
            }
            $dateRembString = $faker->dateTimeBetween($dateAct, '+ 1 weeks');
            $remboursement
                ->setBeneficiaireReglement($nom.' '.$prenom[1])
                ->setMontantRemboursement($remb)
                ->setRefReglement("$refReglement")
                ->setDateReglement($dateRembString)
                // ->setIsBloque()
            ;
        }

        $manager->flush();
    }
}
