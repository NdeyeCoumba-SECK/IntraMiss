<?php

namespace GM\GestionDepensesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Ob\HighchartsBundle\Highcharts\Highchart;
use GM\ProjetBundle\Entity\Frais;
use GM\ProjetBundle\Form\FraisType;
use Zend\Json\Expr;

class DefaultController extends Controller {

    /**
     * @Route("/index2")
     */
    public function indexAction() {
//        return $this->render('GMGestionDepensesBundle:Default:index.html.twig');

        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT AVG(f.montant) as Montant, m.annonceur as Nom FROM GMProjetBundle:Frais f JOIN f.projet m GROUP BY f.projet');                            /* ->setMaxResults(1) */
        $query0 = $em->createQuery('SELECT f.user as Collaborateur, f.nom as Nom FROM GMProjetBundle:Collaborateur f ');
        $query1 = $em->createQuery('SELECT f.id as Collaborateur FROM GMProjetBundle:Frais f ');
        $query2 = $em->createQuery('SELECT AVG(f.montant) as Montant, m.nom as Nom FROM GMProjetBundle:Frais f JOIN f.collaborateur m GROUP BY f.collaborateur');
        $resultat = $query->getResult(); /* , m.nom as Nom   JOIN f.reference m GROUP BY f.reference */


        $series0 = array('nom' => array(), 'montant' => array());
        // var_dump($resultat);

        foreach ($resultat as $values) {
            // $a = array($values['Nom'], $values=['Montant']);
            array_push($series0['nom'], $values['Nom']);
            $data2 = array_push($series0['montant'], intval($values['Montant']));
            $values['Montant'];
//            $series0['montant'];
        }
        var_dump($series0); //exit;

        $querys = $em->createQuery('SELECT f.id as Collaborateur FROM GMProjetBundle:Frais f ');
        $resultats = $querys->getResult();
        $data = $resultats;
//        $data = intval($values['Montant']);
        $data1 = array(1, 2, 4, 5, 6, 3);

        var_dump($data1); //exit;
        var_dump($values['Montant']); //exit;
        var_dump($data); //exit;


        $series = array(
            array("name" => $values['Nom'], "data" => $data)                 //             array("name" => "Data Serie Name", "data" => $data)
        );



        $series = array(
            array(
                'name' => 'Rainfall',
                'type' => 'column',
                'color' => '#4572A7',
                'yAxis' => 1,
                'data' => array(49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4),
            ),
            array(
                'name' => 'Temperature',
                'type' => 'spline',
                'color' => '#AA4643',
                'data' => array(7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6),
            ),
        );
        $yData = array(
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " degrees C" }'),
                    'style' => array('color' => '#AA4643')
                ),
                'title' => array(
                    'text' => 'Temperature',
                    'style' => array('color' => '#AA4643')
                ),
                'opposite' => true,
            ),
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " mm" }'),
                    'style' => array('color' => '#4572A7')
                ),
                'gridLineWidth' => 0,
                'title' => array(
                    'text' => 'Rainfall',
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );
        $categories = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

        $ob = new Highchart();
        $ob->chart->renderTo('container'); // The #id of the div where to render the chart
        $ob->chart->type('column');
        $ob->title->text('Average Monthly Weather Data for Tokyo');
        $ob->xAxis->categories($categories);
        $ob->yAxis($yData);
        $ob->legend->enabled(false);
        $formatter = new Expr('function () {
                 var unit = {
                     "Rainfall": "mm",
                     "Temperature": "degrees C"
                 }[this.series.name];
                 return this.x + ": <b>" + this.y + "</b> " + unit;
             }');
        $ob->tooltip->formatter($formatter);
        $ob->series($series);
        return $this->render('GMGestionDepensesBundle:Default:chart.html.twig', array(
                    'chart' => $ob
        ));
    }

    /**
     * @Route("/depenses")
     */
    public function depensesAction() {
        return $this->render('GMGestionDepensesBundle:Default:index.html.twig');    //  return $this->render('GMGestionDepensesBundle:Default:menuARH.html.twig');
    }

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

    /**
     * @Route("/chart")
     */
    public function sellsHistoryAction() {

        // Chart
        $sellsHistory = array(
            array(
                "name" => "Total des ventes",
                "data" => array(683, 756, 543, 1208, 617, 990, 1001)
            ),
            array(
                "name" => "Ventes en France",
                "data" => array(467, 321, 56, 698, 134, 344, 452)
            ),
        );

        $dates = array(
            "21/06", "22/06", "23/06", "24/06", "25/06", "26/06", "27/06"
        );

        $ob = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur
        $ob->chart->renderTo('linechart');
        $ob->title->text('Vente du 21/06/2013 au 27/06/2013');
        $ob->chart->type('column');

        $ob->yAxis->title(array('text' => "Ventes (milliers d'unité)"));

        $ob->xAxis->title(array('text' => "Date du jours"));
        $ob->xAxis->categories($dates);

        $ob->series($sellsHistory);

        return $this->render('GMGestionDepensesBundle:Default:chart.html.twig', array(
                    'chart' => $ob
        ));
    }

    /**
     * @Route("/bubble")
     */
    public function bubbleAction() {


        return $this->render('GMGestionDepensesBundle:Default:chart.html.twig', array(
                    'chart' => $ob
        ));
    }

    /**
     * @Route("/stats")
     */
    public function statsAction() {
        $statsHandler = $this->get('ben.stats_handler');

        $stats['city'] = $statsHandler->setDataColumn('city')->processData();
        $stats['gender'] = $statsHandler->setDataColumn('gender')->processData();
        $stats['status'] = $statsHandler->setDataColumn('status')->processData();
        $stats['created'] = $statsHandler->setDataColumn('created')->processData();
        $stats['created'] = array_map(function($item) {
            return array((new \DateTime($item['x']))->getTimestamp() * 1000, 0 + $item['y']);
        }, $stats['created']);

        $stats['revenu'] = $statsHandler->setDataColumn('revenu')->processData();
        $stats['revenu'] = array_map(function($item) {
            return array((new \DateTime($item['x']))->getTimestamp() * 1000, 0 + $item['y']);
        }, $stats['revenu']);

        $cot = $statsHandler->setDataColumn('cotisation')->processData();
        $stats['cotisation'] = array(
            array('label' => 'A jour', 'data' => $cot['yes'], 'color' => '#93b40f'),
            array('label' => 'En retard', 'data' => $cot['no'], 'color' => '#e1ab0b'),
            array('label' => 'N\'a jamais cotisé', 'data' => $cot['never'], 'color' => '#b94a48')
        );
        // var_dump($stats);die;


        $em = $this->getDoctrine()->getManager();
        $status = $em->getRepository('BenAssociationBundle:Status')->findAll();
        $groups = $em->getRepository('BenUserBundle:Group')->findAll();
        return $this->render('BenAssociationBundle:Default:stats.html.twig', array(
                    'status' => $status,
                    'groups' => $groups,
                    'stats' => $stats));
    }

    /**
     * @Route("/chartAtos")
     */
    public function chartOldAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery('SELECT AVG(f.montant) as Montant, m.annonceur as Nom FROM GMProjetBundle:Frais f JOIN f.projet m GROUP BY f.projet');
        $resultat = $query->getResult(); /* , m.nom as Nom   JOIN f.reference m GROUP BY f.reference */
        $series0 = array('nom' => array(), 'montant' => array());
        var_dump($resultat);
        exit();

        foreach ($resultat as $values) {
            // $a = array($values['Nom'], $values=['Montant']);
//            array_push($series0, $a);
            array_push($series0['nom'], $values['Nom']);
            array_push($series0['montant'], intval($values['Montant']));
            array_push($series0, $a);
            $values['Montant'];
//            $series0['montant'];
        }
        var_dump($series0); //exit;

        $querys = $em->createQuery('SELECT f.id as Collaborateur FROM GMProjetBundle:Frais f ');
        $resultats = $querys->getResult();
        $data = $resultats;
//        $data = intval($values['Montant']);
        $data1 = array(1, 2, 4, 5, 6, 3);
        var_dump($data1); //exit;
        var_dump($values['Montant']); //exit;
        var_dump($data); //exit;


        $series = array(
            array("name" => $values['Nom'], "data" => $data)                 //             array("name" => "Data Serie Name", "data" => $data)
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
    }

    /**
     * @Route("/piechart")
     */
    public function piechartAction() {
        $ob = new Highchart();
        $ob->chart->renderTo('linechart');
        $ob->title->text('Browser market shares at a specific website in 2010');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $em = $this->getDoctrine()->getEntityManager();
//        $query = $em->createQuery('SELECT f.id as Collaborateur FROM GMProjetBundle:Frais f ');
//        $query = $em->createQuery('SELECT AVG(f.montant) as Montant, m.annonceur as Nom FROM GMProjetBundle:Frais f JOIN f.projet m GROUP BY f.projet');    /* ->setMaxResults(1) */
//        $query2 = $em->createQuery('SELECT AVG(f.montant) as Montant, m.nom as Nom FROM GMProjetBundle:Frais f JOIN f.collaborateur m GROUP BY f.collaborateur');    /*  */
        $query = $em->createQuery('SELECT AVG(f.montant) as Montant, m.user as Nom FROM GMProjetBundle:Frais f JOIN f.collaborateur m group by f.collaborateur');
        $resultat = $query->getResult(); /* , m.nom as Nom   JOIN f.reference m GROUP BY f.reference */
        var_dump($resultat);
        $data = array();                                                                                                                                                                                  $data = array(array('Firefox', 136.0), array('IE', 15.0), array('Chrome', 250.0), array('Safari', 456.0), array('Opera', 666.0), array('Others', 22.7));       $data2 = array(array('Firefox', 45.0), array('IE', 26.8), array('Chrome', 12.8), array('Safari', 8.5), array('Opera', 6.2), array('Others', 0.7));
        foreach ($resultat as $values) {
            $a = array($values['Nom'], intval($values = ['Montant']));
            array_push($data, $a);
        }
        
        $ob->series(array(array('type' => 'pie', 'name' => 'Entité Atos', 'data' => $data)));

        return $this->render('GMGestionDepensesBundle:Default:chart.html.twig', array(
                    'chart' => $ob
        ));
    }

}
