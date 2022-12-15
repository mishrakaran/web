<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Feedback</title>
    <link rel = "icon" href = "logo.svg" type = "image/x-icon">
       <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">
</head>
<body>
  
<!-- header section starts  -->

<section class="header">
 
<a href="index.php" class="logo">smart wearble</a>
  
   <nav class="navbar">
      <a href="index.php">Home</a>
      <a href="product.php">Products</a>
      <a href="about.php">about</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<!-- header section ends -->


<section class= "my-0">
    <div class= "py-0 ">
        <h1 class="text-center">Feedback</h1>
    </div>
    <DIV class="w-50 m-auto">
      <form action="method.php" method="post">
        <div class="form-group">
          <label>
            <h3>Name</h3>
          </label>
            <input type="text" name="user" autocomplete="off" class="form-control" >
        </div>
        <div class="form-group">
          <label>
           <h3>E-mail</h3>
          </label> <input type="text" name="email" autocomplete="off" class="form-control">
         
        </div>
        <div class="form-group">
          <label>
            <h3>Phone</h3>
          </label>
            <input type="text" name="moblie" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <form method="post" action="practice_ac.php">
            <h3>Rate Our Services</h3>
            
            <div class="pic">
               <br/>
                <input type="radio" name="quality" value="0"> Bad
            </div>
            <div class="pic">
                 <br/>
                <input type="radio" name="quality" value="1"> Okay
            </div>
            <div class="pic">
                <br/>
                <input type="radio" name="quality" value="2"> Good
            </div>
            <br>
 
        <div class="form-group">
          <label><h3>Feedback</h3></label>
            <textarea class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success"> Submit</button>
      </form>
    </DIV>
</SECTION>
</body>
</html>
