<?php
/*
Setiap kita ingin menggunakan fungsi Curl, kita haru melakukan inisialisasi terlebih dahulu dengan cara seperti ini:

<?php 
$ch = curl_init(); 

Fungsi yang digunakan untuk melakukan inisialisasi adalah curl_init().
Untuk memberikan options, kita menggunakan fungsi curl_setopt()
Terakhir menutup Curl dengan fungsi curl_close(), karena sudah tidak digunakan lagi.
Pada tahapan eksekusi, Curl akan melakukan HTTP Request sesuai dengan options yang diberikan.

Fungsi yang digunakan untuk mengeksekusi Curl adalah curl_exec().

Karena kita sudah memberikan options hasil Curl akan berupa string, maka variabel $output akan berisi sebuah string.

Kita bisa melihat isinya dengan echo.
*/

$ct = curl_init();
curl_setopt($ct, CURLOPT_URL, "http://api.themoviedb.org/3/movie/top_rated?api_key=" . $apikey);
curl_setopt($ct, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ct, CURLOPT_HEADER, FALSE);
curl_setopt($ct, CURLOPT_HTTPHEADER, array("Accept: application/json"));
//output dari variable $response_data_json adalah data JSON
$response_data_json = curl_exec($ct);
curl_close($ct);
/*
- json_decode adalah perintah untuk melakukan Decode yang artinya mengubah data dari JSON ke array pada PHP
- perintah json_decode dilakukan karena output berupa json dan php membutuhkan data array
*/
$toprated = json_decode($response_data_json);
//var_dump($response_data_json);

?>