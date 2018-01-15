<?php

$vals = '';
$counter = 0; 

function reverse($list)
{
    global $vals;
    global $counter;
    getNodes($list);
    $reversedlist = assign($list);
    var_dump($reversedlist);
}

function getNodes($linkedList)
{
    global $vals;
    $vals .= $linkedList->val.' ';
    if($linkedList->next !== null) {
        getNodes($linkedList->next);
    } else {
        $vals = array_reverse(explode(' ',trim($vals)));
    }
}

function assign($listassign)
{
    global $vals;
    global $counter;
    $listassign->val = $vals[$counter];
    if($listassign->next !== null){
        $counter++;
        assign($listassign->next);
        return ($listassign);
    } 
}