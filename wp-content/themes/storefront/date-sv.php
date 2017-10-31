<?php

$datestr = get_the_date('d F Y');
if($lang == 'sv'){
    $datestr = str_replace("January","januari",$datestr);
    $datestr = str_replace("February","februari",$datestr);
    $datestr = str_replace("March","mars",$datestr);
    $datestr = str_replace("April","april",$datestr);
    $datestr = str_replace("May","maj",$datestr);
    $datestr = str_replace("June","juni",$datestr);
    $datestr = str_replace("July","juli",$datestr);
    $datestr = str_replace("August","augusti",$datestr);
    $datestr = str_replace("September","september",$datestr);
    $datestr = str_replace("October","oktober",$datestr);
    $datestr = str_replace("November","november",$datestr);
    $datestr = str_replace("December","december",$datestr);
}
echo $datestr;

?>