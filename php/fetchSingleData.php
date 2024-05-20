<?php
class FetchSingleData
{
  public  $db = null;

  public function  __construct(DBController $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }

  public function fetchData($table = "", $id = "")
  {

    $result = $this->db->con->query("select * from {$table} where id={$id}");
    $resultArray = array();

    while ($item = $result->fetch_assoc()) {
      $resultArray = $item;
    }
    return $resultArray;
  }
}
