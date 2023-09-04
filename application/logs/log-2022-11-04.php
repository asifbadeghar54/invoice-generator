<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-11-04 20:42:48 --> Query error: Unknown column 'fstatus' in 'where clause' - Invalid query: SELECT DISTINCT `feedback`.`fserverName`, `s`.`serverName`, `s`.`serverId`
FROM `feedback`
JOIN `server` as `s` ON `s`.`serverId`=`feedback`.`fserverName`
WHERE `fstatus` = 1
ORDER BY `feedback`.`created_date` DESC
ERROR - 2022-11-04 20:42:48 --> Severity: error --> Exception: Unknown column 'fstatus' in 'where clause' /home4/yamujsje/vpnserverreport.tajsoft.in/application/core/MY_Exceptions.php 8
ERROR - 2022-11-04 20:42:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home4/yamujsje/vpnserverreport.tajsoft.in/application/models/Auth_Model.php:1) /home4/yamujsje/vpnserverreport.tajsoft.in/system/core/Common.php 571
ERROR - 2022-11-04 20:44:07 --> Query error: Table 'yamujsje_vpnserver.server' doesn't exist - Invalid query: SELECT *
FROM `server`
ORDER BY `created_date` DESC
ERROR - 2022-11-04 20:44:07 --> Severity: error --> Exception: Table 'yamujsje_vpnserver.server' doesn't exist /home4/yamujsje/vpnserverreport.tajsoft.in/application/core/MY_Exceptions.php 8
