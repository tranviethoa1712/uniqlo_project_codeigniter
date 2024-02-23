//validate follow input email
function validateInputEmail() {
    document.getElementById("tooltipText-email").innerHTML = "";
    let email = document.getElementById("email-login").value;
    console.log(email);
    let checkValidateEmailInput = validateEmail(email);
    if (checkValidateEmailInput.status === false) {
        document.getElementById("tooltip-email").style.display = "block";
        document.getElementById("tooltipText-email").innerHTML =
        checkValidateEmailInput.message;
    } else {
        document.getElementById("tooltipText-email").innerHTML = "Vui lòng nhập một địa chỉ email hợp lệ";
        document.getElementsByClassName("tooltip-email").style.display = "none";
    }
}

function validateInputPwd() {
    document.getElementById("tooltipText-pwd").innerHTML = "";
    let pwd = document.getElementById("pwd-login").value;

    let checkValidatePwdInput = validatePwd(pwd);
    if (checkValidatePwdInput.status === false) {
        document.getElementById("tooltip-pwd").style.display = "block";
        document.getElementById("tooltipText-pwd").innerHTML =
        checkValidatePwdInput.message;
    } else {
        document.getElementById("tooltipText-pwd").innerHTML = "Vui lòng nhập mật khẩu hợp lệ";
        document.getElementById("tooltip-pwd").style.display = "none";
    }
}
      // Validate Email
      function validateEmail(email = "") {
        const specialChar = [
          "/",
          "[",
          "`",
          "!",
          "#",
          "$",
          "%",
          "^",
          "&",
          "*",
          "(",
          ")",
          "_",
          "+",
          "-",
          "=",
          "[",
          "]",
          "{",
          "}",
          ";",
          '"',
          '"',
          "|",
          "<",
          ">",
          "?",
          "~",
          "]",
          "@",
        ];
  
        let response = {
          status: false,
          message: "",
        };
        //validate Email

        //check email rỗng
        if(email == "") {
          response.status = false;
          response.message = "Vui lòng nhập một địa chỉ email.";
          return response; //dung thuc thi
        }

        let length = 0;
        //check @ xuat hien 1 lan
        for (let j = 0; j < email.length; j++) {
          if (email[j] == "@") {
            length++;
          }
          if (length > 1) {
            response.status = false;
            response.message = "Chỉ được chứa 1 ký tự @";
            return response; //dung thuc thi
          }
        }
  
        textBeforeEmailArr = email.split("@");
        if (
          typeof textBeforeEmailArr[0] === "string" &&
          textBeforeEmailArr[0] == ""
        ) {
          response.status = false;
          response.message = "Email không hợp lệ";
          return response; //dung thuc thi
        }
  
        let arrayEmailAfter = textBeforeEmailArr[1];
        let lengthCham = 0;
        for (let i = 0; i < arrayEmailAfter.length; i++) {
          if (arrayEmailAfter[i] == ".") {
            lengthCham++;
          }
  
          if (arrayEmailAfter[i] == "." && arrayEmailAfter[i + 1] == ".") {
            response.status = false;
            response.message = "Không được chứa dấu '.' liên tiếp!";
            return response; //dung thuc thi
          }
  
          for (let j = 0; j < specialChar.length; j++) {
            if (arrayEmailAfter[i] == specialChar[j]) {
              response.status = false;
              response.message = "Email không hợp lệ (lỗi ký tự đặc biệt)";
              return response; //dung thuc thi
            }
          }
        }
  
        if (lengthCham == 0) {
          response.status = false;
          response.message = "Ít nhất phải có 1 dấu '.'";
          return response; //dung thuc thi
        }
  
        if (arrayEmailAfter[arrayEmailAfter.length - 1] == ".") {
          response.status = false;
          response.message = "Email không hợp lệ!";
          return response; //dung thuc thi
        }
  
        return true;
      }

      function validatePwd(value) {
        let response = {
          status: false,
          message: "",
        };

        if(value == "") {
          response.status = false;
          response.message = "Vui lòng nhập mật khẩu.";
          return response;
        }
  
        //check limit length
        if (value.length < 8) {
          response.status = false;
          response.message = "Bạn phải nhập ít nhất là 8 ký tự";
          return response;
        }
        
        let lengthCountNum = 0;
        for(let i = 0; i < value.length; i++) {
          if(isNaN(value[i]) === false){
            lengthCountNum++;
          }
        }

        if(lengthCountNum == 0) {
          response.status = false;
          response.message = "Mật khẩu phải bao gồm cả số và chữ";
          return response;
        }

        //check special chars chỉ chứa -_@
        let lengthCountChars = 0;
        for(let i = 0; i < value.length; i++) {
          if(value[i] == "!" || value[i] == "#" || value[i] == "$" || value[i] == "%" || value[i] == "^" || value[i] == "&" || value[i] == "*" || value[i] == "(" || value[i] == ")" || value[i] == "+" || value[i] == "=" ||  value[i] == "/" || value[i] == "`" || value[i] == `"` || value[i] == `'` || value[i] == "?" || value[i] == ":" || value[i] == ";" || value[i] == "," || value[i] == "." || value[i] == "~"){
            lengthCountChars++;
          }
        }

        if(lengthCountChars > 0) {
          response.status = false;
          response.message = "Chỉ có thể sử dụng các ký tự đặc việt này - _ @";
          return response;
        }


        return true;
    }
  
    /*end validate*/

    /**hide, show password */

    const input = document.getElementById("pwd-login");

    const btnShow = document.getElementById("showpass");

    btnShow.addEventListener("click", function () {
      const inputType = input.getAttribute("type");
      if(inputType == "password") {
        input.setAttribute("type", "text");
      } else {
        input.setAttribute("type", "password");
      }

    });
