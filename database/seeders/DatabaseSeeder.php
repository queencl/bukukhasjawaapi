<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Buku;
use App\Models\Petugas;
use App\Models\Rak;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Anggota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            "kode_anggota" => "198734562",
            "nama_anggota" => "Ahmad Nippon",
            "jk_anggota" => "L",
            "jurusan_anggota" => "BP",
            "no_telp_anggota" => "0869697854",
            "alamat_anggota" => "Condets",
        ]);

        Anggota::create([
            "kode_anggota" => "656708521",
            "nama_anggota" => "Ifull Repitos",
            "jk_anggota" => "L",
            "jurusan_anggota" => "RP",
            "no_telp_anggota" => "08788654321",
            "alamat_anggota" => "Malangkali",
        ]);

        Petugas::create([
            "nama_petugas" => "Reyfati Hutagalung sinaga",
            "jabatan_petugas" => "Admin 1",
            "no_telp_petugas" => "0812345690",
            "alamat_petugas" => "Otistas",
        ]);

        Petugas::create([
            "nama_petugas" => "Sakhi Indah",
            "jabatan_petugas" => "Admin 2",
            "no_telp_petugas" => "086943256743",
            "alamat_petugas" => "Kampung Dooekoh",
        ]);

        Buku::create([
            "kode_buku" => "12340",
            "judul_buku" => "Cara Mendapatkan Hasil",
            "penulis_buku" => "Kandar Standar Ugandar",
            "penerbit_buku" => "Erlanga",
            "tahun_penerbit" => "2022",
            "stok" => 30,
           ]);
    
           Buku::create([
            "kode_buku" => "76291",
            "judul_buku" => "Awal Mula Teh Kotak",
            "penulis_buku" => "Hafiz al bai",
            "penerbit_buku" => "fauzan",
            "tahun_penerbit" => "2018",
            "stok" => 22,
           ]);

           Rak::create([
            "nama_rak" => "Resep",
            "lokasi_rak" => "lt-2",
            "buku_id" => 1,
          ]);
   
        
          Rak::create([
           "nama_rak" => "Tokoh",
           "lokasi_rak" => "lt-1",
           "buku_id" => 2,
            ]);
   
         Peminjaman::create([
           "tanggal_pinjam" => "2023-10-05",
           "tanggal_kembali" => "2023-10-15",
           "buku_id" => 1,
           "anggota_id" => 1,
           "petugas_id" => 1,
         ]);
   
         Peminjaman::create([
           "tanggal_pinjam" => "2023-10-03",
           "tanggal_kembali" => "2023-10-06",
           "buku_id" => 2,
           "anggota_id" => 2,
           "petugas_id" => 2,
         ]);
   
         Pengembalian::create([
            "tanggal_pengembalian" => "2023-10-09",
            "denda" => 35000,
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 1
         ]);
   
         Pengembalian::create([
           "tanggal_pengembalian" => "2023-10-05",
           "denda" => 0,
           "buku_id" => 2,
           "anggota_id" => 2,
           "petugas_id" => 2
        ]);
    }
}
