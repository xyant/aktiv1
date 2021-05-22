<html>
    <head>
        <title>Aktiv 1</title>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
li {
  float: center;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover:not(.active) {
  background-color: #111;
}
.active {
  background-color: #4CAF50;
}
.all-framework {
  margin: 0;
  padding: 5px;
  background-color: lightgray;
}

.all-framework > h1, .browser {
  margin: 10px;
  padding: 5px;
}

.framework {
  background: white;
}

.framework > h2, p {
  margin: 4px;
  font-size: 150%;
}
</style>
</head>

<ul>
    <li><a href="home">Home</a></li>
    <li><a href="artikel">Artikel</a></li>
    <li><a href="contact">Contact</a></li>
</ul>

</body>
<h1>Artikel</h1>

<article class="all-framework">
  <h1>Framework</h1>
  <article class="framework">
    <h2>Laravel</h2>
    <p>Laravel adalah kerangka kerja aplikasi web berbasis PHP yang sumber terbuka, menggunakan konsep Model-View-Controller. Laravel berada dibawah lisensi MIT, dengan menggunakan GitHub sebagai tempat berbagi kode</p>
  </article>
  <article class="framework">
    <h2>Code Igniter</h2>
    <p>CodeIgniter merupakan aplikasi sumber terbuka yang berupa kerangka kerja PHP dengan model MVC untuk membangun situs web dinamis dengan menggunakan PHP. CodeIgniter memudahkan pengembang web untuk membuat aplikasi web dengan cepat dan mudah dibandingkan dengan membuatnya dari awal.</p>
  </article>
  <article class="framework">
    <h2>Symfony</h2>
    <p>Symfony adalah kerangka kerja aplikasi web dan satu set komponen/pustaka PHP yang dapat digunakan ulang. Symfony dipublikasikan sebagai perangkat lunak bebas pada 18 Oktober 2005 dan dirilis di bawah lisensi MIT.</p>
  </article>
</article>
</body>
</html>