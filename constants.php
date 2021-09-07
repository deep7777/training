<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  private $message;
  public function byebye() {
    echo self::LEAVING_MESSAGE;
    $this->message = 'inside the constructor';
  }

}

$goodbye = new Goodbye();
$goodbye->byebye();
$goodbye->LEAVING_MESSAGE = 'Deepak';


?>