<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    unset($_SESSION['id']);
    session_destroy();
    header('Location: index.php');
    exit;
}

$title = "Profile";
include 'nav.php';
?>

<main>
    <h1>This is the profile page</h1>
    <form method="post" action="">
        <button class="btn" type="submit" name="endsession" value="Submit">End session</button>
    </form>
</main>

<?php
include 'footer.php';
?>
