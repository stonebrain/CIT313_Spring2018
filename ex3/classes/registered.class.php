<?php

  class Registered extends User {

    public function __construct($user_level, $user_id) {

      $this->user_type = "1";
      $this->user_level= $user_level;
      $this->user_id = $user_id;
      parent::__construct($user_level);
    }

    static public function mathFunction($a, $b) {
      return ($a+$b) * $a;
    }


  }

?>
