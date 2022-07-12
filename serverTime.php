<?php function timer() {
    $date = strtotime("06 July 2022");
    $sec=$date - time();
    $days=floor(($date - time()) /86400);
    $h1=floor(($date - time()) /3600);
    $m1=floor(($date - time()) /60);
    $hour=floor($sec/60/60 - $days*24);
    $hours=floor($sec/60/60);
    $min=floor($sec/60 - $hours*60);
     
    switch(substr($days, -1)){
    case 1: $o='остался';
    break;
    case 2: case 3: case 4: case 5: case 6: case 7: case 8: case 9: case 0: $o='осталось';
    break;}
     
    switch(substr($days, -2)){
    case 1: $d='день';
    break;
    case 2: case 3: case 4: $d='дня';
    break;
    default: $d='дней';
     
    switch(substr($hour, -2)) {
    case 1: $h='час';
    break;
    case 2: case 3: case 4: $h='часа';
    break;
    default: $h='часов';
    }
     
    switch(substr($min, -2)) {
    case 1: $m='минута';
    break;
    case 2: case 3: case 4: $m='минуты';
    break;
    default:$m='минут';
    }
    ?>
<? if ($sec>0) echo '<strong>Конец скидки через '?>
<strong>
    <? if ($days>0) echo $days.'&nbsp;'.$d; ?>,
    <? if ($h1>0) echo '&nbsp;'.$hour.'&nbsp;'.$h; ?>
    <? if ($m1>0) echo '&nbsp;и&nbsp;'.$min.'&nbsp;'.$m; ?></strong>
<strong>
    <? if ($sec<0) echo ("Скидка кончилась"); }?></strong>

<?php 
    function dateOfBirth() {
    
        $birthday = $_POST['date']; //день рождение
        $arr = explode('-', $birthday);
        $tm=mktime(0, 0, 0, $arr[1], $arr[2], date('Y'));
        if($tm<time()) $tm=mktime(0, 0, 0, $arr[1], $arr[2], date('Y')+1);
        if(intval( ($tm-time())/86400) === 0) echo 'С днём рождения! Для вас специальная 5% скидка!';
        else print_r('До вашего дня рождения' . " " . intval( ($tm-time())/86400) . " " . "дней.");
    }
    ?>