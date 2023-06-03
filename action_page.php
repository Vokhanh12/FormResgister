<?php
//browser-sync start --proxy 127.0.0.244 --files "*.php"    
    $Check=true;
    $str=array("username","password","repassword","Tinhthanh","nameUser","Address","sdt","email","birthOfday");
    $str1=array("Tên truy cập","Mật khẩu","Nhập lại mật khẩu","Tỉnh thành","Họ và tên","Địa chỉ","SDTEmail","Ngày sinh");

    $username="root";
    $password = ""; 
    $server   = "localhost";   // Khai báo server
    $dbname   = "tbl_register";      // Khai báo database

  
    $connect = new mysqli($server,$username,$password,$dbname);

    

   


        //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát. A                                               `````
        if ($connect->connect_error) {
            die("Không kết nối :" . $conn->connect_error);
            exit();
        }
        echo "Khi kết nối thành công den CSDL những dòng code bên dưới sẽ được thực hiện tiếp.";
    

    

    foreach($str as $item){
        if(!isset($_POST[$item])){
            $Check=false;
            die;
        }
    }
    
    $Username = $_POST["username"];
    $Password = $_POST["password"];
    $Repassword = $_POST["repassword"];
    $Tinhthanh = $_POST["Tinhthanh"];
    $NameUser = $_POST["nameUser"];
    $Address = $_POST["Address"];
    $Sdt = $_POST["sdt"];
    $Email = $_POST["email"];
    $BirthOfday = $_POST["birthOfday"];


    if($Check){
    
        if(count($str)==count($str1)){
            for($i=0;$i<count($str);$i++){
                echo $str1[$i].":".$_POST[$str1[$i].""]."<br>";
            }
        }
    }


    //insert in my table of Sql
    insertSQL($connect);

    selectSQL($connect);



    function selectSQL($connect){

        
        $Username = $_POST["username"];
        $Password = $_POST["password"];
        $Repassword = $_POST["repassword"];
        $Tinhthanh = $_POST["Tinhthanh"];
        $NameUser = $_POST["nameUser"];
        $Address = $_POST["Address"];
        $Sdt = $_POST["sdt"];
        $Email = $_POST["email"];
        $BirthOfday = $_POST["birthOfday"];


        $sql= "SELECT `Username`, `Password`, `Repassword`, `Tinhthanh`, `Nameuser`, `Address`, `Sdt`, `Email`, `birthOfday` FROM `tbl_register`";

        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<br>Select thanh cong";
            while($row = $result->fetch_assoc()) {
                echo "<br> username: ". $row["Username"]. "<br> - password: ". $row["Password"]. "<br>- repassword" . $row["Repassword"] ."<br>-Tinhthanh: ".
                $row["Tinhthanh"]. "<br> - nameUser: ". $row["Nameuser"].
                $row["Address"]. "<br> - password: ". $row["Sdt"]. "<br>- repassword" . $row["Email"] . "<br>- birthOfday".$row["birthOfday"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        
        mysqli_close($connect);

    }

    function insertSQL($connect){

        $Username = $_POST["username"];
        $Password = $_POST["password"];
        $Repassword = $_POST["repassword"];
        $Tinhthanh = $_POST["Tinhthanh"];
        $NameUser = $_POST["nameUser"];
        $Address = $_POST["Address"];
        $Sdt = $_POST["sdt"];
        $Email = $_POST["email"];
        $BirthOfday = $_POST["birthOfday"];

        $i=0;

        $sql ="INSERT INTO `tbl_register`(`Username`, `Password`, `Repassword`, `Tinhthanh`, `Nameuser`, `Address`, `Sdt`, `Email`, `birthOfday`)
                                         VALUES ('$Username',' $Password','$Repassword','$Tinhthanh','$NameUser','$Address','$Sdt','$Email','$BirthOfday')";



        if (mysqli_query($connect,$sql)) {
            echo "<br>insert thanh cong";
           
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      }

      

    }
   


?>