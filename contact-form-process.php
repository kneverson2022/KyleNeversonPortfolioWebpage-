<?php


$to = $_POST['mail'];
$subject = "Thank You for the Email From: ". $_POST['firstname'];
$txt = $_POST['subject'];
$headers = "From:" . $_POST['mail']  . "\r\n" . "CC: neversok@kean.edu";

mail($to,$subject, $txt, $headers);

?>

<script>
alert('Email is submitted');
window.location.href="homepage.html";
</script>;
