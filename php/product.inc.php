
<?php

class Product
{
  public $db = null;

  public function __construct(DBController $db)
  {
    if (!isset($db->con)) {
      throw new Exception("Database connection is not set in DBController.");
    }
    $this->db = $db;
  }

  public function getData($table = 'products', $limit = 0)
  {
    $query = "SELECT * FROM {$table}";

    if ($limit > 0) {
      $query .= " ORDER BY id DESC LIMIT {$limit}";
    }

    $result = $this->db->con->query($query);

    if (!$result) {
      throw new Exception("Failed to execute query: " . $this->db->con->error);
    }

    $resultArray = array();
    while ($item = $result->fetch_assoc()) {
      $resultArray[] = $item;
    }

    return $resultArray;
  }
}
