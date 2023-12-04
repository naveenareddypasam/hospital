<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientName = $_POST["patientName"];
    $appointmentDate = $_POST["appointmentDate"];

    // Here, you would typically connect to a database and store the data
    // For demonstration, we will just display the data

    echo "Patient Name: " . $patientName . "<br>";
    echo "Appointment Date: " . $appointmentDate;
}
?>
