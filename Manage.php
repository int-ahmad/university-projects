<!DOCTYPE html>
<html lang="en"> 
<head>
    <h2>
        Manage Data
    </h2>
    <style type = "text/css">
    h1{
        text-align: center;
        width: 100%;
    }
    h2{
        font-family: Arial;
            font-size: 40px;
            text-align: center;
            color: Black;
    }
    h4{
        text-align: center;
        color:white;
        font-size: 15px;
    }
    h5{
        text-align: center;
        color:black;
        font-size: 15px;

    }
    h7{
        font-size: 15px;
        
        text-align: center;

    }
   
    </style>
    <meta charset="UTF-8">
    <title> Manage data </title> 
</head> 
<body background="images/alcatraz.jpeg" link="#000" alink="#017bf5" vlink="#000">

    <form action="data.php" method ="post">
    
    <h1><input type="text" name="fname1" placeholder="First Name"><br>
    
    <input type="text" name="lname1" placeholder="Last Name" ><br>
    <input type="text" name="address1" placeholder="Address"><br>
   
    <input type="date" name="cdate1" placeholder="Date of Conviction"><br>
    <input type="text" name="sign1" placeholder="Signed by Officer:"><br>
    <input type="text" name="building1" placeholder="Building"><br>
    <input type="number" name="cell1" placeholder="Cell"><br>
    
    

    
    
    <input type="submit" value="Add"> <input type="reset" value="Reset">
    
    
    
    </h1>
    <h4>
        
    <a id="view" href="http://localhost/PrisonManagementSystem/fetch.php"><img src="images/view.jpg" width="50px"></br></a>
    </h4>

    <h5>
      
    <a id="home" href="http://localhost/PrisonManagementSystem/index2.html"><img src="images/home.jpg" width="50px"></br></a>
    </h5>
    </form>     

</head>
</html>
