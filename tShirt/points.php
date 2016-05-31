<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$res = array();

for ($i=1;$i<13;$i++){

	$pts = json_decode(file_get_contents('data/'.$i.'.json'), true);
	

	foreach ($pts as $key=>$point) {
		$point = json_decode($point, true);
		$res[$key] = $point;
		// echo $point['latitude'].' ,'.$point['longitude'].'<br>';
	}
	file_put_contents('data/'.$i.'.json', json_encode($res));
}


?>