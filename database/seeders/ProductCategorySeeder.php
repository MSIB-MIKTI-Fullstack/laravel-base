<?php

namespace Database\Seeders;

// use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\ProductCategory::factory(10)->create();

        $kategori_produk = array(
            "Elektronik",
            "Fashion Pria",
            "Fashion Wanita",
            "Otomotif",
            "Perlengkapan Rumah",
            "Kesehatan dan Kecantikan",
            "Olahraga",
            "Mainan dan Hobi",
            "Buku dan Alat Tulis",
            "Makanan dan Minuman",
            "Perhiasan",
            "Alat Musik",
            "Perawatan Bayi",
            "Peralatan Kantor",
            "Alat Elektronik Rumah Tangga",
            "Aksesoris Gadget",
            "Alat Bantu",
            "Alat Pertukangan",
            "Alat Pancing",
            "Alat Ukur",
            "Kamera",
            "Komputer dan Laptop",
            "Lampu",
            "Peralatan Jalan",
            "Perkakas Taman",
            "Peralatan Peternakan",
            "Peralatan Listrik",
            "Peralatan Safety",
            "Produk Hewan Peliharaan",
            "Pakaian Renang"
        );

        foreach ($kategori_produk as $category) {
            \App\Models\ProductCategory::create([
                'name' => $category
            ]);
        }
    }
}
