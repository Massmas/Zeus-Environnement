<?php

namespace App\Controller;

use App\Entity\Client;
use App\Repository\ClientRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;





class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function create(Request $request, ObjectManager $manager)
    {
        $client = new Client();

        $form = $this->createFormBuilder($client)
                     ->add('login',
                     ['placeholder' => "Votre identifiant"])
                     ->add('mdp')
                     ->add('mail')
                     ->add('dateAt')
                     ->getForm(); 

        return $this->render('inscription/index.html.twig',
    ['formClient' => $form->createView()]);
    }

}
