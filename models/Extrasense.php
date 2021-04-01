<?php
   class Extrasense {
    public static $extrasense_name;
    public static $all_extrasenses = array();
    public static $predicts = array();
    public static $results;
    public static $rate = 0.0;

    function __construct($name) {
      $this->extrasense_name = $name;
      array_push($all_extrasenses, $name);
      if (!isset($_SESSION[$this->extrasense_name])){
      $_SESSION[$this->extrasense_name]['predicts'] = array();
      $_SESSION[$this->extrasense_name]['results'] = array();
      $_SESSION[$this->extrasense_name]['rate'] = 0;
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
    public function setRate(bool $success){
      array_push($_SESSION[$this->extrasense_name]['results'], $success);
      $count = count($_SESSION[$this->extrasense_name]['results']);
      $suc_pred = array_sum($_SESSION[$this->extrasense_name]['results']);
      $_SESSION[$this->extrasense_name]['rate'] = $count / $suc_pred;
    }
  };
