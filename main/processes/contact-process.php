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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
    }

} else {
    echo "Invalid request method.";
}
?>