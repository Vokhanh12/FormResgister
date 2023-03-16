function validateForm() {
  var username = document.forms[0]["username"].value;
  var password = document.forms[0]["password"].value;
  var repassword = document.forms[0]["repassword"].value;
  var Tinhthanh=document.forms[0]["Tinhthanh"].value;
  var Nameuser=document.forms[0]["nameUser"].value;
  var Address =document.forms[0]["Address"].value;
  var SDT=document.forms[0]["sdt"].value;
  var Email=document.forms[0]["email"].value;
  var birthOfday=document.forms[0]["birthOfday"].value;
  
  if (username == "" || password == "" || repassword == "" ||Tinhthanh==""||nameUser==""||Address==""||SDT==""||Email==""||birthOfday=="") {
    alert("Không để trống");
    return false;
  }
  
  if (password != repassword) {
    alert("Passworld không trùng nhau");
    return false;
  }
  
  return true;
}