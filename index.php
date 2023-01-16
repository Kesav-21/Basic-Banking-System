<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking</title>
    <style>
        html,body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            height: 100%;
            background-image: url(/src/banking.jpg);
            background-position: center;
            background-size:cover;
            background-repeat: no-repeat;
        }
        
        .container{
            background: rgba( 255, 255, 255, 0.25 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37);
            backdrop-filter: blur( 11px );
            -webkit-backdrop-filter: blur( 11px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            width:50%;
            margin:10% auto;
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }
        .content{
            text-align: center;
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
@media screen and (max-width:768px) {
    .container{
        width: 95%;
        flex-direction: column;
        justify-content: center;
    }
    .container > img{
        width: 90%;
        margin: 0 auto;
    }

}
    </style>
</head>
<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container">
        <img src="src/21079855.jpg" width="300px" height="300px" style="border-radius:5px">
    <div class="content">
    <h2 style="color:magenta; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Welcome to K7 Online Banking Services</h2>
    <h3 style="color:blue; ">Do Your Banking Activites At Ease From Home</h3>
    <a href="transaction.php"><button class="btn">Transact Now</button></a>
    <h5>Made with 💙 by Kesav</h5>
    </div>
    </div>
</body>
</html>