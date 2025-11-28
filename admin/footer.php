<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Laundry</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f4f4;
    }

    footer {
      background: linear-gradient(135deg, #4b6cb7, #182848);
      color: #fff;
      padding: 50px 20px 20px 20px;
    }

    footer .container {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: auto;
      gap: 30px;
    }

    footer .container > div {
      flex: 1;
      min-width: 220px; /* Supaya tidak turun ke bawah */
    }

    footer h3, footer h4 {
      margin-bottom: 15px;
    }

    footer ul {
      list-style: none;
      padding: 0;
    }

    footer ul li {
      margin-bottom: 10px;
    }

    footer ul li a {
      color: #ddd;
      text-decoration: none;
      transition: 0.3s;
    }

    footer ul li a:hover {
      color: #fff;
    }

    footer .copyright {
      text-align: center;
      margin-top: 30px;
      font-size: 14px;
      color: #aaa;
    }

    .subscribe input {
      padding: 8px;
      border: none;
      border-radius: 3px;
      margin-right: 5px;
    }

    .subscribe button {
      padding: 8px 12px;
      background: #ff6b6b;
      border: none;
      border-radius: 3px;
      color: #fff;
      cursor: pointer;
    }

    .subscribe button:hover {
      background: #ff3b3b;
    }
  </style>
</head>
<body>

  <!-- Footer Sistem Informasi Laundry -->
  <footer>
    <div class="container">

      <!-- Tentang -->
      <div>
        <h3>Sistem Informasi Laundry</h3>
        <p>Aplikasi untuk mengelola transaksi, pelanggan, dan laporan laundry dengan mudah dan cepat.</p>
        <div class="subscribe">
          <input type="email" placeholder="Masukkan email anda">
          <button>Subscribe</button>
        </div>
      </div>

      <!-- Kontak -->
      <div>
        <h4>Kontak Kami</h4>
        <ul>
          <li>📍 Jl. ngabean No. 42, kendal</li>
          <li>📞 0882-0035-63124</li>
          <li>✉ info@firaalaundryapp.com</li>
        </ul>
      </div>

      <!-- Informasi -->
      <div>
        <h4>Informasi</h4>
        <ul>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Layanan</a></li>
          <li><a href="#">Harga</a></li>
          <li><a href="#">Bantuan</a></li>
        </ul>
      </div>

      <!-- Sosial Media -->
      <div>
        <h4>Ikuti Kami</h4>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">WhatsApp</a></li>
        </ul>
      </div>

    </div>

    <!-- CopyRight -->
    <div class="copyright">
      &copy; 2025 Sistem Informasi Laundry | All Rights Reserved
    </div>
  </footer>

</body>
</html>