<?php
   class Extrasense {
    public static $extrasense_name;
    public static $all_extrasenses = array();
    public static $predicts = array();
    public static $results;
    public static $rate = 0.0;

    function __construct($name) {
      $this->extrasense_name = $name;
      if (!isset($_SESSION[$this->extrasense_name])){
      $_SESSION[$this->extrasense_name]['predicts'] = array();
      $_SESSION[$this->extrasense_name]['results'] = array();
      $_SESSION[$this->extrasense_name]['rate'] = 100;
      }
   }
    //Метод получения предсказания
    public function getPredict()
    {
      $value = random_int(10, 99);
      array_push($_SESSION[$this->extrasense_name]['predicts'], $value);
      return $value;
    }
      //Возвращаем все предсказания
    public function getAllPredicts(){
      return $_SESSION[$this->extrasense_name]['predicts'];
    }
    //Возвращаем рейтинг
    public function getRate()
    {
      return $_SESSION[$this->extrasense_name]['rate'];
    }
    //Добавляем результат, считаем рейтинг угадывания
    public function setRate(int $num){
      $success = ($num == end($_SESSION[$this->extrasense_name]['predicts'])) ? true : false;
      array_push($_SESSION[$this->extrasense_name]['results'], $success);
      $count = count($_SESSION[$this->extrasense_name]['results']);
      $suc_pred = array_sum($_SESSION[$this->extrasense_name]['results']);
      if ( $count > 0)
      {
        $result = $suc_pred / $count * 100;
      $_SESSION[$this->extrasense_name]['rate'] = intval($result);
    } else {
      $_SESSION[$this->extrasense_name]['rate'] = 100;
    }
    }
  };
