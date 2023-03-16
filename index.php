<html>
    <head>
        <link rel="stylesheet" href="Custom.css">
    </head>

    <body>
    

        <div class="Container">
            
            <div class="Top">
                <h3>ĐĂNG KÝ THÀNH VIÊN</h3>
            </div>
            <div class="Bottom">
                <div class="ContentForm">
                    <h5>Nhập thông tin đăng ký</h5>
                </div>

                <div class="RegisterForm">
                    <form onsubmit="return validateForm()" action="action_page.php" method="POST">
                          <script src="custom.js"></script>
                        <table>
                            <tr>
                                <td><label for="">Tên truy cập</label></td>
                                <td><input type="text" id="username" name="username"></input></td>
                            </tr>

                            <tr>
                                <td><label for="">Mật khẩu</label></td>
                                <td><input type="text" id="password" name="password"></input></td>
                            </tr>

                            <tr>
                                <td><label for="">Nhập lại mật khẩu</label></td>
                                <td><input type="text" id="repassword" name="repassword"></input></td>
                            </tr>

                            <tr>
                                <td><label for="" >Tỉnh thành</label></td>
                                <td>
                                    <select name="Tinhthanh" id="Tinhthanh">
                                        <option value="Tiền Giang">Tiền Giang</option>
                                        <option value="TPHCM">TPHCM</option>
                                        <option value="Cà Mau">Cà Mau</option>
                                        <option value="Kiêng Giang">Kiên Giang</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td><label for="" >Họ và tên</label></td>
                                <td><input type="text" id="nameUser" name="nameUser"></input></td>
                            </tr>

                            <tr>
                                <td><label for="">Địa chỉ</label></td>
                                <td><input type="text" id="Address" name="Address"></input></td>
                            </tr>

                            <tr>
                                <td><label for="">Số điện thoại</label></td>
                                <td><input type="text" id="sdt" name="sdt"></input></td>
                            </tr>

                            <tr>
                                <td><label for="">Email</label></td>
                                <td><input type="text" id="email" name="email"></input></td>
                            </tr>

                            <tr>
                                <td><label for="">Ngày sinh</label></td>
                                <td><input type="text" id="birthOfday" name="birthOfday"></input></td>
                            </tr>

                            <tr>
                                <td><input type="submit" value="Đăng ký"></input></td>
                                <td><label for="">là bắt buộc nhập</label></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>