<?php include 'includes/header.php'; ?>

<?php
// Nomor WA Tujuan untuk Pemesanan (Ganti sesuai nomor WA Anda)
$no_wa = "6281234567890";

// Data Daftar Produk
$produk_list = [
    [
        'nama' => 'Arabica Wine Bondowoso',
        'deskripsi' => 'Cupping Score 85 SCAI dari Kebun Kloncing. Notes fermented fruity yang harum dan nikmat.',
        'harga' => 'Rp 28.000',
        'gambar' => 'https://images.unsplash.com/photo-1517701550927-30cf4ba1dba5?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'nama' => 'Es Kopi Doa Utama',
        'deskripsi' => 'Espresso resep rahasia dengan racikan susu segar dan pemanis gula aren asli.',
        'harga' => 'Rp 20.000',
        'gambar' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'nama' => 'Creamy Latte',
        'deskripsi' => 'Perpaduan sempurna espresso halus dengan steam milk yang lembut dan gurih.',
        'harga' => 'Rp 23.000',
        'gambar' => 'https://images.unsplash.com/photo-1534778101976-62847782c213?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'nama' => 'Manual Brew V60',
        'deskripsi' => 'Metode filter perasan biji single origin Bondowoso dengan rasa jernih dan floral.',
        'harga' => 'Rp 25.000',
        'gambar' => 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=600&q=80'
    ]
];
?>

<main class="container" style="padding: 50px 0;">
    <div class="subtitle-badge">Daftar Menu</div>
    <h1 class="hero-title" style="font-size: 2.5rem; margin-bottom: 10px;">Katalog Doa Coffee</h1>
    <p class="hero-description" style="margin-bottom: 30px;">
        Pilih varian favoritmu di bawah ini, klik tombol pesan dan sistem akan langsung mengarahkan pesananmu ke WhatsApp resmi kami.
    </p>

    <!-- GRID KATALOG PRODUK -->
    <div class="product-grid">
        <?php foreach ($produk_list as $item): ?>
            <?php 
                $pesan_wa = urlencode("Halo Doa Coffee, saya ingin memesan menu: " . $item['nama'] . " (" . $item['harga'] . ")");
                $link_wa = "https://wa.me/" . $no_wa . "?text=" . $pesan_wa;
            ?>
            <div class="card">
                <div class="card-img-wrapper">
                    <img src="<?= $item['gambar']; ?>" alt="<?= $item['nama']; ?>">
                </div>
                <div class="card-body">
                    <h3 class="card-title"><?= $item['nama']; ?></h3>
                    <p class="card-text"><?= $item['deskripsi']; ?></p>
                    <div class="card-footer">
                        <span class="card-price"><?= $item['harga']; ?></span>
                        <a href="<?= $link_wa; ?>" target="_blank" class="btn-pill btn-pill-filled" style="padding: 8px 18px; font-size: 0.85rem;">
                            <i class="fa-brands fa-whatsapp"></i> Pesan
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>