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
 * @subpackage         	: Core Compatibilities Manager for PHP < 8.6.0
 * @source             	: /phpBCL/src/compat/compat_php86x.php
 * @description         : 
 * @fileNo             	: 
 * @version            	: 2.1.0
 * @build               : 27
 * @created            	: 2026-01-15 20:00:00 UTC+2
 * @updated             : 2026-01-16 00:29:20 UTC+2
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @support             : support@ascoos.com
 * @license 			: AGL-F (Ascoos General License - Free)
 * 
 * @since 2.1.0
 * @since PHP 5.6.40
 */


/**
 * If the function [ clamp ] does not exist then we create it.
 * ++ 8.6.0 ---- https://php.watch/versions/8.6/clamp
 *
 * @since 2.1.0
 */
if (!function_exists('clamp')) {
    /**
     * Return the given value if in range, otherwise return the nearest bound.
     *
     * @param mixed $value The value to clamp
     * @param mixed $min   The lower bound
     * @param mixed $max   The upper bound
     *
     * @return mixed The clamped value
     *
     * @throws ValueError If min or max is NAN (for floats), or if min > max (optional, but recommended)
     */
    function clamp($value, $min, $max)
    {
        if (is_float($min) && is_nan($min)) {
            throw new ValueError('clamp(): Argument #2 ($min) cannot be NAN');
        }

        if (is_float($max) && is_nan($max)) {
            throw new ValueError('clamp(): Argument #3 ($max) cannot be NAN');
        }

        if ($min > $max) {
            throw new ValueError('clamp(): Argument #2 ($min) must be less than or equal to argument #3 ($max)');
        }

        if ($value > $max) {
            return $max;
        }

        if ($value < $min) {
            return $min;
        }

        return $value;
    }
}
?>