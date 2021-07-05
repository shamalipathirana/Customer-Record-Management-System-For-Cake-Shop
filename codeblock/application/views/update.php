<!DOCTYPE html>
<html>
<head>
<title>Update User Details</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('js/bootstrap.js');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/main.css');?>">
</head>
<body>
    <div class="container">
        <br><h2 class="titleu">Update User Details</h2><br>
        <table class="table table-dark table-hover">
    <?php
    
    foreach($data as $row){
    ?>
         <form method="post">
         <table style="width:100%; ">
    <tr>
        <td>Enter Your Name</td>
        <td><input type="text" name="name" class="data" value="<?php echo $row->name; ?>"></td>
    </tr>
    <tr>
        <td>Enter Your Email</td>
        <td><input type="text" name="email" class="data" value="<?php echo $row->email; ?>"></td>
    </tr>
    <tr>
        <td>Enter Your Mobile</td>
        <td><input type="text" name="mobile" class="data" value="<?php echo $row->mobile; ?>"></td>
    </tr>
    <tr> 
       <center> <td colspan="2" style="text-align:center;"><input type="submit" name="update" value="Update Details" class="btn btn-primary btns"></td></center>
        </tr>
        </table>
        </form>
    <?php } ?>
    </body>
    </html>

    