<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Buku;
use App\Models\Identitas;
use App\Models\Pemberitahuan;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Pesan;


class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //USER
        User::Create([
            'kode' => 'A1',
            'fullname'    => 'Noire',
            'username' => 'Noire',
            'password'    => Hash::make("password"),
            'role' => 'admin',
            'join_date'    => '2023-01-06',
            'foto' => '',
        ]);

        User::Create([
            'kode' => 'A2',
            'fullname'    => 'Christian Dimas',
            'username' => 'Dimas',
            'password'    => Hash::make("password"),
            'role' => 'user',
            'join_date'    => '2023-01-06',
            'foto' => '',
        ]);

        User::Create([
            'kode' => '',
            'fullname'    => 'Pluto Ichor',
            'username' => 'Pluto',
            'password'    => Hash::make("password"),
            'role' => 'user',
            'join_date'    => '2023-01-06',
            'foto' => '',
        ]);

        //KATEGORI
        Kategori::create([
            'kode' => 'Manga',
            'nama' => 'Manga',
        ]);

        Kategori::create([
            'kode' => 'Sains',
            'nama' => 'Sains',
        ]);

        Kategori::create([
            'kode' => 'Light Novel',
            'nama' => 'Light Novel',
        ]);

        //PENERBIT
        Penerbit::create([
            'kode' => 'Mangareader.to',
            'nama'    => 'Mangareader.to',
            // 'verif' => 'intermedia',
        ]);

        Penerbit::create([
            'kode' => 'National Geographic',
            'nama'    => 'National Geographic',
            // 'verif' => '',
        ]);

        Penerbit::create([
            'kode' => 'Novelty.to',
            'nama'    => 'Novelty.to',
            // 'verif' => '',
        ]);

        //BUKU
        Buku::create([
            'judul' => 'Vagabond',
            'kategori_id' => '1',
            'penerbit_id' => '1',
            'pengarang' => 'Takehiko Inoue',
            'tahun_terbit' => '2000',
            'j_buku_baik' => '20',
            'j_buku_rusak' => '1',
            'foto' => 'vagabond.jpg',
        ]);

        Buku::create([
            'judul' => 'Theory of Relativity',
            'kategori_id' => '2',
            'penerbit_id' => '2',
            'pengarang' => 'Albert Einstein',
            'tahun_terbit' => '1920',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '6',
            'foto' => 'tor.jpg',
        ]);

        Buku::create([
            'judul' => 'Mushoku Tensei',
            'kategori_id' => '3',
            'penerbit_id' => '3',
            'pengarang' => 'Rifujin na Magonote',
            'tahun_terbit' => '2013',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '2',
            'foto' => 'mushoku_tensei.jpg',
        ]);

        //PEMINJAMAN
        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '1',
            'tgl_peminjaman' => '2023-01-06',
            'kondisi_buku_saat_dipinjam' => 'baik',
        ]);

        Peminjaman::create([
            'user_id' => '3',
            'buku_id' => '2',
            'tgl_peminjaman' => '2021-03-09',
            'kondisi_buku_saat_dipinjam' => 'rusak',
            'denda' => '1000',
        ]);

        Peminjaman::create([
            'user_id' => '1',
            'buku_id' => '3',
            'tgl_peminjaman' => '2023-01-09',
            'kondisi_buku_saat_dipinjam' => 'baik',
        ]);

        //PESAN
        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '1',
            'judul_pesan' => 'Buku Dipinjam',
            'isi' => 'Buku sedang dipinjam, harap dikembalikan tanggal 30',
            'status' => 'terkirim',
            'tgl_kirim' => '2023-01-21',
        ]);

        Pesan::create([
            'penerima_id' => '3',
            'pengirim_id' => '1',
            'judul_pesan' => 'Buku terlah dipinjam',
            'isi' => 'Terimakasih telah meminjam buku diperpus',
            'status' => 'terkirim',
            'tgl_kirim' => '2023-01-21',
        ]);

        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '1',
            'judul_pesan' => 'Anda telah merusak buku pinjaman',
            'isi' => 'Anda kena denda 10000',
            'status' => 'dibaca',
            'tgl_kirim' => '2023-01-16',
        ]);

        //PEMBERITAHUAN
        Pemberitahuan::create([
            'isi'    => 'Maaf server sedang maintenance',
            // 'level_user'	=> '',
            'status' => 'aktif',
        ]);

        Pemberitahuan::create([
            'isi'    => 'Maaf perpustakaan sedang tutup',
            // 'level_user'	=> '',
            'status' => 'nonaktif',
        ]);

        Pemberitahuan::create([
            'isi'    => 'Pengambilan buku paket sampai tanggal 30',
            // 'level_user'	=> '',
            'status' => 'aktif',
        ]);

        //IDENTITAS
        Identitas::create([
            'nama_app'    => 'PERPUS SMKN 10 JAKARTA',
            'alamat_app' => 'JL. SMEAN 6, Cawang, Kramat Jati',
            'email_app'    => 'Diana12@gmail.com',
            'nomor_hp'    => '82918298493',
            'foto' => '',
        ]);

        Identitas::create([
            'nama_app'    => 'PERPUS SMKN 30 JAKARTA',
            'alamat_app' => 'JL. SMEAN 6, Cawang, Kramat Jati',
            'email_app'    => 'Zana019@gmail.com',
            'nomor_hp'    => '182828',
            'foto' => '',
        ]);

        Identitas::create([
            'nama_app'    => 'PERPUS SMA 8 JAKARTA',
            'alamat_app' => 'JL. SMEAN 6, Cawang, Kramat Jati',
            'email_app'    => 'Sisil41@gmail.com',
            'nomor_hp'    => '28918921',
            'foto' => '',
        ]);
    }
}
