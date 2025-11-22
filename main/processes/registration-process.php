# DEFAULT CONTENT FOR NEW FILE main/processes/registration-process.php
# THIS IS ALL BEFORE MAKING DATABASE CONNECTIONS OR OTHER MODIFICATIONS
<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $confirmPassword = $_POST['confirm-password'];

//     if (empty($username) || empty($password) || empty($confirm_password)) {
//             echo "All fields are required.";
//     } elseif ($password !== $confirmPassword) {
//             echo "Passwords do not match.";
//     } else {
//             echo "Registration successful for user: $username";
//     }
// } else {
//     echo "Invalid request method.";
// }
?>





# AFTER DATABASE CONNECTIONS OR OTHER MODIFICATIONS USE THIS:
<?php
include('../config/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    if (empty($username) || empty($password) || empty($confirmPassword)) {
        echo "All fields are required.";
    } else if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
    } else {
       
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);

        if ($stmt->execute()) {
            echo "Registration successful for user: $username";
        } else {
            echo "Error: ". $stmt->error;
        }

        $stmt->close();
    } 

} else {
    echo "Invalid request method.";
}
$conn->close();
?>