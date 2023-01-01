<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    
    $query = "SELECT * FROM `PMST` WHERE CONCAT(`signed`, `fname`, `lname`, `building`,`cell`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `cell`";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "PMS");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
    <h2>
        Search
    </h2>
    <h6>
        Find officers, prisoners and buildings.
    </h6>
        <title>Database Search</title>
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
    h6{
        text-align: center;
        font-size: 15px;
    }
   
        
        </style> 
    </head>
    <body>
        
        
        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Enter data"><br><br>
            <input type="submit" name="search" value="View All"><br><br>
            
            <table>
                <tr>
                    <th>This officer is responsible for</th>
                    <th>This prisoner</th>
                    <th>Last Name</th>
                    <th>Building</th>
                    <th>Cell</th>
                    

                </tr>

      
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['signed'];?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['lname'];?></td>
                    <td><?php echo $row['building'];?></td>
                    <td><?php echo $row['cell'];?></td>
                     
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>