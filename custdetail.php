<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where CustID=$from";
    $query = mysqli_query($con,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customers where CustID=$to";
    $query = mysqli_query($con,$sql);
    $sql2 = mysqli_fetch_array($query);
    
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")'; 
        echo '</script>';
    }

    else if($amount > $sql1['Balance']) 
    {
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")'; 
        echo '</script>';
    }
    
    else if($amount == 0){
         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }

    else {
               $newbalance = $sql1['Balance'] - $amount;
                $sql = "UPDATE customers set Balance=$newbalance where CustID=$from";
                mysqli_query($con,$sql);
              
                $newbalance = $sql2['Balance'] + $amount;
                $sql = "UPDATE customers set Balance=$newbalance where CustID=$to";
                mysqli_query($con,$sql);
                
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
                $sql = "INSERT INTO transactions(`Sender`, `Receiver`, `Balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($con,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transacthistory.php';
                           </script>";
                   }

                $newbalance= 0;
                $amount =0;
        }  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
<style>
    table {
        border: 1px ridge;
        margin:15px auto;
        border-collapse: collapse;
    }
    th{
        height:50px;
        padding: 15px;
        width:20%;
        background-color:#cfcdcc;
    }
    td{
        height:25px;
        text-align: center;
        padding:20px;
        font-family: 'Courier New', Courier, monospace;
    }
    tr:nth-child(even) {
  background-color: #D6EEEE;
    }
    .btn{
        display: block;
        width:100%;
        background-color : white;
        border:3px solid #00ff66;
        font-size:13px;
        padding:10px;
        border-radius:3px;
        transition-duration: 0.4s;
    }
    .btn:hover{
        background-color: #00ff66;
        cursor: pointer;
    }
    .forms{
        margin:0px 5px;
    }
    </style>
</head>

<body style="background: rgb(240,229,226);
background: linear-gradient(90deg, rgba(240,229,226,1) 0%, rgba(209,187,170,1) 30%, rgba(96,155,199,1) 100%);">
 
<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 style="color : black;text-align:center;">Transaction</h2>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customers  where CustID=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($con);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table>
                <tr style="color : black;">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                </tr>
                <tr style="color : black;">
                    <td><?php echo $rows['CustID'] ?></td>
                    <td><?php echo $rows['Name'] ?></td>
                    <td><?php echo $rows['Email'] ?></td>
                    <td><?php echo $rows['Balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <div style="margin:0px 250px;">
        <label style="color : black; font-size:20px"><b>Transfer To:</b></label>
        <select style="display:block; width:100%; border:1px solid green;border-radius:5px;padding:10px;" name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql ="SELECT * FROM customers where CustID!=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option style="background-color:pink; font-size:20px; color:blueviolet;" value="<?php echo $rows['CustID'];?>" >
                
                    <?php echo $rows['Name'] ;?> (Balance: 
                    <?php echo $rows['Balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            </select>
        <br>
        <br>
            <label style="color : black; font-size:20px"><b>Amount:</b></label>
            <input style="display:block; width:98%; border:1px solid green;border-radius:5px; padding:10px;" type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn" name="submit" type="submit" id="myBtn" >Transfer</button>
            </div>
            </div>
        </form>
    </div>
    <footer style="text-align:center;">
            <p>&copy 2022.<b>K7 BASIC BANK</b> <br></p>
    </footer>
</body>
</html>