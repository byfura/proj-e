# Halo Team...

Disini untuk tahap alpha kami menggunakan github sebagai sarana pemersatu proyek dan beberapa tambahan lainnya.
* Diharapkan untuk menginstall **"GIT"** terlebih dahulu. 
* Diharapkan untuk menginstall **"NPM (Node Package Manager)"**
* Akun **Github** untuk melakukan push repository

Link Download Git : https://git-scm.com/downloads
NPM terbundle bersama Node.js yang dapat di download di : https://nodejs.org/en/download/
Registrasi Github di : https://github.com/join
(NB: Saya tidak include Laravel karena saya kira sudah terinstall)

Sebelum lanjut tolong info saya di grup WA untuk email akun github, supaya bisa tak invite collab repository ini.

# Clone dan Install Repo
Langkah ini dilakukan saat pertama kali menggunakan repo ini.
* Buka command prompt/terminal. (Jika memakai xampp/laragon buka shell/terminalnya lewat control panel aplikasi tersebut)
* Masuk ke directory htdocs/www (via cd)
* Clone repo ini
```sh
git clone https://github.com/byfura/proj-e
```
* Install dependency
```sh
cd proj-e
composer install
npm install
```
* Generate key
```sh
cp .env.example .env
php artisan key:generate
```

# Branch Repo
Setiap personil diharapkan membuat "branch" tersendiri. Branch dilakukan agar setiap orang bisa fokus terhadap tugas masing-masing tanpa harus menunggu anggota lain.

Membuat branch:
```sh
git branch <<nama>>
git branch bayu
```

Pindah ke branch:
```sh
git checkout <<nama>>
git checkout bayu
```

Diharapkan agar setiap personil bekerja dalam branch masing-masing.

# Commit Repo
Sehari sekali/Saat suatu fitur selesai diharapkan untuk mengcommit perubahan
```sh
git add .
git status
git commit -m "<Pesan/Message singkat tentang apa yang dikerjakan>"
```

# Pull Repo
Sebelum melakukan push ke repository di github, harap melakukan pull agar mengetahui perubahan/tambahan yang dilakukan personil lain
```sh
git pull
```

# Push Repo
Setelah melakukan pull, saatnya push ke masing2 branch di repository github
```sh
git push -u origin <<nama branch>>
```

# Merge Branch
Untuk menggabungkan pekerjaan dengan 'branch' personil lain, kita menggunakan fitur merge
```sh
git merge <<nama branch>>
```

# --------------------
Untuk memahami git lebih mendalam bisa latihan di https://learngitbranching.js.org


# Run Project
* Buka cmd/shell/terminal
* Masuk ke directory proj-e (via cd)
* Run proj-e (Jika menggunakan XAMPP/Laravel, skip saja)
```sh
php artisan serve
```
* Buka cmd/shell/terminal baru
* Run npm watch
```sh
npm run watch
```
