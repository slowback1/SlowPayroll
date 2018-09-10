<?php


function tax_calculator($pay, $pay_schedule) {
    if($pay_schedule == 'monthly') {
        $npay = $pay * 12;
    }
    else {
        $npay = $pay * 24;
    }
    switch($npay) {
        case ($npay < 10000):
            return fica_deduction($pay);
            break;
        case (10000 <= $npay):
            return (fica_deduction($pay) - ($pay * .1) - ($pay * .01));
            break;
        case (12000 <= $npay):
            return (fica_deduction($pay) - ($pay * .1) - ($pay * .02));
            break;
        case (20000 <= $npay): 
            return (fica_deduction($pay) - ($pay * .15) - ($pay * .04));
            break;
        case (30000 <= $npay):
            return (fica_deduction($pay) - ($pay * .15) - ($pay * .06));
            break;
        case (50000 <= $npay):
            return (fica_deduction($pay) - ($pay * .25) - ($pay * .08));
            break;
        case (60000 <= $npay):
            return (fica_deduction($pay) - ($pay * .25) - ($pay * .093));
            break;
        case (100000 <= $npay):
            return (fica_deduction($pay) - ($pay * .28) - ($pay * .093));
            break;
        case (200000 <= $npay):
            return (fica_deduction($pay) - ($pay * .33) - ($pay * .093));
            break;
        case (250000 <= $npay):
            return (fica_deduction($pay) - ($pay * .33) - ($pay * .103));
            break;
        case (350000 <= $npay):
            return (fica_deduction($pay) - ($pay * .33) - ($pay * .113));
            break;
        case (450000 <= $npay):
            return (fica_deduction($pay) - ($pay * .396) - ($pay * .113));
            break;
        case (550000 <= $npay):
            return (fica_deduction($pay) - ($pay * .396) - ($pay * .123));
            break;
        case ($npay > 1000000):
            return (fica_deduction($pay) - ($pay * .396) - ($pay * .133));
            break;
        default:
            return "invalid number";
            break;
    }
}
function fica_deduction($pay) {
    return ($pay - ($pay * .0765));
}


#all of the below are assumed single filing status, in Los Angeles, California (no local income tax)

#FEDERAL Tax Brackets
/*
0-10k : 0%
10.001k-19.999k : 10%
20k-49.999k : 15%
50k-100k: 25%
100k-199.999k: 28%
200k-450k: 33%
450k-infinity: 39.6%




#FICA: flat 7.65%


#STATE (CA) Tax Brackets

0-9.999k: 0%
10k-12k: 1%
12.001k-20k: 2%
20.001k-30k: 4%
30.001k-49.999k: 6%
50k-59.999k: 8%
60k-250k: 9.3%
250.001k-349.999k: 10.3%
350k-549.999k: 11.3%
550k-1,000k: 12.3%
1,000.001k-infinity: 13.3%



*/

?>