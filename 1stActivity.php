<?php

$grade = 40;

if ($grade >= 60){
    echo "first division";
}
else if ($grade >=45 && $grade <= 59){
    echo "second division";
}
else if ($grade >=33 && $grade <= 44){
    echo "third division";
}
else {
echo "fail";
}
?>