<?php include_once("../php/header.php"); ?>
<form action="../php/signup.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Sign UP</button>
    </form>
<?php include_once("../php/footer.php"); ?>
