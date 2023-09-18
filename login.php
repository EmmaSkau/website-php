<?php
    $title = 'Login';
    include 'nav.php';
?>
<main>
    <h1>Login</h1>

    <form method="post" action="loggedIn.php" class="login">
        <div>
            <label class="visually-hidden" for="email">Email</label>
            <input id="name" type="text" placeholder="Name" name="name">
        </div>

        <div>
            <label class="visually-hidden" for="pwd">Password</label>
            <input id="pwd" type="password" placeholder="Password" name="pwd">
        </div>

        <input type="submit" name="submit" value="Login">
        <p>If you do not have an account you can <a href="signup.php">sign up here</a></p>
    </form>

</main>




<?php
    include 'footer.php';
?>