# STAGE 1 : BACK END | INOSOFTBOOTCAMP

## PENGENALAN COMMAND LINE & GIT RESPOSITORY

- echo "# nama repository" >> README.md || menambahkan repository online dengan file ektensi .md
- git init || mengintegrasikan dengan git
- git add README.mg || menambahkan ke staging area bisa dengan "git add ."
- git commit -m "pesan pertama" || menambahkan pesan commit
- git branch -M main || mengarahkan pada cabang main
- git remote add origin "alamat repository github" || membuat remote ke repository online yang dituju (sebelumnya harus autentikasi bisa ssh atau personal access tokens) dapat di lihat pada [link](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/adding-a-new-ssh-key-to-your-github-account) berikut
- git push -u origin main || memasukkan atau upload ke branch main
- git fetch || untuk mengetahui perubahan pada repository
- git pull || untuk menyikronkan perubahan yang ada pada repository
- git branch || untuk mengetahui branch
- git checkout -b "nama branch" || menambahkan branch
- git pull origin "nama branch" || menyatukan branch dengan branch yang dituju

##  PENGENALAN LARAVEL

- instalasi laravel menggunakan composer terlampir pada [link](https://laravel.com/docs/master) berikut
- pengenalan mengtahui routes, controllers, dan views dalam project yan telah di install