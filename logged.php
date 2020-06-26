<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["name"]) {
?>
Welcome <?php echo $_SESSION["name"]; ?>.<br><p>Click here to <form action="logout.php" method="POST"><button type="submit">logout</button>
    </form>
<?php
}else echo "<h1>Please login first .</h1>";
?>
</body>
</html>