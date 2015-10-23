<?
class header_constract {
	private $head_bloks='';
	function header_constract($title){
		$head_bloks='<title>'.$title.'</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link type="image/x-icon" href="favicon.ico" rel="shortcut icon">';
	}
	function ad_css($path){
		$head_bloks=$head_bloks.'<link rel="stylesheet" href='.$path.' type="text/css">';
	}
	function ad_js($code){
		$head_bloks=$head_bloks.'<script>'.$code.'</script>';
	}
	function ad_js_link($path){
		$head_bloks=$head_bloks.'';
	}
		function ad_meta($path){
		$head_bloks=$head_bloks.'';
	}
	function getheader(){
		return $head_bloks;
	}
}
?>