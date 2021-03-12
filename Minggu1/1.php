<?php
class Buku {
    public $judulbuku;
    public $pengarang;
    public $penerbit;
    public $tahunterbit;
    public $cetakan;

    //method = hello
    public function hello ()
    {
        return "beep";
    }
}

//Instance
$laskar = new Buku ();

//Get Values
echo $laskar -> pengarang;
echo "<br />";

//Set Value
$laskar -> judulbuku = 'Laskar Pelangi';
$laskar -> pengarang = 'Andrea Hirata';
$laskar -> penerbit = 'Gramedia';
$laskar -> tahunterbit = '2007';
$laskar -> cetakan = "Buku";

//Get Values
echo $laskar -> judulbuku;
echo "<br />";
echo $laskar -> pengarang;
echo "<br />";
echo $laskar -> penerbit;
echo "<br />";
echo $laskar -> tahunterbit;
echo "<br />";
echo $laskar -> cetakan;
echo "<hr />";
?>