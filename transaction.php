<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <style>
    table,th,td{
        border: 1px ridge;
        margin:35px auto;
        border-collapse: collapse;
    }
    th{
        height:50px;
        padding: 10px;
        width: 20%;
        background-color:#cfcdcc

    }
    td{
        height:15px;
        text-align: center;
        padding:20px;
        font-family: 'Courier New', Courier, monospace;
    }
    tr:nth-child(even) {
  background-color: #D6EEEE;
    }
    .btn{
        background-color : white;
        border:3px solid #A569BD;
        font-size:13px;
        padding:10px;
        border-radius:3px;
        transition-duration: 0.4s;
    }
    .btn:hover{
        background-color: #A569BD;
        cursor: pointer;
    }
    @media screen and (max-width:768px) {
        table{
            width: 100%;
        }        
    }
    </style>
</head>
<body style="background: rgb(240,229,226);
background: linear-gradient(90deg, rgba(240,229,226,1) 0%, rgba(209,187,170,1) 30%, rgba(96,155,199,1) 100%);">
    <?php
    include 'navbar.php';
    ?>
    <h2 style="text-align:center">Transaction</h2>
    <div>
        <table style="width:80%">
            <thead>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Balance</th>
                <th>Operation</th>
            </thead>
            <tbody>
            <?php
          include 'connection.php';
          $result = "select * from customers";
          $query = mysqli_query($con,$result);
          $numofrows = mysqli_num_rows($query);

           while($value = mysqli_fetch_array($query))
          {
            ?>
               <tr>
               <td><?php  echo $value['CustID']; ?></td>
               <td><?php echo $value['Name']; ?></td>
               <td><?php echo $value['Email']; ?></td>
               <td><?php echo $value['Balance']; ?></td>
               <td><a href="custdetail.php?id=<?php echo $value['CustID'];?>"> <button type="button" class="btn">Transfer</button></a></td>
               </tr>
             <?php
          }
           ?>
            </tbody>
        </table>
    </div>
</body>
</html>