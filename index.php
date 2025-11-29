<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <title>DIANTA DANISWARA PUTRA – CV</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Security Headers -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Security-Policy"
    content="default-src 'self' 'unsafe-inline' 'unsafe-eval' https:; img-src 'self' data: https:;">
  <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
  <meta http-equiv="X-Content-Type-Options" content="nosniff">
  <meta name="referrer" content="strict-origin-when-cross-origin">

  <!-- Copyright & Author Protection -->
  <meta name="author" content="DIANTA DANISWARA PUTRA">
  <meta name="copyright" content="© 2024 DIANTA DANISWARA PUTRA. All Rights Reserved.">
  <meta name="robots" content="noarchive">
  <meta name="googlebot" content="noarchive">

  <!-- Prevent Page Caching -->
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">

  <!-- Anti-iframe & Bot Detection -->
  <script>
    // Anti-iframe embedding
    if (window.top !== window.self) {
      window.top.location = window.self.location;
    }

    // Detect automation/bots
    if (navigator.webdriver) {
      alert('Bot/Automation terdeteksi!');
      document.body.innerHTML = '<h1 style="text-align:center;margin-top:50px;">Access Denied</h1>';
    }
  </script>

  <!-- Prevent Right Click -->
  <script>
    document.addEventListener('contextmenu', function (e) {
      e.preventDefault();
      alert('Maaf, konten ini dilindungi!');
    });
  </script>

  <!-- Prevent Keyboard Shortcuts -->
  <script>
    document.addEventListener('keydown', function (e) {
      // Prevent Ctrl+S (Save)
      if (e.ctrlKey && e.key === 's') {
        e.preventDefault();
        alert('Maaf, konten ini dilindungi!');
      }
      // Prevent Ctrl+U (View Source)
      if (e.ctrlKey && e.key === 'u') {
        e.preventDefault();
        alert('Maaf, konten ini dilindungi!');
      }
      // Prevent Ctrl+Shift+I (DevTools)
      if (e.ctrlKey && e.shiftKey && e.key === 'I') {
        e.preventDefault();
        alert('Maaf, konten ini dilindungi!');
      }
      // Prevent Ctrl+Shift+C (Inspect Element)
      if (e.ctrlKey && e.shiftKey && e.key === 'C') {
        e.preventDefault();
        alert('Maaf, konten ini dilindungi!');
      }
      // Prevent Ctrl+Shift+J (Console)
      if (e.ctrlKey && e.shiftKey && e.key === 'J') {
        e.preventDefault();
        alert('Maaf, konten ini dilindungi!');
      }
      // Prevent F12 (DevTools)
      if (e.key === 'F12') {
        e.preventDefault();
        alert('Maaf, konten ini dilindungi!');
      }
    });
  </script>

  <!-- Disable Text Selection -->
  <style>
    * {
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    input,
    textarea {
      -webkit-user-select: text;
      -moz-user-select: text;
      -ms-user-select: text;
      user-select: text;
    }
  </style>

  <link rel="stylesheet" href="assets/style.css">
  <script defer src="assets/script.js"></script>

  <!-- Noscript Warning -->
  <noscript>
    <div
      style="position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,0.9);color:white;display:flex;align-items:center;justify-content:center;z-index:99999;">
      <div style="text-align:center;">
        <h1>⚠️ JavaScript Required</h1>
        <p>Please enable JavaScript to view this website.</p>
        <small>© 2024 DIANTA DANISWARA PUTRA - All Rights Reserved</small>
      </div>
    </div>
  </noscript>
</head>

<body>

  <!-- NAVBAR -->
  <header class="navbar">
    <div class="logo">
      <span>PORTOFOLIO</span> DIANTA DANISWARA PUTRA, A.MD.KOM
    </div>

    <nav id="nav-menu">
      <a href="#tentang">Tentang</a>
      <a href="#pengalaman">Pengalaman</a>
      <a href="#pendidikan">Pendidikan</a>
      <a href="#skill">Skill</a>
      <a href="#kontak">Kontak</a>
    </nav>

    <div class="nav-right">
      <button onclick="toggleMode()" class="btn">Mode</button>
      <button class="menu-btn" onclick="toggleMenu()">☰</button>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero" id="tentang">
    <div class="hero-left">
      <small>PROFIL SINGKAT</small>
      <h1>Membangun pengalaman web modern yang cepat, bersih, dan berkelas.</h1>
      <p>Saya adalah developer yang fokus pada performance dan desain modern menggunakan HTML, CSS, JavaScript, PHP dan
        Framework.</p>

      <div class="stats">
        <div class="stat"><b>2+</b> Tahun</div>
        <div class="stat"><b>25+</b> Project</div>
        <div class="stat"><b>10+</b> Client</div>
      </div>
    </div>

    <div class="hero-right">
      <div class="profile-card">
        <img src="assets/profile.jpg" alt="DIANTA DANISWARA PUTRA" draggable="false">
        <h3>DIANTA DANISWARA PUTRA</h3>
        <p>Frontend Developer</p>
        <p>Backend Developer</p>
        <small>Kota Prabumulih, Sumatera Selatan, Indonesia</small>

        <div class="social">
          <a href="https://github.com/Danis-Cysec">GitHub</a>
          <a href="https://www.linkedin.com/in/dianta-daniswara-putra-6a5428345/">LinkedIn</a>
          <a href="https://www.instagram.com/dianta.daniswara.putra?igsh=Nm52eXprdmtuNDZu">Instagram</a>
          <a href="#">danisdiantra@gmail.com</a>
        </div>
      </div>

      <div class="skill-card" id="skill">
        <h3>Skill</h3>
        <div class="tag">HTML</div>
        <div class="tag">CSS</div>
        <div class="tag">JavaScript</div>
        <div class="tag">PHP</div>
        <div class="tag">MySQL</div>
        <div class="tag">Laravel</div>
        <div class="tag">React</div>
      </div>
    </div>
  </section>


  <!-- PENGALAMAN -->
  <section class="section" id="pengalaman">
    <h2>Pengalaman</h2>


    <div class="card">
      <h3>Freelance Web Developer</h3>
      <p>2023 – Sekarang</p>
      <ul>
        <li>Landing page & mini web app</li>
        <li>Integrasi REST API</li>
      </ul>
    </div>
  </section>


  <!-- PENDIDIKAN -->
  <section class="section" id="pendidikan">
    <h2>Pendidikan</h2>
    <div class="card">
      <h3>D3 Manajemen Informatika</h3>
      <p>Universitas Bina Darma Palembang</p>
      <small>2022 – 2025</small>
    </div>
  </section>


  <!-- KONTAK -->
  <section class="section" id="kontak">
    <h2>Kontak</h2>

    <form action="send.php" method="POST" class="contact-form">
      <input type="text" name="name" placeholder="Nama" required>
      <input type="email" name="email" placeholder="Email" required>
      <textarea name="message" placeholder="Pesan" required></textarea>
      <button type="submit">Kirim</button>
    </form>

    <p class="email-show">Email: danisdiantra@gmail.com</p>
  </section>


  <footer>
    © <?= date('Y'); ?> DIANTA DANISWARA PUTRA - All Rights Reserved
  </footer>

  <!-- DevTools Detector -->
  <script>
    // Detect DevTools
    const devtools = {
      isOpen: false,
      orientation: null
    };

    const threshold = 160;

    setInterval(function () {
      if (window.outerWidth - window.innerWidth > threshold ||
        window.outerHeight - window.innerHeight > threshold) {
        if (!devtools.isOpen) {
          devtools.isOpen = true;
          alert('Mohon untuk tidak membuka Developer Tools!');
          // Optional: redirect
          // window.location.href = "https://google.com";
        }
      } else {
        devtools.isOpen = false;
      }
    }, 500);

    // Prevent Drag & Drop
    document.addEventListener('dragstart', function (e) {
      e.preventDefault();
    });

    // Watermark in Console
    console.log('%c⚠️ PERINGATAN!', 'color: red; font-size: 40px; font-weight: bold;');
    console.log('%c🔒 Website ini dilindungi hak cipta!', 'color: orange; font-size: 20px;');
    console.log('%cJika Anda bukan developer website ini, JANGAN melakukan apapun di console ini!', 'color: yellow; font-size: 16px;');
    console.log('%c© 2024 DIANTA DANISWARA PUTRA - All Rights Reserved', 'color: white; font-size: 14px;');
  </script>

</body>

</html>