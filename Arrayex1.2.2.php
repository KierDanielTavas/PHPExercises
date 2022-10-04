<?php

$counter = 0;


$num = (int)readline("Input the number of elements to be stored in the array: ");
echo ("Input $num elements in the array: \n");
$arrNum[] = $num;

for ($i = 0; $i < $num; $i++) {
$arrNum[$i] = (int)readline("Enter element " . $i .": ");
$arrNum2[$i] = -1;
}

for($i=0; $i<$num; $i++)
    {
        $counter = 1;
        for($j=$i+1; $j<$num; $j++)
        {
            if($arrNum[$i]==$arrNum[$j])
            {
                $counter++;
                $arrNum2[$j] = 0;
            }
        }

        if($arrNum2[$i]!=0)
        {
            $arrNum2[$i] = $counter;
        }
    }

echo ("TThe frequency of all elements of array : ");
for($i=0; $i<$num; $i++)
    {
        if($arrNum2[$i]!=0)
        {
        echo $arrNum[$i] ."occurs". $arrNum2[$i]."time(s)";
        }
    }
?>