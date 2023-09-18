<?php 
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_SESSION['id'])) {
        $id = session_create_id();
        $_SESSION['id'] = $id;
        header('Location: profile.php');
        exit;
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['id'])) {
        unset($_SESSION['id']);
    }
    
    

    $title = 'Forside';
    include 'nav.php';
?>

<main>
    <?php
        if(isset($_SESSION['id'])){
    ?>

    <h1>You're still here?</h1>
    <p>Press the button to end the session</p>

    <form method="post" action="end_session.php">
        <button class="btn" type="submit" name="submit" value="Submit" >End session</button>
    </form>

    <?php
        }else{
    ?>
    <h1>Hello! Welcome</h1>
    <p>Press the button to go to my secret page</p>

    <form method="post" action="">
        <button class="btn" type="submit" name="submit" value="submit" >Start session</button>
    </form>
    <?php } ?>
    
</main>

<?php
    include 'footer.php';
?>
