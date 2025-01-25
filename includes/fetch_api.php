
<?php
$api_url = "https://devsow.wpengine.com/wp-json/communities/all/";
$auth_header = "Basic bmVoYTowI21JdkJCdzRBdWJoKTU5QXhEQ0hIQTU=";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $api_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: $auth_header"));
$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);
$communities = $data['data'] ?? [];
?>
