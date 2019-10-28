<?php
class sepeda{
	private $merk;
	private $harga;
	private $warna;
	private $tipe;
	
	function __construct ($merk,$harga,$warna,$tipe){
		$this->merk=$merk;
		$this->harga=$harga;
		$this->warna=$warna;
		$this->tipe=$tipe;
	}

	function bacamerk(){
		return $this->merk;
	}

	function bacaharga(){
		return $this->harga;
	}

	function bacawarna(){
		return $this->warna;
	}

	function bacatipe(){
		return $this->tipe;
	}

}
$sepeda = new sepeda("wimcycle",100000000,"hitam","sepedabmx");
echo " merk sepeda &nbsp;&nbsp;&nbsp;&nbsp;=&nbsp; ".$sepeda->bacamerk()."<br>";
echo " harga sepeda &nbsp;&nbsp;&nbsp;=&nbsp; ".$sepeda->bacaharga()."<br>";
echo " warna sepeda &nbsp;  =&nbsp; ".$sepeda->bacawarna()."<br>";
echo " tipe sepeda &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;=&nbsp; ".$sepeda->bacatipe()."<br>";
?>