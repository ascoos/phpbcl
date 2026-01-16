<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (_) |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___/ /__/
 *  
 **************************************************************************************
 * @ASCOOS-NAME        	: ASCOOS OS                                                   *
 * @ASCOOS-VERSION     	: 1.0.0                                                       *
 * @ASCOOS-CATEGORY    	: Web OS                                                      *
 * @ASCOOS-DESCRIPTION  : A Web 5.0 Kernel for decentralized web and IoT applications *
 * @ASCOOS-CREATOR     	: Drogidis Christos                                           *
 * @ASCOOS-SITE        	: www.ascoos.com                                              *
 * @ASCOOS-BUGS         : https://issues.ascoos.com                                   *
 * @ASCOOS-SUPPORT      : support@ascoos.com                                          *
 * @ASCOOS-LICENSE     	: [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html    *
 * @ASCOOS-COPYRIGHT   	: Copyright (c) 2007 - 2026, AlexSoft Software.               *
 **************************************************************************************
 *
 * @package            	: ASCOOS OS - phpBCL
 * @subpackage         	: Example clamp function
 * @source             	: /phpBCL/test/86_clamp.php
 * @description         : 
 * @fileNo             	: 
 * @version            	: 2.1.0
 * @build               : 26
 * @created            	: 2026-01-15 20:00:00 UTC+2
 * @updated             : 2026-01-16 00:28:33 UTC+2
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @support             : support@ascoos.com
 * @license 			: AGL-F (Ascoos General License - Free)
 * 
 * @since 2.1.0
 * @since PHP 5.6.40
 */
require_once("../autoload.php");
?>
<html>
<head>
    <style>
        h1 {font-size: 2em; font-weight: bold; width: 100% !important; }
        h2 {font-size: 1.5em; font-weight: bold; padding: 5px; color: white; background-color: black; width: 100% !important; margin: 4px 0;}
    </style>
</head>
<body>
<?php
echo '<h1>PHP VERSION: '.phpversion().'</h1>';
echo '<h2>TEST PHP 8.6 [ <b>clamp()</b> ] </h2>';

echo '<h3>String values</h3>';
echo clamp('P', 'A', 'Z').'<br>'; // "P"
echo clamp('P', 'X', 'Z').'<br>'; // "X"
echo clamp('P', 'A', 'C').'<br>'; // "C"
echo clamp('AAA', 'AA', 'Z').'<br>'; // "AAA"

echo '<h3>Boolean values</h3>';
echo clamp(5, false, true).'<br>'; // 5
echo (clamp(true, false, true) ? 'true':'false') .'<br>'; // true
echo (clamp(true, false, false) ? 'true':'false').'<br>'; // false
echo (clamp(false, true, true) ? 'true':'false').'<br>'; // true
echo (clamp(false, true, 5) ? 'true':'false').'<br>'; // true

echo '<h3>Arrays</h3>';
echo var_export(clamp(5, [], [])).'<br>'; // []
echo var_export(clamp(5, 0, [])).'<br>'; // 5
echo var_export(clamp(5, false, [])).'<br>'; // 5
echo var_export(clamp([3], [1], [5])).'<br>'; // [3]
echo var_export(clamp([1], [3], [5])).'<br>'; // [3]
echo var_export(clamp([1, 4], [3], [1, 5])).'<br>'; // [1, 4]

echo '<h3>Objects</h3>';
echo var_export(clamp(new DateTimeImmutable('2026-01-08'), new DateTimeImmutable('2026-01-01'), new DateTimeImmutable('2026-12-31')));
// DateTimeImmutable('2026-01-08')
// Σε PHP 5.6.40 --> DateTimeImmutable::__set_state(array( 'date' => '2026-01-08 00:00:00.000000', 'timezone_type' => 3, 'timezone' => 'Europe/Athens', )) 
?>
</body>
</html>