
<?php
//Q11:
//11-Use a cookie to change the default website background color. choose the new color from a dropdown menu of colors
echo "<br>";
echo "<a href='set_color.php'>Change Background Color</a>";
echo "<br>";
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table width="250px" style="border-collapse: collapse; border: 1px solid black">
        <?php

        //1- Write a PHP script using a nested for loop that creates a chessboard.

        echo "Q1:";
        echo "<br>";
        echo "<br>";

        // Outer loop for rows
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>"; // Start a new table row

            // Inner loop for columns
            for ($col = 1; $col <= 8; $col++) {
                // Calculate total sum of row and column indices
                $total = $row + $col;

                // Check if total is even or odd to determine cell color
                if ($total % 2 == 0) {
                    // If total is even, set cell background color to white
                    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                } else {
                    // If total is odd, set cell background color to black
                    echo "<td height=30px width=30px bgcolor=#000000></td>";
                }
            }
            echo "</tr>"; // End the table row

        }
        ?>
    </table>
</body>

</html>



<?php
echo "<hr>";
echo "Q2:a";
echo "<br>";
echo "<br>";
//2- write a PHP program to print this shape (using nested loop)
//ascending triangle
for ($x = 1; $x <= 5; $x++) { //outer loop
    for ($y = 1; $y <= $x; $y++) { //inner loop
        echo "<text style='color:grey; padding-left:7px ;text-align: center'>*</text>";
    }
    echo "<br>";
}
//descending triangle
for ($x = 4; $x >= 1; $x--) { //outer loop
    for ($y = 1; $y <= $x; $y++) { //inner loop
        echo  "<text style='color:grey ; padding-left:7px ;text-align: center'>*</text>";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";

//q2:b
for ($x = 1; $x <= 5; $x++) { //outer loop
    for ($y = 1; $y <= $x; $y++) { //inner loop
        echo  "<text style='color:grey ; padding-left:7px '>*</text>";
    }
    echo "<br>";
}
for ($x = 5; $x >= 1; $x--) { //outer loop
    for ($y = 1; $y <= $x; $y++) { //inner loop
        echo  "<text style='color:grey ; padding-left:7px'>*</text>";
    }
    echo "<br>";
}
echo "<br>";

//q2:c
//*
//***
//*****
//***
//*
for ($x = 1; $x <= 5; $x++) { //outer loop
    for ($y = 5; $y <= (2 * $x - 1); $y++) { //inner loop
        echo "<text style='color:grey ;padding-left:7px'>*</text>";
    }
    echo "<br>";
}
for ($x = 4; $x >= 1; $x--) { //outer loop
    for ($y = 5; $y <= (2 * $x - 1); $y++) { //inner loop
        echo "<text style='color:grey ;padding-left:7px'>*</text>";
    }
    echo "<br>";
}
echo "<hr>";

echo "Q3:";
echo "<br>";
echo "<br>";
//3- $array = [2,4,3,1,6,7,5,8,0,9] .
//Write a PHP program to sort this array to ASC and also sort it as DESC .
//(without using built in functions)

//Given Array
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

//Sort Array ASC
for ($j = 0; $j < count($array); $j++) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($array[$i] > $array[$i + 1]) {
            $max = $array[$i + 1];
            $array[$i + 1] = $array[$i];
            $array[$i] = $max;
        }
    }
}
print_r($array);

echo "<br>";
echo "<br>";

//Sort Array DESC
for ($j = 0; $j < count($array); $j++) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($array[$i] < $array[$i + 1]) {
            $max = $array[$i + 1];
            $array[$i + 1] = $array[$i];
            $array[$i] = $max;
        }
    }
}
print_r($array);

echo "<hr>";

//Q4:
//4-write a program to calculate the avg of numbers array.
echo "Q4:";
echo "<br>";
echo "<br>";
//Given Array
$array = [20, 50, 30, 10, 60];
//calculate the avg of numbers array.
function calculateAverage($array)
{
    $sum = array_sum($array);
    return $sum / count($array);
}
$avg = calculateAverage($array);
echo "Average of Array is :" . $avg;

echo "<hr>";

//Q5:
//5-write a program to filter even numbers from an array, delete all even numbers. 
echo "Q5:";
echo "<br>";
echo "<br>";

//Given Array
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

// Function to filter out even numbers
function filterEvenNumbers($arr)
{
    $filteredArray = [];
    foreach ($arr as $value) {
        if ($value % 2 !== 0) { // Check if the number is odd
            $filteredArray[] = $value; // Add odd numbers to the new array
        }
    }
    return $filteredArray;
}
// Filter the array
$filteredArray = filterEvenNumbers($array);
// Output the original and filtered array
echo "Original Array: ";
print_r($array);
echo "<br>";
echo "<br>";
echo "Array after deleting even numbers: ";
print_r($filteredArray);
echo "<hr>";

//Q6:
//6-write a program to find the max number of numbers group [10,30,20],using if.
echo "Q6:";
echo "<br>";
echo "<br>";
//Given Array
$array = [10, 30, 20];
//find the max number of numbers group [10,30,20],using if.
if ($array[0] > $array[1] && $array[0] > $array[2]) {
    echo "The maximum number is: " . $array[0];
} elseif ($array[1] > $array[0] && $array[1] > $array[2]) {
    echo "The maximum number is: " . $array[1];
} else {
    echo "The maximum number is: " . $array[2];
}
echo "<hr>";


//Q7:
//7-7-Write a PHP script to increment date by one month
//Sample date : 2012-12-21
//Expected Output : 2013-01-21.
echo "Q7:";
echo "<br>";
echo "<br>";
//Given Date
$givenDate = "2012-12-21";
//Increment date by one month
$newDate = date("Y-m-d", strtotime("+1 month", strtotime($givenDate)));
echo "New Date: " . $newDate;
echo "<hr>";


//Q8:
//8-Write a PHP script to get the number of the month before the current month.
echo "Q8:";
echo "<br>";
echo "<br>";
//Get the number of the month before the current month
echo "The number of the month before the current month is: " . date("m", strtotime("-1 month"));
echo "<hr>";

//Q9:
//9-Write a PHP script that checks if a string contains another string.(using regular-expression).
echo "Q9:";
echo "<br>";
echo "<br>";
//Given String
$givenString = "First Exam in php basics";
//Check if the string contains "world"
if (preg_match("/Exam/", $givenString)) {
    echo "The string contains 'Exam'";
} else {
    echo "The string does not contain 'Exam'";
}
echo "<hr>";

//Q10:
//10-Write a function to check whether a number is prime or not.
echo "Q10:";
echo "<br>";
echo "<br>";
//Function to check if a number is prime or not
function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;  // Found a factor, so it's not prime
        }
    }
    return true; // No factors found, it's prime
}

// Test the function
$Numbers = [1, 3, 7, 9];
//Check if a number is prime or not
foreach ($Numbers as $num) {
    if (isPrime($num)) {
        echo $num . " is a prime number.<br>";
    } else {
        echo $num . " is not a prime number.<br>";
    }
}
echo "<hr>";


//Q11:
//11-Use a cookie to change the default website background color. choose the new color from a dropdown menu of colors

  




