<?php
$error = [];

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])) {

  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $dob = $_POST['dob'];
  $street = $_POST['gender'];
  

   //validate email
  if(empty(($email))) {
    $error["email"]["require"] = "Bạn không được để trống!";
  } else {
    $specialChars = [
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

    $lengthCircleA = 0;
    for($i = 0; $i < strlen($email); $i++) {
      if($email[$i] == "@") {
        $lengthCircleA++;
      }
      if($lengthCircleA > 1) {
        $error["email"]["circleA"] = "Chỉ được chứa 1 ký tự @";
        header("location: /views/endUser/customers/customer-register.php");
        exit;
      }
    }

    $textBothSideCircleA = explode("@", $email);
    if(gettype($textBothSideCircleA[0]) === "string" && empty($textBothSideCircleA[0])) {
      $error["email"]["invalid"] = "Email không hợp lệ";
      header("location: index.php?controller=CustomerController&action=memberDetail");           
      exit;
    }
    // $lengthBothSideCircleA = strlen()

    $lengthDots = 0;
    $textAfterCircleA = $textBothSideCircleA[1];

    for($i = 0; $i < strlen($textAfterCircleA); $i++) {
      if($textAfterCircleA[$i] == ".") {
        $lengthDots++;
      }

      if($textAfterCircleA[$i] == "." && $textAfterCircleA[$i+1] == ".") {
        $error["email"]["continuousDot"] = "Không được chứa dấu '.' liên tiếp!";
        header("location: index.php?controller=CustomerController&action=register");           
        exit;
      }

      for($j = 0; $j < count($specialChars); $j++) {
        if($textAfterCircleA[$i] == $specialChars[$j]) {
          $error["email"]["chairsfail"] = "Email không hợp lệ (lỗi ký tự đặc biệt)";
          header("location: index.php?controller=CustomerController&action=register");           
          exit;
        }
      }
    }

    if ($lengthDots == 0) {
      $error["email"]["emptyDot"] = "Ít nhất phải có 1 dấu '.'";
      header("location: index.php?controller=CustomerController&action=register");           
      exit;
    }

    if($textBothSideCircleA[1][strlen($textBothSideCircleA[1]) - 1] == ".") {
      $error["email"]["endDot"] = "Email không hợp lệ!";
      header("location: index.php?controller=CustomerController&action=register");           
      exit;
    }
}

  if(empty(($pwd))) {
    $error["pwd"]["require"] = "Bạn không được để trống!";
    header("location: index.php?controller=CustomerController&action=register");           
    exit;
  }    
  if(empty(($dob))) {
    $error["dob"]["require"] = "Bạn không được để trống!";
    header("location: index.php?controller=CustomerController&action=register");           
    exit;
  }    
  if(empty(($gender))) {
    $error["street"]["require"] = "Bạn không được để trống!";
    header("location: index.php?controller=CustomerController&action=register");           
    exit;
  }    
}


?>