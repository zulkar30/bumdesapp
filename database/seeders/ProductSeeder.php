<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typesOptions = ['produk_baru', 'populer', 'rekomendasi'];
        $categoriesOptions = ['BATIK', 'TENUN', 'TANJAK', 'AKSESORIS'];
        $products = [
            [
                'name'         => 'MOTIF BUNGA KIAMBANG',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'TENUN COKLAT',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'TANJAK BATIK BIRU',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'TANJAK BATIK KUNING',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'TANJAK BATIK COKLAT',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF ALAMANDA',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF PUCUK REBUNG BESAR',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF BUNGA RAYA',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF PUCUK REBUNG BUNGA RAYA',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF DAUN PINANG',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF KEMBANG MELATI',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF DAUN PEPAYA',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF PUCUK BERSUSUN',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF IKAN TERUBUK',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF TAMPUK MANGGIS',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF JANGKAR KIAMBANG',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF JANGKAR KENCONG',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF IKAN SENUNGGANG',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF PUCUK REBUNG BUNGA KENCONG',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF BUNGA KENCONG DAN DAUN ONGKEH',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF DAUN CENGKEH',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF KUPU KUPU',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF BUNGA RAYA KUPU KUPU',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF DAUN PEPAYA BUNGA',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF DAUN PEPAYA JANGKAR',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'MOTIF BUNGA KIAMBANG JANGKAR',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'TAS BATIK MOTIF PUCUK REBUNG',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'GANTUNGAN KUNCI TANJAK BATIK',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'TAS BATIK MOTIF BUNGA RAYA',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'TAS BATIK MOTIF KUPU KUPU',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'TAS BATIK MOTIF DAUN PEPAYA',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'GANTUNGAN KUNCI MOTIF BATIK BUNGA RAYA',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'GANTUNGAN KUNCI MOTIF BATIK PUCUK REBUNG',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'GANTUNGAN KUNCI MOTIF BATIK IKAN TERUBUK',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'TENUN HIJAU PUCUK REBUNG',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],
            [
                'name'         => 'TENUN MERAH',
                'description'  => 'Lorem ipsum dolor',
                'price'        => $this->getRandomPrice(),
                'stock'        => $this->getRandomStock(),
                'types'        => $this->getRandomType($typesOptions),
                'categories'   => $this->getRandomCategories($categoriesOptions),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s')
            ],

        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
    private function getRandomPrice()
    {
        return rand(100000, 1000000);
    }
    private function getRandomStock()
    {
        return rand(10, 100);
    }
    private function getRandomCategories(array $typesOptions)
    {
        return $typesOptions[array_rand($typesOptions)];
    }
    private function getRandomType(array $categoriesOptions)
    {
        $randomCount = rand(1, count($categoriesOptions));
        $randomCategories = array_rand(array_flip($categoriesOptions), $randomCount);
        return is_array($randomCategories) ? implode(', ', $randomCategories) : $randomCategories;
    }
}


