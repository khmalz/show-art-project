# Digiworks

Sebuah platform yang mengumpulkan karya-karya siswa dari jurusan rekayasa perangkat lunak di sekolah-sekolah, untuk memberikan ruang bagi mereka untuk menampilkan kreativitas dan kemampuan dalam pengembangan aplikasi.

## Fitur

-   Memasukkan Projek
-   Menonaktifkan Register

## Jalankan Secara Lokal

-   Pastikan sudah terinstall php 8.2+ untuk menjalankan laravel 10

**Clone**

```shell
git clone https://github.com/khmalz/showcase-project.git
```

**Go to Directory**

```shell
cd showcase-project
```

**Install Dependencies**

```shell
composer install
```

```shell
npm install
```

**Config Environment**

```shell
cp .env.example .env
```

**Generate Key**

```shell
php artisan key:generate
```

**Setting Database Config in Env**

```
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

**Build Assets**

```shell
npm run build
```

**Migrate Database**

```shell
php artisan migrate --seed
```

**Run Local Server**

```shell
php artisan serve
```

## Environment Variables

Untuk memastikan gambar yang terupload akan muncul, Anda perlu mengkonfigurasi pada file .env. Sesuaikan dengan url dan host yang dijalankan di browser anda saat menjalankan project ini.

contoh: `http://127.0.0.1:8000`

```
APP_URL
```

## Developer

-   [@khmalz](https://github.com/khmalz)
