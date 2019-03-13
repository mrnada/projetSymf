<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit/add", name="produit_add")
     */
    public function add()
    {

        $em=$this->getDoctrine()->getManager(); /*recuperer le gestion de donnees*/
        
        $produit = new Produit();
        
        $produit->setNom("Lumia");
        $produit->setMarque("Nokia");
        $produit->setPrix("500");
        $produit->setImage("images/lumia930.jpg");

        $produit->setDescription("La meilleure autonomie jamais vue sur un iPhone...Text de présentation du produit...");

        $em->persist($produit);
        $em->flush(); /*inscription dans le base de donnees*/
        return $this->render('produit/add.html.twig', [
            
        ]);
    }
/**
 * @Route("/produit/list", name="produit_list")
 */
    public function list(){
        $repo =$this->getDoctrine()->getRepository(Produit::class);
        $produits = $repo->findAll();
        /*dump($produits)??? ist nicht ganz*/

        return $this->render('produit/list.html.twig', ['produits'=>$produits]);
    }

/**
 * @Route("/produit/{id}/show", name="produit_show")
 */ 

    public function show($id){
        $repo=$this->getDoctrine()->getRepository(Produit::class);
        $produit = $repo->find($id);

        return $this->render('produit/show.html.twig', ['produit'=>$produit]);

}

}
