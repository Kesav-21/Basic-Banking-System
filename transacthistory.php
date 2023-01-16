<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <style>
    table, th, td {
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
    @media screen and (max-width:768px) {
        table{
            display: block;
            width: 90%;
            height: 50vh;
            overflow: scroll;
        }        
    }
    </style>
</head>

<body style="background: rgb(240,229,226);
background: linear-gradient(90deg, rgba(240,229,226,1) 0%, rgba(209,187,170,1) 30%, rgba(96,155,199,1) 100%);">

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 style="color:black; text-align:center;">Transaction History</h2><br>
       <div>
    <table>
        <thead style="color : black;">
            <tr>
                <th>S.No.</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'connection.php';
            $sql ="select * from transactions";
            $query =mysqli_query($con, $sql);
            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
            <tr style="color : black;">
            <td><?php echo $rows['SNO']; ?></td>
            <td><?php echo $rows['Sender']; ?></td>
            <td><?php echo $rows['Receiver']; ?></td>
            <td><?php echo $rows['Balance']; ?> </td>
            <td><?php echo $rows['DateTime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer>
    <p style="text-align:center">&copy 2022.<b>K7 BASIC BANK</b> <br> </p>
</footer>
</body>
</html>