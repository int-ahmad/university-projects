<html>
    <head>
    
        <style type = "text/css">
        h2{
            font-family: Arial, 'Times New Roman';
            font-size: 40px;
            text-align: center;
            color: black;

        }
        h3{
            text-align: right;
        color:grey;
        font-size: 20px;
            
        }
        
        table{
            
            border-collapse: separate;
            color: black;
        
        
        text-decoration: none;
        width:100%;
        text-align:left;
        
        font-size: 25px;

            
           


        }

        th{
            background-color: black;
            color: white;
        }
        h5{
        text-align: right;
        color:grey;
        font-size: 20px;

    }
   
        
        </style>    
    </head>
    <body>
    <body background="images/alcatraz20.jpeg" link="#000" alink="#017bf5" vlink="#000">
    <section>
            <h2>Prisoners' Database</h2>
            
        
        <table>
            <tr>
            
             <th>First Name:</th>
             <th>Last Name: </th>
             <th>Address: </th>

             <th>Conviction Date: </th>
             <th>Signed by: </th>
             <th>Building: </th>
             <th>Cell: </th>
             
             
             
             
            
            
            </tr>
            <?php
            $conn= mysqli_connect("localhost","root","","PMS");
            $sql="SELECT * FROM PMST";
            $result=$conn->query($sql);

            $hello = $_POST['fname1'];

            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo"<tr><td>". $row["fname"]. "</td><td>". $row["lname"]. "</td><td>". $row["address"]. "</td><td>". $row["cdate"]. "</td><td>". $row["signed"]. "</td><td>". $row["building"]. "</td><td>".  $row["cell"]. "</td><td>";
                }

                
            }else{
                echo "no data";
            }
            
            ?>
        </table>
        <h3> 
        <a id="iconbox" href="http://localhost/PrisonManagementSystem/manage.php"><img src="images/add.png" width="50px"></br>Add data</a>

        </h3> 
        <h5>
      
    <a id="home" href="http://localhost/PrisonManagementSystem/index2.html"><img src="images/home.jpg" width="50px"></br>Home</a>
    </h5>
    </body>
</html>