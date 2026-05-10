<?php
class Menu {
    public function getMenu() {
        return [
            [
                "nama" => "Hokage Special Bowl",
                "harga_tampil" => "Rp 125.000",
                "harga_angka" => 125000,
                "gambar" => "Screenshot 2026-05-08 055049.png",
                "desc" => "Porsi raksasa dengan bumbu rahasia premium, jamur kuping, dan topping super komplit.",
                "badge" => "Bestseller",
                "tags" => ["Miso Base", "Extra Pork", "Hokage's Choice"],
                "stars" => '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>'
            ],
            [
                "nama" => "Jonin Spicy Katon",
                "harga_tampil" => "Rp 40.000",
                "harga_angka" => 40000,
                "gambar" => "Screenshot 2026-05-08 000949.png",
                "desc" => "Ramen pedas berani dengan kuah miso spesial yang dalam, daging BBQ asap, jamur shiitake, bawang goreng renyah, dan cabai merah kering.",
                "badge" => "",
                "tags" => ["Spicy", "Shoyu Base", "Smoky"],
                "stars" => '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star-half-stroke"></i>'
            ],
            [
                "nama" => "Chunin Classic Shoyu",
                "harga_tampil" => "Rp 35.000",
                "harga_angka" => 35000,
                "gambar" => "Screenshot 2026-05-08 001301.png",
                "desc" => "Ramen klasik warung Ichiraku yang legendaris. Kuah shoyu jernih gurih, chashu triple layer, dan daun bawang hijau melimpah. Sederhana namun berkelas.",
                "badge" => "",
                "tags" => ["Classic", "Shoyu Base"],
                "stars" => '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>'
            ],
            [
                "nama" => "Genin Light Ramen",
                "harga_tampil" => "Rp 25.000",
                "harga_angka" => 25000,
                "gambar" => "Screenshot 2026-05-08 001158.png",
                "desc" => "Pilihan ringan untuk Shinobi yang ingin menikmati ramen tanpa berlebihan. Kuah kaldu ayam bening, irisan daging sapi empuk, menma bamboo, dan telur ajitsuke.",
                "badge" => "",
                "tags" => ["Shio Base", "Light"],
                "stars" => '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>'
            ]
        ];
    }
}