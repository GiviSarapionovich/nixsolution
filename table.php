<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.01.2021
 * Time: 9:33
 */

function getMultipul($td,$tr){
    $multipul = str_split($tr*$td);
    $multipul = array_combine(range(1, count($multipul)), array_values($multipul));
    //var_dump($multipul);

       if(count($multipul) === 1){
           foreach ($multipul as $key => $value) {
               return $td = $value;
           }
            //var_dump($value);
       }
       elseif (count($multipul) >= 2) {
           foreach ($multipul as $key => $value) {
               if ($key === 1) {
                   $td = $value;
               }
               elseif ($key ===3) {
                   $tr = $tr . $value;
               }
               else {
                   $tr = $value;
               }
           }
       }

    return $td.$tr;
}
function getColor($td , $tr){
    $colors = array("1" => "red", "2" => "green", "3" => "yellow", "4" => "blue");
    foreach ($colors as $key => $color) {
        if ($td === $key) {
            // return $td ='<span style="color:'.$color.';">'.$td.'</span>';
            $td = '<span style="color:' . $color . ';">' . $td . '</span>';
           // var_dump("td =" . $td);
            if ($tr === $key) {
                $tr = '<span style="color:' . $color . ';">' . $tr . '</span>';
                //  var_dump("tr=".$tr);}
            }
        }
        elseif ($tr === $key) {
                //return $tr = '<span style="color:'.$color.';">'.$tr.'</span>';
                $tr = '<span style="color:' . $color . ';">' . $tr . '</span>';
                // var_dump("tr=".$tr);
        }
          //  return $td . 'x' . $tr;
    }

       // return $td . 'x' . $tr;

   return $td . 'x' . $tr;
}
function getTable($rows, $cols){
    // закомментировали эти 2 строки, так как количество теперь передаётся при вызове функции
    // $rows = 20; // количество строк, tr
    // $cols = 20; // количество столбцов, td

    $table = '<table border="1">';

    for ($tr=1; $tr<=$rows; $tr++){
        $table .= '<tr>';
        for ($td=1; $td<=$cols; $td++){


            $table .= '<th>'.getColor($td,$tr).'='.getMultipul($td,$tr).'</th>';// getMultipul($td ,$tr)
//            if ($tr===1){
//                $table .= '<th>'.'<span style="color:red;">'.$tr.'</span>'.'x'.$td.'='. $tr*$td .'</th>';
//            }
//            elseif(($tr===2) || ($td===2)){
//                $table .= '<th>'.'<span style="color:green;">'.$tr.'</span>'.'x'.'<span style="color:green;">'.$td.'</span>'.'='. $tr*$td .'</th>';
//            }
//            elseif($tr===3 || $td===3){
//                $table .= '<th>'.'<span style="color:yellow;">'.$tr.'</span>'.'x'.'<span style="color:yellow;">'.$td.'</span>'.'='. $tr*$td .'</th>';
//            }
//            elseif($tr===4 || $td===4){
//                $table .= '<th>'.'<span style="color:blue;">'.$tr.'</span>'.'x'.'<span style="color:blue;">'.$td.'</span>'.'='. $tr*$td .'</th>';
//            }
//            else{
//                $table .= '<th>'.'<span style="color:black;">'.$tr.'</span>'.'x'.$td.'='. $tr*$td .'</th>';
//            }
        }
        $table .= '</tr>';
    }

    $table .= '</table>';
    echo $table;
}
//getMultipul(3,10);
getTable(3,3); // выводим таблицу умножения 3 на 3
getTable(5,5); // выводим таблицу умножения 5 на 5
getTable(10,10); // выводим таблицу умножения 10 на 10

?>