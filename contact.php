<?php
if(isset($_POST['submit'])){
    //variable setting
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    // check input fields
    if (empty($name) || empty($email) || empty($message))
    {
        echo('Please fill all the fields.');
    }
    else
    {
        mail("pranavsethi1000@gmail.com", "Website Message", $message, "From: $name <$email>");
        echo "<script type='text/javascript'> alert('Thanks for sending your message.');
        window.history.go(-1);
        </script>";

    }
}
?>
