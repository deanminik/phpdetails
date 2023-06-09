<?php

/**
 * convert DNA into NRA
 * 
 */

function dnaToRna($str)
{
    // your code here
    $dna_s = str_split($str);
    $rna_s = ["A" => "A", "C" => "C", "G" => "G", "T" => "U"];
    $result = "";
    foreach ($dna_s as $dna) {
        foreach ($rna_s as $key => $rna) {
            if ($dna == $key) {
                $result .= $rna;
            }
        }
    }
    return $result;
}


dnaToRna("GCAT");
