<?php
include_once ROOT. '/models/Extrasense.php';
include_once ROOT. '/models/User.php';
class ExtrasenseController
{

  public function actionIndex()
  {
    $user = new User;
    $extras_1 = new Extrasense('Мерлин');
    $extras_2 = new Extrasense('Дамблдор');

    if(isset($_POST['submit']))
    {
      $num = $_POST['user_number'];
      $user->addNum($num);
      $extras_1->setRate($num);
      $extras_2->setRate($num);

    }
    $user_nums = $user->getAllNums();



    $rate1 = $extras_1->getRate();
    $rate2 = $extras_2->getRate();
    $predict = $extras_1->getPredict();
    $predict2 = $extras_2->getPredict();
    $all_extr1 = $extras_1->getAllPredicts();
    $all_extr2 = $extras_2->getAllPredicts();
    while (count($user_nums) < (count($all_extr1) - 1)):
        $user->addNum(0);
        $user_nums = $user->getAllNums();
    endwhile;
    require_once(ROOT.'/views/index.php');
  }

}
