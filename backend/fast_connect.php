<?php
    if ($_POST) {
        try {
            require_once 'connect/connecttodb.php';
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];

            $sql = "INSERT INTO fast_connect (id, name, address, phone)
                    VALUES (null, '$name', '$address', '$phone')";

            if ($conn->query($sql) === TRUE) {
                echo "Успешно!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
$conn->close();
        } catch(\Throwable $ex) {
            echo "Ошибка";
        }

    }
?>
