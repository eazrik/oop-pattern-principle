<?php

//This is template method pattern
//to cater code duplication between class
//share common function in master class and do template pattern for any differences
require 'vendor/autoload.php';

use Acme\Template\TurkeySub;
use Acme\Template\VeggieSub;

(new TurkeySub)->make();
echo '<br>';
(new VeggieSub)->make();
