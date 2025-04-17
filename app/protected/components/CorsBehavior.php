<?php

class CorsBehavior extends CBehavior
{
  public function events()
  {
    return [
      'onBeginRequest' => 'handleCors',
    ];
  }

  public function handleCors($event)
  {
    $headers = [
      'Access-Control-Allow-Origin' => '*',
      'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS',
      'Access-Control-Allow-Headers' => 'Content-Type, Authorization, X-Requested-With',
      'Access-Control-Allow-Credentials' => 'true',
    ];

    foreach ($headers as $key => $value) {
      header("$key: $value");
    }

    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
      Yii::app()->end();
    }
  }
}
