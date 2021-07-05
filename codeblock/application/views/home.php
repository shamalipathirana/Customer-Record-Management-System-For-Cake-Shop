<!DOCTYPE html>
<html>
<head> 
     <title>Display Records</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('js/bootstrap.js');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/main.css');?>">
</head>
<body> 

<nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="<?php echo base_url('index.php/Home/viewHome');?>">
                <img src="/codeblock/images/e.jpg" alt="Logo" width="150" hight="46">
            </a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/Home/viewHome');?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/About/viewAbout');?>">About</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/Register/displaydata');?>">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/Register/savedata');?>">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="description">
<h1>Welcome to the Nancy Cake!</h1>
<p>Nancy Cake is all about personalized and customized decorated cakes. We have cakes for every age, holiday, and celebration. Choose your favorite character, brand, sports team or a party theme and you’ll find a cake that will delight the guest of honor.</p>
<p>Cake... the mere mention of this delicious indulgence is enough to make anyone's mouth water. To top this, you can find them in an array of flavors with simple and exotic flavors and ingredients. Tastessence brings to you different types of cakes that you can try.</p>

<button class="btn btn-outline-secondary btn-lg">Read More</button>

</div>


    
    </body>
    </html>