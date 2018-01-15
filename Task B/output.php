<?php
require('index.php');

class LinkedList {    
    public $val;    
    public $next = null;
    public function __construct($val) 
    {        
        $this->val = $val;    
    }

}     

$list = new LinkedList(3);
$list->next = new LinkedList(4);
$list->next->next = new LinkedList(3);
$list->next->next->next = new LinkedList(5);
$list->next->next->next->next = new LinkedList(7);

// print_r($list);
print_r(reverse($list));
