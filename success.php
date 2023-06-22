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
          #success {
            background-color: #d6f5d6;
            color: #1f7a1f;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
  <h1>Get in touch!</h1>
  <div id="success">Your message was sent, we'll get back to you ASAP!</div>
  <form method="post" id="contact-form">
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
    </body>
    </html>
