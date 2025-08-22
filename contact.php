<?php include 'header.php'; ?>
<h1>Contact Us</h1>
<form action="contact.php" method="post">
    <label>Name:</label><br>
    <input type="text" name="name"><br><br>
    <label>Message:</label><br>
    <textarea name="message"></textarea><br><br>
    <input type="submit" value="Send">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Thank you, " . htmlspecialchars($_POST['name']) . "! Your message has been received.</p>";
}
?>
<?php include 'footer.php'; ?>
