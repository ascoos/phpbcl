<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 *
 * @package             : ASCOOS - phpBCL
 * @subpackage          : Example grapheme_strrev Function
 * @source              : /phpBCL/test/86_grapheme_strrev.php
 * @version             : 1.1.4
 * @created             : 2026-04-22 02:04:08 UTC+2
 * @updated             : 2026-04-22 02:04:24 UTC+2
 * @author              : Drogidis Christos
 * @authorSite          : www.alexsoft.gr
 * 
 * @since 5.6.40
 */
require_once("../autoload.php");
 
$gs1 = grapheme_strrev("ABCDE"); // EDCBA
$gs2 = grapheme_strrev("Apple🍏"); // 🍏elppA
$gs3 = grapheme_strrev("🇨🇳 - 🇳🇨"); // 🇳🇨 - 🇨🇳
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
echo '<h2>TEST PHP 8.6 [ <b>grapheme_strrev</b> ] </h2>';
echo '<p><br></p>'; 
echo '<p><b>grapheme_strrev("ABCDE")....:</b> '.$gs1.'</p>';
echo '<p><b>grapheme_strrev("Apple🍏")....:</b> '.$gs2.'</p>';
echo '<p><b>grapheme_strrev("🇨🇳 - 🇳🇨")....:</b> '.$gs3.'</p>';
?>
</body>
</html>