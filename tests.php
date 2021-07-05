<?php
require 'aligent.class.php';
$aligent = new Aligent();

$pass = 0;
$failarray = array();

/////////////////////////////////////
//              Same Day           ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );
$date2 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "Australia/Adelaide" ) );

$d_td_sd = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_sd == 0 )? $pass++: array_push( $failarray, ['d_td_sd', 0, $d_td_sd ]);