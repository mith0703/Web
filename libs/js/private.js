
if ( $('#userLoginName').text().trim() == "Chưa đăng nhập") {
    onShowLogin();   
    } else {
    onHideLogin() ;
}

   

let loginPart = $("#loginPart");

function onShowLogin(){
    $("#dang_nhap").show();
    $("#dang_ky").show();
    $("#dang_xuat").hide();
    $("#userLoginName").hide();
    $("#loginPart").show();
}

function onHideLogin(){
    $("#dang_nhap").hide();
    $("#dang_ky").hide();
    $("#dang_xuat").show();
    $("#userLoginName").show();
}
    
