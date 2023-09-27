<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adm.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
     <title>Admin</title>
 </head>
 <body  class="container-fluid" >
    <header>
       <nav class="navbar-brand">
           <a href=""><img src="img/logo.gif" alt="logo" width="80%"></a>
           <div class="links">
             <ul >
             <li  > <a href="mean.php">customers' accounts </a> </li>
             <li  > <a href="mean2.php">Our Database </a> </li>
             <li  > <a href="mean3.php">Customers' booking </a> </li>
            
             </ul>
           </div>
           
         </nav>
         <div class="maintext">
           <p style="font-size: 50px;">looking for something
           </p>
         </div> 
    </header>
<div class="admin">
       <p style="font-size: 30px;"> Admin interface</p>
 </div>

  <form method="post" action="">
     <button type="submit" name="click" value="Show Tables" class="btn">Show Tables</button>
        <style>
    .btn{
    top: 53%;
    width: 350px;
    height: 7vh;
    padding-bottom: 5px;
    justify-content: center;
    border: 2px solid;
    border-color:  .btn{
    top: 53%;
    width: 350px;
    height: 7vh;
    padding-bottom: 5px;
    justify-content: center;
    border: 2px solid;
    border-color: #8f7cec;
    border-radius: 20px;
    background-color: transparent;
    font-size: 24px;
    color: black;
    cursor: pointer;
    
}
.btn:hover{
    background-color:#8f7cec;
    transition: all 0.5s ease 0.1s;
    color: white;
}
;
    border-radius: 20px;
    background-color: transparent;
    font-size: 24px;
    color: black;
    cursor: pointer;
    
}
.btn:hover{
    background-color:#8f7cec;
    transition: all 0.5s ease 0.1s;
    color: white;
}

</style>
</form> <br><br>

     
<div>
     
         <table class="table" border=1>
        <th colspan="8"  style="text-align:center;background-color:#8f7cec;"><h2>Event's table</h2> </th>
             <tr style="text-align:center;">
                <th>ID</th>
                <th>FK-ID</th>
                <th>Name</th>
                <th>Descreption</th>
                <th>price</th>
                <th>Image</th>
               
             </tr>
        <tr>
     <?php include('server.php');
      if(isset($_POST['click'])){
        $process=mysqli_query($conn,"SELECT * FROM events ");
        while($data=mysqli_fetch_array($process))
        {
        ?>
        
       
        <td style="text-align:center;"> <?php   echo $data['e_id']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['cate_id']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['name']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['descr']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['price']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['image']; ?> </td>
        
        <td><a href="delete.php?id=<?php echo $data['e_id'];?>"> Delete </a> </td>
        <td><a href="modify.html">Modify</a></td>
        </tr>
        <?php
        
        }
        ?>
     
       
         </table>
     
        <?php
        } 
    ?>
   
  
     <center>
         <table class="table" border=1>
         <th colspan="8"  style="text-align:center;background-color:#8f7cec;"><h2>place's table</h2> </th>
             <tr style="text-align:center;">
                <th>ID</th>
                <th>FK-ID</th>
                <th>Name</th>
                <th>Descreption</th>
                <th>price</th>
                <th>Image</th>
               
             </tr>
        <tr>
        <?php include('server.php');
      if(isset($_POST['click'])){
        $process=mysqli_query($conn,"SELECT * FROM confernce ");
        while($data=mysqli_fetch_array($process))
        {
        ?>
        
       
        <td style="text-align:center;"> <?php   echo $data['c_id']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['cat_id']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['name']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['des']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['price']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['image']; ?> </td>
        
        <td><a href="delete.php?id=<?php echo $data['c_id'] ;?>"> Delete </a> </td>
        <td><a href="modify.html">Modify</a></td>
        </tr>
        <?php
        
        }
      }?>

         </table>
     </center>


     <table class="table" border=1>
        <th colspan="8"  style="text-align:center;background-color:#8f7cec;"><h2>wedding's table</h2> </th>
             <tr style="text-align:center;">
                <th>ID</th>
                <th>FK-ID</th>
                <th>Name</th>
                <th>Descreption</th>
                <th>price</th>
                <th>Image</th>
               
             </tr>
        <tr>
     <?php include('server.php');
      if(isset($_POST['click'])){
        $process=mysqli_query($conn,"SELECT * FROM wedding ");
        while($data=mysqli_fetch_array($process))
        {
        ?>
        
       
        <td style="text-align:center;"> <?php   echo $data['w_id']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['categ_id']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['name']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['descr']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['price']; ?> </td>
        <td style="text-align:center;"> <?php   echo $data['image']; ?> </td>
        
        <td><a href="delete.php?id=<?php echo $data['w_id'] ;?>"> Delete </a> </td>
        <td><a href="modify.html">Modify</a></td>
        </tr>
        <?php
        
        }
        ?>
     
       
         </table>
     
        <?php
        } 
    ?>
   
  
  </div>
 </body>
</html>
