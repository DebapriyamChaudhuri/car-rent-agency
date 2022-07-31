<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
$query = $dbh->prepare($sql);
$query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Subscribed successfully.');</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
?>

<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
         <h2>Drive Safely</h2>
           <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Support Mail us : </p>
              <a href="mailto:carrent@gmail.com">carrent@gmail.com</a> 
            </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service Helpline Call Us: </p>
              <a href="tel:61-1234-5678-09">+91-9876543210</a> 
            </div>  
            <div class="header_widgets">
              <p class="uppercase_text" style="margin: 0 0 0 150px">Connect With Us:</p>
              <ul style="margin: 9px 0 -10px 140px; font-size:20px;">
                <a href="#"><i class="fa fa-facebook-square col-md-1" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter-square col-md-1" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin-square col-md-1" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google-plus-square col-md-1" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram col-md-1" aria-hidden="true"></i></a>
              </ul>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</footer>
