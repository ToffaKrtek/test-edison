<?php
include_once ROOT. '/models/Extrasense.php';

class ExtrasenseController
{

  public function actionIndex()
  {
    $post = [];
    $extras_1 = new Extrasense('Merlin');
    $extras_2 = new Extrasense('Dumbldor');
    if(isset($_POST['submit']))
    {
      $post = $_POST;
    }
    $predict = $extras_1->getPredict();
    $predict2 = $extras_2->getPredict();
    $predict = $extras_1->getRate();
    $predict2 = $extras_2->getRate();
    $all_extr1 = $extras_1->getAllPredicts();
    $all_extr2 = $extras_2->getAllPredicts();
    require_once(ROOT.'/views/index.php');
  }

}
