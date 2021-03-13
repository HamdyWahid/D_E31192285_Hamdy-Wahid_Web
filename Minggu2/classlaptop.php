<?php 
//declare class
class laptop{
    //properties
    public $pemilik;
    public $merk;

    //method
    function hidupkan_laptop()
    {
        return "Laptop Telah Hidup";
    }
    function matikan_laptop()
    {
        return "Laptop Telah Mati";
    }
    function restart_laptop()
    {
    }
    function setpemilik($x)
    {
        $this->pemilik = $x;
    }
    function setmerk($x)
    {
        $this->merk = $x;
    }
}
$laptop = new laptop();
$laptop->setpemilik("Hamdy");
$laptop->setmerk("Asus Rog");
echo "Hidupkan Laptop ".$laptop->merk." Punya ".$laptop->pemilik.", ".$laptop->hidupkan_laptop();
echo "<hr />";
echo "Matikan Laptop ".$laptop->merk." Punya ".$laptop->pemilik.", ".$laptop->matikan_laptop();
echo "<hr />";
echo "Matikan Laptop ".$laptop->merk." Punya ".$laptop->pemilik.", ".$laptop->restart_laptop();
echo "<br />";
echo "Hidupkan Laptop ".$laptop->merk." Punya ".$laptop->pemilik.", ".$laptop->restart_laptop();
echo "<hr />";
$laptop2 = new laptop();
$laptop2->setpemilik("A");
$laptop2->setmerk("Asus");
echo "Hidupkan Laptop ".$laptop2->merk." Milik ".$laptop2->pemilik.", ".$laptop2->hidupkan_laptop();
echo "<br />";
$laptop3 = new laptop();
$laptop3->setpemilik("B");
$laptop3->setmerk("Acer");
echo "Hidupkan Laptop ".$laptop3->merk." Milik ".$laptop3->pemilik.", ".$laptop3->hidupkan_laptop();
echo "<br />";
$laptop4 = new laptop();
$laptop4->setpemilik("C");
$laptop4->setmerk("Lenovo");
echo "Matikan Laptop ".$laptop4->merk." Milik ".$laptop4->pemilik.".Hidupkan Laptop ".$laptop4->merk." Milik ".$laptop4->pemilik.".";
echo "<hr />";
?>