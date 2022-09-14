<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
  <style>
    body{
      margin: 0;
      padding: 0;
      background-color: #34ebb1;
      }
    .model-content{
      background-color: light;
      border-radius: 20px;
      padding: 20px;
    }
    .form-group{
      margin-bottom: 40px;
    }
    .form-group input{
      height: 42px;
      font-size: 18px;
      letter-spacing: 2px;
    }
    .forget a{
      color :white;
      font-size: 20px;
    }
    .heading{
      margin-bottom: 40px;
      letter-spacing: 2px;
      font-size: 40px;
    }
  </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body  shadow-lg"  style="background-color: #34ebb1;" >
                    <h3 class="card-title text-center">SEND MAIL</h3>
                    <form action="" method="POST" class="form-signin">
                        <div class="form-label-group">
                            <label for="inputEmail">From<span style="color: #FF0000">*</span></label>
                            <input type="text" name="fromEmail" class="form-control" placeholder="Sender email address" required>
                        </div> <br/>
                        <div class="form-label-group">
                            <label for="inputEmail">To<span style="color: #FF0000">*</span></label>
                            <input type="text" name="toEmail"class="form-control" placeholder="Receiver email address" required>
                        </div> <br/>
                        <label for="inputPassword">Subject<span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="text" name="subject" class="form-control" placeholder="Enter your number" required>
                        </div><br/>
                        <label for="inputPassword">Message<span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <textarea rows="8" name="message" class="form-control" placeholder="Message..." required ></textarea>
                        </div> <br/>
                        <button type="submit" name="sendmail" class="btn btn-lg btn-primary btn-block text-uppercase" >Send Email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


<?php
$api_key="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";
require 'sendgrid-php/vendor/autoload.php';
if (isset($_POST['sendmail'])) {
  $fromEmail=$_POST['fromEmail'];
  $toEmail=$_POST['toEmail'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];

  $email = new \SendGrid\Mail\Mail(); 
  $email->setFrom($fromEmail);
  $email->setSubject($subject);
  $email->addTo($toEmail);
  $email->addContent("text/plain",$message);
  $email->addContent(
      "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
  );
  $sendgrid = new \SendGrid($api_key);

if ($sendgrid->send($email)) {
  echo "<script> alert('Mail Send Successfully!!')</script>";
  //header('location:index.php');
}

  /*try {
      $response = $sendgrid->send($email);
      print $response->statusCode() . "\n";
      print_r($response->headers());
      print $response->body() . "\n";
  } catch (Exception $e) {
      echo 'Caught exception: '. $e->getMessage() ."\n";
  }
    
  }*/
}
?>
