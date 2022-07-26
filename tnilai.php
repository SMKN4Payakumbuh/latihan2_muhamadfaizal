<?php

$n= (string)readline("masukkan nama anda : ");
$uts = (int)readline("nilai uts anda : ");
$uas = (int)readline("nilai uas anda : ");

$total = ($uts+$uas)/2;
if ($total>90) {
    echo "selamat ". $n . "anda dapat nilai sempurna dengan nilai:" .$total;

}elseif ($total>=80){
    echo "selamat $n,  nilai anda bagus dengan nilai :".$total ;

}elseif ($total>=60){
    echo "tingkatkan lagi $n nilai anda cukup dengan nilai :" .$total ;

}elseif ($total>=40) {
    echo "belajar lagii $n nilai anda kurang bagus dengan nilai :" .$total ;

}else {
    echo "$n nilai anda jelek harap belajar lebih rajin";
}
