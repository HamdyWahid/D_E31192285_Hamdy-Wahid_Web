<?php 
//declare class
class kendaraan{
    //properties
    public $jeniskendaraan;
    public $jumlahroda;
    public $merk;
    public $bahanbakar;
    public $warna;
    public $tahunpembuatan;


    //method
    function hargasecond()
    {
        if ($this->tahunpembuatan > 2010) $status ='20 persen turun' ;
        elseif ($this->tahunpembuatan > 2005) $status ='30 persen turun';
        else $status ="40 persen turun";
        return $status;
    }
    function setMerk($x)
    {
        $this->merk = $x;
    }
    function setTahunPembuatan($x)
    {
        $this->tahunpembuatan = $x;
    }
}
$kendaraan = new kendaraan();
$kendaraan->setMerk("Legenda");
$kendaraan->setTahunPembuatan(2004);
echo "Motor ".$kendaraan->merk." tahun pembuatan ".$kendaraan->tahunpembuatan." berapa persen mendapatkan penurunan ? ".$kendaraan->hargasecond();
?>