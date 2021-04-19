<?php
require ("../src/TheSiteStructure.php");

use kristoffbertram\TheSiteStructure\TheSiteStructure;

$TheSiteStructure = new TheSiteStructure();

echo $TheSiteStructure->uid();

echo '<hr />';

echo $TheSiteStructure->classes();