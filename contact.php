<?php
session_start();

$title = "Contact";
include 'nav.php';
?>


<main class="contact-main">
    <form action="contact_send.php" method="post" class="contact-area">
        <div class="contact">
        <h1>Contact us</h1>
        <p>Contact us in the form down below if you have any questions.</p>
        <div class="contact-info1">
            <input type="text" placeholder="Name" class="contact-name">
            <input type="text" placeholder="Email" class="contact-email">
        </div>
        <div class="contact-info2">
            <input type="text" placeholder="Subject">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="contact-btn">Send message</button>
    </form>
</main>

<?php
include 'footer.php';
?>