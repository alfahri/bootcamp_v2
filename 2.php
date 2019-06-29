<?php

function is_email_valid($email){
  if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", trim($email))) {
        return TRUE;
    }
    return FALSE;
}

function val_no_telp($no_telp){
  $hurufKe1 = substr($no_telp, 0, 1);
  $hurufKe2 = substr($no_telp, 1, 1);
  $hurufKe3 = substr($no_telp, 2, 1);
  if($hurufKe1 == "+"){
    if($hurufKe2 == "6"){
      if($hurufKe3 == "2"){
        echo "validasi no telp berhasil <br />";
      }else{
        echo "huruf awal harus +62 <br />";
      }
    }else{
      echo "huruf awal harus +62 <br />";
    }
  }else{
    echo "huruf awal harus +62 <br />";
  }
}

function cek_username($username){
  if (ctype_lower($username)) {
    echo "String berisi huruf kecil\n";
  } else {
    echo "Tidak semua string berisi huruf kecil\n";
  }
}

cek_username("anjay");

val_no_telp("+6282246101501");

$email = "abc@gmail.com";
$valid = is_email_valid($email);
echo $valid ? "True" : "False";

?>