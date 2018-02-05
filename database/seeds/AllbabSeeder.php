<?php

use Illuminate\Database\Seeder;
use App\dosen;
use App\jurusan;
use App\matakul;
use App\mahasiswa;
use App\wali;
use App\matkul_mahasiswa;

class AllbabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->delete();
        DB::table('jurusan')->delete();
        DB::table('mata_kuliah')->delete();
        DB::table('mahasiswa')->delete();
        DB::table('wali')->delete();
        DB::table('matkul_mahasiswa')->delete();

        $dosen = dosen::create(array(
        	'nama' => 'asep',
        	'nipd' => '5252652',
        	'alamat' => 'jln cibodas'
        ));
        $this->command->info('Data Dosen Telah di Isi');

        $jurusan = jurusan::create(array(
        	'nama_jurusan' => 'pertanian'
        ));
        $this->command->info('Data Jurusan Telah di Isi');

        $matakul = matakul::create(array(
        	'nama_matkul' => 'agama',
        	'kkm' => '80'
        ));
        $this->command->info('Data Mata Kuliah Telah di Isi');

        $aceng = mahasiswa::create(array(
        	'nama' => 'aceng supratman',
        	'nis' => '4313234',
        	'dosen_id' => $dosen->id,
        	'jurusan_id' => $jurusan->id
        ));

        $akum = mahasiswa::create(array(
        	'nama' => 'akum kurniawan',
        	'nis' => '213675',
        	'dosen_id' => $dosen->id,
        	'jurusan_id' => $jurusan->id
        ));

        $dadang = mahasiswa::create(array(
        	'nama' => 'dadang sunanda',
        	'nis' => '135677',
        	'dosen_id' => $dosen->id,
        	'jurusan_id' => $jurusan->id
        ));
        $this->command->info('Data Mahasiswa Telah di Isi');

        $masuha = wali::create(array(
        	'nama' => 'masuha',
        	'alamat' => 'jln ciraos',
        	'mahasiswa_id' => $aceng->id
        ));

        $bambang = wali::create(array(
        	'nama' => 'bambang',
        	'alamat' => 'jln ciodeng',
        	'mahasiswa_id' => $akum->id
        ));

        $brow = wali::create(array(
        	'nama' => 'brow',
        	'alamat' => 'jln pejuang cinta',
        	'mahasiswa_id' => $dadang->id
        ));
        $this->command->info('Data Wali Telah di Isi');

        $matkul_mahasiswa = matkul_mahasiswa::create(array(
        	'mahasiswa_id' => $mahasiswa->id,
        	'mapel_id' => $mata_kuliah->id
        ));
        $this->command->info('Data Matkul Mahasiswa Telah di Isi');
    }
}