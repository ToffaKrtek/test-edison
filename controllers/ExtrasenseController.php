<?php
include_once ROOT. '/models/Extrasense.php';

class ExtrasenseController
{

  public function actionIndex()
  {

    $extras_1 = new Extrasense('Merlin');
    $extras_2 = new Extrasense('Dumbldor');
    $predict = $extras_1->getPredict();
    $predict2 = $extras_2->getPredict();
    $all_extr1 = $extras_1->getAllPredicts();
    $all_extr2 = $extras_2->getAllPredicts();
    require_once(ROOT.'/views/index.php');
  }

}
