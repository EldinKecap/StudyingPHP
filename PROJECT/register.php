
    <?php
    require_once 'includes/header.php'
    ?>
<div>

        <h1>Register</h1>
        <p> Already have an account? <a href="login.php">Login here!</a> 
    </p>
    <form action="includes/register-inc.php" method="post" >
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <input type="text" name="confirmPassword" placeholder="Confirm Password">
        <button type="submit" name="submit">REGISTER</button>
    </form>
</div>
    <?php
    require_once 'includes/footer.php'
    ?>