PRAKTIKUM 1

<img width="886" height="932" alt="Screenshot 2026-03-08 145314" src="https://github.com/user-attachments/assets/4cae7807-8f6b-4df3-ad3b-fe8e2cdb7ce0" />
Aktifkan beberapa ektensi PHP: php-json, php-mysqlnd, php-xml, php-intl, libcurl

<img width="1891" height="1066" alt="Screenshot 2026-03-08 145352" src="https://github.com/user-attachments/assets/eb8677c8-ea19-4527-9461-3d3810530624" />
Instal Codeigniter 4

<img width="1920" height="1200" alt="Screenshot 2026-03-08 145535" src="https://github.com/user-attachments/assets/4d68ad5f-6c0b-40e4-9569-3cfa0ecd67c6" />
<img width="1920" height="1200" alt="Screenshot 2026-03-08 145551" src="https://github.com/user-attachments/assets/8e0b532c-5605-4e71-8d61-3d951c57da9e" />
Arahkan lokasi direktori sesuai dengan direktori kerja project yang dibuat (xampp/htdocs/lab11_php_ci/ci4/)

<img width="881" height="933" alt="Screenshot 2026-03-08 150347" src="https://github.com/user-attachments/assets/381e1d7e-a64d-4c2d-b3d8-5def32a3313b" />
Aktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development

<img width="836" height="392" alt="Screenshot 2026-03-08 150603" src="https://github.com/user-attachments/assets/51ced1f2-f941-4d11-8e12-b6a7012f4c1b" />

Untuk mencoba error ubah kode pada file app/Controllers/Home.php hilangkan titik koma pada akhir kode

<img width="1166" height="881" alt="Screenshot 2026-04-08 074710" src="https://github.com/user-attachments/assets/c5044e38-88ee-4f2c-87de-70e7f11f0e9a" />
<img width="1172" height="875" alt="Screenshot 2026-04-08 074736" src="https://github.com/user-attachments/assets/1ec40bb5-7e55-4ba3-b963-c8553f7b4778" />
Direktori dan file yang harus ada

<img width="1320" height="618" alt="Screenshot 2026-04-08 080248" src="https://github.com/user-attachments/assets/0bd37d77-926e-48b5-b11c-1d178ca5f917" />
Membuat route baru

<img width="1908" height="1057" alt="Screenshot 2026-04-08 081400" src="https://github.com/user-attachments/assets/fa4af9d3-af77-4234-9d4d-bf2752c6d365" />
Membuat Controller Page

<img width="1906" height="1063" alt="Screenshot 2026-04-08 090936" src="https://github.com/user-attachments/assets/9d459fb5-1539-4b27-9d12-fdb13b5a327a" />
Membuat view untuk tampilan web

<img width="1910" height="1052" alt="Screenshot 2026-04-08 092337" src="https://github.com/user-attachments/assets/45596fce-f9f5-420c-8d35-edd56724358d" />
Membuat Layout Web dengan CSS

PRAKTIKUM 2

<img width="1099" height="977" alt="Screenshot 2026-04-08 102623" src="https://github.com/user-attachments/assets/82f9d4f8-3c83-457c-a443-a0e20375766a" />
Membuat database lab_ci4

<img width="931" height="988" alt="Screenshot 2026-04-08 102647" src="https://github.com/user-attachments/assets/4ce0bbda-c2c3-4e6c-8bbb-d4f9b24810bd" />
Membuat tabel artikel

<img width="894" height="939" alt="image" src="https://github.com/user-attachments/assets/d6893569-e55a-4af4-b8e6-49e1ca336f30" />
Membuat konfigurasi untuk menghubungkan dengan database server

<img width="1909" height="1067" alt="Screenshot 2026-04-08 111006" src="https://github.com/user-attachments/assets/5205cd57-5445-4079-b064-560782e26cf2" />
Membuat Model untuk memproses data Artikel

<img width="1909" height="1068" alt="Screenshot 2026-04-08 113735" src="https://github.com/user-attachments/assets/0724950b-ae21-4761-ba02-34e2f4e0df4a" />
Menambahkan beberapa data pada database agar dapat ditampilkan datanya

<img width="1913" height="1066" alt="Screenshot 2026-04-08 114934" src="https://github.com/user-attachments/assets/d3b3ffe4-9f1a-473b-ba29-d315119e6ec2" />
Membuat tampilan detail artikel

<img width="1911" height="1064" alt="Screenshot 2026-04-08 120845" src="https://github.com/user-attachments/assets/c8ab0cd1-5e83-42c1-bfb8-f0e35cfd9d52" />
Membuat menu Admin

<img width="1907" height="1069" alt="Screenshot 2026-04-08 122321" src="https://github.com/user-attachments/assets/0a9289cd-6cc8-4e58-882d-84ec2c84f2ec" />
Menambah data Artikel

<img width="1908" height="1059" alt="Screenshot 2026-04-08 122802" src="https://github.com/user-attachments/assets/684370c2-b9df-4c51-b384-759982034d60" />
Mengubah data Artikel

PRAKTIKUM 3

<img width="1913" height="1066" alt="Screenshot 2026-04-09 073149" src="https://github.com/user-attachments/assets/f48e113b-c97d-4fd5-b934-3906101048e4" />
Membuat layout utama dan modifikasi file view agar sesuai dengan layout baru

Pertanyaan dan Tugas
<img width="1517" height="228" alt="Screenshot 2026-04-09 081715" src="https://github.com/user-attachments/assets/19d2fae1-a684-4bd6-b7c6-848d0babd45d" />
Menambahkan tanggal di database agar dapat mengambil data artikel terbaru

Manfaat utama View Layout: konsistensi tampilan di seluruh halaman, memudahkan perubahan desain dengan cukup ubah satu file layout, pemisahan antara struktur utama dan konten dinamis.

Perbedaan View Cell dan View Biasa:
1. View Biasa: logika pengambilan data ada di Controller, view hanya menampilkan data, satu controller method untuk satu halaman, vew biasa itu halaman lengkap dari controller
2. View Cell: logika pengambilan data ada di Cell Class, bisa dipanggil dimana saja (layout, bahkan view lain), bisa dipanggil berkali-kali dengan parameter berbeda, view cell itu komponen kecil yang bisa dipasang dimana saja

PRAKTIKUM 4

<img width="1014" height="621" alt="Screenshot 2026-04-09 085610" src="https://github.com/user-attachments/assets/8329b726-cc57-43cb-aebf-cb19bc0098ae" />
Membuat tabel User

<img width="1916" height="1062" alt="Screenshot 2026-04-09 092101" src="https://github.com/user-attachments/assets/70472620-2fa1-4105-a2f6-0ab6637a4478" />
Membuat model user dan controller user

<img width="1919" height="1071" alt="Screenshot 2026-04-09 092158" src="https://github.com/user-attachments/assets/c6b0b66b-4709-448e-a0eb-2709bc63a30a" />
Membuat view login

PRAKTIKUM 5

<img width="1919" height="1062" alt="Screenshot 2026-04-12 072125" src="https://github.com/user-attachments/assets/30ece377-fe69-4849-92f3-859199081e11" />
Membuat pagination untuk membatasi tampilan yang panjang dari banyak data pada sebuah website

<img width="1912" height="1064" alt="Screenshot 2026-04-12 073335" src="https://github.com/user-attachments/assets/ad6a9d23-d8cc-414d-8b31-29f31a6bbf12" />
Membuat pencarian data untuk memfilter data agar mudah ditemukan

# Lab7Web
