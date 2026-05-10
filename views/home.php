<?php $menu = $menu ?? []; ?>

<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-grid-lines"></div>
  <div class="hero-watermark">◎</div>
  <div class="hero-content">
    <div class="hero-badge">Konoha Village &bull; Est. Era Shinobi</div>
    <h1 class="hero-title">
      Ichiraku
      <span class="hero-title-accent">Ramen</span>
    </h1>
    <p class="hero-tagline">
      Pilihan ramen para <em>Shinobi</em> sejati sejak zaman purba.<br>
      Kuah kaldu dimasak <em>12 jam</em>, disajikan dengan cinta<br>
      dan semangat Hidden Leaf Village.
    </p>
    <div class="hero-actions">
      <a href="#menu" class="btn-primary">Lihat Menu</a>
      <a href="#booking" class="btn-outline">Reserve Meja</a>
    </div>
  </div>
  <div class="hero-visual">
    <div class="hero-bowl-wrap">
      <div class="ring-outer"></div>
      <div class="ring-mid"></div>
      <img src="assets/images/Screenshot 2026-05-08 001224.png" alt="Ichiraku Special Ramen" class="hero-bowl-img">
    </div>
  </div>
  <div class="hero-scroll">
    <span>Scroll</span>
    <div class="hero-scroll-line"></div>
  </div>
</section>

<div class="stats">
    <div class="stat-item"><span class="stat-num">15+</span><span class="stat-lbl">Tahun Pengalaman</span></div>
    <div class="stat-item"><span class="stat-num">4</span><span class="stat-lbl">Varian Ramen</span></div>
    <div class="stat-item"><span class="stat-num">10K+</span><span class="stat-lbl">Pelanggan Puas</span></div>
    <div class="stat-item"><span class="stat-num">4.9 ★</span><span class="stat-lbl">Rating</span></div>
</div>

<section id="about" class="about">
    <div class="about-text">
        <div class="eyebrow">The Legend</div>
        <h2>A Taste Passed Down <em>Through Generations</em></h2>
        <div class="about-divider"></div>
        <p>Berawal dari kedai kecil di sudut desa Konoha, Ichiraku Ramen telah menjadi saksi perjalanan para pahlawan terhebat. Resep rahasia kaldu kami diwariskan dengan penuh dedikasi, memastikan setiap mangkuk membawa kehangatan yang sama seperti saat pertama kali disajikan.</p>
        <p>Kami percaya bahwa ramen bukan sekadar makanan, melainkan "Soul Food" yang bisa mengembalikan semangat ninja setelah menjalankan misi berat. Itulah mengapa kami menggunakan bahan-bahan terbaik dari seluruh penjuru Lima Negara Besar Shinobi.</p>
        <div class="about-features">
            <div class="about-feat">12-Hour Slow Cooked Broth</div>
            <div class="about-feat">Hand-pulled Noodles</div>
            <div class="about-feat">Premium Chashu</div>
            <div class="about-feat">Fresh Local Ingredients</div>
        </div>
    </div>
    <div class="about-imgs">
        <img src="assets/images/Screenshot 2026-05-08 001158.png" alt="Ichiraku Kitchen" class="about-img1">
        <img src="assets/images/Screenshot 2026-05-08 001301.png" alt="Teuchi Cooking" class="about-img2">
        <div class="about-badge"><div class="num">Est.</div><div class="lbl">Ninja Era</div></div>
    </div>
</section>

<section id="menu" class="menu">
    <div class="section-header">
        <div class="eyebrow">Signature Bowls</div>
        <h2 class="sec-title">Taste The <span>Will of Fire</span></h2>
        <p class="sec-desc">Setiap mangkuk diracik dengan presisi layaknya jurus rahasia. Pilih ramen favoritmu dan rasakan ledakan chakra di setiap suapannya.</p>
    </div>

    <div class="menu-grid">
        <?php foreach($menu as $m): ?>
        <div class="menu-card">
            <?php if($m['badge'] != ""): ?>
                <div class="badge-pill"><?= $m['badge']; ?></div>
            <?php endif; ?>
            
            <div class="menu-card-img">
                <img src="assets/images/<?= $m['gambar']; ?>" alt="<?= $m['nama']; ?>">
            </div>
            <div class="menu-card-body">
                <div class="menu-card-top">
                    <h3 class="menu-card-name"><?= $m['nama']; ?></h3>
                    <span class="menu-card-price"><?= $m['harga_tampil']; ?></span>
                </div>
                <p class="menu-card-desc"><?= $m['desc']; ?></p>
                <div class="menu-card-tags">
                    <?php foreach($m['tags'] as $tag): ?>
                        <span class="tag"><?= $tag; ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="menu-stars">
                    <?= $m['stars']; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div> 
</section>

<section id="reviews" class="testimonials">
    <div class="section-header">
        <div class="eyebrow">Customer Reviews</div>
        <h2 class="sec-title">What <span>Shinobis</span> Say</h2>
    </div>
    <div class="testi-grid">
        <div class="testi-card">
            <div class="testi-quote"><i class="fa-solid fa-quote-left"></i></div>
            <p class="testi-text">"Ini adalah ramen terbaik yang pernah kumakan! Kaldu misonya benar-benar mengembalikan chakramu setelah misi Rank-S. Aku bisa makan 10 mangkuk sekaligus!"</p>
            <div class="testi-author">
                <div class="testi-avatar">N</div>
                <div>
                    <div class="testi-name">Uzumaki Naruto</div>
                    <div class="testi-role">7th Hokage</div>
                    <div class="testi-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                </div>
            </div>
        </div>
        <div class="testi-card">
            <div class="testi-quote"><i class="fa-solid fa-quote-left"></i></div>
            <p class="testi-text">"Meski aku lebih suka bernyanyi dan latihan, tapi porsi ekstra daging di Ichiraku membuatku selalu ingin kembali. Pelayanannya sangat cepat!"</p>
            <div class="testi-author">
                <div class="testi-avatar">K</div>
                <div>
                    <div class="testi-name">Killer Bee</div>
                    <div class="testi-role">Jinchuriki</div>
                    <div class="testi-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></div>
                </div>
            </div>
        </div>
        <div class="testi-card">
            <div class="testi-quote"><i class="fa-solid fa-quote-left"></i></div>
            <p class="testi-text">"Tempat yang pas untuk bersantai sambil mengawasi murid-murid. Resep klasik yang tak pernah berubah termakan zaman. Sangat merekomendasikan Shoyu Ramen."</p>
            <div class="testi-author">
                <div class="testi-avatar">H</div>
                <div>
                    <div class="testi-name">Hatake Kakashi</div>
                    <div class="testi-role">Copy Ninja</div>
                    <div class="testi-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="booking" id="booking">
    <div class="booking-inner">
      <div class="section-header">
        <div class="eyebrow">Reservasi Meja</div>
        <h2 class="sec-title">Amankan <span>Mejamu</span></h2>
        <p class="sec-desc">Jangan sampai kehabisan tempat! Para ninja terbaik selalu datang dengan persiapan.</p>
      </div>
  
      <div class="booking-grid">
        <div class="booking-info">
          <div class="bk-info-item"><div class="bk-icon"><i class="fas fa-map-marker-alt"></i></div><div class="bk-text"><h4>Lokasi</h4><p>Jl. Konoha No. 1, Hidden Leaf Village<br>Bondowoso, Jawa Timur</p></div></div>
          <div class="bk-info-item"><div class="bk-icon"><i class="fas fa-clock"></i></div><div class="bk-text"><h4>Jam Operasional</h4><p>Senin – Jumat: 10.00 – 22.00<br>Sabtu – Minggu: 09.00 – 23.00</p></div></div>
          <div class="bk-info-item"><div class="bk-icon"><i class="fas fa-phone"></i></div><div class="bk-text"><h4>Hubungi Kami</h4><p>WhatsApp: 0812-3456-7890<br>Email: ichiraku@konoha.ramen</p></div></div>
          <div class="bk-info-item"><div class="bk-icon"><i class="fas fa-shield-alt"></i></div><div class="bk-text"><h4>Garansi Reservasi</h4><p>Gratis, tanpa deposit.<br>Batalkan kapan saja sebelum 1 jam.</p></div></div>
        </div>
  
        <form class="bk-form" action="https://formsubmit.co/rulove857@gmail.com" method="POST">
            <input type="hidden" name="_subject" value="Reservasi Baru Ichiraku Ramen!">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="Menu_Yang_Dipesan" id="hidden-menu-name">
            <input type="hidden" name="Total_Pembayaran" id="hidden-total">
  
            <h3>🍜 Form Reservasi Shinobi</h3>
            <div class="fg"><label>Nama Lengkap</label><input type="text" name="Nama_Pelanggan" placeholder="Nama Shinobi-mu" id="r-name" required></div>
            <div class="form-row">
              <div class="fg"><label>Email</label><input type="email" name="Email" placeholder="email@konoha.com" id="r-email" required></div>
              <div class="fg"><label>No. WhatsApp</label><input type="tel" name="WhatsApp" placeholder="08xx-xxxx-xxxx" id="r-phone" required></div>
            </div>
            <div class="form-row">
              <div class="fg"><label>Tanggal</label><input type="date" name="Tanggal" id="r-date" required></div>
              <div class="fg"><label>Jam</label><input type="time" name="Jam" id="r-time" required></div>
            </div>
            <div class="form-row">
              <div class="fg"><label>Jumlah Shinobi (>3 org +biaya)</label><input type="number" name="Jumlah_Orang" id="r-pax" min="1" value="1" oninput="calculateTotal()" required></div>
              <div class="fg">
                <label>Menu Pilihan</label>
                <select id="r-menu" name="Kode_Menu" onchange="calculateTotal()" required>
                  <option value="0" data-name="Belum Pilih Menu">Pilih menu</option>
                  <?php foreach($menu as $m): ?>
                      <option value="<?= $m['harga_angka']; ?>" data-name="<?= $m['nama']; ?>"><?= $m['nama']; ?> (<?= $m['harga_tampil']; ?>)</option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            
            <div class="form-row" style="margin-top: 10px;">
              <div class="fg"><label>Jumlah Porsi Menu</label><input type="number" name="Jumlah_Porsi" id="r-qty" min="1" value="1" oninput="calculateTotal()" required></div>
              <div class="fg">
                <label>Total Estimasi Biaya</label>
                <div id="display-total" style="color: var(--orange); font-size: 16px; font-family: 'Cinzel', serif; font-weight: bold; margin-top: 8px; padding: 10px; background: rgba(255,107,0,0.1); border-radius: 4px;">Rp 0</div>
                <div id="fee-notice" style="font-size: 10px; color: var(--text-muted); margin-top: 4px; display: none;">*Termasuk tambahan Rp 15.000/orang (lebih dari 3 org)</div>
              </div>
            </div>
            <button type="submit" class="bk-btn" style="margin-top: 20px;">⚡ Konfirmasi Reservasi</button>
          </form>
        </div>
      </div>
</section>