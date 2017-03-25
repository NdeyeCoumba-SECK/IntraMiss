<?php

namespace GM\GestionDepensesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Zend\Json\Expr;


class DefaultController extends Controller {

    

    /**
     * @Route("/chart")
     */
    public function chartAction() {
        $em = $this->getDoctrine()->getEntityManager();
//        $query = $em->createQuery('SELECT AVG(f.montant) as Montant, m.annonceur as Nom FROM GMProjetBundle:Frais f JOIN f.projet m GROUP BY f.projet');
//        $resultat = $query->getResult(); /* , m.nom as Nom   JOIN f.reference m GROUP BY f.reference */
//        $data = array(1, 2, 4, 5, 6, 3);
//        $series = array(
//            array("name" => "Nom", "data" => $data)                 //             array("name" => "Data Serie Name", "data" => $data)
//        );
        $query = $em->createQuery('SELECT AVG(f.montant) as Montant, m.user as Nom FROM GMProjetBundle:Frais f JOIN f.collaborateur m GROUP BY f.collaborateur');    /* ->setMaxResults(1) */
//                $query2 = $em->createQuery('SELECT AVG(f.montant) as Montant, m.nom as Nom FROM GMProjetBundle:Frais f JOIN f.collaborateur m GROUP BY f.collaborateur');    /* ->setMaxResults(1) */
        $resultat = $query->getResult(); /* , m.nom as Nom   JOIN f.reference m GROUP BY f.reference */
        var_dump($resultat);

        $em = $this->getDoctrine()->getEntityManager();
        $query2 = $em->createQuery('SELECT f.id as Collaborateur FROM GMProjetBundle:Frais f ');    /* ->setMaxResults(1) */
//                $query2 = $em->createQuery('SELECT AVG(f.montant) as Montant, m.nom as Nom FROM GMProjetBundle:Frais f JOIN f.collaborateur m GROUP BY f.collaborateur');    /* ->setMaxResults(1) */
        $resultat2 = $query->getResult(); /* , m.nom as Nom   JOIN f.reference m GROUP BY f.reference */
        var_dump($resultat);
        $series = array();
        foreach ($resultat as $values) {
            $a = array(intval($values = ['Montant']));
            array_push($series, $a);
        }

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Chart Title');
        $ob->xAxis->title(array('text' => "Horizontal axis title"));
        $ob->yAxis->title(array('text' => "Vertical axis title"));
        $ob->series($series);

        return $this->render('GMGestionDepensesBundle:Default:chart.html.twig', array(
                    'chart' => $ob
        ));
    }

}
