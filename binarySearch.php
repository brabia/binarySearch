<?php
	/**
	-------------------------------------
	| binarySearch
	-------------------------------------
	*/
	
	class BinarySearch{
		public $left;
		public $right;
		public $debug;
		  
		public function __construct($arr){
			$this->debug = $arr['debug'];
		}
		
		public function isArray($array){
			return is_array($array);
		}
		
		public function binarySearch($value, $array){
			if(!$this->isArray($array)){
				echo '<h4>Please check your Array ..</h4>';
				return;
			}
			
			if($this->debug){
				echo '<h4>Reading your Array ..</h4>
				<pre>'; print_r($array); echo '</pre>
				<hr><h4>Sorting Array ..</h4>'; 
			}
			
			sort($array);
			
			if($this->debug){
				echo '<pre>'; print_r($array); echo '</pre><hr>';
			}
			
			$this->value = $value;
			$this->left = 0;
			$this->right = count($array)-1;
			
			while($this->left <= $this->right){
				if($this->debug){
					echo "<h4>Looking for $this->value ..</h4>";
				}
				$mid = ($this->left + $this->right) >> 1;
				if($this->debug){
					echo "<h4>$array[$mid] is the middle element of your array ..</h4>";
				}
				$m = ($this->left + $this->right);
				if($this->debug){
					echo "<h4>Comparing $this->value to $array[$mid]</h4>";
				}
				if($array[$mid] == $this->value){
					if($this->debug){
						echo "<h4>Hooray, we just found $array[$mid]</h4>";
					}
					return $mid;
				}elseif($array[$mid] > $this->value){
					$this->right = $mid - 1;
					if($this->debug){
						echo "<h4>Smaller, keep looking, $this->value should be on the left side of $array[$mid]</h4>";
					}
				}elseif ($array[$mid] < $this->value){
					$this->left = $mid + 1;
					if($this->debug){
						echo "<h4>Bigger, keep looking, $this->value should be on the right side of $array[$mid]</h4>";
					}
				}
				if($this->debug){
					echo "<hr>";
				}
			}
			return -1;
		}
	}
?>