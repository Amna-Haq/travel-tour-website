<?php
$connection = mysqli_connect('localhost','root','','book_form');
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $location=$_POST['location'];
    $guests=$_POST['guests'];
    $arrivals=$_POST['arrivals'];
    $leaving=$_POST['leaving'];
    
    $request = "INSERT INTO book_form( name, email, phone, address, location, guests, arrivals, leaving) 
                VALUES('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
    
    if(mysqli_query($connection, $request)) {
        header('location:book.html');
        exit;
    } else {
        die("Error: " . mysqli_error($connection));
    }
} else {
    echo 'Form not submitted properly.';
}
?>