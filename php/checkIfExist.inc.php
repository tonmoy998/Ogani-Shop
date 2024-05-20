<?php

class CheckIfExist
{
  public $db = null;

  public function __construct(DBController $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }
  public function checkIfExist($table = "", $field = "", $value = "")
  {
    $stmt = $this->db->con->prepare("SELECT * FROM {$table} WHERE {$field}=?");
    $stmt->bind_param('s', $value);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $exist = true;
    } else {
      $exist = false;
    }
    return $exist;
  }
}
