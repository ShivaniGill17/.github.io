<html>
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    
    <STYLE>
        
        p
        {
           margin-top: 20%; 
            text-align: center;
            font-size: 30px;
            font-weight: 100;
        }
    </STYLE>
</html>

<?php 

$conn=new mysqli('localhost','root','','login_web');



$name=$_POST["uname"];
$email=$_POST["rpass"];
$phno=$_POST["phno"];
$gender=$_POST["gender"];
$mart=$_POST["status"];
$loc=$_POST["loc"];
$city=$_POST["city"];
$state=$_POST["state"];
$cntry=$_POST["cntry"];
$dis=$_POST["dis"];
$dob=$_POST["dob"];

$sql="INSERT INTO sponsor_individual(name,email,phno,dob,gender,m_status,area,city,state,district,country) VALUES('$name','$email','$phno','$dob','$gender','$mart','$loc','$city','$state','$dis','$cntry')";


if ($conn->query($sql)===true)
{ ?>

 <script>
swal("FORM SUBMITTED", "thank you for the contribution", "success",{ buttons :
    {
        c:{
    text: "close",
    value: "catch",
    },
    },
     });
    
     
     
     //for blocking back button.
    history.pushState(null, null, location.href);
     window.onpopstate=function()
     {
         history.go(1);
     }
    
   
</script>
    <p>YOU CAN NOW CLOSE THE WINDOW</p>
<?php 
}
else
{ ?>
    <script type="text/javascript">
swal("FORM NOT SUBMITTED", "","warning",{ buttons :
    {
        c:{
    text: "close",
    value: "catch",
    },
    },
     });
    
    
        //for blocking back button.
    history.pushState(null, null, location.href);
     window.onpopstate=function()
     {
         history.go(1);
     }
    
   
</script>


<?php }



?>