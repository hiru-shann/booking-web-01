<?php


// Fetch data from the hotels table
$query = "SELECT * FROM hotels";
$result = $conn->query($query);

// Prepare an array to hold the data
$hotels = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $hotels[] = $row;
    }
} else {
    $hotels = []; // No data found
}

// Return the data as a JSON response
echo json_encode($hotels);

// Close the database connection
$conn->close();

?>
