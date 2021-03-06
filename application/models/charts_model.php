<?php defined('BASEPATH') or exit('Access denied');

class Charts_model extends CI_Model {

	public function get_data(){
		$query = "SELECT * FROM blocks ";
        $units = $this->db->query($query)->result_array();
        $jsonArray = array();

       
        	foreach ($units as $key => $row)  {
        		$jsonArrayItem = array();
        		$jsonArrayItem['label'] = $row['block_name'];  
        		$jsonArrayItem['value'] = $row['totalunits'];
        		array_push($jsonArray, $jsonArrayItem);
        	}

     header('Content-type: application/json');
       echo json_encode($jsonArray);


	}

    public function block_rent_details($block,$from, $to){
        $query = "SELECT date, expected_rent_sum FROM rent_sum WHERE block_name ='" . $block . "' AND date BETWEEN '". $from ."' AND '". $to ."'";
        return $this->db->query($query)->result_array();
    }
}