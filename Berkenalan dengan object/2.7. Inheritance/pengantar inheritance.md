#Inheritance
Inheritance atau penurunan atau pewarisan adalah salah satu konsep utama dalam 
pemrograman berorientasi objek. Dengan inheritance, kita bisa "menurunkan" isi dari sebuah 
class ke dalam class lain. Isi class yang dimaksud adalah property dan method. 
Konsep inheritance memungkinkan kita untuk membuat hierarki class atau struktur class yang
berhubungan satu sama lain.

Dalam PHP, tidak ada batasan sebanyak banyak turunan sebuah class. Bisa jadi untuk aplikasi 
yang kompleks, butuh penurunan class hingga 5 level ke bawah dan 5 level ke atas.
Sebuah class juga bisa diturunkan ke dalam class yang berbeda-beda

Namun setiap produk punya property yang sama, seperti $sku dan $stok. Daripada menulis 
ulang property $sku dan $stok di setiap class, lebih baik kita menempatkannya ke dalam class 
Produk. Ketika diturunkan, otomatis setiap class juga akan memiliki $sku dan $stok. Ini akan 
mengurangi terjadinya duplikasi data. Pendefinisian property $sku dan $stok cukup di 1 
tempat saja.
Selain itu, kita memiliki sebuah konsep yang jelas. Setiap produk pasti memiliki property $sku
dan $stok, karena semuanya diturunkan dari class Produk. Hal ini cukup penting karena 
nantinya kita bisa membuat method atau function yang memproses berbagai class turunan 
Produk

Konsep yang sama juga berlaku untuk method. Method seperti cekStok() dan tambahStok()
perlu dimiliki oleh setiap class untuk memeriksa dan menambah stok. Cukup dengan menulis 
method ini di class Produk, otomatis semua class juga memiliki method ini. Sebuah konsep 
yang sangat efisien.
Untuk memeriksa apakah sebuah class merupakan turunan dari class lain, kita bisa 
menggunakan function is_a(). Function ini membutuhkan 2 buah argument. Argument 
pertama berupa object yang diperiksa, dan argument kedua adalah string nama class. 
Function is_a() mengembalikan nilai boolean true atau false tergantung apakah object 
tersebut benar sebuah turunan atau tidak.
Berikut contoh penggunaan dari function is_a()