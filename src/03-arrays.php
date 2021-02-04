<?php
/**
 * The $input variable contains an array of digits
 * Return an array which will contain the same digits but repetitive by its value
 * without changing the order.
 * Example: [1,3,2] => [1,3,3,3,2,2]
 *
 * @param  array  $input
 * @return array
 */
function repeatArrayValues(array $input) {
	$a=[1,2,3,4,5];
	$num = $a[i];
	for($i=0; $i<=count($a); $i++){
  		return($num); 
  	}
}
print_r(array_map("repeatArrayValues",$num));
/**
 * The $input variable contains an array of digits
 * Return the lowest unique value or 0 if there is no unique values or array is empty.
 * Example: [1, 2, 3, 2, 1, 5, 6] => 3
 *
 * @param  array  $input
 * @return int
 */
function getUniqueValue() {
	if(in_array($array[i], $array) == false) {
		$array_2 = array_map("getUniqueValue",$array);
		$array_3 = arsort($array_2);
		$array_4 = array_slice($array_3, 1, 6);
	}
}
$array = [1, 2, 3, 2, 1, 5, 6];
print_r(array_map("getUniqueValue", $array_4));

/**
 * The $input variable contains an array of arrays
 * Each sub array has keys: name (contains strings), tags (contains array of strings)
 * Return the list of names grouped by tags
 * !!! The 'names' in returned array must be sorted ascending.
 *
 * Example:
 * [
 *  ['name' => 'potato', 'tags' => ['vegetable', 'yellow']],
 *  ['name' => 'apple', 'tags' => ['fruit', 'green']],
 *  ['name' => 'orange', 'tags' => ['fruit', 'yellow']],
 * ]
 *
 * Should be transformed into:
 * [
 *  'fruit' => ['apple', 'orange'],
 *  'green' => ['apple'],
 *  'vegetable' => ['potato'],
 *  'yellow' => ['orange', 'potato'],
 * ]
 *
 * @param  array  $input
 * @return array
 */
function groupByTag(array $input) {
	$matrix = [
 ['name' => 'potato', 'tags' => ['vegetable', 'yellow']],
 ['name' => 'apple', 'tags' => ['fruit', 'green']],
 ['name' => 'orange', 'tags' => ['fruit', 'yellow']],
 ];
  if($matrix['name'] = 'apple' || 'orange') {
  $fruit = array_map("groupByTag", $matrix);
  	else $vegetable = array_map("groupByTag", $matrix);
  }
}