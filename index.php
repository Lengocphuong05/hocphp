
<?php
// câu 20: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
function  checkIfStringIsValidEmail($email){
  $email = "mai123@gmail.com";

  // Remove all illegal characters from email
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  
  // Validate e-mail
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo("$email is a valid email address");
  } else {
      echo("$email is not a valid email address");
}
}
echo checkIfStringIsValidEmail('mai123@gmail.com');
?>
