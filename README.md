# STAGE 1 : BACK END | INOSOFT BOOTCAMP

## PENGENALAN COMMAND LINE & GIT RESPOSITORY

- ```echo # "nama repository"``` >> README.md || menambahkan repository online dengan file ektensi .md
- ```git init``` || mengintegrasikan dengan git
- ```git add README.mg``` || menambahkan ke staging area bisa dengan ```git add .```
- ```git commit -m "pesan pertama"``` || menambahkan pesan commit
- ```git branch -M main``` || mengarahkan pada cabang main
- ```git remote add origin "alamat repository github"``` || membuat remote ke repository online yang dituju (sebelumnya harus autentikasi bisa ssh atau personal access tokens) dapat di lihat pada [link](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/adding-a-new-ssh-key-to-your-github-account) berikut
- ```git push -u origin main``` || memasukkan atau upload ke branch main
- ```git fetch``` || untuk mengetahui perubahan pada repository
- ```git pull``` || untuk menyikronkan perubahan yang ada pada repository
- ```git branch``` || untuk mengetahui branch
- ```git checkout -b "nama branch"``` || menambahkan branch
- ```git pull origin "nama branch"``` || menyatukan branch dengan branch yang dituju

##  PENGENALAN LARAVEL

- instalasi laravel menggunakan composer terlampir pada [link](https://laravel.com/docs/master) berikut
- pengenalan mengtahui routes, controllers, dan views dalam project yan telah di install

## LANJUTAN LARAVEL

- pengenalan model (Eloquent) untuk menghubungkan controller dengan database, migration untuk mengontrol database baik update atau menghapus (field, table, atau elemen lain), seeder membantu dalam data dummy, validation request untuk melakukan validasi data
- perhatikan dalam perintah ```php artisan make:request``` "nama validasi request" terdapat function authorize yang dapat mempengaruhi saat  melakukan validasi data yang akan digunakan untuk kebutuhan authorization login

## PENGENALAN BASIS DATA & MONGODB
- pengenalan salah satu jenis database non sql yaitu mongodb serta instalasi ke laravel
- berikut tata cara instalasi mongodb ke laravel melalui [link](https://www.mongodb.com/docs/php-library/current/tutorial/install-php-library/) berikut
- serta menggunakan library jenssegers pada [link](https://github.com/jenssegers/laravel-mongodb) berikut

## PHP DASAR
- pengenalan mengenai variabel, tipe data, operator, percabangan, array, string, looping, dan function pada bahasa pemograman PHP
- jika tipe data string dalam mengandung angka masih dapat diproses melalui tipe data integer

## Object Oriented Programming (OOP)
- pemahaman mengenai istilah class, object, attribute, method, parent class, child class,
access modifier, contructor dan destructor
