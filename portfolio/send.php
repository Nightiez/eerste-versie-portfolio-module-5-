<?php 
if(!isset($_POST['send']))
{
    //This page should not be accessed directly. Need to submit the form.
    echo "error; you need to submit the form!";
};
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    var_dump($_POST)
// $_POST['msg'];
// $_POST['item1'] -Item 1;
// $_POST['item2'] -Item 2; 
//    $headers = "From:" . $email;
//    mail($email, $msg, $headers);
//    header('Location: send.php');


?>