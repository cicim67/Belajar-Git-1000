<?php
// Nama  	:
// NIM		:kkk

class age{
	public $umur;

	function __construct($date){
		$this->umur = $date;
	}
	
	function getUmur(){
		if(!empty($this->umur)){
			
		$interval = date_diff(date_create(), date_create($this->umur));
		return $interval->format("%y Tahun, %m Bulan, %d Hari");
		}else {
			return "<font color='red'>data tidak falid</font>";
		}
	}
	}
?>
