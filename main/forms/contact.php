# TEST CODE --1
<!-- <?php 
echo "<p>You're at contact.php</p>";
?> -->





<?php
echo "<h2>Contact Us</h2>";   
?>
<form action="../processes/contact-process.php" method="POST">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email</label>
    <input type="text" id="email" name="email" required>

    <label for="message">Message</label>
    <input type="text" id="message" name="message" required>

    <input type="submit" value="Submit">
</form>