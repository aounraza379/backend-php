<!-- ________________TEST CODE --1 -->
<?php 
// echo "<p>You're at registration.php</p>";
?>





<!-- ________________WORKING REEGISTRATION -->
<?php
echo "<h2>Registration Form</h2>";  
?>
<form action="../processes/registration-process.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    
    <label for="confirm-password">Confirm Password:</label>
    <input type="password" id="confirm-password" name="confirm-password" required><br>
    
    <input type="submit" value="Register">
</form>