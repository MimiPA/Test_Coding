<?php
function findSecondLargest(array $arr)
{
    //sort the array in ascending order
    sort($arr);
    //save the element from the second last position of sorted array
    $secondLargest = $arr[sizeof($arr) - 2];
    //return second-largest number
    return $secondLargest;
}

$random_number_array = range(0, 100);
shuffle($random_number_array);
$random_number_array = array_slice($random_number_array, 0, 5);

print_r($random_number_array);
echo "<br>";

//call the function and print output
echo "Second-largest number : " . findSecondLargest($random_number_array);
