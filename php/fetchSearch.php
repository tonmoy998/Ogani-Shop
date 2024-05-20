<?php
class FetchSearch
{
  public $db = null;

  public function __construct(DBController $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }

  public function fetchSearch($table = "", $search = "")
  {
    $sql = "SELECT * FROM {$table} WHERE name LIKE '%{$search}%' OR price LIKE '%{$search}%' OR description LIKE '%{$search}%'";
    $result = $this->db->con->query($sql);

    $resultArray = array(); // Initialize an empty array to store results

    if ($result && $result->num_rows > 0) {
      while ($item = $result->fetch_assoc()) {
        $resultArray[] = $item; // Append each fetched item to the result array
      }
    }

    return $resultArray; // Return the array containing all fetched items
  }
}
