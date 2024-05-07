# TP4DPBO2024C2

## Janji
Saya Muhamad Tio Ariyanto [2201718] mengerjakan soal Tugas Praktikum 4
dalam mata kuliah DPBO untuk keberkahanNya saya tidak melakukan kecurangan
seperti yang telah dispesifikasikan. Aamiin

## Desain Program
Program ini merupakan program PHP yang mengimplementasikan MVC (Model, View, Controller). Program ini digunakan untuk melakukan manajemen pada member dan membership dari seorang kreator. Program ini memungkinkan pengguna untuk melakukan penambahan data, melihat data, edit data, serta menghapus data dari member atau membership yang ditawarkannya.

Berikut merupakan desain dari database program ini:
![desain_db](https://github.com/Osaraku/TP4DPBO2024C2/assets/117560099/0e849ae6-3ecf-45ff-bfd1-cc8f19f85130)

Terdapat 2 tabel pada database ini, yaitu:
1. Tabel `Member` yang berisi data-data dari member yang join membership sang kreator seperti Nama, Email, No.Telp, Membership yang dipilih, dan tanggal join membershipnya.
2. Tabel `Membership` yang berisi data-data benefit yang ditawarkan sang kreator jika join membershipnya seperti Nama Membership, Harga, dan Deskripsi dari benefit apa yang didapat jika join membership tersebut.

Sementara untuk komponen-komponen dari program ini, antara lain:
1. `Models` : Terdiri dari `Member.class.php`, `Membership.class.php`, `DB.class.php`, `Template.class.php` yang digunakan untuk berinteraksi dengan database serta memiliki metode untuk mengambil data, menambahkan data, mengedit data, dan menghapus data dari member dan membership.
2. `Views` : Terdiri dari `Member.view.php`, `MemberForm.view.php`, `Membership.view.php`, `MembershipForm.view.php` yang digunakan untuk menampilkan tabel yang berisi list member dan membership serta menampilkan tampilan form untuk menambahkan dan mengedit data member dan membership.
3. `Controller` : Terdiri dari `Member.controller.php` dan `Membership.controller.php` yang digunakan sebagai perantara antara Models dan Views. Dimana controller akan mengelola dan memproses data dari Models yang kemudian nantinya akan ditampilkan di Views.
4. `Templates` : Terdiri dari `form.html` dan `table.html` merupakan tampilan dasar pada halaman Tabel dan Form dari member dan membership yang nantinya akan disesuaikan isinya pada bagian Views.
5. `connection.php` : Digunakan untuk menyimpan konfigurasi koneksi ke database.
6. `index.php` & `membership.php` : Digunakan untuk menyimpan kondisi-kondisi pada data member dan membership yang kemudian akan mengakses controller.

## Dokumentasi
https://github.com/Osaraku/TP4DPBO2024C2/assets/117560099/2fe1d9fb-5fcc-4811-b56f-4dc96d1a67c5

