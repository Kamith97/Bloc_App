<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./Plugins/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/sign_up.css">
    <script src="./Plugins/jquery.min.js"></script>
    <script src="./Plugins/bootstrap.min.js"></script>
</head>
<body>
     <?php include_once('./PHP/navbar.php')?>
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                   <div class="card mt-4">
                       <div class="card-header" id="card-header">
                           <h4>Sign Up Form</h4>
                       </div>
                       <div class="card-body" id="card-body">

                       <form action="./index.php">
                             <div class="form-group">
                               <label for="">First Name</label>
                               <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                               <small id="helpId" class="text-muted">Enter Your First Name</small>
                             </div>

                             <div class="form-group">
                               <label for="">Last Name</label>
                               <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                               <small id="helpId" class="text-muted">Enter Your last Name</small>
                             </div>

                             <div class="form-group">
                               <label for="">Email</label>
                               <input type="email" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                               <small id="helpId" class="text-muted">Enter Your Email Addresse</small>
                             </div>
 
                             <div class="form-group">
                               <label for="">Password</label>
                               <input type="password" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                               <small id="helpId" class="text-muted">Enter Your Password</small>
                             </div>
                       </div>
                       <div class="card-footer" id="card-footer">
                             <button type="submit" class="btn btn-primary">Sign Up</button>
                       </div>
                       </form>
                   </div>
             </div>
         </div>
     </div>
</body>
</html>