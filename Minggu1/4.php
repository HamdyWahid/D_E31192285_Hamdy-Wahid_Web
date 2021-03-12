<?php 
//declare class
class rumah{
    //properties
    public $warna;
    public $bentuk;
    public $air;
    public $luas;
    public $tahunpembuatan;

    //method
    function barulama()
    {
        if ($this->tahunpembuatan > 2009) $status ='Baru' ;
        else $status ='Lama';
        return $status;
    }
    function unik()
    {
        if ($this->bentuk == "kotak") $status ='Tidak Unik' ;
        else $status ='Unik';
        return $status;
    }
    function bor()
    {
        if ($this->air == "PDAM") $status ='iya' ;
        else $status ='tidak';
        return $status;
    }

    function setwarna($x)
    {
        $this->warna = $x;
    }
    function setTahunPembuatan($x)
    {
        $this->tahunpembuatan = $x;
    }
    function setAir($x)
    {
        $this->air = $x;
    }
    function setbentuk($x)
    {
        $this->bentuk = $x;
    }
}
$rumah = new rumah();
$rumah->setwarna("Putih");
$rumah->setTahunPembuatan(2019);
$rumah->setAir("Sumur");
$rumah->setbentuk("Bulat");
echo "Rumah ".$rumah->warna." tahun pembuatan ".$rumah->tahunpembuatan." apakah rumah baru ? ".$rumah->barulama();
echo "<hr />";
echo "Rumah ".$rumah->bentuk." Apakah Unik ? ".$rumah->unik();
echo "<hr />";
echo "Air ".$rumah->air." Apakah menggunakan PDAM ? ".$rumah->bor();
echo "<hr />";
?>