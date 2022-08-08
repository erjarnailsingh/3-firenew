<?php 
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$zipcode = $_POST['pincode'];

if (empty($name) || empty($phone) || empty($address) || empty($pincode))

{
echo "Please fill all details";
}

else 
{
mail("3fire6@gmail.com", "Enquiry" , $name , $phone , $zipcode "From: $name");
echo "<script type= 'text/javascript'>alert('Your Message Has Been Sent Successfully. We Will Call You Shortly');
window.history.go(-1)
 </script>";
}
?>