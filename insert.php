<?php
    include_once('main.php');
?>
<html>
    <head>
        <title> Insert Data </title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1 class="text-center">SIGN-UP</h1>
                <hr>
                <div class="form-group">
                  <label for="">NAME</label>
                  <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  
                </div>
                <div class="form-group">
                  <label for="">EMAIL</label>
                  <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  
                </div>
                <div class="form-group">
                  <label for="">PASSWORD</label>
                  <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  
                </div>
                <div class="form-group">
                  <label for="">PHONE</label>
                  <input type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
                
                </div>
                <hr>
                <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </div>
    </body>
</html>
