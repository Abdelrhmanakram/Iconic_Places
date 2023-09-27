 
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
              <li  > <a href="mean4.php">Customers' complaint </a> </li>
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
       
     
     
    <center>

    <table class="table" border=1>
        <th colspan="7"  style="text-align:center;background-color:#8f7cec;"><h2>User's table</h2> </th>
             <tr style="text-align:center;">
<th> Date </th>
<th>Phone</th>
<th>comment</th>
<th>type</th>
</tr>

<?php include('server.php') ;

$records=mysqli_query($conn,"SELECT * FROM complaint ");
while($data=mysqli_fetch_array($records))
{
?>
<tr>
<td  style="text-align:center;">   <?php   echo $data['date']; ?> </td>
<td  style="text-align:center;">   <?php   echo $data['phone']; ?> </td>
<td  style="text-align:center;">   <?php   echo $data['comment']; ?> </td>
<td  style="text-align:center;">   <?php   echo $data['type']; ?> </td>
<td><a href="delete.php?id=<?php echo $data['com_id'] ;?>"> Delete </a> </td>
</tr>
<?php

}
?>
</table>
</center> <br> <br>
    </div>
 </body>
</html>