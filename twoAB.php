<?php
class Siswa
{
    // Properties
    public $nrp;
    public $nama;
    public $daftarNilai = [];

    function __construct($nrp, $nama)
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
    }

    function getNrp()
    {
        return $this->nrp;
    }

    function getNama()
    {
        return $this->nama;
    }

    function addNilai($mapel, $nilai)
    {
        $daftarNilai[0] = $mapel;
        $daftarNilai[1] = $nilai;
        return implode(" ", $daftarNilai);
    }
}

class Nilai
{
    public $mapel;
    public $nilai;

    // Methods
    function set_mapel($mapel)
    {
        $this->mapel = $mapel;
    }
    function get_mapel()
    {
        return $this->mapel;
    }
    function set_nilai($nilai)
    {
        $this->nilai = $nilai;
    }
    function get_nilai()
    {
        return $this->nilai;
    }
}

$siswa = new Siswa("1234", "Mimi");
$nilai = new Nilai();
$nilai->set_mapel("Inggris");
$nilai->set_nilai(100);

echo $siswa->getNrp() . " " . $siswa->getNama() . " " . $siswa->addNilai($nilai->get_mapel(), $nilai->get_nilai());


// Soal no 2 bagian C
//Generate Name
function generateRandomString($length = 10)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

//Generate NRP
function generateRandomNrp($length = 4)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}


function createSiswa()
{
    $daftarSiswa = [];
    $arr = [];
    $mapel = ["Inggris", "Indonesia", "Jepang"];

    for ($i = 0; $i < 10; $i++) {
        $siswa = new Siswa(generateRandomNrp(), generateRandomString());
        $nilai = new Nilai();
        $nilai->set_mapel(array_rand($mapel, 1));
        $nilai->set_nilai(rand(0, 100));
        array_push($arr, $siswa->getNrp(), $siswa->getNama(), $nilai->get_mapel(), $nilai->get_nilai());
        array_push($daftarSiswa, $arr);
    }
    return $daftarSiswa;
}

echo "<br>";
print_r(createSiswa());
