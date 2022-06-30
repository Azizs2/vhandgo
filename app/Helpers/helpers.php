<?php
    function date_2($value){
        return date('d M Y', strtotime($value));
    }

    if (!function_exists('currency_IDR')){
        function currency_IDR($value){
            return "Rp. " . number_format($value,0, ',' , '.');
        }
    }
?>
