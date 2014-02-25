<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Facturation\FactureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Facturation\FactureBundle\Entity\Facture;
use Facturation\FactureBundle\Entity\Type;

/**
 * Description of HomeController
 *
 * @author franck
 */
class HomeController extends Controller {

    public function indexAction() {
        $repo = $this->getDoctrine()->getRepository("FacturationFactureBundle:Facture");

        $factures = $repo->findAll();

        return $this->render("FacturationFactureBundle:Home:index.html.twig", array(
                    "factures" => $factures
        ));
    }

    public function detailsAction($id) {
        $repo = $this->getDoctrine()->getRepository("FacturationFactureBundle:Facture");

        $facture = $repo->find($id);

        return $this->render("FacturationFactureBundle:Home:details.html.twig", array(
                    "facture" => $facture
        ));
    }

    public function ajouterAction() {
        // On crée un objet Facture
        $facture = new Facture();

        // On crée le FormBuilder grâce à la méthode du contrôleur
        $formBuilder = $this->createFormBuilder($facture);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
                ->add('date', 'date')
                ->add('nom', 'text')
                ->add('libelle', 'textarea')
                ->add('montant', 'text');
        // Pour l'instant, pas de type, on le gérera plus tard
        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('FacturationFactureBundle:Home:ajout.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}
