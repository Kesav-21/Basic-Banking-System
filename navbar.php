<head>
<style>
    html,body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;}
header{
    background: rgb(34,193,195);
    background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
    color: red;
    min-height: 50px;
    width: 100%;
}
.nav-bar{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
#title{
    margin:0px;
    padding:5px;
}
.topnav{
    padding: 20px;
}
.topnav a{
    color:Black;
    text-align: center;
    padding: 10px 15px;
    text-decoration: none;
    font-size: 20px;
}
a:hover{
    background-color: blue;
}
@media screen and (max-width:768px) {
    .nav-bar{
        flex-direction: column;
    }
    .topnav a{
        font-size: 15px;
    }
}
</style>
</head>
<div>
        <header>
        <div class="nav-bar">
        <div>
            <h1 id="title">Basic Banking System</h1>
        </div>
        <div class="topnav">
            <a href="index.php">Home</a>
            <a href="transaction.php">Transact</a>
            <a href="transacthistory.php">Transaction History</a>
        </div>
        </div>
        </header>
</div>

