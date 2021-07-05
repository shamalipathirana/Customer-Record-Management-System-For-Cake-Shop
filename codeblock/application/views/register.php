<!DOCTYPE html>
<html>
<head> 
     <title>Display Records</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('js/bootstrap.js');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/main.css');?>">
</head>
<body> 
<form name="userinput" method="post">

    <div class="container">
       <div class="row">
          <div class="col-mid-3"></div>
          <div class="col-md-6">
             <h1 class="text-center">Register</h1> 
            <label class="label col-md-3 control-label">Full Name</label> 
            <div class="col-md-9">
             <input type="text" class="from-control" name="name" placeholder="name"> 
               <?php if(form_error('name')){
                   echo "<span style='color:red'>".form_error('name')."</span>";
                    }?>
                </div>
                <label class="label col-md-3 control-label">Email</label> 
                <div class="col-md-9">
                 <input type="text" class="from-control" name="email" placeholder="Email"> 
                 <?php if(form_error('email')){
                   echo "<span style='color:red'>".form_error('email')."</span>";
                    }?>
                </div>
                 <label class="label col-md-3 control-label">Mobile Number</label> 
                <div class="col-md-9">
                 <input type="text" class="from-control" name="mobile" placeholder="Tele no">
                 <?php if(form_error('mobile')){
                   echo "<span style='color:red'>".form_error('mobile')."</span>";
                    }?>
                </div>
                <center> <input type="submit" name="save" class="btn btn-primary btn-save" value="save"> </center>

            </div>
            <div class="col-md-3"></div>
        </div>
        
    </div>
</form>
    
    </body>
    </html>