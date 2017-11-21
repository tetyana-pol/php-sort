
<?php
class MySort{
	public function sortVstavka($mas){
		$n=count($mas); 
		for ($i=1; $i<$n; $i++){
	
		if($mas[$i]<$mas[$i-1]){
		 $temp=$mas[$i]; 
		 array_splice($mas, $i, 1);  
		for ($j=0; $j<$i; $j++){
			if ($mas[$j]>$temp){
				array_splice($mas, $j, 0, $temp);
				break;
			}
	 }}
	 }
	return $mas;
}
	public function sortBulbashka($mas){
		$n=count($mas); $k=$n-1;
		for ($i=0; $i<$n; $i++, $k--){
		for ($j=0; $j<$k; $j++ ){
		
		if ($mas[$j]>$mas[$j+1]){ 
		   $pr=$mas[$j];
		   $mas[$j]=$mas[$j+1];
		   $mas[$j+1]=$pr; }
	}
	
}
	}
	}


class TestArray extends PHPUnit_Framework_TestCase{
	private $sortarray;
 
    protected function setUp()
    {
        $this->sortarray = new MySort();
    }
 
    protected function tearDown()
    {
        $this->sortarray = NULL;
    }

public function testsortVstavka()
{

$arr = array(23, 42, 108);
$exp = array(42, 23, 108);
$result=$this->sortarray.sortVstavka($exp);

$this->assertEquals(json_encode($exp), json_encode($arr));
}	
}	


