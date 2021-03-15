<?php
interface hitungluas{
    public function luasBangun();    
}
class hitungLuasLingkaran implements hitungluas {
    private $diameter = 6;

    public function __construct($diameter)
    {
        $this ->diameter =$diameter;
    }

    public function luasBangun()
    {
        return $this -> diameter * $this -> diameter * pi();
    }
}
class hitungLuasPersegi implements hitungluas {
    private $sisi = 4;

    public function __construct($sisi)
    {
        $this ->sisi =$sisi;
    }

    public function luasBangun()
    {
        return $this -> sisi * $this -> sisi;
    }
}
class hitungLuasSegitiga implements hitungluas {
    private $alas = 12;
    private $tinggi = 10;

    public function __construct($alas, $tinggi)
    {
        $this ->alas =$alas;
        $this ->tinggi=$tinggi;
    }

    public function luasBangun()
    {
        return $this -> alas * $this -> tinggi;
    }
}
$persegi = new hitungLuasPersegi(4);
echo 'Luas Persegi = '. $persegi->luasBangun() . "<br>";

$segitiga = new hitungLuasSegitiga(12,10);
echo 'Luas Segitiga = '. $segitiga->luasbangun() . "<br>";

$lingkaran = new hitungLuasLingkaran(6);
echo 'Luas Lingkaran = '. $lingkaran->luasbangun() . "<br>"; 
?>