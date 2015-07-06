<?php
class  address {
//name of street addresses
	public $street_address_1;
	public $street_address_1;
	
// name of city
	public $city_name;

//name of subdivision 
	public $subdivision;

//postal code
	public $postal_code;
	
//country
	public $country;
	
	
	function display()
	{
	$output='';
	//street address
	$output.= $this->$street_ address_1;
	if($this->$street_address_2){
		$output.='<br/>' .$this->street_address_2;
	
	// city ,subdivision and postal
$output .='<br/>';
$output .=$this->city_name. ','.$this->subdivision;
$output .= ''. $this->city_name;

// coumtry
$output .='<br/>';
$output .= $this->country;

	return $output;
	
	}
}?>