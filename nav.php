<?php
$curpage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (isset($title)) {
            echo $title . " | Emmas Website";
        } else {
            echo 'Emmas Website';
        }
        ?>
    </title>
    <link rel="stylesheet" href="scss/style.css">
</head>
<header>
    <a href="index.php"><img class="logo" src="img/logo.svg" alt=""></a>
    <nav>
        <a class="<?= ($curpage == 'index.php') ? 'active':''; ?>" href="index.php">Home</a>
        <a class="<?= ($curpage == 'about.php') ? 'active':''; ?>" href="about.php">About</a>
        <a class="<?= ($curpage == 'contact.php') ? 'active':''; ?>" href="contact.php">Contact</a>
        <a class="<?= ($curpage == 'login.php') ? 'active':''; ?>" href="login.php">Login</a>
        <?php
        if (isset($_SESSION['id'])) {
        ?>
            <li><a class="<?= ($curpage == 'profile.php') ? 'active':''; ?>" href="profile.php">Profile</a></li>
        <?php
        }
        ?>
    </nav>
</header>
