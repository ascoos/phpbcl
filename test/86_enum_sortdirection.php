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
 * @subpackage         	: Example SortDirection enum 
 * @source             	: /phpBCL/test/86_enum_sortdirection.php
 * @description         : 
 * @fileNo             	: 
 * @version            	: 2.2.0
 * @build               : 35
 * @created            	: 2026-01-15 20:00:00 UTC+2
 * @updated             : 2026-04-22 01:48:15 UTC+2
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @support             : support@ascoos.com
 * @license 			: AGL-F (Ascoos General License - Free)
 * 
 * @since 2.2.0
 * @since PHP 5.6.40
 */
require_once("../autoload.php");

class QueryBuilder {

    private SortDirection $sort;

    public function setSort(SortDirection $sort): void {
        $this->sort = $sort;
    }

    private function getSortKeyword(): string {
        return match($this->sort) {
            SortDirection::Ascending => 'ASC',
            SortDirection::Descending => 'DESC',
        };
    }
}
?>