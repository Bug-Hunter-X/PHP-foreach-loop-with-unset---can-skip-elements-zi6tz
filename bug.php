function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//The issue happens when you modify an array using unset() inside a foreach loop in php
//The key is not adjusted automatically so you may miss some values.

$arr = ['foo', 'bar', 'bar', 'baz'];
$result = foo($arr);
print_r($result); //Output: Array ( [0] => foo [2] => baz )
//The second 'bar' is skipped