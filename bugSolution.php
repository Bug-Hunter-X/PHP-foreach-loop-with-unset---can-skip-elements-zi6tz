function foo(array &$arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

//This is not correct, the correct way is to use the foreach with reference. 

function foo2(array &$arr) {
    $keysToRemove = [];
    foreach ($arr as $key => $value) {
        if ($value === 'bar') {
            $keysToRemove[] = $key;
        }
    }
    foreach ($keysToRemove as $key) {
        unset($arr[$key]);
    }
    return $arr;
}

$arr = ['foo', 'bar', 'bar', 'baz'];
$result = foo2($arr);
print_r($result); // Output: Array ( [0] => foo [3] => baz )

//Another solution is to use array_filter
$arr = ['foo', 'bar', 'bar', 'baz'];
$result = array_filter($arr, fn($value) => $value !== 'bar');
print_r($result); // Output: Array ( [0] => foo [3] => baz )