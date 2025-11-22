# DEFAULT CONTENT FOR NEW FILE main/processes/contact-process.php
# THIS IS ALL BEFORE MAKING DATABASE CONNECTIONS OR OTHER MODIFICATIONS
<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     if (empty($name) || empty($email) || empty($message)) {
//         echo "All fields are required.";
//     } else {
//         echo "Thank you, $name. Your message has been received.";
//     }
// } else {
//     echo "Invalid request method.";
// }
?>





# AFTER DATABASE CONNECTIONS OR OTHER MODIFICATIONS USE THIS:
<?php
include('../config/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name =trim($_POST['name']);
    $email = trim($_POST['email']);
    $message =trim($_POST['message']);

    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
    } else {
        $stmt = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die('Prepare failed: ' . $conn->error);
        }
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "Thank you, $name. Your message has been received.";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
} else {
    echo "Invalid request method.";
}
$conn->close();
?>
