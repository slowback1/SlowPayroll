<?php 
#NOTES ON AVG BENEFITS COST/VALUE, TAKEN FROM BUREAU OF LABOR STATISTICS WEBSITE
/*
Legally Required Benefits (social security, medicare, unemployement, etc.) {
    $1.94/hr or ~$4035/year
}
Retirement/Savings Benefits (IE: 401K matching) {
    $0.94/hr or $1955/year
}
Insurance (Heath/Life/Dental(?)) {
    $2.49/hr or $5179/year
}
supplemental pay (overtime/bonuses/etc.) (these are mostly covered with the overtime calculator) {
    $0.66/r or $1372/year
}
paid leave (PTO/Nat. Holidays, Sick/Personal Days, ETC.) {
    $1.76/hr or $3660/year
}

*/

# 3 Benefits Plans

/*
    min: just the Legally Required Benefits
        cost: $1.94/hr or $4035/year
    
    partial: PTO, LRB, 401k matching, health ins.
        cost: $6.20/hr or $12896/year
    full: PTO, LRB, 401k matching, health/dental/life ins.
        cost: $7.79/hr or $16203/year
        
    #these numbers seem big, considering BLS seems to indicate that the avg cost for benefits is somewhere around $8000/year, may arbitrairily reduce the partial/full costs to 8k/12k a year respectively

*/
    function benefits_calculator($benefit_plan, $salary_type, $hours=40, $pay_schedule) {
        if($benefit_plan == 'full') {
            return ($salary_type == 'hourly') ? 7.79 * $hours : ($pay_schedule == 'monthly' ? 16203 / 12 : 16203 / 24);
        } elseif($benefit_plan == 'partial') {
            return ($salary_type == 'hourly') ? 6.20 * $hours : ($pay_schedule == 'monthly' ? 12896 / 12 : 12896 /24 );
        } elseif($benefit_plan == 'minimum') {
            return ($salary_type =='hourly') ? 1.94 * $hours : ($pay_schedule == 'monthly' ? 4035 / 12 : 4035 / 24);
        }
    }

?>