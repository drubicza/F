<?php
function nabila($a, $email, $pass)
{
    $body = "phone=".$email."&password=".$pass."";
    $ch   = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://www.amazonoffersinindia.com:80/SpinAndWin/webservices/login.php?");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

    $headers   = array();
    $headers[] = "Host: www.amazonoffersinindia.com";
    $headers[] = "User-Agent: okhttp/3.11.0";

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    return $result;
}

print "Thanks To : Muhammad Ikhsan Aprilyadi\n\n";

echo  "Email : ";
$email = trim(fgets(STDIN));

echo  "Password : ";
$pass = trim(fgets(STDIN));

echo "Sedang Login Akun\n\n";

$res  = json_decode(nabila($a,$email,$pass));
$data = $res->detail->cust_id;
echo " ID Kamu : $data\n";
?>
