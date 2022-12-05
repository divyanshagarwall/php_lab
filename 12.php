<?php
class armstrong
{
    public function armstrongCheck($number)
    {
        $sum = 0;
        $x = $number;
        while ($x != 0) {
            $rem = $x % 10;
            $sum = $sum + $rem * $rem * $rem;
            $x = $x / 10;
        }

        if ($number == $sum)
            return 1;

        return 0;
    }
}
$number = 33;
$obj = new armstrong();


$flag = $obj->armstrongCheck($number);

if ($flag == 1)
    echo "Yes it is an Armstrong number";
else
    echo "No it is not an Armstrong number"
    ?>