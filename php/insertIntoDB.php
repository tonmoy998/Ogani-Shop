<?php
class InsertIntoDB
{
  public $db = null;
  public function __construct(DBController $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }
  public function insertData($table = "", $productId, $email)
  {
    $stmt = $this->db->con->prepare("INSERT INTO {$table}(productId , email) VALUES(?,?)");
    $stmt->bind_param('ss', $productId, $email);
    $stmt->execute();
  }
}
