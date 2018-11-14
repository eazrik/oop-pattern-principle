<?php

//This is template method pattern
//to cater code duplication between class
require 'vendor/autoload.php';

use Acme\Template\TurkeySub;
use Acme\Template\VeggieSub;

(new TurkeySub)->make();
echo '<br>';
(new VeggieSub)->make();
