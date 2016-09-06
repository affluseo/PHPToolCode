<?php
header('content-type:text/html;charset=utf-8');

class Triangle {
	/**
	   实心三角形
		*
	   ***
	  *****
	*/
	public function solidTriangle($n){
		for ($i = 1; $i <= $n; $i++) {
			for ($j = 1; $j <= $n - $i; $j++) {
				echo '#';
			}
			for ($k =1 ; $k <= $i * 2 - 1; $k++) {
				echo '*';
			}
			echo '<br/>';
		}
	}
	

	/*空心三角形
		
		*
	   * *
	  *****
	*/
	public function  hollowTriangle($n){
		for ($i = 1; $i <= $n; $i++) {
			for ($j = 1; $j <= $n-$i; $j++) {
				echo '#';
			}
			for($k = 1; $k <= $i * 2 - 1; $k++) {
				if ($i == 1 || $i == $n || $k == 1 || $k == $i * 2 - 1) {
					echo '*';
				} else {
					echo '#';
				}
			}
			echo '<br/>';
		}
	}
	

	/*
		实心菱形
		 *
		***
	   *****
	    ***
	     *
	 */
	public function solidDiamond($n){
		//上部分
		for ($i = 1; $i <= $n; $i++) {
			for ($j = 1; $j <= $n - $i; $j++) {
				echo '#';
			}
			for ($k = 1; $k <= $i * 2 - 1 ; $k++) {
				echo '*';
			}
			echo '<br/>';
		}
		//下部分
		for ($i = ($n - 1); $i >= 1; $i--) {
			for ($j = 1; $j <= $n - $i; $j++) {
				echo '#';
			}
			for ($k = 1; $k <= $i * 2 - 1; $k++) {
				echo '*';
			}
			echo '<br/>';
		}
	}

	/*
		实心菱形
		 *
		* *
	   *   *
	    * *
	     *
	 */
	public function  hollowDiamond($n){
		//上部分
		for ($i = 1; $i <= $n; $i++) {
			for ($j = 1; $j <= $n - $i; $j++) {
				echo '#';
			}
			for ($k = 1; $k <= $i * 2 - 1; $k++) {
				if ($i == 1 || $k == 1 || $k == $i * 2 - 1) {
					echo '*';
				} else {
					echo '#';
				}
			}
			echo '<br/>';
		}
		//下部分
		for ($i= ($n - 1); $i >= 1; $i--) {
			for ($j = 1; $j <= $n - $i; $j++) {
				echo '#';
			}
			for ($k = 1; $k <= $i * 2 - 1; $k++) {
				if ($i == 1 || $k == 1 || $k == $i * 2 - 1) {
					echo '*';
				} else {
					echo '#';
				}
			}
			echo '<br/>';
		}
	}
	
}

$a = new Triangle;
$a->solidDiamond(6);