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

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method.');
    }
    
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    if (empty($name) || empty($email) || empty($message)) {
        throw new Exception('All fields are required.');
    }
    
    echo "Thank you, $name. Your message has been received.";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>