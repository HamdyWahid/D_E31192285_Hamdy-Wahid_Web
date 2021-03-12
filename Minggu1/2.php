<?php
class kendaraan {
    public $jeniskendaraan;
    public $jumlahroda;
    public $merk;
    public $bahanbakar;
    public $harga;
    public $tahunpembuatan;

    //method
    public function penentuan()
    {
    if ($this -> bahanbakar == "Premium" && $this -> tahunpembuatan <= "2005")$status='Subsidi'; 
    else $status='NonSub';
        return $status;
    }
    
}

//Instance
$supra = new kendaraan ();

//Get Values
echo $supra -> jeniskendaraan;
echo "<br />";

//Set Value
$supra -> jeniskendaraan = 'Motor';
$supra -> jumlahroda = 'Dua';
$supra -> merk = 'Honda Supra Fit';
$supra -> bahanbakar = 'Premium';
$supra -> harga = '500.000';
$supra -> tahunpembuatan = '2004';

//Get Values
echo $supra -> jeniskendaraan;
echo "<br />";
echo $supra -> jumlahroda;
echo "<br />";
echo $supra -> merk;
echo "<br />";
echo $supra -> bahanbakar;
echo "<br />";
echo $supra -> harga;
echo "<br />";
echo $supra -> tahunpembuatan;
echo "<hr />";

// Methods 
echo $supra -> penentuan();
echo "<hr />";

?>