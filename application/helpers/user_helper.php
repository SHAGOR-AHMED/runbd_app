<?php

function getMembers()
{
    $ci = &get_instance();
    $ci->load->database();
    $data = $ci->db->select('member_id,member_name')->from('tbl_members')->order_by('member_id','DESC')->get()->result();
    echo '<option value="0">-- Select a member  --</option>';
    foreach ($data as $dd) {
        echo '<option value="' . $dd->member_id . '" >' . $dd->member_name. '</option><br />';
    }
}

function getBikes()
{
    $ci = &get_instance();
    $ci->load->database();
    $data = $ci->db->select('bike_id,bike_name')->from('tbl_bikes')->get()->result();
    echo '<option value="0">-- Select a bike  --</option>';
    foreach ($data as $dd) {
        echo '<option value="' . $dd->bike_id . '" >' . $dd->bike_name. '</option><br />';
    }
}

function getBikeCategory()
{
    $ci = &get_instance();
    $ci->load->database();
    $data = $ci->db->select('bike_id,bike_category')->from('tbl_bikes')->get()->result();
    echo '<option value="0">-- Select a bike category  --</option>';
    foreach ($data as $dd) {
        echo '<option value="' . $dd->bike_id . '" >' . $dd->bike_category. '</option><br />';
    }
}

function getBikesNo()
{
    $ci = &get_instance();
    $ci->load->database();
    $data = $ci->db->select('bike_id,bike_no')->from('tbl_bikes')->get()->result();
    echo '<option value="0">-- Select a bike no  --</option>';
    foreach ($data as $dd) {
        echo '<option value="' . $dd->bike_id . '" >' . $dd->bike_no. '</option><br />';
    }
}

function getAllCountryList()
{
    $ci =& get_instance();
    $ci->load->database();
    $data = $ci->db->select('*')->from('countries')->get()->result();

    foreach ($data as $d) {
        echo '<option value="' . $d->id . '" />  ' . $d->con_name . '<br />';
    }
}

function getAllStatesByCountryId($country_id)
{
    $ci =& get_instance();
    $ci->load->database();
    $data = $ci->db->select('*')->from('states')->where('country_id', $country_id)->get()->result();
    $out = '';
    foreach ($data as $dd) {
        $out .= '<option value="' . $dd->id . '" >  ' . $dd->st_name . '</option><br />';
    }
    echo empty($out) ? 'Not Set' : $out;
}

function SelectedInfo($val){
    
    switch ($val) {
        case 1:
            echo "TVS";
            break;
        case 2:
            echo "RUNNER";
            break;
        case 3:
            echo "RKS";
            break;
        case 4:
            echo "SUZUKI";
            break;
        default:
            echo "";
    }
}

function SelectedMonth($val){
    
    switch ($val) {
        case 1:
            echo "January";
            break;
        case 2:
            echo "February";
            break;
        case 3:
            echo "March";
            break;
        case 4:
            echo "April";
            break;
        case 5:
            echo "May";
            break;
        case 6:
            echo "Jun";
            break;
        case 7:
            echo "July";
            break;
        case 8:
            echo "August";
            break;
        case 9:
            echo "September";
            break;
        case 10:
            echo "October";
            break;
        case 11:
            echo "November";
            break;
        case 12:
            echo "December";
            break;
        default:
            echo "";
    }
}

function SelectedStatus($val){
    
    switch ($val) {
        case 1:
            echo "<label class='badge badge-success'>"."Servicing Done"."</label>";
            break;
        case 0:
            echo "<label class='badge badge-danger'>"."Not Done"."</label>";
            break;
        default:
            echo "";
    }
}

function BikeStatus($val){
    
    switch ($val) {
        case 1:
            echo "<label class='badge badge-success'>"."Riding"."</label>";
            break;
        case 0:
            echo "<label class='badge badge-danger'>"."Returned"."</label>";
            break;
        default:
            echo "";
    }
}

function generatePaymentMethod($val){
	
	switch ($val) {
		case 1:
			echo "Cash";
			break;
		case 2:
			echo "bKash";
			break;
		default:
			echo "";
	}
}