<?php
session_start();
include 'function.php';
$user = new user();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $page = $_POST['page'];
  $recordsPerPage = $_POST['recordsPerPage'];
  $searchQuery = isset($_POST['searchQuery']) ? $_POST['searchQuery'] : '';
  $sortColumn = isset($_POST['sortBy']) ? $_POST['sortBy'] : 'id';
  $sortOrder = isset($_POST['sortOrder']) ? $_POST['sortOrder'] : 'ASC';
  $login = $_SESSION['loginschoolname'];
  // Calculate the offset for the database query
  $offset = ($page - 1) * $recordsPerPage;

  $sql ="SELECT student.*, school.name AS school_name FROM student 
        JOIN school ON student.school_id = school.school_id WHERE student.school_id	= '$login'";
  
  if (!empty($searchQuery)) {
    // Add WHERE clause to filter based on search query
    $sql .= " AND (student.first_name LIKE '%$searchQuery%' OR student.last_name LIKE '%$searchQuery%' OR student.email LIKE '%$searchQuery%' OR student.gender LIKE '%$searchQuery%' OR student.age LIKE '%$searchQuery%' OR student.date_of_birth LIKE '%$searchQuery%' OR student.address LIKE '%$searchQuery%' OR student.phone_number LIKE '%$searchQuery%')";
  }

  if (!empty($sortColumn) && !empty($sortOrder)) {
    $sql .= " ORDER BY $sortColumn $sortOrder";
  }

  // Add the LIMIT clause for pagination
  $sql .= " LIMIT $offset, $recordsPerPage";
  
  $results = $user->fetchUser($sql);

  $totalCount = $user->getStudentRecord();

  // Prepare the response as JSON
  $response = [
    'results' => $results,
    'totalRecords' => $totalCount
  ];

  // Send the JSON response back to the client
  header('Content-Type: application/json');
  echo json_encode($response);
  exit;
}

?>
