<!DOCTYPE html>
<html>
<head>
<title>Display Data</title>

    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('js/bootstrap.js');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/main.css');?>">
</head>

<body>
    <div class="container"> 
        <br><h2 class="Utitle">Customer Details</h2><br>
        <form name="userinput" method="post">
        <table class="table table-dark table-hover table-bordered table-striped">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Delete</th>
        <th>Update</th>
        
        
    </tr>
    <?php
        foreach($data as $row){
            echo "<tr>";
            echo "<td>".$row->id."</td>";
            echo "<td>".$row->name."</td>";
            echo "<td>".$row->email."</td>";
            echo "<td>".$row->mobile."</td>";
            
            echo "<td><a href='deletedata?id=".$row->id."'>Delete</a></td>";
            echo "<td><a href='updatedata?id=".$row->id."'>Update</a></td>";
            echo "</tr>";
        }
    ?>
    <tr>
     <td colspan="8" style="text-align:center;"><input type="submit" name="report" value="Genarate Report" class="btn btn-primary btnn"></td>
     </tr>
    
     <tr>
     <td colspan="8" style="text-align:center;"><input type="submit" name="back" value="Back" class="btn  btn-primary btn-save"></td>
     
     </tr>

</table>
    </form>
    </div>
</body>
</html>
        