<footer>
    <div class="footer-grid">
        <div class="footer-col">
            <div class="footer-brand">
                <img src="assets/images/Screenshot 2026-05-08 001329.png" alt="Konoha Icon">
                <div class="footer-brand-name">Ichiraku Ramen</div>
            </div>
            <p class="footer-desc">Warung ramen legendaris terinspirasi dari Hidden Leaf Village. Kami menyajikan cita rasa autentik dengan bahan-bahan terbaik untuk semua Shinobi yang lapar dan berjiwa petualang.</p>
            <div class="footer-socials">
                <a href="#" class="fsoc"><i class="fab fa-instagram"></i></a>
                <a href="#" class="fsoc"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="fsoc"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="fsoc"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
        <div>
            <div class="footer-col-title">Menu Kami</div>
            <ul class="footer-links">
                <li><a href="#menu">Hokage Special Bowl</a></li>
                <li><a href="#menu">Jonin Spicy Katon</a></li>
                <li><a href="#menu">Chunin Classic Shoyu</a></li>
                <li><a href="#menu">Genin Light Ramen</a></li>
            </ul>
        </div>
        <div>
            <div class="footer-col-title">Navigasi</div>
            <ul class="footer-links">
                <li><a href="#">Beranda</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#reviews">Ulasan</a></li>
                <li><a href="#booking">Reservasi</a></li>
            </ul>
        </div>
        <div>
            <div class="footer-col-title">Kontak</div>
            <div class="contact-item"><i class="fas fa-map-marker-alt"></i><span>Jl. Konoha No. 1, Hidden Leaf Village, Bondowoso</span></div>
            <div class="contact-item"><i class="fas fa-phone"></i><span>0812-3456-7890</span></div>
            <div class="contact-item"><i class="fas fa-envelope"></i><span>ichiraku@konoha.ramen</span></div>
            <div class="contact-item"><i class="fas fa-clock"></i><span>Sen–Jum 10.00–22.00 | Sab–Min 09.00–23.00</span></div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2026 Ichiraku Ramen. All Rights Reserved.</p>
        <div class="footer-konoha">
            <img src="assets/images/Screenshot 2026-05-08 001329.png" alt="Konoha Logo">
            Supported by Hidden Leaf Village
        </div>
    </div>
</footer>

<script>
  // Navbar scroll effect
  const nav = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 60);
  });

  // Fungsi untuk menghitung total biaya
  function calculateTotal() {
    const pax = parseInt(document.getElementById('r-pax').value) || 1;
    const qty = parseInt(document.getElementById('r-qty').value) || 1;
    const menuSelect = document.getElementById('r-menu');
    const menuPrice = parseInt(menuSelect.value) || 0;
    
    const menuName = menuSelect.options[menuSelect.selectedIndex].getAttribute('data-name');
    document.getElementById('hidden-menu-name').value = menuName;

    let total = menuPrice * qty;
    let extraFee = 0;
    
    if (pax > 3) {
      extraFee = (pax - 3) * 15000; 
      document.getElementById('fee-notice').style.display = 'block';
    } else {
      document.getElementById('fee-notice').style.display = 'none';
    }
    total += extraFee;

    const formatter = new Intl.NumberFormat('id-ID', {
      style: 'currency', currency: 'IDR', minimumFractionDigits: 0
    });

    const formattedTotal = formatter.format(total);
    document.getElementById('display-total').innerText = formattedTotal;
    document.getElementById('hidden-total').value = formattedTotal;
  }

  // Scroll animation
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.menu-card, .testi-card, .stat-item, .about-feat').forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'all 0.6s ease-out';
      observer.observe(el);
  });
</script>
</body>
</html>