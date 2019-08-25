<?php
function nabila($a, $id)
{
    $body = "user_id=".$id."&number=1";
    $ch   = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://www.amazonoffersinindia.com:80/SpinAndWin/webservices/wheel_points.php?";
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
    $res   = json_decode(nabila($a, $id));
    $data  = $res->msg;
    $data2 = $res->total_pending_wheel;
    echo" $data | Sisa : $data2\n";
}
?>
