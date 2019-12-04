<?php

namespace App\Controller;

use App\Entity\Client;
use App\Repository\ClientRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;






class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function create(Request $request, EntityManagerInterface $manager)
    {   
        $client = new Client();

        $form = $this->createFormBuilder($client)
                     ->add('login',TextType::class, [
                         'attr' => [
                             'placeholder' => "Votre identifiant",
                             'class' => 'form-control'
                         ]
                     ])
                     ->add('mdp',PasswordType::class, [
                        'attr' => [
                            'placeholder' => "Votre mdp",
                            'class' => 'form-control'
                        ]
                    ])
                     ->add('mail',EmailType::class, [
                        'attr' => [
                            'placeholder' => "Votre mail",
                            'class' => 'form-control'
                        ]
                    ])
                    ->add('Enregistrer', SubmitType::class, [
                        'attr' => [
                            'label' => 'Enregistrer'
                        ]
                    ])
                     ->getForm(); 

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $client->setDateAt(new \DateTime());

            $manager->persist($client);
            $manager->flush();
        }
         
        

        return $this->render('inscription/index.html.twig',
    ['formClient' => $form->createView()]);
    }

}
