<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'employe.php';
$françois = new employe('2020','françois','G','1900','M','4000');
$emilie = new employe('2021','emilie','L','1900','F','1000');
?>
<p><?= $françois?></p>
<p><?= $emilie?></p>