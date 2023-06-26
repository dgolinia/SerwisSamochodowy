<?php
    session_start();
    require_once "connect.php";

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $car = $_POST['car'];
    $message = $_POST['message'];

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if($polaczenie->connect_error)
    {
        die("Błąd połączenia z bazą danych: " . $conn->connect_error);
    }
    else
    {
        $sql = "INSERT INTO wizyty (name, surname, email ,phone, date, car, message) VALUES ('$name', '$surname', '$email', '$phone', '$date', '$car','$message')";

        if ($polaczenie->query($sql) === TRUE) {
            echo "Wizyta została umówiona pomyślnie!";
            header('Location: przeslane.php');
        } else {
            echo "Błąd podczas umawiania wizyty: " . $polaczenie->error;
        }

    }
?>