<?php


if($_POST["message"]) {


mail("jackieg@jgeigertech.com", "Contact Me",


$_POST["insert your message here"]. "From: an@email.address");


}


?>

<div class="col-md-6 col-md-offset-3 col-md-offset-right-3  col-sm-10 col-sm-offset-1 col-sm-offset-right-1  col-xs-12  contact_details wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div>
        <form action="https://jgeigertech.com/contactform.php" method="POST">
            <input type="text" class="form_controle " name="name" placeholder="Name">
            <input type="text" class="form_controle " name="email" placeholder="Email">
            <input type="text" class="form_controle_message" name="message" placeholder="Message">
            <input type="submit" class="form_controle_btn " name="sub_btn" value="Send">
        </form>
    </div>
</div>