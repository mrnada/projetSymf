<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AutoController extends AbstractController
{
    /**
     * @Route("/auto", name="auto")
     */
    public function index()
    {
        return $this->render('auto/index.html.twig', [
            'controller_name' => 'AutoController',
        ]);
    }

    /**
     * @Route("/exemples", name="exemples")
     */
    public function exemples(){
        $titre = "Ma première page";
        $admin = false;
        $age = 18;

        $voitures=["Renault", "Peugeot", "Golf", "Ferrari"];
        
            return $this->render('auto/exemples.html.twig', ['titre'=>$titre, 'test'=>$admin, 'exemple'=>$age, 'voitures'=>$voitures]);

    }
    /**
     * @Route("/donnees", name="donnees")
     */
    public function donnees(){
        $voitures=[
            
            ['id'=>1, 'marque'=>'Renault', 'modele'=>'Clio2', 'pays'=>'France', 'image'=>'images/la-voiture-volante.jpg'],

            ['id'=>2, 'marque'=>'Citroen', 'modele'=>'C3', 'pays'=>'France', 'image'=>'images/citroen-c3.jpg'],

            ['id'=>3, 'marque'=>'Trabant', 'modele'=>'601', 'pays'=>'Allemagne', 'image'=>'images/trabant.jpg'],

            ['id'=>4, 'marque'=>'Ford', 'modele'=>'Mustang', 'pays'=>'Danemark', 'image'=>'images/ford-mustang.jpg'],

        ];

        return $this->render('auto/donnees.html.twig',["voitures"=>$voitures]);
    }
}

