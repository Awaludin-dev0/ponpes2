<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('data_santri')->insert([
        //     'nama_santri' => 'Abdullah',
        //     'tanggal_lahir' => '2013-11-11',
        //     'jenis_kelamin' => 'L',
        //     'ayah' => 'Lukman, S.T',
        //     'ibu' => 'Demiarti',
        //     'alamat_santri' => 'Dusun Nagur Rt. 006 Rw. 003 Desa Jagur  Kec. Sambas Kab. Sambas'
        // ]);


        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['ZAID','L','2008-12-13']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['MUHAMMAD SYAFIQ','L','2009-09-15']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['ABDURRAHMAN','L','2010-06-09']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['M. AL QOSIM','L','2010-07-23']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['M. AZKA','L','2012-02-21']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['ALFIN M. RIZKI','L','2011-09-16']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['M. AFFAN ZIKRI','L','2013-04-27']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['NASHIRURRAHMAN','L','2011-07-22']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['AHMAD IRSYAD','L','2009-12-04']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['AGUNG','L','2003-07-30']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['DAFFA OKTARIAWAN','L','2013-10-10']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['DIVO DIFA DINATA','L','2009-05-13']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['HIDAYAT','L','2011-11-23']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['JEKI','L','2003-10-18']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['MUHAMMAD DZAKI FARUQ','L','2007-12-04']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['M. WALFAIZAN','L','2011-09-20']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['QOLBI SALIM','L','2009-10-01']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['YUSUF DERMAWAN','L','2008-05-20']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['ZAIDI','L','2005-08-07']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['ZAKARIA AKBAR','L','2009-12-03']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['ABDULLAH','L','2013-11-11']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['ALDI','L','2007-10-04']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['SYAHRUL AZAM','L','2013-03-30']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['NAUFAL SHADIQ','L','2012-05-25']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['MUHAMMAD LUQMAN HANIF','L','2013-02-24']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['M. RIDHO RIANZA','L','2004-11-08']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['HASYAN','L','2005-06-20']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['FIRDAUS','L','2006-05-12']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['HANIF AMRULLAH','L','2001-08-17']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['SUFYAN ABDILLAH','L','2006-01-28']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['AYYUB','L','2008-08-30']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['M. DZAKIRIN','L','2005-01-26']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['BASTIAN','L','2003-01-21']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['AHMAD HIRA','L','2003-02-28']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['ABDULLAH','L','2009-01-13']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['URAY RESTU SAPUTRA','L','2013-04-26']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['AFIFAH HUMAIRA','P','2008-09-30']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['AISYAH UMM NAFIAH','P','2012-07-10']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['ASTRI SANDIWIA','P']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['AZIZAH','P']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['PARINI','P']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['IGFA RIANKA','P','2008-01-18']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['LIVIA','P','2009-05-11']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['NAFIA MARITZA ARNI','P','2011-05-31']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['NAYLA MAYAZA ARNI','P','2010-02-10']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['MUSTAGHFIROH','P','2012-06-11']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['OKTA RIANTI','P','2011-04-20']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['SITI ANNISA FITRI','P','2007-08-02']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['FATHIMATTUZZAHRA','P','2006-10-09']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['ASMA\' UMMU HABIBAH','P','2009-11-13']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['SHAZA SHAZWINA','P','2007-04-08']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['SHAFIQAH NURAINI','P','2012-06-25']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['FATHIMAH','P','2012-06-14']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['FATIMAH','P','2011-10-17']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['SITI RAHMAWATI','P','2011-07-25']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['MINARSIH','P','2004-02-03']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['NUR AINI','P','2010-06-14']);
        // DB::table('data_santri')->insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir) values (?,?,?)', ['NURI HERDIANA','P','2013-02-12']);

        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['ABDULLAH','L','2013-11-11','LUKMAN, ST','DEMIARTI','Dusun Nagur Rt. 006 Rw. 003 Desa Jagur  Kec. Sambas Kab. Sambas','']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['DAFFA OKTARIAWAN','L','2013-10-01','JULI SANDI','SRI REZEKI','Dusun Sembua\' Segantong Rt. 007 Rw. 004 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','0895379403006']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['URAY RESTU SAPUTRA','L','2013-04-26','URAY MAMAN SURIATMAN','','Tidak Ada Akte dan KK','081345298728']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['MUHAMMAD AFFAN ZIKRIE','L','2013-04-27','ARI RIANTO','ERNI MARHAENI','Dusun Sukamantri Gg. Albarokah No. 47 Rt. 018 Rw. 003 Desa Dalam Kaum Kec. Sambas Kab. Sambas','085244112891']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['MUHAMMAD LUQMAN HANIF','L','2013-02-24','MUHAMMAD NOOR','ELIDA','Dusun Sukamantri Gg. Sejahtera No. 58 Rt. 018 Rw. 003 Desa Dalam Kaum Kec. Sambas Kab. Sambas','08115676606']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['NAUFAL SHADIQ','L','2012-05-25','PADLI','LIANA WATI','Dusun Senangi Rt. 003 Rw. 001 Desa Lela Kec. Teluk Keramat Kab. Sambas','085752765630']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['MUHAMMAD AZKA','L','2012-02-21','DENI','IRA FEBRIANTI','Jl. Ahmad Marzuki Dusun Lubuk Tanjung Rt. 005 Rw. 003 Desa Tanjung Bugis Kec. Sambas Kab. Sambas','085248450067']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['HIDAYAT','L','2011-11-23','PUADI','DIANA','Dusun Sembua\' Segantong Rt. 012 Rw. 006 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas', '']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['MUHAMMAD WALFAIZAN','L','2011-09-20','OMADI','RIMA','Dusun Sembua\' Segantong Rt. 012 Rw. 006 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas', '']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['ALFIN MUHAMMAD RIZKI','L','2011-09-16','GUSTIANTO','FIRMASIH SASTRA','Dusun Sekuyang Rt. 008 Rw. 003 Desa Kartiasa Kec. Sambas Kab. Sambas', '']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['NASHIRURRAHMAN','L','2011-07-22','ERWANTO, SH','EVI NOVITA, S.Pd','Perum Mutiara Indah, Dusun Keramat Rt. 013 Rw. 007 Desa Lumbang Kec. Sambas Kab. Sambas','085393606114']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['MUHAMMAD AL QOSIM','L','2010-07-23','PARDI','NURYANI','Desa Kubangga Kec. Teluk Keramat Kab. Sambas','085348705161']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['AHMAD ZAKARIA','L','2010-06-27','SUWARDI','PARINA','Dusun Sarimedan Rt. 019 Rw. 009 Desa Sarang Burung Danau Kec. Jawai Kab. Sambas', '']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['ABDURRAHMAN','L','2010-06-09','ZULHIJRI','RABUNAH','Dusun Tanjung Mekar, Desa Tanjung Mentawa Kec. Sambas Kab. Sambas','085389023280']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['AHMAD IRSYAD','L','2009-12-04','NANANG ATMAWIJAYA','KARNISAH','Jl. Pembangunan Perum Villa Asri No. A2 Sambas','085251872552']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['ZAKARIA AKBAR','L','2009-12-03','CATUR RIYADI','NOVA ORIZAWATI','Dusun Jaur Rt. 016 Rw. 007 Desa Kartiasa Kec. Sambas Kab. Sambas', '']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['QOLBI SALIM','L','2009-10-01','JULIADI','BUNYANA','Dusun Karti Rt. 004 Rw. 002, Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','082251740369']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['ZIA AZZAM AMRULLAH','L','2009-09-23','SURIPTO','LENIATI','Jl. Sultan Syafiuddin Dusun Kaum Rt. 004 Rw. 001 Desa Dalam Kaum Kec. Sambas Kab. Sambas','081258095107']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['MUHAMMAD SYAFIQ','L','2009-09-15','ARY SUSANTO, S.STP','SY. POPPY MEIDIANA, SE','Dusun Kaum Rt. 004 Rw. 001 Desa Dalam Kaum Kec. Sambas Kab. Sambas','085245038436']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['DIVO DIFA DINATA','L','2009-05-13','SUHENDI','EVA','Dusun Muare Ulakkan Rt. 008 Rw. 004 Desa Kubangga Kec. Teluk Keramat Kab. Sambas','085332080280 / 08971272378']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['ABDULLAH ZAIN','L','2009-01-13','DEDI AZWAR','SALAMAH','Dusun Cempaka Putih Rt. 005 Rw. 003 Desa Pasar Melayu Kec. Sambas Kab. Sambas','081345111001']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['ZAID','L','2008-12-13','Drs. SUHERMAN','Dra. SURYANI','Jl. Ahmad Marzuki Dusun Lubuk Bugis Rt. 004 Rw. 002 Desa Tanjung Bugis Kec. Sambas Kab. Sambas','081250002442']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['YUSUF DERMAWAN','L','2008-05-20','SABURI','WALITA','Desa Kubangga Kec. Teluk Keramat Kab. Sambas','081352022623']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['MUHAMMAD DZAKI FARUQ','L','2007-12-04','MUHAMMAD NOOR','ELIDA','Dusun Sukamantri Gg. Sejahtera No. 58 Rt. 018 Rw. 003 Desa Dalam Kaum Kec. Sambas Kab. Sambas','08115676606']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['ALDI','L','2007-10-04','RAJIMI','LINDA','Dusun Rambi Rt. 002 Rw. 001 Desa Saing Rambi Kec. Sambas Kab. Sambas','085389589687']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['ABRURRAHMAN','L','2007-07-15','JUMADI','ASPILA','Dusun Penyengat Rt. 006 Rw. 003 Desa Lumbang Kec. Sambas Kab. Sambas','085245316407']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['AZMAN','L','2007-01-12','SUHARJO','FITRI','Dusun Selumar Rt. 001 Rw. 001 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas', '']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['FIRDAUS','L','2006-05-12','NORDI','SANINAH','Dusun Sabing Darat Rt. 005 Rw. 002 Desa Sabing Kec. Teluk Keramat Kab. Sambas','085348261310']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['SUFYAN ABDILLAH','L','2006-01-28','PREDI PRANAMUZLIA','URAY ERNI MARIANI','Jl. Ahmad Sood No.091 Dusun Tanjung Mentawa Rt. 004 Rw. 002 Desa Tanjung Mekar Kec. Sambas Kab. Sambas','085249499892']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['FAHRI FIRSTIANTO','L','2005-10-28','ARIS MUJAHIDIN','RADEN KARMILA','Perum Didis Permai Jalur I No. 10 Desa Dalam Kaum Kec. Sambas Kab. Sambas','085245415119']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['ZAIDI','L','2005-08-07','SURIADI','RATNA','Dusun Sembua\' Segantong Rt. 006 Rw. 003 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','085346338363']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['DANIL','L','2005-07-06','AKANG','WAHDAH','Dusun Peresan Rt. 001 Rw. 001 Desa Teluk Pandan Kec. Galing Kab. Sambas','081345929086']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['HASYAN','L','2005-06-20','NORDI','SANINAH','Dusun Sabing Darat Rt. 005 Rw. 002 Desa Sabing Kec. Teluk Keramat Kab. Sambas','085348261310']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['MUHAMMAD DZAKIRIN','L','2005-01-26','SYAHRI','APIN','Dusun Karya Rt. 021 Rw. 009 Desa Pelimpaan Kec. Jawai Kab. Sambas','085752863730']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['JEKI','L','2003-10-18','AZIMLAN','RASMIAH','Dusun Sembua\' Segantong Rt. 011 Rw. 006 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','085387719645']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['AGUNG','L','2003-07-30','SUPRIANTO','HAMDIAH','Dusun Sembua\' Segantong Rt. 012 Rw. 006 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','081352175501']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['AHMAD HIRA','L','2003-02-28','','','Tidak Ada Akte dan KK', '']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['ROYADI','L','2002-11-06','JUPANDI','RITA','Dusun Penyengat Rt. 007 Rw. 004 Desa Lumbang Kec. Sambas Kab. Sambas','081258281166']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['NURI HERDIANA','P','2013-02-12','HERDANI','','Tidak Ada Akte dan KK','']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['AZIZAH','P','2012-12-07','MUSTARAM','GUSNIAR','Dusun Sembua\' Segantong Rt. 010 Rw. 005 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','081345199700']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['AISYAH UMM NAFIAH','P','2012-07-10','','','Tidak Ada Akte dan KK','']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['SHAFIQAH NURAINI','P','2012-06-25','NANANG ATMAWIJAYA','KARNISAH','Jl. Pembangunan Perum Villa Asri No. A2 Sambas','085251872552']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['FATHIMAH','P','2012-06-14','JULIADI','BUNYANA','Dusun Karti Rt. 004 Rw. 002, Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','082251740369']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['MUSTAGHFIROH','P','2012-06-11','ZULHIJRI','RABUNAH','Dusun Tanjung Mekar, Desa Tanjung Mentawa Kec. Sambas Kab. Sambas','085389023280']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['MUZHALIFAH','P','2011-11-03','SUHENDI','EVA','Dusun Muare Ulakkan Rt. 008 Rw. 004 Desa Kubangga Kec. Teluk Keramat Kab. Sambas','085332080280 / 08971272378']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['FATIMAH','P','2011-10-17','SABURI','WALITA','Desa Kubangga Kec. Teluk Keramat Kab. Sambas','081352022623']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['FATHIMAH AZZAHRA','P','2011-08-24','ANTON SYAIFULLAH','FURNAMAWATI','Jl. Melati No. 50 Rt. 011 Rw. 004 Kel. Sekip Lama Kec. Singkawang Tengah Kota Singkawang','089657279002']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['SITI RAHMAWATI','P','2011-07-25','RUSMADI','JUHANI','Dusun Sembua\' Segantong Rt. 012 Rw. 006 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['DHIA AFIFA','P','2011-07-17','MAULIDI','NURLISA, S.Pd','Dusun Kaum Rt. 005 Rw. 001 Desa Dalam Kaum Kec. Sambas Kab. Sambas','081345155541']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['QORI OLYVIA','P','2011-07-16','SURATMAN','JUNIARTI','Dusun Sabing Darat Rt. 005 Rw. 002 Desa Sabing Kec. Teluk Keramat Kab. Sambas','085347129193']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['NAFIA MARITZA ARNI','P','2011-05-31','ARI RIANTO','ERNI MARHAENI','Dusun Sukamantri Gg. Albarokah No. 47 Rt. 018 Rw. 003 Desa Dalam Kaum Kec. Sambas Kab. Sambas','085244112891']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['OKTA RIANTI','P','2011-04-20','YANTO','URAY SRI AGUSTINA','Dusun Muare Ulakkan Rt. 010 Rw. 004 Desa Kubangga Kec. Teluk Keramat Kab. Sambas','081258060766']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['KHAIRUNNISA\'','P','2010-07-21','SYAFI\'I','SUSIDA','Dusun Sembua\' Segantong Rt. 008 Rw. 004 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','085348241898']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['NUR AINI','P','2010-06-14','PREDI PRANAMUZLIA','URAY ERNI MARIANI','Jl. Ahmad Sood No.091 Dusun Tanjung Mentawa Rt. 004 Rw. 002 Desa Tanjung Mekar Kec. Sambas Kab. Sambas','085249499892']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['NAYLA MAYAZA ARNI','P','2010-02-10','ARI RIANTO','ERNI MARHAENI','Dusun Sukamantri Gg. Albarokah No. 47 Rt. 018 Rw. 003 Desa Dalam Kaum Kec. Sambas Kab. Sambas','085244112891']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['MARYAM','P','2009-11-18','ANTON SYAIFULLAH','FURNAMAWATI','Jl. Melati No. 50 Rt. 011 Rw. 004 Kel. Sekip Lama Kec. Singkawang Tengah Kota Singkawang','089657279002']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['ASMA\' UMMU HABIBAH','P','2009-11-13','ALIANSYAH','SUCI','Dusun Kaum Rt. 002 Rw. 001 Desa Dalam Kaum Kec. Sambas Kab. Sambas','']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['LIVIA','P','2009-05-11','SUPRIANTO','HAMDIAH','Dusun Sembua\' Segantong Rt. 012 Rw. 006 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','081352175501']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['PARINI','P','2009-02-20','MUSTARAM','GUSNIAR','Dusun Sembua\' Segantong Rt. 010 Rw. 005 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','081345199700']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['AFIFAH HUMAIRA','P','2008-09-30','ERWANTO, SH','EVI NOVITA, S.Pd','Perum Mutiara Indah, Dusun Keramat Rt. 013 Rw. 007 Desa Lumbang Kec. Sambas Kab. Sambas','085393606114']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['IGFA RIANKA','P','2008-01-18','YANTO','URAY SRI AGUSTINA','Dusun Muare Ulakkan Rt. 010 Rw. 004 Desa Kubangga Kec. Teluk Keramat Kab. Sambas','081258060766']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['MAHLIQA NISA AQEELA','P','2007-09-28','SURIPTO','LENIATI','Jl. Sultan Syafiuddin Dusun Kaum Rt. 004 Rw. 001 Desa Dalam Kaum Kec. Sambas Kab. Sambas','081258095107']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['ADLDLIYA','P','2007-08-19','DARWIS','IKA','Dusun Kubung Rt. 006 Rw. 003 Desa Kubangga Kec. Teluk Keramat Kab. Sambas','085386772689']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['SITI ANNISA FITRI','P','2007-08-02','PARDI','NURYANI','Desa Kubangga Kec. Teluk Keramat Kab. Sambas','085348705161']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['SHAZA SHAZWINA','P','2007-04-08','RAHMAT','YUNIARSIH','Dusun Tamang Sagang','081257516769 / 085252156404']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['SALWA AZZAHRA','P','2007-02-26','ROMI','YURNI','Dusun Sembua\' Segantong Rt. 008 Rw. 004 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','085245180173']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['SAHFIA ALMUSLIMA','P','2007-01-06','SYAFI\'I','SUSIDA','Dusun Sembua\' Segantong Rt. 008 Rw. 004 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','085348241898']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['FATHIMATTUZZAHRA','P','2006-10-09','ERWANTO, SH','EVI NOVITA, S.Pd','Perum Mutiara Indah, Dusun Keramat Rt. 013 Rw. 007 Desa Lumbang Kec. Sambas Kab. Sambas','085393606114']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['TAQIYYAH AR RASYID','P','2005-06-24','SYAFI\'I','SUSIDA','Dusun Sembua\' Segantong Rt. 008 Rw. 004 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','085348241898']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['MUSLIMAH','P','2004-04-05','AHMAD MIFTAKHUROZI','MISNING','Dusun Parit Gama Rt. 007 Rw. 004 Desa Mutus Darussalam Kec. Jawai Kab. Sambas','']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['SALSABILA','P','2004-02-23','SYAFI\'I','SUSIDA','Dusun Sembua\' Segantong Rt. 008 Rw. 004 Desa Tanjung Keracut Kec. Teluk Keramat Kab. Sambas','085348241898']);
        DB::insert('insert into data_santri (nama_santri, jenis_kelamin, tanggal_lahir, ayah, ibu, alamat_santri, nomor_telepon) values (?,?,?,?,?,?,?)', ['DETA ARSITA','P','2003-10-31','ARIPAN','SUSI','Dusun Muare Ulakkan Rt. 009 Rw. 004 Desa Kubangga Kec. Teluk Keramat Kab. Sambas','0895704439290']);

    }
}
