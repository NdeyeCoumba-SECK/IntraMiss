<?php

namespace GM\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GM\ProjetBundle\Entity\Mission;

use GM\ProjetBundle\Entity\Frais;
use GM\ProjetBundle\Form\FraisType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class DepenseController extends Controller
{
    public function indexAction()
    {
        return $this->render('GMProjetBundle:Depense:index.html.twig');
    }
//*************************************************************SEMAINE DU 28 MARS   

    
 
//*************************************************************AJOUT FRAIS    
//*************************************************************AJOUT FRAIS
      public function ajoutfraisAction(Request $request)
    {
        $f= new Frais();
        $form = $this->createForm(FraisType::class, $f);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if($form->isSubmitted() && $form->isValid()){
                $frais=$form->getData();
                $user = $this->getUser()->getUsername();
                $idColab=$em->getRepository('GMProjetBundle:Collaborateur')->findOneByUser($user)->getId(); 
                $dossier = $em->getRepository('GMProjetBundle:DossierMissions')->findOneBy(array('collaborateur' =>$idColab, 'candidature'=>'oui'));
                $colab=$dossier->getCollaborateur();
                $projet=$dossier->getProjet();

                $frais->setCollaborateur($colab);
                $frais->setProjet($projet);
                $file = $frais->getPiece();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
                $file->move($brochuresDir, $fileName);  
                $frais->setPiece($fileName);
                $em->persist($frais);
                $em->flush();
                return new JsonResponse('Successful');
                
               
            }
            
           return $this->render('GMProjetBundle:Depense:ajout.html.twig', array('f' => $form->createView()));
    } 
    
//*************************************************************AFFICHER FRAIS
        public function listefraisAction(Request $request)
    {      
            $em = $this->getDoctrine()->getManager();
            $user = $this->getUser()->getUsername();
            $idColab=$em->getRepository('GMProjetBundle:Collaborateur')->findOneByUser($user)->getId(); 
            $dossier = $em->getRepository('GMProjetBundle:DossierMissions')->findOneBy(array('collaborateur' =>$idColab, 'candidature'=>'oui'));
            $idProjet=$dossier->getProjet()->getId();
            $lf=$em->getRepository('GMProjetBundle:Frais')->findBy(array('collaborateur' =>$idColab, 'projet'=>$idProjet));
            return $this->render('GMProjetBundle:Depense:liste.html.twig', array('Frais' => $lf));   
    }
    
    
    //*************************************************************MODIFIER FRAIS
        public function modificationfraisAction(Request $request)
    {
       
        $id= $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $f= $em->getRepository('GMProjetBundle:Frais')->find($id);
        $form = $this->createForm(FraisType::class, $f);
        $form->handleRequest($request);
        if($form->isValid() && $form->isValid()){
          //$miss= new Mission();
                $file = $f->getPiece();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
                $file->move($brochuresDir, $fileName);  
                $f->setPiece($fileName);
                $em->persist($f);
                $em->flush();
                return new JsonResponse('Successful');
           }
           
          return $this->render('GMProjetBundle:Depense:modif.html.twig', array('f' => $form->createView()));
    
            
    }
    
 //*************************************************************SUPPRIMER FRAIS    
 //*************************************************************SUPPRIMER FRAIS
        public function suppressionfraisAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $f= $em->getRepository('GMProjetBundle:Frais')->find($id);
        if(!$f){
            throw $this->createNotFoundException('Le frais numéro '. $id. ' n\'existe pas dans la base');
        }
        $em->remove($f);
        $em->flush();
        return $this->redirectToRoute('gm_projet_liste');
    }
    
    /*    public function chartAction() {
        // Chart
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT f.id as Collaborateur FROM GMProjetBundle:Frais f ');
        $query2 = $em->createQuery('SELECT f.user as Collaborateur, f.nom as Nom FROM GMProjetBundle:Collaborateur f ');
//        $query1 = $em->createQuery('SELECT AVG(f.montant) as Montant, m.nom as Nom FROM GMProjetBundle:Frais f JOIN f.collaborateur m GROUP BY f.collaborateur');
        $resultat = $query->getResult(); //, m.nom as Nom   JOIN f.reference m GROUP BY f.reference 
        var_dump($resultat);
//        $series = array('current'=> $query);
//        foreach ($resultat as $values) {
//            $a = array($values['Designation'], $values=['Montant']);
//            array_push($series, $a);
//        }
        $series = array(
            array("name" => "Data Serie Name", "data" => array(1, 2, 4, 5, 6, 3, 8))
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Chart Title');
        $ob->xAxis->title(array('text' => "Horizontal axis title"));
        $ob->yAxis->title(array('text' => "Vertical axis title"));
        $ob->series($series);

        return $this->render('GMGestionDepensesBundle:Default:chart.html.twig', array(
                    'chart' => $ob
        ));





        
          public function searchFriends ($param)
          {
          return $this->getEntityManager()
          ->createQuery('SELECT f FROM EMMyFriendsBundle:Friend f WHERE f.name="'.$param.'"')
          ->getResult();
          } 
    }*/
    
    
    

// public function chartAction() {
//        $ob = new Highchart();
//        $ob->chart->renderTo('linechart');
//        $ob->title->text('Browser market shares at a specific website in 2010');
//        $ob->plotOptions->pie(array(
//            'allowPointSelect' => true,
//            'cursor' => 'pointer',
//            'dataLabels' => array('enabled' => false),
//            'showInLegend' => true
//        ));
//        
//        $em = $this->getDoctrine()->getEntityManager(); 
//        $query = $em->createQuery('SELECT AVG(f.montant) as Montant, m.annonceur as Nom FROM GMProjetBundle:Frais f JOIN f.projet m GROUP BY f.projet');    /* ->setMaxResults(1) */
////                $query2 = $em->createQuery('SELECT AVG(f.montant) as Montant, m.nom as Nom FROM GMProjetBundle:Frais f JOIN f.collaborateur m GROUP BY f.collaborateur');    /* ->setMaxResults(1) */
//        $resultat = $query->getResult(); /*, m.nom as Nom   JOIN f.reference m GROUP BY f.reference */
//        var_dump($resultat);
//        $data = array();
//        foreach ($resultat as $values) {
//            $a = array($values['Nom'], intval($values=['Montant']));
//            array_push($data, $a);
//        }
//        
//        
//        
//        $data2 = array(
//            array('Firefox', 45.0),
//            array('IE', 26.8),
//            array('Chrome', 12.8),
//            array('Safari', 8.5),
//            array('Opera', 6.2),
//            array('Others', 0.7),
//        );
//        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));
//        
//        return $this->render('GMGestionDepensesBundle:Default:chart.html.twig', array(
//                    'chart' => $ob
//        ));
//    }   
}
