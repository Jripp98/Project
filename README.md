## 𝔸ℝ𝔼𝔸 ℙ𝔸ℝ𝕂𝕀ℝ
![zyro-image (1)](https://user-images.githubusercontent.com/92984375/168343413-5cb6c38d-9641-4d8a-aea9-1e5f12d89491.png)

## About Area Parkir 🤔
Area Parkir merupakan aplikasi untuk melakukan reservasi atau pemesanan tempat parkir. Aplikasi ini memiliki fitur membuat, mengubah, dan menghapus reservasi. Untuk membuat fitur tersebut tentu saja program ini memakai sistem CRUD yang tersedia pada web development.

Restorant is an application for making reservations or ordering places to parking. This application has the features of creating, changing and deleting reservations. To make this feature, of course, this program use the CRUD system that was available on web development.

## About Creator 😎
Hi👋, My name is Arif Maulana. I'm a student at syiah kuala university and this is my project for lab web-based programming final project.

# How to Use ⚙

<h4>pre-requisite</h4>
<ul>
 <p> <li>Install aplikasi XAMPP untuk menghidupkan web server dan db server</li> </p>
  <li>Install Composer terlebih dahulu</ll>
  </ul>

 <h4>Berikut cara menjalankannya:</h4>
1. Clone repositori ini terlebih dahulu di dalam folder htdocs
  <pre><code>git clone </code></pre>
2. Masuk ke dalam folder project melalui CMD atau Command Prompt
   <pre><code>cd  </code></pre>
3. Lakukan Composer Install
   <pre><code>composer install</code></pre>
4. Copy isi file .env.example lalu buat file baru .env
    <pre><code>cp .env.example .env</code></pre>
5. Aktifkan key access menggunakan command artisan seperti berikut:
    <pre><code>php artisan key:generate</code></pre>
6. Di dalam file .env ubahlah nama database yang ada di .env menjadi restorant
    <pre><code>DB_DATABASE=restorant</code></pre>
8. Setelah itu buatlah database dengan menggunakan aplikasi RDBMS yang anda punya
    <pre><code> create database restorant</code></pre>
9. Setelah itu hidupkan server web dengan cara sebagai berikut:
    <pre><code>php artisan serve</code></pre>
    
# Thanks and give a star for this repo if u like 👾
