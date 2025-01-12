## Cara menjalankan project

Project ini menggunakan laravel inertia react maka untuk menjalankannya membutuhkan php dan nodejs:

- clone project ini
- masuk ke folder utama project
- rename file .env.example menjadi .env
- eksekusi perintah berikut ini secara berurutan :
  1. composer install, jika composer di install non global maka jalankan perintah: php composer install
  2. npm install
  3. php artisan migrate
  4. php artisan db:seed
  5. composer run dev, jika composer di install non global maka jalankan perintah: php composer install
  6. buka pada broser http://127.0.0.1:8000/
  7. gunakan user: dokter@example.com atau apoteker@example.com sedangkan password: password untuk kedua user tersebut

catatan: jika ingin menjalankan pada local host maka edit file composer.json dan hapus --host 192.168.1.111  pada bagian:
"dev": [
    "Composer\\Config::disableProcessTimeout",
    "npx concurrently -c \"#93c5fd,#c4b5fd,#fb7185,#fdba74\" \"php artisan serve --host 192.168.1.111\" \"php artisan queue:listen --tries=1\" \"php artisan pail --timeout=0\" \"npm run dev\" --names=server,queue,logs,vite"
]


