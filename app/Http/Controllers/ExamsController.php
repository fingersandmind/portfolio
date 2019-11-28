<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function all()
    {
        $this->tensTable(10);
        $this->secondHighestNumberArray([1300, 2500, 1000, 1560, 1550, 1552]);
        $this->increasingNumber(10);
    }
    public function tensTable($num)
    {
        echo "******[Multiplication Table]******". "<br><br>";
        $index = 0;
        while($index < $num)
        {
            $index++;
            $num1 = 0;
            for($i=0; $i<$num;$i++)
            {
                $num1 += $index;
                echo $num1 . '&nbsp';
            }
            echo "<br>";
        }
        echo "<br><br>";
    }

    public function secondHighestNumberArray($arrs)
    {

        echo "******[Second Highest Number In Array]******". "<br><br>";
        
        foreach($arrs as $arr)
        {
            echo $arr. " ";
        }
        sort($arrs);
        $count = count($arrs);
        echo "<br>";
        echo "The second Highest number in Array is " . $arrs[$count-2];
        echo "<br><br>";
    }

    public function increasingNumber($num)
    {
        echo "******[Increasing Number]******". "<br><br>";
        $i = 1;
        while($i < $num)
        {
            for($j=0; $j<$i; $j++)
            {
                echo $j+1 . ' ';
            }
            echo "<br>";
            $i++;
        }
    }
}
