<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous" />
  <link rel="shortcut icon" href="https://zpmotos.com/wp-content/uploads/2020/06/ZP-LOGO-GRIS.png" type="image/x-icon">
  <link rel="stylesheet" href="/css/nav.css" />
  <link rel="stylesheet" href="/css/footer.css" />
  <link rel="stylesheet" href="/css/about.css" />
  <link rel="stylesheet" href="/css/home.css" />
  <link rel="stylesheet" href="/css/rent.css" />
  <link rel="stylesheet" href="/css/card.css" />
  <link rel="stylesheet" href="/css/store.css" />
  <link rel="stylesheet" href="/css/rentform.css" />
  <title>ZP MUSIC</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<header>
  <nav>
    @if (Route::has('login'))
    <div class="logo">
      <img src="https://zpmotos.com/wp-content/uploads/2020/06/ZP-LOGO-GRIS.png" alt="" width="100">Music
    </div>
    <div class="menu-icon" id="menu-icon">
      <i class="ph-fill ph-list"></i>
    </div>
    <ul id="menu-list" class="hidden">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li class="dropdown">
        <a href="#store" class="dropbtn">Store</a>
        <div class="dropdown-content">
          <a href="/jual/gitar.html">Guitar</a>
          <a href="/jual/piano.html">Piano</a>
          <a href="/jual/drum.html">Drum</a>
        </div>
      </li>
      <li><a href="#rent">Rent</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#team">Team</a></li>
      @auth
      <li class="dropdown">
        <a href="#" class="nav-sign dropbtn">{{ Auth::user()->name }}</a>
        <div class="dropdown-content">
          <a href="{{ route('profile.edit') }}">Profile</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        this.closest('form').submit();">
              Log Out
            </a>
          </form>
        </div>
      </li>
      @else
      <li><a class="nav-sign" href="{{ route('login') }}">Log In</a></li>
      @if (Route::has('register'))
      <li><a class="nav-sign" href="{{ route('register') }}">Sign Up</a></li>
      @endif
      @endauth
    </ul>
    @endif
  </nav>
</header>
<body>
  <main>
    <div class="pou-display-container pou-content pou-wide" style="max-width: 1500px" id="home">
      <img class="pou-image" src="/images/home.png" alt="Architecture" width="1500" height="800" />
      <div class="pou-display-middle pou-margin-top pou-center">
        <h1 class="pou-xxlarge">
          <span class="pou-padding" style="background-color: black; opacity: 0.5">
            <b style="color: white">ZP</b>
          </span>
          <span class="pou-hide-small pou-text-light-grey" style="text-shadow: 2px 2px black">MUSIC</span>
        </h1>
      </div>
    </div>

    <div class="container" id="about">
      <h1 class="about-title">ABOUT</h1>
      <div class="about-content">
        <img src="/images/about.jpg" />
        <p>
          Selamat datang di studio kami, tempat yang menawarkan pengalaman musik yang lengkap dan memuaskan. Dengan layanan sewa studio yang kami sediakan, Anda dapat menemukan ruang yang ideal untuk latihan, rekaman, atau pertemuan kreatif Anda. Dilengkapi dengan peralatan canggih dan lingkungan yang nyaman, studio kami menjadi tempat yang tepat untuk mengasah bakat musik Anda.
        </p>
        <p>
          Selain itu, kami juga menyediakan layanan pembelian alat musik yang lengkap. Dari Gitar & Bass yang menggugah semangat rock hingga kelembutan melodi Piano, dan kekuatan ritme Drum, kami menawarkan beragam pilihan alat musik berkualitas tinggi. Apakah Anda seorang pemula yang ingin mulai belajar atau seorang profesional yang mencari alat tambahan untuk koleksi Anda, kami siap membantu Anda menemukan alat musik yang tepat sesuai dengan kebutuhan dan preferensi Anda.
        </p>
      </div>
    </div>

    <div class="container3" id="store">
      <h1 class="store-title">Store</h1>
      <div class="packages">
        <div class="package">
          <img src="https://static.wixstatic.com/media/fe1153_f6bd2eb2191c4c1b910be9f43b80fc3b~mv2.png/v1/fill/w_146,h_146,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/electric-guitar.png" alt="Basic" />
          <h2>Gitar & Bass</h2>
          <p>Mulai Dari Gitar Akustik Hingga Elektrik</p>
          <p>Gitar & Bass</p>
          <p>Harga Terjangkau</p>
          <div class="price">Harga Mulai Rp.400.000</div>
          <button class="sign-up" onclick="window.location.href='/jual/gitar.html'">Beli</button>
        </div>
        <div class="package">
          <img src="https://static.wixstatic.com/media/fe1153_92adbf48283b4c37901f23616f3d5cf0~mv2.png/v1/fill/w_146,h_146,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/piano.png" alt="Pro" />
          <h2>Piano & Keyboard</h2>
          <p>Piano, Organ, Keyboard</p>
          <p>Piano & Keyboard</p>
          <p>Harga Terjangkau</p>
          <div class="price">Harga Mulai Rp.3.500.000</div>
          <button class="sign-up" onclick="window.location.href='/jual/piano.html'">Beli</button>
        </div>
        <div class="package">
          <img src="https://static.wixstatic.com/media/fe1153_a913138820cf445a80a4876f8dd1f0fb~mv2.png/v1/fill/w_146,h_146,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/drums.png" alt="Super" />
          <h2>Drum</h2>
          <p>Drum Akustik & Drum Electric</p>
          <p>Drum</p>
          <p>Harga Terjangkau</p>
          <div class="price">Harga Mulai Rp.1.500.000</div>
          <button class="sign-up" onclick="window.location.href='/jual/drum.html'">Beli</button>
        </div>
      </div>
    </div>

   
    <section id="rent" class="rent2">
        <div class="container-rent2">
          <img src=" /images/rent form.jpg" alt="Rent Form" />
        </div>
        <div class="rent-info">
          <h2>Sewa Alat Untuk Panggung?</h2>
          <p>
            Silahkan Order Untuk Pemesanan Sewa
          </p>
          <a href="/sewa/rent1.html" class="btn-rent">Sewa Barang</a>
        </div>
      </section>
      <aside id="contact">
        <div class="contact-wrap">
          <div class="contact-in">
            <h1>Sewa Studio?</h1>
            <h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
            <p>0878-7778-1931</p>
            <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
            <p>zpstore@zenpou.com</p>
            <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
            <p>
              Jl. Prof. DR. G.A. Siwabessy, Kampus Universitas Indonesia Depok
            </p>
          </div>
          <div class="contact-in">
            <h1>Send a Message</h1>
            <form>
              <input
                type="text"
                placeholder="Full Name"
                class="contact-in-input"
              />
              <input type="text" placeholder="Email" class="contact-in-input" />
              <input type="text" placeholder="Subject" class="contact-in-input" />
              <textarea
                placeholder="Message"
                class="contact-in-textarea"
              ></textarea>
              <input type="submit" value="SUBMIT" class="contact-in-btn" />
            </form>
          </div>
          <div class="contact-in">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15860.71911012655!2d106.80521647900399!3d-6.3707758722684025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec1cabb59bdf%3A0x28b4f84e4677f329!2sPoliteknik%20Negeri%20Jakarta!5e0!3m2!1sid!2sid!4v1715060445005!5m2!1sid!2sid"
              width="600"
              height="auto"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
        <section class="cards" id="team">
          <h2 class="container3" style="color: white">TEAM</h2>
          <article class="card">
            <div class="card-img"></div>
            <!-- <a href="#"> -->
              <div
                class="card-img-hover"
                style="background-image: url( /images/kaizen\ foto.jpg)"
              ></div>
            </a>
            <div class="card-info">
              <span class="card-category">Broadband Multimedia 4A</span>
              <h3 class="card-title">Kaizen Tamary</h3>
              <span class="card-by">
                NIM
                <a class="card-admin">2203421035</a>
              </span>
            </div>
          </article>
  
          <article class="card">
            <div class="card-img"></div>
            <!-- <a href="#"> -->
              <div
                class="card-img-hover"
                style="background-image: url( /images/poundra\ foto.jpeg)"
              ></div>
            </a>
            <div class="card-info">
              <span class="card-category">Broadband Multimedia 4A</span>
              <h3 class="card-title">Poundra Kuncoro</h3>
              <span class="card-by">
                NIM
                <a class="card-admin">2203421039</a>
              </span>
            </div>
          </article>
        </section>
      </aside>
    </main>
      <footer>
        <div class="footerContainer">
          <div class="socialIcons">
            <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://m.facebook.com/&ved=2ahUKEwjQ47aLzImGAxUkS2cHHRH0Bi0QFnoECB4QAQ&sqi=2&usg=AOvVaw34tVpM9makLRzsFbubYQeh"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://www.instagram.com/&ved=2ahUKEwif3ZmSzImGAxVfS2wGHel2DSIQjjh6BAgFEAE&usg=AOvVaw1cBeRoOpMhZ3-x5M1sA3Fm"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://twitter.com/%3Flang%3Den&ved=2ahUKEwitmLX9y4mGAxVHSGwGHS7ABYgQjjh6BAgFEAE&usg=AOvVaw1Sd3B-_cNZOLSmhw9z2lOm"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://pnj.ac.id/contact#:~:text=Silahkan%20hubungi%20kami%2C%20Kantor%20%3A,Phone%3A%20021%2D7270036%20ext%20217s"><i class="fa-brands fa-google-plus"></i></a>
            <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://www.youtube.com/&ved=2ahUKEwig7q2lzImGAxUxSmwGHcjTD2gQjjh6BAgFEAE&usg=AOvVaw0usXxGa_x5y1xoI_LaL0-1"><i class="fa-brands fa-youtube"></i></a>
          </div>
          <div class="footerNav">
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#store">Store</a></li>
              <li><a href="#rent">Rent</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#team">Team</a></li>
            </ul>
          </div>
        </div>
        <div class="footerBottom">
          <p>
            Copyright &copy;2024 Designed by
            <span class="designer">Kelompok 2</span>
          </p>
        </div>
      </footer>
      <script>
        const menuIcon = document.getElementById("menu-icon");
        const menuList = document.getElementById("menu-list");
        menuIcon.addEventListener("click", () => {
          menuList.classList.toggle("hidden");
        });
      </script>
      <script src="/script.js"></script>
    </body>
  </html>
  