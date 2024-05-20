<?php
class DBController
{
  protected $host = 'localhost';
  protected $user = 'root';
  protected $dbpwd = '16211621';
  protected $database = 'oganishop';

  public $con = null;
  public function __construct()
  {
    $this->con = mysqli_connect($this->host, $this->user, $this->dbpwd, $this->database);

    if ($this->con->connect_error) {
      echo "failed  to connect" . $this->con->connect_error;
    }
    /* echo "<p> Conencted to database </p>"; */
  }

  public function __destruct()
  {
    $this->closeConnection();
  }
  protected function closeConnection()
  {
    if ($this->con != null) {
      $this->con->close();
      $this->con = null;
    }
  }
}

/* $db = new DBController(); */
