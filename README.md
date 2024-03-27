## Introduction
- Tools Yang Saya Gunakan
1. Bootstrap
2. chartjs untuk Pie Chartnya
3. Template Sidebar

Halaman dashboard yang terdapat komponen filter dan pie chart, ada di folder `\resources\views\layout`.

- Spesifik filter folder berada di `\resources\views\components\filter.blade.php`.
- Spesifik pie chart folder berada di `\resources\views\components\chart-pie.blade.php`.

Untuk database, anda bisa pergi ke `.env`. Saya mengganti nama database saya beserta portnya menjadi 3307.

Apabila terjadi masalah, bisa email saya ke `mfathin57@gmail.com`.

Terima Kasih.

## Goals
- Anda dapat men-develop dashboard berisi chart (bisa berupa pie chart, histogram, dsb) yang menampilkan jumlah karyawan per periode sesuai dengan filter yang dipilih. Tools frontend untuk membuat chart dapat dipilih sesuai dengan kebutuhan. Filter terdiri dari: 
  * Company
  * Division
  * Level
  * Gender
- Filter tersebut dapat dikombinasikan, sebagai contoh filter yang dipilih adalah company dan level maka hasil filter terdiri dari jumlah karyawan yang masuk ke dalam 2 kriteria yang dipilih
- Requirement mini project ini menggunakan PHP Laravel 8 dan database mysql

## Panduan Pengerjaan
1. Silahkan clone repository berikut `https://github.com/hafiyyann/hces-erajaya-skill-test`
2. Data dummy untuk test ini sudah disiapkan, silahkan gunakan data tersebut untuk proses pembuatan dashboard
3. Silahkan lakukan migrate dan seed terlebih dahulu dengan menjalankan `php artisan migrate` dan `php artisan db:seed` pada command line
4. Proses filtering pada chart dilakukan melalui Ajax atau API call
5. Data pada chart akan diperbaharui sesuai dengan data yang diperoleh dari Ajax atau API call tersebut

## Panduan Pengumpulan :
1.	Publish repository yang berisi hasil pengerjaan Anda ke github
2.	Submit link repository tersebut kepada Talent Acquisition yang menghubungi Anda, pastikan repository tersebut di-set ke public
