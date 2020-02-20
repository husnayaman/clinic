<?php
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'tb_user';
 
// Table's primary key
$primaryKey = 'id_user';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'name_user', 'dt' => 0 ),
    array( 'db' => 'ic_user',  'dt' => 1 ),
    array( 'db' => 'email',     'dt' => 2 ),
    array( 'db' => 'date',     'dt' => 3 ),
    array( 'db' => 'level',     'dt' => 4 ),
    array( 'db' => 'id_user',     'dt' => 5 ),
);

// SQL server connection information
include_once "../_config/conn.php";
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( '../_assets/libs/DataTables//ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);