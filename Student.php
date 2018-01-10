<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 * Lab 1 for COMP 4711
 *
 * @author ybui210
 */
class Student {
    //add basic info to class
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //add email
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    //add grade
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //add average
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    //make result string
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n---------------------\n";
        foreach ($this->emails as $which => $what) {
            $result .= $which . ': ' . $what . "\n";
        }
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
    
    
}
