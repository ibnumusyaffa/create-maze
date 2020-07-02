<?php
//genap
function isEven($number)
{
    if ($number % 2 == 0) {
        return  true;
    }
    return false;
}

//ganjil
function isOdd($number)
{
    if ($number % 2 == 0) {
        return  false;
    }
    return true;
}


function createMaze($size)
{
    //validate the input
    if ($size <= 0) {
        throw new Exception("must be positive number");
    }

    //current state
    $currentGate = 2;
    $last = $size - 1;

    //print row
    for ($row = 1; $row <= $size; $row++) {

        //print column
        for ($column = 1; $column <= $size; $column++) {
            if ((isEven($row) && $column > 1 && $column < $size)) {
                echo " ";
            } else if ($column == $currentGate) {
                echo " ";
            } else {
                echo "@";
            }
        }
        echo "\n";

        //switch the gate
        if (isOdd($row)) {
            $currentGate = $currentGate == 2 ? $last : 2;
        }
    }
}

createMaze(15);
