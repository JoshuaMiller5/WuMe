<?php
//Get the Form Values
if (isset($_POST['name']) {
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])){
        return FALSE;
    }else{
    //Make Variables Safe
    mysql_connect('localhost', 'root', 'password');
    $name = mysql_real_escape_string(trim($_POST['name']);
    $email = mysql_real_escape_string(trim($_POST['email']);
    $message = mysql_real_escape_string(trim($_POST['message']);
    $query = 'INSERT INTO contacts ('name', 'email', 'message') VALUES("'.$name.'", "'.$email.'", "'.$message.'")';
    $result = mysql_query($query) or die(mysql_error());
}
}else {
   header('Location: index.htm');
}
?>