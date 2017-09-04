<?php

use Cake\Core\Configure;

$permissions = Configure::read('Users');
print_r($permissions);
die();