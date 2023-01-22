<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.instamojo.com/oauth2/token/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

$payload = array(
    'grant_type' => 'client_credentials',
    'client_id' => 'tdkxdW28Ixr87rgl8vMUkYJIt9mUr7BbnrO7N2UQ',
    'client_secret' => 'G8DLe8izES0N75gqYsa9SGq3ff6BWIaDvuzOOTeKN2fPCiZaVJwOTDhzXNLzyYKUCs1NVPNcZR3NkwIMUNeFcU8tJZeZktmuT1ZAc4BuXBwSfkofvwHBTrP6MPBigrLa'
);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$acces_token = curl_exec($ch);
curl_close($ch);

$acces_token = json_decode($acces_token, true);



$acces_token = $acces_token['access_token'];
echo $acces_token;

