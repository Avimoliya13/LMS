<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <title>Learning Management System</title>
   

</head>

<body>
    <section class="header" id="nav-bar">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php"><img src="resources/img/logo-white.png" alt="" srcset=""></a>
        </nav>
    </section>

    <div class="body_form">
    <div class="wrapper">
          <div class="headline"> 
               <h1>Welcome to sign up page</h1>
          </div>

          <form action="signupvalidation.php" method="post" class="form">
               <div class="signup">
                    <div class="form-group">
                         <?php if (isset($_GET['error'])) { ?>
                              <b><p class="error"><?php echo $_GET['error']; ?></p><b>
                         <?php } ?>
                    </div>
                    <div class="form-group">
                         <?php if (isset($_GET['success'])) { ?>
                              <b><p class="success"><?php echo $_GET['success']; ?></p><b>
                         <?php } ?>
                    </div>
                    <div class="form-group">
                         <?php if (isset($_GET['name'])) { ?>
                              <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>">
                         <?php } else { ?>
                              <input type="text" name="name" placeholder="Name">
                         <?php } ?>
                    </div>
                    
                    <div class="form-group">
                         <?php if (isset($_GET['uname'])) { ?>
                              <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>">
                         <?php } else { ?>
                              <input type="text" name="uname" placeholder="User Name">
                         <?php } ?>
                    </div>
                    <div class="form-group">
                         <?php if (isset($_GET['email'])) { ?>
                              <input type="email" name="email" placeholder="Email Id" value="<?php echo $_GET['email']; ?>">
                         <?php } else { ?>
                              <input type="email" name="email" placeholder="Email">
                         <?php } ?>
                    </div>
                    <div class="form-group">
                         <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                         <input type="password" name="re_password" placeholder="confirm Password">
                    </div>
                    <button type="submit" class="btn btn-light">Sign Up</button>
                    <div class="account-exist">
                         Already have an account?<a href="login.php">Login</a>
                    </div>
               </div>
    </div>
</body>

</html>
