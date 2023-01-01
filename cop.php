<html>
    <head>
    <h2>
        Manage Data
    </h2>
    
        <style type = "text/css">
        h2{
            font-family: Arial, 'Times New Roman';
            font-size: 40px;
            text-align: center;
            color: red;

        }
        h3{
            text-align: right;
        color:grey;
        font-size: 20px;
            
        }
        
        table{
            
            border-collapse: collapse;
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
    <section>
            <h2>Officers and their prisoners</h2>
            
        
        <table>
            <tr>
            
            
             <th>This officer is responsible for: </th>
             <th>This prisoner:</th>
             <th></th>
             <th>Building:</th>
             <th>Cell:</th>


             
             
             
             
            
            
            </tr>
            <?php
            $conn= mysqli_connect("localhost","root","","test");
            $sql="SELECT * FROM cell";
            $result=$conn->query($sql);

            $hello = $_POST['fname1'];

            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo"<tr><td>".   $row["signo"]. "</td><td>".   $row["name"] ."</td><td>".$row["last"]. "</td><td>".$row["buildingo"]. "</td><td>".$row["cello"]. "</td><td>";
                }

                
            }else{
                echo "no data";
            }
            
            ?>
        </table>
        <h3> 
        

        </h3> 
        <h5>
      
    <a id="home" href="http://localhost/PrisonManagementSystem/index2.html"><img src="images/home.jpg" width="50px"></br>Home</a>
    </h5>
    </body>
</html>