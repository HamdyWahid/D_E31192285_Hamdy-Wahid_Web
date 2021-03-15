<?php 
class tugas4_model extends CI_Model {
    public function get_data()
	{
        $data_mahasiswa = [
			["nama"=>"Hamdy Wahid","nim"=>"E31192285"],
			["nama"=>"Lancelot","nim"=>"E311111111"],
			["nama"=>"Vale","nim"=>"E3116123124"] 
        ];
        return $data_mahasiswa;
	}
}
?>