<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
         
            function Redirect() {
               window.location="http://www.tutorialspoint.com";
			}
      </script>
  
</head>

<body>
<?php
   include 'container.php';
?>	
 
   <body>logi
      <p>Click the following button, you will be redirected to home page.</p>
      
      <form>
         <input type="button" value="Redirect Me" onclick="Redirect();" />
      </form>
      
<div class="container-fluid">
	<div class="container" style="text-align:center";>
	
<!--extra code for uploading image starts!-->	
	<?php
  if (isset($_POST['submit'])) {
  	
  	$image_name=$_FILES['image']['name'];
  	
    
    
    			if(!move_uploaded_file($_FILES['image']['tmp_name'], "img/".$image_name));
    		
        $query="Insert into demo(`image`) values('$image_name')";
        if (mysql_query($query)) 
        {
         echo "<script>alert('Post Has Been Published')</script>"; 
       	}	
  }

?>
	 <form action="" method="post" enctype="multipart/form-data">
     	  <table border="10" width="600" align="center">
     	  	   
     	  	   <tr>
     	  	   	   <td align="right">Post Image:</td>
     	  	   	   <td><input type="file" name="image"></td>
     	  	   </tr>
     	  	   
     	  	   <tr>
     	  	   	   <td align="center" colspan="5" ><input type="submit" name="submit" value="Publish now"></td>
     	  	   </tr>
		 </table>

     </form>
     <!--extra code for uploading image starts!-->	
     <!--extra code for fetching begins!-->
     <?php
     $sql=mysql_query("select * from demo");
     while($row=mysql_fetch_array($sql)){
     echo $row['landArea'].'<br>';
		
     }
		?>
		<?php
		$sql=mysql_query("delete from demo ") ;
		?>
		
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3"><button type="button" style="width:100%;  text-overflow: ellipsis;" class="btn btn-default">RENT OR SALE YOUR PROPERTY FOR FREE</button></div>
		</div><br><br>
	

		<div class="row">
			<div class="col-sm-4 col-sm-offset-4"><button type="button" class="btn btn-default">AVAILABLE FOR</button></div>
	    </div><br><br>
		
	
	    <div class="row">
			<div class="col-sm-2 col-sm-offset-1"><button type="button" class="btn btn-default btn-block">RENT</button></div>
			<div class="col-sm-2 col-sm-offset-2"><button type="button" class="btn btn-block btn-default">SELL</button></div>
			<div class="col-sm-2 col-sm-offset-2"><button type="button" class="btn btn-block btn-default">BOTH</button></div>
		</div><br><br>
        <div class="row">
			<b><div class="col-sm-2 col-sm-offset-5">PROPERTY TYPE</div></b>
		</div><br><br> 
        <div class="row">
			<div class="col-sm-2 col-sm-offset-1"><button type="button" class="btn btn-block btn-default btn-block">HOUSE</button></div>
			<div class="col-sm-2"><button type="button" class="btn btn-block btn-default">FLAT</button></div>
			<div class="col-sm-2"><button type="button" class="btn btn-block btn-default">ROOM</button></div>
			<div class="col-sm-2"><button type="button" class="btn btn-block btn-default">SHOP</button></div>
			<div class="col-sm-2"><button type="button" class="btn btn-block btn-default">LAND</button></div>  
		</div><br><br>

      <?php
  if(isset($_POST['sub']))
  { 
	  //$var=$_POST['landArea'];

    $sql=mysql_query("insert into demo(`landArea`,`facing`,`plotLength`,`rentAmount`,`securityAmount`,`rate`,`plotWidth`,`maintainenceCost`) values ('".$_REQUEST['landArea']."','".$_REQUEST['facing']."')");
	
	  
   
   if($sql==1)
   {
	   echo "<script>alert('form submited..')</script>";
   }
  else
  {
	  echo "<script>alert('form  not submited..')</script>";
  }
  }
		
?>
                 
   <form method="post" action="">
       <div  class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<label>Land Area</label><br>
				<select name="landArea" style="width:100%;height:40px;border-radius:6px;">
					<option></option>
					<option>500 sqr m</option>
					<option>600 sqr m</option>
					<option>700 sqr m</option>
					<option>800 sqr m</option>
				</select>
		    </div>
            <div class="col-sm-4 col-sm-offset-2">
				<label >Facing</label><br>
				<select name="facing" style="width:100%;height:40px;border-radius:6px;" >
				
					<option>NORTH</option>
					<option>EAST</option>
					<option>WEST</option>
					<option>SOUTH</option>
				</select>
           </div>
	</div><br><br>
	<div class="row">
		<div class="col-sm-2 col-sm-offset-1">
		  <label>Plot Length</label><br>
		  <select name="plotLength" style="width:100%;height:40px;border-radius:6px;"><br>

			<option>7000 m</option>
			<option>8000 m</option>
			<option>9000 m</option>
			<option>10000 m</option>
		 </select>
	   </div>
       <div class="col-sm-2">
         <label>Plot width</label><br>
		 <select name="plotWidth" style="width:100%;height:40px;border-radius:6px;" >
			<option>7000 m</option>
			<option>8000 m</option>
			<option>9000 m</option>
			<option>10000 m</option>
		 </select>

		</div>
      <div class="col-sm-4 col-sm-offset-2">
        <label>Front Road Width</label><br>    
		<input name="frontRoadWidth" style="width:100%;height:40px;border-radius:6px;" placeholder="feet" type="text">    
		</div>
    </div><br>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-1">
			<label>Rent Amount</label><br>  
			<input name="rentAmount" style="width:100%;height:40px;border-radius:6px;" placeholder="₹" type="text" >
		</div>
		<div class="col-sm-4 col-sm-offset-2">
			<label>Security Amount</label><br>
			<input name="securityAmount" style="width:100%;height:40px;border-radius:6px;" placeholder="₹" type="text">
		</div>
	</div><br>
    <div class="row">
		<div class="col-sm-4 col-sm-offset-1">
          <label>Rate</label><br>
		  <select name="rate" style="width:100%;height:40px;border-radius:6px;">
			<option>Negotiable</option>
			<option>Non-Negotiable</option>
		  </select>
        </div>
		<div class="col-sm-4 col-sm-offset-2">
			<label>Maintenance Cost</label><br>
			<select name="maintainenceCost" style="width:100%;height:40px;border-radius:6px;" >
			  <option>3000</option>
			  <option>4000</option>
			  <option>5000</option>
			  <option>6000</option>
			</select>
		</div>
	</div><br>
    <div class="row">
		<div class="col-sm-2 col-sm-offset-5">
			<button type="submit" value="submit" name="sub" class="btn btn-default">Login and proceed</button>
		</div>
   </div><br>
   </form>
    
