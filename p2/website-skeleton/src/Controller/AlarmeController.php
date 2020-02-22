<?php

namespace App\Controller;

use App\Entity\Alarme;
use App\Repository\AlarmeRepository;
use App\Form\AlarmeType;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AlarmeController extends AbstractController
{
    /**
     * @Route("/alarme", name="alarme")
     * @param AlarmeRepository $alarmeRepository
     * @return Response
     */
    public function index(AlarmeRepository $alarmeRepository)
    {
		$alarmes = $alarmeRepository->findAll();

        return $this->render('alarme/index.html.twig', [
            'alarmes' => $alarmes
        ]);
    }

    /**
     * @Route("/createAlarme", name="createAlarme")
     * @param Request $request
     */
    /*public function create(Request $request, EntityManagerInterface $manager) {
    	$alarme = new Alarme();
    	$alarme->setLibelle("Test");
    	$alarme->setLieu("Paris");
    	$alarme->setAgent(1);
    	$alarme->setCategorie("Astreinte");

    	$manager->persist($alarme);
        $manager->flush();

        return $this->render('alarme/create.html.twig');
    }*/

    public function create(Request $request, EntityManagerInterface $manager) {
        $alarme = new Alarme();
        $form = $this->createForm(AlarmeType::class, $alarme);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            // $libelle = "Test4012";
            // $lieu = "Ecole";
            // $agent = "007";
            // $categorie = "Urgent";
            $libelle = $alarme->getLibelle();
            $lieu = $alarme->getLieu();
            $agent = $alarme->getAgent();
            $categorie = $alarme->getCategorie();

        	$alarme->setLibelle($libelle);
    		$alarme->setLieu($lieu);
    		$alarme->setAgent($agent);
    		$alarme->setCategorie($categorie);
            
            $manager->persist($alarme);
            $manager->flush();

        }
        

        return $this->render('alarme/create.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
