<?php $menu_begin= '<div>';
            
$menu_arr = array('otsing','lisamine kustutamine');
                
$menu_end='</div>';

function menu($begin,$body,$end) { 
    echo $begin;
    for ($i = 0; $i < count($body); $i++) 
    {
    echo '<li><a href="'.$body[$i].'.php">'.$body[$i].'</a></li>';
    }
    echo $end;    
}


?>  