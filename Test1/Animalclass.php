<html>

<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "Test1";
        $dbconn = mysqli_connect($host,$user,$pass,$db) or die("Could not connect to database!");   

        mysqli_select_db($dbconn,'Animal_Class');

        $query="SELECT * FROM Animal_Class";
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

        <body style="; background-color: #F6F9FA;">
		 <style>
		body{
			box-shadow:inset 0 0 0 100vw rgba(0,0,0,0.5);
			background-image:url("back10.jpg");
			background-blend-mode:screen,difference,lighten;
			background-repeat:no-repeat;
			background-size:100% 100%;
		    }
		</style>	
		 <table>
		<br>
		<tr bgcolor="LightBlue" color="Black">
		                <th><a href="home.php">Home</a></th>
						<th><a href="animal.php">Animal</a></th>
                        <th><a href="cage.php">Cage</a></th>
                        <th><a href="animalclass.php">Animal Class</a></th>
                        <th><a href="staff.php">Staff</a></th>
                        <th><a href="shift.php">Shift</a></th>
                        <th><a href="station.php">Station</a></th>
                         <th><a href="animalsearch.php">Search For Animals</a></th>
						 <th><a href="Animalclassadd.php"><font color=Green>Add</font></a></h3>
         </tr>	   
	   </table>     
            <h1 style="text-align: center"><font color="White">Animal Classification Tables<font></h1>
                <div class="col-8" style="text-align: center;">
                    <table border="1" style="width: 100%; margin-top: 10px;">
                        <tr bgcolor="Lightgreen">
                            <th>Animal Class ID</th>
                            <th>Family Name</th>
                            <th>Species Name</th>
							<th>Animal color</th>
							<th>Scientific name</th>
                            <th>Options</th>
                        </tr>
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
                        <?php
                while($row=mysqli_fetch_assoc($result)){    
            ?>
                            <tr>
                                <td><?php echo $row['Animal_ClassID']?></td>
                                <td><?php echo $row['Family_Name']?></td>
                                <td><?php echo $row['Species_Name']?></td>
							    <td><?php echo $row['Animal_color']?></td>
							    <td><?php echo $row['Sfc_name']?></td>
								<td><p><a href="Animalclassedit.php?animalclassid=<?php echo $row['Animal_ClassID']?>"><font color="Red">Update</font></a>
                                 <a href="Animalclassdelete.php?animalclassid=<?php echo $row['Animal_ClassID']?>"><font color="Brown">Delete</font></a></p></td>
                            </tr>
                            <?php 
                }    
            ?>
             </table>
        </body>
        </html>