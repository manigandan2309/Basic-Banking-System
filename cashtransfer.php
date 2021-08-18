<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Transfer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/record.css">
    <link rel="stylesheet" type="text/css" href="css/navigationbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      h2{
          color:red;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
     
        body{
            background-image: radial-gradient(violet, blue,green);
        }
    
    </style>
</head>

<body>
<?php
    include 'configuration.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navigationbar.php';
?>

<div class="container">
       <h2 class="text-center pt-4">Cash Transfer</h2>
        <br>
            <div class="row">
                <div class="col">
                <button  class="btn btn-danger" >
            <a href="index.php" class="next" style="text-decoration: none;color:white">Back</a></button>
                    <div class="table-responsive-sm">
                    <table class="table table-dark table-hover">
                        <thead style="background-color:yellow; color:black">
                            <tr>
                            <th scope="col" class="text-center py-2">Customer_Id</th>
                            <th scope="col" class="text-center py-2">Customer_Name</th>
                            <th scope="col" class="text-center py-2">E-Mail_Id</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Function</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="transfer.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-outline-success">Send</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
               
            </div> 
         </div>
         
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>