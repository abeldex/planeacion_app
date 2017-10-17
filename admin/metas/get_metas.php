<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'metas';
 
// Table's primary key
$primaryKey = 'PDI';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'PDI', 'dt' => 0 ),
    array( 'db' => 'Meta',  'dt' => 1 ),
    array( 'db' => 'Cantidad',   'dt' => 2 ),
    array( 'db' => 'Departamento',     'dt' => 3 ),
    array( 'db' => 'Ene',     'dt' => 4 ),
    array( 'db' => 'Feb',     'dt' => 5 ),
    array( 'db' => 'Mar',     'dt' => 6 ),
    array( 'db' => 'Abr',     'dt' => 7 ),
    array( 'db' => 'May',     'dt' => 8 ),
    array( 'db' => 'Jun',     'dt' => 9 ),
    array( 'db' => 'Jul',     'dt' => 10 ),
    array( 'db' => 'Ago',     'dt' => 11 ),
    array( 'db' => 'Sep',     'dt' => 12 ),
    array( 'db' => 'Oct',     'dt' => 13 ),
    array( 'db' => 'Nov',     'dt' => 14 ),
    array( 'db' => 'Dic',     'dt' => 15 )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => 'geode2530',
    'db'   => 'planeacion_app',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);