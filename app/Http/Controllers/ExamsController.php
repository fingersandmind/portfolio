<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function all()
    {
        $this->tensTable(10);
        $this->thirdHighestNumberArray([1000, 2000, 3000, 4000, 5000, 6000]);
        $this->increasingNumber(10);
        $this->pyramidStars(10);
        $this->pyramidNumbers(5);
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

    public function thirdHighestNumberArray($arrs)
    {

        echo "******[Arranging Numbers In Array]******". "<br><br>";
        
        foreach($arrs as $arr)
        {
            echo $arr. " ";
        }
        sort($arrs);
        $count = count($arrs);
        echo "<br>";
        echo "The Highest Number in Array is : " . $arrs[$count-1];
        echo "<br>";
        echo "The Second Number in Array is : " . $arrs[$count-2];
        echo "<br>";
        echo "The Third Highest number in Array is : " . $arrs[$count-3];
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
        echo "<br><br>";
    }

    public function pyramidStars($number)
    {
        echo "******[Pyramid of Numbers]******". "<br><br>";
        $loopValue = 2*$number - 1;

        for($i = 1; $i <=$number; $i++)
        {
            $val = 0;   
            for($j = 1; $j <= $loopValue; $j++)
            {
                if($j >= $number-($i-1) && $j <= $number +($i-1))
                {
                    echo "*";
                }else{
                    echo "&nbsp&nbsp";
                }
                
            }
            echo "<br>";
        }
        echo "<br><br>";
    }

    public function pyramidNumbers($number)
    {
        echo "******[Pyramid of Numbers]******". "<br><br>";
        $loopValue = 2*$number - 1;

        for($i = 1; $i <=$number; $i++)
        {
            $val = 0;   
            for($j = 1; $j <= $loopValue; $j++)
            {
                if($j >= $number-($i-1) && $j <= $number +($i-1))
                {
                    echo "&nbsp". $val += 1;
                }else{
                    echo "&nbsp&nbsp";
                }
                
            }
            echo "<br>";
        }
    }
}
