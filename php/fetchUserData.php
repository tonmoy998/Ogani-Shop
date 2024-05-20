<?php

class FetchUserData
{
  public $db = null;

  public function __construct(DBController $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }

  public function fetchUserData($table = "", $field, $value)
  {
    // Check if table and field are not empty
    if (empty($table) || empty($field)) {
      return null;
    }

    // Construct the SQL query dynamically
    $query = "SELECT * FROM $table WHERE $field = ?";

    // Prepare the SQL query (no need to use prepare() for dynamic table and field names)
    $stmt = $this->db->con->prepare($query);

    // Check if the prepare() succeeded
    if (!$stmt) {
      return null;
    }

    // Bind the parameter to the prepared statement
    $stmt->bind_param('s', $value);

    // Execute the prepared statement
    $stmt->execute();

    // Get the result set
    $result = $stmt->get_result();

    // Initialize an empty array to store the result
    $resultArray = array();

    // Check if there are rows in the result set
    if ($result->num_rows > 0) {
      // Loop through each row and fetch the data
      while ($row = $result->fetch_assoc()) {
        // Append each row to the result array
        $resultArray[] = $row;
      }
    }

    // Close the prepared statement
    $stmt->close();

    // Return the result array
    return $resultArray;
  }
}
