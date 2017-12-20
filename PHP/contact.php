<?php

require_once ../index.php;
//--- początek formularza ---
if ($_POST['submit']) {

//twoje dane
$email = 'krzysztof.janik@vp.pl';

//dane z formularza
$formName = $_POST['formName'];
$formEmail = $_POST['formEmail'];
$formText = $_POST['formText'];

if(!empty($formName) && !empty($formEmail) && !empty($formText)) {

//--- początek funkcji weryfikującej adres e-mail ---
function checkMail($checkmail) {
  if(filter_var($checkmail, FILTER_VALIDATE_EMAIL)) {
    if(checkdnsrr(array_pop(explode("@",$checkmail)),"MX")){
        return true;
      }else{
        return false;
      }
  } else {
    return false;
  }
}
//--- koniec funkcji ---
?>

<?php
if (checkMail($formEmail)) {
  //dodatkowe informacje: ip i host użytkownika
  $ip = $_SERVER['REMOTE_ADDR'];
  $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);

  //tworzymy szkielet wiadomości
  //treść wiadomości
  $mailText = "Treść wiadomości:n$formTextnOd: $formName, $formEmail ($ip, $host)";

  //adres zwrotny
  $mailHeader = "From: $formName <$formEmail>";

  //funkcja odpowiedzialna za wysłanie e-maila
  @mail($email, 'Formularz kontaktowy', $mailText, $mailHeader) or die('Błąd: wiadomość nie została wysłana');

  //komunikat o poprawnym wysłaniu wiadomości
  echo 'Wiadomość została wysłana';
} else {
  echo 'Adres e-mail jest niepoprawny';
 
}

} else {
  //komunikat w przypadku nie powodzenia
  echo 'Wypełnij wszystkie pola formularza';
 
}

//--- koniec formularza ---
}
?>