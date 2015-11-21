<?php 
//require_once('requires.php');


    function create_table($result, $col_name=[])
    {
        echo count($col_name).'<br>';
        $table= '';
        $rows=[];
        while($row = $result->fetch_assoc()){
            array_push($rows,$row);
        }

        $table.= '<table>';
        $table.= '<tr>';

        if(count($col_name )!== 0){
            for($i=0 ;$i< count($col_name) ; $i++){
                $table.= ' <th>'.$col_name[$i].'</th>';
            }
        }
          else
        {
            foreach($rows as $row){
                $count=0;
                foreach($row as $key => $value){
                    $table.= ' <th>'.$key.'</th>';
                    if($count > count($row)){
                        break;
                    }
                    $count++;
                }
                break;
            }
        }

        $table.='</tr>';
        foreach($rows as $row){
            $table.='<tr>';
            foreach($row as $key => $value){
                $table.= ' <td>'.$value.'</td>';

            }
            $table.='</tr>';
        }
        $table.= '</table>';
        return $table;
    }

 ?>