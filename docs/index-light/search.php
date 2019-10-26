<?php
/************************************************
	The Search PHP File
************************************************/


/************************************************
	MySQL Connect
************************************************/
session_start();
echo "hi this is search1";
echo "<br>";
$dbc = mysqli_connect("localhost", "id2294856_browniecommande", "brownie77", "id2294856_browniebase");
echo "hi this is search2";
if (mysqli_connect_error()) {
            
    die ("Database Connection Error");
    
}
//$page_title='Register';
//include('./includes/header.html');
echo "hi this is search3";




/************************************************
	Search Functionality
************************************************/

// Define Output HTML Formating
$html = '';
$html .= '<li class="result">';
$html .= '<a target="_self" href="urlString">';
$html .= '<h3></h3>';
$html .= '<h4>functionString</h4>';
$html .= '<h4>nameString</h4>';
$html .= '<h4>functionPhone</h4>';
$html .= '</a>';
$html .= '</li>';
echo "<br>";
echo $html;
// Get Search
$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);
echo $search_string ;
//$search_string = $tutorial_db->real_escape_string($search_string);
//$dbc
$search_string = $dbc->real_escape_string($search_string);
// Check Length More Than One Character
if (strlen($search_string) >= 1 && $search_string !== ' ') {
	// Build Query
	// Build Query
	$query = 'SELECT * FROM id2294856_browniebase.customers WHERE customerFN LIKE "%'.$search_string.'%" OR customerLN LIKE "%'.$search_string.'%" OR customerPHONE LIKE "%'.$search_string.'%"OR customerID LIKE "%'.$search_string.'%"';

	// Do Search
	//$result = $tutorial_db->query($query);
	$result = $dbc->query($query);
	while($results = $result->fetch_array()) {
		$result_array[] = $results;
	}
    
	// Check If We Have Results
	if (isset($result_array)) {
		foreach ($result_array as $result) {

			// Format Output Strings And Hightlight Matches
			$display_function = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['customerFN']);
			$display_name = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['customerLN']);
			$display_phone = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['customerPHONE']);
			$display_url = 'https://browniecommande.000webhostapp.com/neworder02_action.php/?customerFN='.$result['customerFN'].'&customerLN='.$result['customerLN'].'&customerID='.$result['customerID'].'&customerPHONE='.$result['customerPHONE'];
			// /!\ GOOD PHONE NUMBER and CUSTOMER ID to be saved in javascript later /!\

			//display_url = 'https://browniecommande.000webhostapp.com/neworder2.php/?customerFN='.$result['customerFN'].'&customerLN='.$result['customerLN'];
			//$display_url='http://swcommandes.rf.gd/10_product_select_work4.php/?action=add&quantity=1&code='.$result['code'];
      
			// Insert Name
			$output = str_replace('nameString', $display_name, $html);

			// Insert Function
			$output = str_replace('functionString', $display_function, $output);

			
			// Insert Function
			$output = str_replace('functionPhone', $display_phone, $output);
			
			
			// Insert URL
			$output = str_replace('urlString', $display_url, $output);

			// Output
			echo($output);
			
		}
	}else{
         
		// Format No Results Output
		$display_url = 'https://browniecommande.000webhostapp.com/newcustomer1.php';
		$output = str_replace('urlString', $display_url, $html);
		//$output = str_replace('urlString', 'javascript:void(0);', $html);
		$output = str_replace('nameString', '<b>Pas de client</b>', $output);
		$output = str_replace('functionString', 'Desole :(', $output);
		$output = str_replace('functionPhone', 'Enregistrer Nouveau Client', $output);
		// Output
		echo($output);
	}
}


/*
// Build Function List (Insert All Functions Into DB - From PHP)

// Compile Functions Array
$functions = get_defined_functions();
$functions = $functions['internal'];

// Loop, Format and Insert
foreach ($functions as $function) {
	$function_name = str_replace("_", " ", $function);
	$function_name = ucwords($function_name);

	$query = '';
	$query = 'INSERT INTO search SET id = "", function = "'.$function.'", name = "'.$function_name.'"';

	$tutorial_db->query($query);
}
*/
?>