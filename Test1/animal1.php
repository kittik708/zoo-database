<html>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "Test1";
        $dbconn = mysqli_connect($host,$user,$pass,$db) 
		or 
		die("Could not connect to database!");
        mysqli_select_db($dbconn,'Animals');
        $query="SELECT * FROM Animals";
        $result=mysqli_query($dbconn,$query);
        $rownum=mysqli_num_rows($result);
    ?>
        <!DOCTYE HTML>
        <html>

        <head>
            <meta charset="utf-8">
            <title> Framework Test page</title>
            <link href="asset/css/main.css" rel="stylesheet" type="text/css">
        </head>
		<table>
		<br>
		<tr bgcolor="LightBlue" color="Black">
		                <th><a href="home1.php">Home</a></th>
						<th><a href="animal1.php">Animal</a></th>
                        <th><a href="cage1.php">Cage </a></th>
                        <th><a href="animalclass1.php">Animal Class</a></th>
                        <th><a href="staff1.php">Staff</a></th>
                        <th><a href="shift1.php">Shift</a></th>
                        <th><a href="station1.php">Station</a></th>
                         <th><a href="animalsearch1.php">Search For Animals</a></th>

         </tr>	   
	   </table>     
       <style>
		body{
			box-shadow:inset 0 0 0 100vw rgba(0,0,0,0.5);
			background-image:url("back10.jpg");
			background-blend-mode:screen,difference,lighten;
			background-repeat:no-repeat;
			background-size:100% 100%;
		    }
		</style>		
            <h1 style="color:White" align="center">Animal Tables</h1>
            <div class="row">
                <div class="col-8" style="text-align: center;">
                    <table  border="1" style="width: 100%; margin-top: 10px;">
					<style>
			table{
				border:1px;
				width:100%;
				margin-top:10px;
				background-color:white;
				text-align:center;
			     }
			tr,td,th{
				border:1px solid black;
			     }
				 a{
				text-decoration:none;
				font-size:20px;
				color:Black;
			}
			</style>	
			          <tr bgcolor="Lightgreen">
                            <th>Animal_ID</th>
                            <th>Animal_Nick</th>
                            <th>Gender</th>
                            <th>Cage no</th>
                            <th>Animal Classification</th>
							<th>Animal age</th>
							<th>Animal weight</th>

                        </tr>
                        <style>
                            td {
                                text-align: center;
                            }
                        </style>
                        <?php
                while($row=mysqli_fetch_assoc($result)){
            ?>
                            <tr>
                                <td><?php echo $row['Animal_ID']?></td>
                                <td><?php echo $row['Animal_Nick']?></td>
                                <td><?php echo $row['Gender']?></td>
                                <td><?php echo $row['Cage_No']?></td>
                                <td><?php echo $row['Animal_ClassID']?></td>
								<td><?php echo $row['Animal_age']?></td>
								<td><?php echo $row['Animal_weight']?></td>
								
                               
                            </tr>
                            <?php
                }
            ?>
                    </table>
                </div>
            </div>
        </body>
        </html>