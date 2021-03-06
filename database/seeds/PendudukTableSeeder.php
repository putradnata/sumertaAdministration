<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PendudukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            //Sima
            [
                'NIK' => '5171020104700002',
                'noKK' => '5171020201070015',
                'nama' => 'I PUTU SUWADA',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'S',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1970-04-01',
                'kedudukanKeluarga' => 'KK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Wiraswasta',
                'alamatLengkap' => 'JL.KENYERI GG. TERATAI NO.1, Dusun Sima, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '2',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I NYOMAN OKA',
                'namaIbu' => 'NI KETUT NITRI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171020511980001',
                'noKK' => '5171020201070015',
                'nama' => 'I PUTU ANDHIKA PUTRA DINATA',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1998-11-05',
                'kedudukanKeluarga' => 'AK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Pelajar/Mahasiswa',
                'alamatLengkap' => 'JL.KENYERI GG. TERATAI NO.1, Dusun Sima, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '2',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I PUTU SUWADA',
                'namaIbu' => 'NI LUH PUTU ANYTA TORISIA',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171022810670003',
                'noKK' => '5171022306070343',
                'nama' => 'I WAYAN SUDARSANA',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'S',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1967-10-28',
                'kedudukanKeluarga' => 'KK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Pedagang',
                'alamatLengkap' => 'JL.TULIP GG.BAMBU NO.1, Dusun Sima, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '2',
                'statusPenduduk' => 'A',
                'namaAyah' => 'KETUT SUKADA',
                'namaIbu' => 'NI NYOMAN SUDRI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171024505690003',
                'noKK' => '5171022306070343',
                'nama' => 'I GUSTI NYOMAN SUASTIKA',
                'jenisKelamin' => 'P',
                'statusPerkawinan' => 'S',
                'tempatLahir' => 'BULELENG',
                'tanggalLahir' => '1969-05-05',
                'kedudukanKeluarga' => 'I',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Karyawan Swasta',
                'alamatLengkap' => 'JL.TULIP GG.BAMBU NO.1, Dusun Sima, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '2',
                'statusPenduduk' => 'A',
                'namaAyah' => 'GUSTI KOMPYANG SUSILA (ALM)',
                'namaIbu' => 'JRO KETUT GEBOH (ALM)',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171020204980002',
                'noKK' => '5171022306070343',
                'nama' => 'I PUTU KURNIA DEPUTRA',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1998-04-02',
                'kedudukanKeluarga' => 'AK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Pelajar/Mahasiswa',
                'alamatLengkap' => 'JL.TULIP GG.BAMBU NO.1, Dusun Sima, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '2',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I WAYAN SUDARSANA',
                'namaIbu' => 'I GUSTI NYOMAN SUASTIKA',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171022808030003',
                'noKK' => '5171022306070343',
                'nama' => 'I KADEK BUDI ARYA SETIAWAN',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '2003-08-28',
                'kedudukanKeluarga' => 'AK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMP',
                'pekerjaan' => 'Pelajar/Mahasiswa',
                'alamatLengkap' => 'JL.TULIP GG.BAMBU NO.1, Dusun Sima, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '2',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I WAYAN SUDARSANA',
                'namaIbu' => 'I GUSTI NYOMAN SUASTIKA',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171021703760005',
                'noKK' => '5171021707070203',
                'nama' => '	I GUSTI NGURAH SUARDIKA',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'S',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1976-03-17',
                'kedudukanKeluarga' => 'KK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Karyawan Swasta',
                'alamatLengkap' => 'JL. KENYERI NO. 56 DPS, Dusun Sima, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '2',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I GUSTI KETUT ANOM RAKA',
                'namaIbu' => 'I GUSTI MADE RAI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171027004850004',
                'noKK' => '5171021707070203',
                'nama' => 'NI WAYAN APRIYANI',
                'jenisKelamin' => 'P',
                'statusPerkawinan' => 'S',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1985-04-30',
                'kedudukanKeluarga' => 'I',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Mengurus Rumah Tangga',
                'alamatLengkap' => 'JL. KENYERI NO. 56 DPS, Dusun Sima, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '2',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I NENGAH SIMPEN',
                'namaIbu' => 'NI WAYAN RUMIATI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171020310040002',
                'noKK' => '5171021707070203',
                'nama' => 'I GUSTI PUTU ANANDA WIDIATMIKA',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '2003-08-28',
                'kedudukanKeluarga' => 'AK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SD',
                'pekerjaan' => 'Pelajar/Mahasiswa',
                'alamatLengkap' => 'JL. KENYERI NO. 56 DPS, Dusun Sima, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '2',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I GUSTI NGURAH SUARDIKA',
                'namaIbu' => 'NI WAYAN APRIYANI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171024304130003',
                'noKK' => '5171021707070203',
                'nama' => 'I GUSTI AYU MADE NADIA LESTARI PUTRI',
                'jenisKelamin' => 'P',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '2013-04-03',
                'kedudukanKeluarga' => 'AK',
                'agama' => 'H',
                'pendidikanTerakhir' => '-',
                'pekerjaan' => 'TDKSEKOLAH',
                'alamatLengkap' => 'JL. KENYERI NO. 56 DPS, Dusun Sima, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '2',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I GUSTI NGURAH SUARDIKA',
                'namaIbu' => 'NI WAYAN APRIYANI',
                'created_at' => Carbon::now(),
            ],
            //Tegal Kuwalon
            [
                'NIK' => '5171021312690004',
                'noKK' => '5171020602070015',
                'nama' => 'I MADE REDA',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'S',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1969-12-13',
                'kedudukanKeluarga' => 'KK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Wiraswasta',
                'alamatLengkap' => 'JL. KENYERI DENPASAR, Dusun Tegal Kuwalon, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '1',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I WAYAN MAJA',
                'namaIbu' => 'NI WAYAN WARTI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171024412710002',
                'noKK' => '5171020602070015',
                'nama' => 'NI NYOMAN SUTARIANI',
                'jenisKelamin' => 'P',
                'statusPerkawinan' => 'S',
                'tempatLahir' => 'PEKUTATAN',
                'tanggalLahir' => '1971-12-04',
                'kedudukanKeluarga' => 'I',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Wiraswasta',
                'alamatLengkap' => 'JL. KENYERI DENPASAR, Dusun Tegal Kuwalon, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '1',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I KETUT TUNAS',
                'namaIbu' => 'NI WAYAN MERITA',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171024101970001',
                'noKK' => '5171020602070015',
                'nama' => 'NI NYOMAN AYU WEDHA SARI',
                'jenisKelamin' => 'P',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1997-01-01',
                'kedudukanKeluarga' => 'AK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Pelajar/Mahasiswa',
                'alamatLengkap' => 'JL. KENYERI DENPASAR, Dusun Tegal Kuwalon, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '1',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I MADE REDA',
                'namaIbu' => 'NI NYOMAN SUTARIANI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171027112370022',
                'noKK' => '5171020602070015',
                'nama' => 'NI WAYAN WARTI',
                'jenisKelamin' => 'P',
                'statusPerkawinan' => 'CM',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1937-12-31',
                'kedudukanKeluarga' => 'OT',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SD',
                'pekerjaan' => 'Wiraswasta',
                'alamatLengkap' => 'JL. KENYERI DENPASAR, Dusun Tegal Kuwalon, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '1',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I WAYAN SURA',
                'namaIbu' => 'NI LUH RANGKIN',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171020403020007',
                'noKK' => '5171020602070015',
                'nama' => 'I MADE PANDE JAYA SUBAWA',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '2002-03-04',
                'kedudukanKeluarga' => 'FL',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SD',
                'pekerjaan' => 'Pelajar/Mahasiswa',
                'alamatLengkap' => 'JL. KENYERI DENPASAR, Dusun Tegal Kuwalon, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '1',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I MADE SARMA',
                'namaIbu' => 'NI KOMANG TEJAWATI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171022410950004',
                'noKK' => '5171020602070015',
                'nama' => 'I PUTU PANDE AGUS WIRAJAYA',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1995-10-24',
                'kedudukanKeluarga' => 'FL',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Pelajar/Mahasiswa',
                'alamatLengkap' => 'JL. KENYERI DENPASAR, Dusun Tegal Kuwalon, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '1',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I KETUT SARMA',
                'namaIbu' => 'NI KOMANG TEJAWATI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171021810720005',
                'noKK' => '5171020607070415',
                'nama' => 'I NYOMAN REDIKA',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'S',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1972-10-18',
                'kedudukanKeluarga' => 'KK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Perangkat Desa',
                'alamatLengkap' => 'JL. KENYERI GG. SEKAR KEMUDA I/ NO.1 DPS, Dusun Tegal Kuwalon, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '1',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I MADE KONDRA',
                'namaIbu' => 'NI NYOMAN NGEMBON',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171026212720003',
                'noKK' => '5171020607070415',
                'nama' => 'NI WAYAN REMPI',
                'jenisKelamin' => 'P',
                'statusPerkawinan' => 'S',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1972-12-02',
                'kedudukanKeluarga' => 'I',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Mengurus Rumah Tangga',
                'alamatLengkap' => 'JL. KENYERI GG. SEKAR KEMUDA I/ NO.1 DPS, Dusun Tegal Kuwalon, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '1',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I NYOMAN BANCI',
                'namaIbu' => 'NI KETUT SADRI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171024307980003',
                'noKK' => '5171020607070415',
                'nama' => 'NI LUH PUTU PIKA ARI ARINI',
                'jenisKelamin' => 'P',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1998-07-03',
                'kedudukanKeluarga' => 'AK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMP',
                'pekerjaan' => 'Pelajar/Mahasiswa',
                'alamatLengkap' => 'JL. KENYERI GG. SEKAR KEMUDA I/ NO.1 DPS, Dusun Tegal Kuwalon, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '1',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I NYOMAN REDIKA',
                'namaIbu' => 'NI WAYAN REMPI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171024501040002',
                'noKK' => '5171020607070415',
                'nama' => 'NI KADEK AYU RIKA DWI CAHYANI',
                'jenisKelamin' => 'P',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '2004-01-05',
                'kedudukanKeluarga' => 'AK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SD',
                'pekerjaan' => 'Pelajar/Mahasiswa',
                'alamatLengkap' => 'JL. KENYERI GG. SEKAR KEMUDA I/ NO.1 DPS, Dusun Tegal Kuwalon, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '1',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I NYOMAN REDIKA',
                'namaIbu' => 'NI WAYAN REMPI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171025307050001',
                'noKK' => '5171020607070415',
                'nama' => 'NI KOMANG TRIANITA JULIANI',
                'jenisKelamin' => 'P',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '2005-07-13',
                'kedudukanKeluarga' => 'AK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SD',
                'pekerjaan' => 'Pelajar/Mahasiswa',
                'alamatLengkap' => 'JL. KENYERI GG. SEKAR KEMUDA I/ NO.1 DPS, Dusun Tegal Kuwalon, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '1',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I NYOMAN REDIKA',
                'namaIbu' => 'NI WAYAN REMPI',
                'created_at' => Carbon::now(),
            ],
            //Kerta Bumi
            [
                'NIK' => '5171022911680003',
                'noKK' => '5171020507070210',
                'nama' => 'I MADE RAI WARTANA',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'S',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1968-11-29',
                'kedudukanKeluarga' => 'KK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Wiraswasta',
                'alamatLengkap' => 'JL. SUBITA GG.IV NO.7 DPS, Dusun Kertabumi, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '3',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I MADE WARSA',
                'namaIbu' => 'SAGUNG OKA SURATNI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171024402740002',
                'noKK' => '5171020507070210',
                'nama' => 'GUSTI AYU LISNAYANTI',
                'jenisKelamin' => 'P',
                'statusPerkawinan' => 'S',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1974-02-04',
                'kedudukanKeluarga' => 'I',
                'agama' => 'H',
                'pendidikanTerakhir' => 'Diploma-I',
                'pekerjaan' => 'Wiraswasta',
                'alamatLengkap' => 'JL. SUBITA GG.IV NO.7 DPS, Dusun Kertabumi, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '3',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I GUSTI PUTU MULIAWAN',
                'namaIbu' => 'MEKEL FARIAWATI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171024704990004',
                'noKK' => '5171020507070210',
                'nama' => 'PUTU AYU DIAH RAHMAYANTI',
                'jenisKelamin' => 'P',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1999-04-07',
                'kedudukanKeluarga' => 'AK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Pelajar/Mahasiswa',
                'alamatLengkap' => 'JL. SUBITA GG.IV NO.7 DPS, Dusun Kertabumi, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '3',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I MADE RAI WARTANA',
                'namaIbu' => 'GUSTI AYU LISNAYANTI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171025602030005',
                'noKK' => '5171020507070210',
                'nama' => 'MADE AYU DEVIANA PEBRIYANTI',
                'jenisKelamin' => 'P',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '2003-02-16',
                'kedudukanKeluarga' => 'AK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SD',
                'pekerjaan' => 'Pelajar/Mahasiswa',
                'alamatLengkap' => 'JL. SUBITA GG.IV NO.7 DPS, Dusun Kertabumi, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '3',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I MADE RAI WARTANA',
                'namaIbu' => 'GUSTI AYU LISNAYANTI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171023007110002',
                'noKK' => '5171020507070210',
                'nama' => 'NYOMAN BAGUS ANDIKA PRASETYA',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'B',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '2011-07-30',
                'kedudukanKeluarga' => 'AK',
                'agama' => 'H',
                'pendidikanTerakhir' => 'TDKSEKOLAH',
                'pekerjaan' => '-',
                'alamatLengkap' => 'JL. SUBITA GG.IV NO.7 DPS, Dusun Kertabumi, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '3',
                'statusPenduduk' => 'A',
                'namaAyah' => 'I MADE RAI WARTANA',
                'namaIbu' => 'GUSTI AYU LISNAYANTI',
                'created_at' => Carbon::now(),
            ],
            [
                'NIK' => '5171023112470174',
                'noKK' => '5171020507070210',
                'nama' => 'I MADE WARSA',
                'jenisKelamin' => 'L',
                'statusPerkawinan' => 'S',
                'tempatLahir' => 'DENPASAR',
                'tanggalLahir' => '1947-12-31',
                'kedudukanKeluarga' => 'OT',
                'agama' => 'H',
                'pendidikanTerakhir' => 'SMA',
                'pekerjaan' => 'Pensiunan',
                'alamatLengkap' => 'JL. SUBITA GG.IV NO.7 DPS, Dusun Kertabumi, Desa Sumerta Kaja, Kecamatan Denpasar Timur, Kota Denpasar, Bali',
                'idBanjar' => '3',
                'statusPenduduk' => 'A',
                'namaAyah' => 'KETUT SUPLUGAN',
                'namaIbu' => 'NI LUH NEBLO',
                'created_at' => Carbon::now(),
            ],
        ];
        DB::table('penduduk')->insert($data);
    }
}
