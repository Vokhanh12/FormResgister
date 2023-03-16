<?php
    $Check=true;
    $str=array('username','password','repassword','Tinhthanh','nameUser','Address','sdt','email','birthOfday');
    $str1=array('Tên truy cập','Mật khẩu','Nhập lại mật khẩu','Tỉnh thành','Họ và tên','Địa chỉ','SDT','Email','Ngày sinh');

    

    foreach($str as $item){
        if(!isset($_POST[$item])){
            $Check=false;
            die;
        }
    }
    
    if($Check){
    
        if(count($str)==count($str1)){
            for($i=0;$i<count($str);$i++){
                echo $str1[$i].':'.$str[$i].'<br>';
            }
        }
    }

    


   


?>