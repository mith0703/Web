
if ( $('#userLoginName').text().trim() == "Chưa đăng nhập") {
    onShowLogin();   
    } else {
    onHideLogin() ;
}
  
function createClick2501(){
    let display = $("#hidden2501").css('display');
    if (display == "none"){
        $("#hidden2501").css({'display':'block'});
    } else {
        $("#hidden2501").css({'display':'none'});
    }
}

function jkluio(){
    console.log("helloworld");
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


const isTextAreaValid = (about) => {
    // console.log(`dang chay textAreaValid`);
    if (about.length <= 10000) {
      document.querySelector("#about").value = about;
      ab = 1;
    } else {
      alert("Vui long nhap tu 2 - 30 ky tu");
      ab = 0;
    }
  };

const isPasswordValid = (password) => {
console.log(`dang chay PasswordValid`);
if (password.length <= 30 && password.length >= 2) {
    document.querySelector("#password").value = password;
    pw = 1;
} else {
    alert("Vui long nhap tu 2 - 30 ky tu");
    pw = 0;
}
};

const isText1stValid = (firstName) => {
    console.log(`dang chay textValid`);
    if (firstName.length <= 30 && firstName.length >= 2) {
      document.querySelector("#firstName").value = firstName;
      fn = 1;
    } else {
      alert("Vui long nhap tu 2 - 30 ky tu");
      fn = 0;
    }
  };

  const isText2ndValid = (lastName) => {
    console.log(`dang chay text2Valid`);
    if (lastName.length <= 30 && lastName.length >= 2) {
      document.querySelector("#lastName").value = lastName;
      ln = 1; 
    } else {
      alert("Vui long nhap tu 2 - 30 ky tu");
      ln = 0;
    }
  };