# Constructor dan Destructor
* Constructor adalah method khusus yang otomatis dijalankan ketika sebuah object dibuat
(yakni pada saat proses inisialisasi dengan perintah new).
* Sedangkan destructor adalah
method khusus yang otomatis dijalankan pada saat object di hapus.

Dengan constructor, kita bisa membuat "persiapan" untuk sebuah object, seperti mengisi nilai
awal atau membuka koneksi ke database. Sebaliknya, destructor bisa dipakai untuk proses
"pembersihan" setelah object dihapus seperti menutup koneksi ke database, tujuannya agar
ruang memory bisa kembali kosong.

 destructor relatif jarang dipakai karena PHP sudah memiliki sistem
"garbage collection" internal, yang secara otomatis akan menghapus semua object dan
membersihkan memory tanpa perlu perintah tambahan.
