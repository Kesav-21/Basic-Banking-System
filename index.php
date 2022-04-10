<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking</title>
    <style>
        html,body{
    height: 75%;
}
.bg{
    background-image: url(/src/banking.jpg);
    background-size:100% 140%;
    background-repeat: no-repeat;
}
.row{
    display: flex;
}
.column{
    padding:10px;
}
.container{
    background: rgba( 255, 255, 255, 0.25 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 11px );
    -webkit-backdrop-filter: blur( 11px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
    width:50%;
    margin:10% auto;
}
.btn{
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
    </style>
</head>
<body class="bg">
    <?php
    include 'navbar.php';
    ?>
    <div class="container row">
        <div style="width:40%;" class="column">
            <img src="src/21079855.jpg" width="200px" height="200px" style="border-radius:5px">
        </div>
    <div style="width:60%;" class="column content">
    <h2 style="color:#ff9100; text-align:center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Welcome to K7 Online Banking Services</h2>
    <h3 style="color:#ffb452; text-align:center;">Do Your Banking Activites At Ease From Home</h3>
    <a style="margin:0px 35%;" href="transaction.php"><button class="btn">Transact Now</button></a>
    <h5 style="text-align:center;">Made with 💙 by Kesav</h5>
    </div>
    </div>
</body>
</html>