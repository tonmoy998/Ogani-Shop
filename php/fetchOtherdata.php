
<?php
class FetchOtherData
{
  public $db = null;

  public function __construct(DBController $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }

  public function fetchData($table = "", $min = 0, $max = 0, $exclude = 0, $item)
  {
    $resultArray = [];

    $query = "select * from {$table} where id between {$min} and {$max} and id <> {$exclude} limit {$item}";
    $result = $this->db->con->query($query);

    if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $resultArray[] = $row; // Append each row to the result array
      }
    }

    return $resultArray;
  }

  public function generateNumbers($id)
  {
    $relativeNumbers = [];
    for ($i = $id - 2; $i <= $id + 2; $i++) {
      if ($i > 0 && $i != $id) {
        $relativeNumbers[] = $i;
      }
    }
    return $relativeNumbers;
  }
}

?>

