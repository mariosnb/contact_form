<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <?php $error=""; ?>
<div class="container">
  <h1>Get in touch!</h1>
  <div id="success"><?php echo $error ?></div>
  <form method="post" id="contact-form" action="/success.php">
        <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter E-Mail">
        </div>
        <div class="mb-3">
        <label for="subject" class="form-label">Subject</label>
        <input class="form-control" type="text" id="subject" name="subject">
        <div class="mb-3">
        <label for="msg" class="form-label">What would you like to ask us?</label>
        <textarea class="form-control" id="msg" name="msg" rows="3"></textarea>
        </div>
        <input type="submit" id="submit-btn" class="btn btn-primary"></button>
  </form>
  <br>
</div>

<?php

  if($error !=""){
    $error = 'div class"alert alert-danger" roler="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
  }

    if (!empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['msg'])){

        $mailto = $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $msg = $_POST['msg'];
        $headers = "From: test2@test.fg";

        if(Mail($mailto, $subject, $body, $headers)) {
            $mailStatus = true;
        }
        else
        {
            $mailStatus = false;
        };
    }
?>
<script>
$("#contact-form").validate({
    rules: {
        email: "required",
        subject: {
            required: true,
            minlength: 5
        },
        msg: {
            required: true,
            minlength: 10
        },
        loginNomEmail: { required: true,
                         email: true,
                         accept:"[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}" }
    }
});
</script>
</body>
</html>