<?php

class Banner{
	
	private $data = array();
	
	public function __construct($row){
		$this->data = $row;
	}
	
	public function html(){
		
		/* This method returns the banner's HTML code */
		
		$d = &$this->data;
		$d['company'] = htmlspecialchars($d['company']);
		
		return '
			<div class="banner">
				<a href="'.$d['url'].'">
					<img src="img/banners/'.$d['image'].'" alt="'.$d['company'].'" width="125" height="125" />
				</a>
				<p class="companyInfo">Visit '.$d['company'].'</p>
				<div class="cornerTL"></div>
				<div class="cornerTR"></div>
				<div class="cornerBL"></div>
				<div class="cornerBR"></div>
			</div>';
	}

}

?>