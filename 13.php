<?php
$arr = array(
    "13" => "ASP.Net",
    "12" => "C#",
    "11" => "Graphics",
    "4" => "Video Editing",
    "5" => "Photoshop",
    "6" => "Article",
    "4" => "Placement",
    "8" => "C++",
    "7" => "XML",
    "10" => "Android",
    "1" => "SQL",
    "2" => "PL/Sql",
    "3" => "End",
    "0" => "Java",
);

ksort($arr);

foreach ($arr as $key => $val) {
    echo "[$key] = $val";
    echo "<br>";
}

?>