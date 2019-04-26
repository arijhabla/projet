<?php
  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=projet2a;port=3307', 'mariem', '123');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
      echo"<script>alert('aaaaaaaaa')</script>";
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }
?>