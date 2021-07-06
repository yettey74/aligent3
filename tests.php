<?php
require 'aligent.class.php';
$aligent = new Aligent();

$pass = 0;
$failarray = array();

/////////////////////////////////////
//              Same Day           ///
////////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday

$d_td_sd = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_sd == 0 )? $pass++: array_push( $failarray, ['d_td_sd', 0, $d_td_sd ]);
$d_td_sd_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_sd_s == 0 )? $pass++: array_push( $failarray, ['d_td_sd_s', 0, $d_td_sd_s ]);
$d_td_sd_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_sd_m == 0 )? $pass++: array_push( $failarray, ['d_td_sd_m', 0, $d_td_sd_m ]);
$d_td_sd_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_sd_h == 0 )? $pass++: array_push( $failarray, ['d_td_sd_h', 0, $d_td_sd_h ]);
$d_td_sd_y = $aligent->_daysBetween( $date1, $date2, 4 ); //
( $d_td_sd_y == 0 )? $pass++: array_push( $failarray, ['d_td_sd_y', 0, $d_td_sd_y ]);

$d_wd_sd = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_sd == 0 )? $pass++: array_push( $failarray, ['d_wd_sd', 0, $d_wd_sd ]);
$d_wd_sd_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_sd_s == 0 )? $pass++: array_push( $failarray, ['d_wd_sd_s', 0, $d_wd_sd_s ]);
$d_wd_sd_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_sd_m == 0 )? $pass++: array_push( $failarray, ['d_wd_sd_m', 0, $d_wd_sd_m ]);
$d_wd_sd_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_sd_h == 0 )? $pass++: array_push( $failarray, ['d_wd_sd_h', 0, $d_wd_sd_h ]);
$d_wd_sd_y = $aligent->_weekdays( $date1, $date2, 4 ); //
( $d_wd_sd_y == 0 )? $pass++: array_push( $failarray, ['d_wd_sd_y', 0, $d_wd_sd_y ]);

$d_cw_sd = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_sd == 0 )? $pass++: array_push( $failarray, ['d_cw_sd', 0, $d_cw_sd ]);
$d_cw_sd_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_sd_s == 0 )? $pass++: array_push( $failarray, ['d_cw_sd_s', 0, $d_cw_sd_s ]);
$d_cw_sd_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_sd_m == 0 )? $pass++: array_push( $failarray, ['d_cw_sd_m', 0, $d_cw_sd_m ]);
$d_cw_sd_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_sd_h == 0 )? $pass++: array_push( $failarray, ['d_cw_sd_h', 0, $d_cw_sd_h ]);
$d_cw_sd_y = $aligent->_completeWeeks( $date1, $date2, 4 ); //
( $d_cw_sd_y == 0 )? $pass++: array_push( $failarray, ['d_cw_sd_y', 0, $d_cw_sd_y ]);

/////////////////////////////////////
//              Next Day           ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-05T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_nd = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_nd == 0 )? $pass++: array_push( $failarray, ['d_td_nd', 0, $d_td_nd ]);
$d_td_nd_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_nd_s == 0 )? $pass++: array_push( $failarray, ['d_td_nd_s', 0, $d_td_nd_s ]);
$d_td_nd_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_nd_m == 0 )? $pass++: array_push( $failarray, ['d_td_nd_m', 0, $d_td_nd_m ]);
$d_td_nd_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_nd_h == 0 )? $pass++: array_push( $failarray, ['d_td_nd_h', 0, $d_td_nd_h ]);
$d_td_nd_y = $aligent->_daysBetween( $date1, $date2, 4 ); //
( $d_td_nd_y == 0 )? $pass++: array_push( $failarray, ['d_td_nd_y', 0, $d_td_nd_y ]);

$d_wd_nd = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_nd == 0 )? $pass++: array_push( $failarray, ['d_wd_nd', 0, $d_wd_nd ]);
$d_wd_nd_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_nd_s == 0 )? $pass++: array_push( $failarray, ['d_wd_nd_s', 0, $d_wd_nd_s ]);
$d_wd_nd_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_nd_m == 0 )? $pass++: array_push( $failarray, ['d_wd_nd_m', 0, $d_wd_nd_m ]);
$d_wd_nd_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_nd_h == 0 )? $pass++: array_push( $failarray, ['d_wd_nd_h', 0, $d_wd_nd_h ]);
$d_wd_nd_y = $aligent->_weekdays( $date1, $date2, 4 ); //
( $d_wd_nd_y == 0 )? $pass++: array_push( $failarray, ['d_wd_nd_y', 0, $d_wd_nd_y ]);

$d_cw_nd = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_nd == 0 )? $pass++: array_push( $failarray, ['d_cw_nd', 0, $d_cw_nd ]);
$d_cw_nd_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_nd_s == 0 )? $pass++: array_push( $failarray, ['d_cw_nd_s', 0, $d_cw_nd_s ]);
$d_cw_nd_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_nd_m == 0 )? $pass++: array_push( $failarray, ['d_cw_nd_m', 0, $d_cw_nd_m ]);
$d_cw_nd_m = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_nd_m == 0 )? $pass++: array_push( $failarray, ['d_cw_nd_m', 0, $d_cw_nd_m ]);
$d_cw_nd_y = $aligent->_completeWeeks( $date1, $date2, 4 ); //
( $d_cw_nd_y == 0 )? $pass++: array_push( $failarray, ['d_cw_nd_y', 0, $d_cw_nd_y ]);

/////////////////////////////////////
//              2 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-06T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_2 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_2 == 1 )? $pass++: array_push( $failarray, ['d_td_2', 1, $d_td_2 ]);
$d_td_2_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_2_s == 86400 )? $pass++: array_push( $failarray, ['d_td_2_s', 86400, $d_td_2_s ]);
$d_td_2_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_2_m == 1400 )? $pass++: array_push( $failarray, ['d_td_2_m', 1400, $d_td_2_m ]);
$d_td_2_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_2_h == 24 )? $pass++: array_push( $failarray, ['d_td_2_h', 24, $d_td_2_h ]);
$d_td_2_y = $aligent->_daysBetween( $date1, $date2, 4 ); //
( $d_td_2_y == 0 )? $pass++: array_push( $failarray, ['d_td_2_y', 0, $d_td_2_y ]);

$d_wd_2 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_2 == 1 )? $pass++: array_push( $failarray, ['d_wd_2', 1, $d_wd_2 ]);
$d_wd_2_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_2_s == 86400 )? $pass++: array_push( $failarray, ['d_wd_2_s', 86400, $d_wd_2_s ]);
$d_wd_2_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_2_m == 1400 )? $pass++: array_push( $failarray, ['d_wd_2_m', 1400, $d_wd_2_m ]);
$d_wd_2_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_2_h == 24 )? $pass++: array_push( $failarray, ['d_wd_2_h', 24, $d_wd_2_h ]);
$d_wd_2_y = $aligent->_weekdays( $date1, $date2, 4 ); //
( $d_wd_2_y == 0 )? $pass++: array_push( $failarray, ['d_wd_2_y', 0, $d_wd_2_y ]);

$d_cw_2 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_2 == 0 )? $pass++: array_push( $failarray, ['d_cw_sd', 0, $d_cw_sd ]);
$d_cw_2_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_2_s == 0 )? $pass++: array_push( $failarray, ['d_cw_2_s', 0, $d_cw_2_s ]);
$d_cw_2_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_2_m == 0 )? $pass++: array_push( $failarray, ['d_cw_2_m', 0, $d_cw_2_m ]);
$d_cw_2_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_2_h == 0 )? $pass++: array_push( $failarray, ['d_cw_2_h', 0, $d_cw_2_h ]);
$d_cw_2_y = $aligent->_completeWeeks( $date1, $date2, 4 ); //
( $d_cw_2_y == 0 )? $pass++: array_push( $failarray, ['d_cw_2_y', 0, $d_cw_2_y ]);

/////////////////////////////////////
//              3 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-07T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_3 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_3 == 2 )? $pass++: array_push( $failarray, ['d_td_3', 2, $d_td_3 ]);
$d_td_3_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_3_s == 86400 * 2 )? $pass++: array_push( $failarray, ['d_td_3_s', 86400 * 2, $d_td_3_s ]);
$d_td_3_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_3_m == 1400 * 2 )? $pass++: array_push( $failarray, ['d_td_3_m', 1400 * 2, $d_td_3_m ]);
$d_td_3_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_3_h == 24 * 2 )? $pass++: array_push( $failarray, ['d_td_3_h', 24 * 2, $d_td_3_h ]);
$d_td_3_y = $aligent->_daysBetween( $date1, $date2, 4 ); //
( $d_td_3_y == 0 )? $pass++: array_push( $failarray, ['d_td_3_y', 0, $d_td_3_y ]);

$d_wd_3 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_3 == 2 )? $pass++: array_push( $failarray, ['d_wd_3', 2, $d_wd_3 ]);
$d_wd_3_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_3_s == 86400 * 2 )? $pass++: array_push( $failarray, ['d_wd_3_s', 86400 * 2, $d_wd_3_s ]);
$d_wd_3_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_3_m == 1400 * 2 )? $pass++: array_push( $failarray, ['d_wd_3_m', 1400 * 2, $d_wd_3_m ]);
$d_wd_3_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_3_h == 24 * 2 )? $pass++: array_push( $failarray, ['d_wd_3_h', 24 * 2, $d_wd_3_h ]);
$d_wd_3_y = $aligent->_weekdays( $date1, $date2, 4 ); //
( $d_wd_3_y == 0 )? $pass++: array_push( $failarray, ['d_wd_3_y', 0, $d_wd_3_y ]);

$d_cw_3 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_3 == 0 )? $pass++: array_push( $failarray, ['d_cw_3', 0, $d_cw_3 ]);
$d_cw_3_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_3_s == 0 )? $pass++: array_push( $failarray, ['d_cw_3_s', 0, $d_cw_3_s ]);
$d_cw_3_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_3_m == 0 )? $pass++: array_push( $failarray, ['d_cw_3_m', 0, $d_cw_3_m ]);
$d_cw_3_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_3_h == 0 )? $pass++: array_push( $failarray, ['d_cw_3_h', 0, $d_cw_3_h ]);
$d_cw_3_y = $aligent->_completeWeeks( $date1, $date2, 4 ); //
( $d_cw_3_y == 0 )? $pass++: array_push( $failarray, ['d_cw_3_y', 0, $d_cw_3_y ]);

/////////////////////////////////////
//              4 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_4 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_4 == 3 )? $pass++: array_push( $failarray, ['d_td_4', 3 , $d_td_4 ]);
$d_td_4_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_4_s == 86400 * 3 )? $pass++: array_push( $failarray, ['d_td_4_s', 86400 * 3 , $d_td_4_s ]);
$d_td_4_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_4_m == 1400 * 3 )? $pass++: array_push( $failarray, ['d_td_4_m', 1400 * 3 , $d_td_4_m ]);
$d_td_4_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_4_h == 24 * 3 )? $pass++: array_push( $failarray, ['d_td_4_h', 24 * 3 , $d_td_4_h ]);
$d_td_4_y = $aligent->_daysBetween( $date1, $date2, 4 ); //
( $d_td_4_y == 0 )? $pass++: array_push( $failarray, ['d_td_4_y', 0 , $d_td_4_y ]);

$d_wd_4 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_4 == 3 )? $pass++: array_push( $failarray, ['d_wd_4', 3, $d_wd_4 ]);
$d_wd_4_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_4_s == 86400 * 3 )? $pass++: array_push( $failarray, ['d_wd_4_s', 86400 * 3 , $d_wd_4_s ]);
$d_wd_4_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_4_m == 1400 * 3 )? $pass++: array_push( $failarray, ['d_wd_4_m', 1400 * 3 , $d_wd_4_m ]);
$d_wd_4_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_4_h == 24 * 3 )? $pass++: array_push( $failarray, ['d_wd_4_h', 24 * 3 , $d_wd_4_h ]);
$d_wd_4_y = $aligent->_weekdays( $date1, $date2, 4 ); //
( $d_wd_4_y == 0 )? $pass++: array_push( $failarray, ['d_wd_4_y', 0 , $d_wd_4_y ]);

$d_cw_4 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_4 == 0 )? $pass++: array_push( $failarray, ['d_cw_4', 0 , $d_cw_4 ]);
$d_cw_4_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_4_s == 0 )? $pass++: array_push( $failarray, ['d_cw_4_s', 0 , $d_cw_4_s ]);
$d_cw_4_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_4_m == 0 )? $pass++: array_push( $failarray, ['d_cw_4_m', 0 , $d_cw_4_m ]);
$d_cw_4_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_4_h == 0 )? $pass++: array_push( $failarray, ['d_cw_4_h', 0 , $d_cw_4_h ]);
$d_cw_4_y = $aligent->_completeWeeks( $date1, $date2, 4 ); //
( $d_cw_4_y == 0 )? $pass++: array_push( $failarray, ['d_cw_4_y', 0 , $d_cw_4_y ]);

/////////////////////////////////////
//              5 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-09T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_5 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_5 == 4 )? $pass++: array_push( $failarray, ['d_td_5', 4, $d_td_5 ]);
$d_td_5_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_5_s == 86400 * 4 )? $pass++: array_push( $failarray, ['d_td_5_s', 86400 * 4, $d_td_5_s ]);
$d_td_5_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_5_m == 1400 * 4 )? $pass++: array_push( $failarray, ['d_td_5_m', 1400 * 4, $d_td_5_m ]);
$d_td_5_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_5_h == 24 * 4 )? $pass++: array_push( $failarray, ['d_td_5_h', 24 * 4, $d_td_5_h ]);
$d_td_5_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_5_h == 24 * 4 )? $pass++: array_push( $failarray, ['d_td_5_h', 24 * 4, $d_td_5_h ]);

$d_wd_5 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_5 == 4 )? $pass++: array_push( $failarray, ['d_wd_5', 3, $d_wd_5 ]);
$d_wd_5_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_5_s == 86400 * 4 )? $pass++: array_push( $failarray, ['d_wd_5_s', 86400 * 4 , $d_wd_5_s ]);
$d_wd_5_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_5_m == 1400 * 4 )? $pass++: array_push( $failarray, ['d_wd_5_m', 1400 * 4 , $d_wd_5_m ]);
$d_wd_5_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_5_h == 24 * 4 )? $pass++: array_push( $failarray, ['d_wd_5_h', 24 * 4 , $d_wd_5_h ]);
$d_wd_5_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_5_h == 24 * 4 )? $pass++: array_push( $failarray, ['d_wd_5_h', 24 * 4 , $d_wd_5_h ]);

$d_cw_5 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_5 == 0 )? $pass++: array_push( $failarray, ['d_cw_5', 0, $d_cw_5 ]);
$d_cw_5_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_5_s == 0 )? $pass++: array_push( $failarray, ['d_cw_5_s', 0, $d_cw_5_s ]);
$d_cw_5_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_5_m == 0 )? $pass++: array_push( $failarray, ['d_cw_5_m', 0, $d_cw_5_m ]);
$d_cw_5_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_5_h == 0 )? $pass++: array_push( $failarray, ['d_cw_5_h', 0, $d_cw_5_h ]);
$d_cw_5_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_5_h == 0 )? $pass++: array_push( $failarray, ['d_cw_5_h', 0, $d_cw_5_h ]);

/////////////////////////////////////
//              6 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-10T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_6 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_6 == 5 )? $pass++: array_push( $failarray, ['d_td_6', 5, $d_td_6 ]);
$d_td_6_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_6_s == 86400 * 5 )? $pass++: array_push( $failarray, ['d_td_6_s', 86400 * 5, $d_td_6_s ]);
$d_td_6_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_6_m == 1400 * 5 )? $pass++: array_push( $failarray, ['d_td_6_m', 1400 * 5, $d_td_6_m ]);
$d_td_6_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_6_h == 24 * 5 )? $pass++: array_push( $failarray, ['d_td_6_h', 24 * 5, $d_td_6_h ]);
$d_td_6_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_6_h == 24 * 5 )? $pass++: array_push( $failarray, ['d_td_6_h', 24 * 5, $d_td_6_h ]);

$d_wd_6 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_6 == 5 )? $pass++: array_push( $failarray, ['d_wd_6', 3, $d_wd_6 ]);
$d_wd_6_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_6_s == 86400 * 5  )? $pass++: array_push( $failarray, ['d_wd_6_s', 86400 * 5 , $d_wd_6_s ]);
$d_wd_6_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_6_m == 1400 * 5 )? $pass++: array_push( $failarray, ['d_wd_6_m', 1400 * 5 , $d_wd_6_m ]);
$d_wd_6_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_6_h == 24 * 5 )? $pass++: array_push( $failarray, ['d_wd_6_h', 24 * 5 , $d_wd_6_h ]);
$d_wd_6_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_6_h == 24 * 5 )? $pass++: array_push( $failarray, ['d_wd_6_h', 24 * 5 , $d_wd_6_h ]);

$d_cw_6 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_6 == 0 )? $pass++: array_push( $failarray, ['d_cw_6', 0, $d_cw_6 ]);
$d_cw_6_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_6_s == 0 )? $pass++: array_push( $failarray, ['d_cw_6_s', 0, $d_cw_6_s ]);
$d_cw_6_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_6_m == 0 )? $pass++: array_push( $failarray, ['d_cw_6_m', 0, $d_cw_6_m ]);
$d_cw_6_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_6_h == 0 )? $pass++: array_push( $failarray, ['d_cw_6_h', 0, $d_cw_6_h ]);
$d_cw_6_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_6_h == 0 )? $pass++: array_push( $failarray, ['d_cw_6_h', 0, $d_cw_6_h ]);

/////////////////////////////////////
//              7 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-11T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_7 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_7 == 6 )? $pass++: array_push( $failarray, ['d_td_7', 5, $d_td_7 ]);
$d_td_7_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_7_s == 86400 * 6 )? $pass++: array_push( $failarray, ['d_td_7_s', 86400 * 6, $d_td_7_s ]);
$d_td_7_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_7_m == 1400 * 6 )? $pass++: array_push( $failarray, ['d_td_7_m', 1400 * 6, $d_td_7_m ]);
$d_td_7_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_7_h == 24 * 6 )? $pass++: array_push( $failarray, ['d_td_7_h', 24 * 6, $d_td_7_h ]);
$d_td_7_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_7_h == 24 * 6 )? $pass++: array_push( $failarray, ['d_td_7_h', 24 * 6, $d_td_7_h ]);

$d_wd_7 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_7 == 6 )? $pass++: array_push( $failarray, ['d_wd_7', 3, $d_wd_7 ]);
$d_wd_7_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_7_s == 86400 * 6  )? $pass++: array_push( $failarray, ['d_wd_7_s', 86400 * 6 , $d_wd_7_s ]);
$d_wd_7_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_7_m == 1400 * 6 )? $pass++: array_push( $failarray, ['d_wd_7_m', 1400 * 6 , $d_wd_7_m ]);
$d_wd_7_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_7_h == 24 * 6 )? $pass++: array_push( $failarray, ['d_wd_7_h', 24 * 6 , $d_wd_7_h ]);
$d_wd_7_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_7_h == 24 * 6 )? $pass++: array_push( $failarray, ['d_wd_7_h', 24 * 6 , $d_wd_7_h ]);

$d_cw_7 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_7 == 0 )? $pass++: array_push( $failarray, ['d_cw_7', 0, $d_cw_7 ]);
$d_cw_7_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_7_s == 0 )? $pass++: array_push( $failarray, ['d_cw_7_s', 0, $d_cw_7_s ]);
$d_cw_7_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_7_m == 0 )? $pass++: array_push( $failarray, ['d_cw_7_m', 0, $d_cw_7_m ]);
$d_cw_7_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_7_h == 0 )? $pass++: array_push( $failarray, ['d_cw_7_h', 0, $d_cw_7_h ]);
$d_cw_7_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_7_h == 0 )? $pass++: array_push( $failarray, ['d_cw_7_h', 0, $d_cw_7_h ]);

/////////////////////////////////////
//              8 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-12T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_8 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_8 == 7 )? $pass++: array_push( $failarray, ['d_td_8', 7, $d_td_8 ]);
$d_td_8_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_8_s == 86400 * 7 )? $pass++: array_push( $failarray, ['d_td_8_s', 86400 * 7, $d_td_8_s ]);
$d_td_8_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_8_m == 1400 * 7 )? $pass++: array_push( $failarray, ['d_td_8_m', 1400 * 7, $d_td_8_m ]);
$d_td_8_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_8_h == 24 * 7 )? $pass++: array_push( $failarray, ['d_td_8_h', 24 * 7, $d_td_8_h ]);
$d_td_8_y = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_8_y == 24 * 7 )? $pass++: array_push( $failarray, ['d_td_8_y', 24 * 7, $d_td_8_y ]);

$d_wd_8 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_8 == 5 )? $pass++: array_push( $failarray, ['d_wd_8', 3, $d_wd_8 ]);
$d_wd_8_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_8_s == 86400 * 5  )? $pass++: array_push( $failarray, ['d_wd_8_s', 86400 * 5 , $d_wd_8_s ]);
$d_wd_8_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_8_m == 1400 * 5 )? $pass++: array_push( $failarray, ['d_wd_8_m', 1400 * 5 , $d_wd_8_m ]);
$d_wd_8_y = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_8_y == 24 * 5 )? $pass++: array_push( $failarray, ['d_wd_8_y', 24 * 5 , $d_wd_8_y ]);

$d_cw_8 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_8 == 1 )? $pass++: array_push( $failarray, ['d_cw_8', 1, $d_cw_8 ]);
$d_cw_8_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_8_s == 86400 * 7 * 1 )? $pass++: array_push( $failarray, ['d_cw_8_s', 86400 * 7 * 1 , $d_cw_8_s ]);
$d_cw_8_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_8_m == 1400 * 7 * 1 )? $pass++: array_push( $failarray, ['d_cw_8_m', 1400 * 7 * 1 , $d_cw_8_m ]);
$d_cw_8_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_8_h == 24 * 7 * 1 )? $pass++: array_push( $failarray, ['d_cw_8_h', 24 * 7 * 1 , $d_cw_8_h ]);
$d_cw_8_y = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_8_y == 24 * 7 * 1 )? $pass++: array_push( $failarray, ['d_cw_8_y', 24 * 7 * 1 , $d_cw_8_y ]);

/////////////////////////////////////
//              15 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-19T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_15 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_15 == 14 )? $pass++: array_push( $failarray, ['d_td_15', 14, $d_td_15 ]);
$d_td_15_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_15_s == 86400 * 14 )? $pass++: array_push( $failarray, ['d_td_15_s', 86400 * 14 , $d_td_15_s ]);
$d_td_15_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_15_m == 1400 * 14 )? $pass++: array_push( $failarray, ['d_td_15_m', 1400 * 14 , $d_td_15_m ]);
$d_td_15_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_15_h == 24 * 14 )? $pass++: array_push( $failarray, ['d_td_15_h', 24 * 14 , $d_td_15_h ]);
$d_td_15_y = $aligent->_daysBetween( $date1, $date2, 4 ); //
( $d_td_15_y == 0 )? $pass++: array_push( $failarray, ['d_td_15_y', 0 , $d_td_15_y ]);

$d_wd_15 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_15 == 10 )? $pass++: array_push( $failarray, ['d_wd_15', 10 , $d_wd_15 ]);
$d_wd_15_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_15_s == 86400 * 10  )? $pass++: array_push( $failarray, ['d_wd_15_s', 86400 * 10 , $d_wd_15_s ]);
$d_wd_15_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_15_m == 1400 * 10 )? $pass++: array_push( $failarray, ['d_wd_15_m', 1400 * 10 , $d_wd_15_m ]);
$d_wd_15_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_15_h == 24 * 10 )? $pass++: array_push( $failarray, ['d_wd_15_h', 24 * 10 , $d_wd_15_h ]);
$d_wd_15_y = $aligent->_weekdays( $date1, $date2, 4 ); //
( $d_wd_15_y == 0 )? $pass++: array_push( $failarray, ['d_wd_15_y', 0 , $d_wd_15_y ]);

$d_cw_15 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_15 == 2 )? $pass++: array_push( $failarray, ['d_cw_15', 2, $d_cw_15 ]);
$d_cw_15_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_15_s == 86400 * 7 * 2 )? $pass++: array_push( $failarray, ['d_cw_15_s', 86400 * 7 * 2 , $d_cw_15_s ]);
$d_cw_15_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_15_m == 1400 * 7 * 2 )? $pass++: array_push( $failarray, ['d_cw_15_m', 1400 * 7 * 2 , $d_cw_15_m ]);
$d_cw_15_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_15_h == 24 * 7 * 2  )? $pass++: array_push( $failarray, ['d_cw_15_h', 24 * 7 * 2 , $d_cw_15_h ]);
$d_cw_15_y = $aligent->_completeWeeks( $date1, $date2, 4 ); //
( $d_cw_15_y == 0  )? $pass++: array_push( $failarray, ['d_cw_15_y', 0 , $d_cw_15_y ]);

/////////////////////////////////////
//              365 Days           ///
///////////////////////////////////////
$date1 = new DateTime( "1989-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1990-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_365 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_365 == 364 )? $pass++: array_push( $failarray, ['d_td_365', 364, $d_td_365 ]);
$d_td_365_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_365_s == 86400 * 364 )? $pass++: array_push( $failarray, ['d_td_365_s', 86400 * 364 , $d_td_365_s ]);
$d_td_365_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_365_m == 1400 * 364 )? $pass++: array_push( $failarray, ['d_td_365_m', 1400 * 364 , $d_td_365_m ]);
$d_td_365_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_365_h == 24 * 364 )? $pass++: array_push( $failarray, ['d_td_365_h', 24 * 364 , $d_td_365_h ]);
$d_td_365_y = $aligent->_daysBetween( $date1, $date2, 4 ); //
( $d_td_365_y == 0 )? $pass++: array_push( $failarray, ['d_td_365_y', 0 , $d_td_365_y ]);

$d_wd_365 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_365 == 260 )? $pass++: array_push( $failarray, ['d_wd_365', 260, $d_wd_365 ]);
$d_wd_365_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_365_s == 86400 * 260  )? $pass++: array_push( $failarray, ['d_wd_365_s', 86400 * 260 , $d_wd_365_s ]);
$d_wd_365_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_365_m == 1400 * 260 )? $pass++: array_push( $failarray, ['d_wd_365_m', 1400 * 260 , $d_wd_365_m ]);
$d_wd_365_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_365_h == 24 * 260 )? $pass++: array_push( $failarray, ['d_wd_365_h', 24 * 260 , $d_wd_365_h ]);
$d_wd_365_y = $aligent->_weekdays( $date1, $date2, 4 ); //
( $d_wd_365_y == 0 )? $pass++: array_push( $failarray, ['d_wd_365_y', 0 , $d_wd_365_y ]);

$d_cw_365 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_365 == 52 )? $pass++: array_push( $failarray, ['d_cw_365', 52, $d_cw_365 ]);
$d_cw_365_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_365_s == 86400 * 7 * 52 )? $pass++: array_push( $failarray, ['d_cw_365_s', 86400 * 7 * 52 , $d_cw_365_s ]);
$d_cw_365_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_365_m == 1400 * 7 * 52 )? $pass++: array_push( $failarray, ['d_cw_365_m', 1400 * 7 * 52 , $d_cw_365_m ]);
$d_cw_365_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_365_h == 24 * 7 * 52  )? $pass++: array_push( $failarray, ['d_cw_365_h', 24 * 7 * 52 , $d_cw_365_h ]);
$d_cw_365_y = $aligent->_completeWeeks( $date1, $date2, 4 ); //
( $d_cw_365_y == 0 )? $pass++: array_push( $failarray, ['d_cw_365_y', 0 , $d_cw_365_y ]);

/////////////////////////////////////
//         365 Days Leap Year      ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1989-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_365_leap = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_365_leap == 365 )? $pass++: array_push( $failarray, ['d_td_365_leap', 365, $d_td_365_leap ]);
$d_td_365_leap_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_365_leap_s == 86400 * 365 )? $pass++: array_push( $failarray, ['d_td_365_leap_s', 86400 * 365 , $d_td_365_leap_s ]);
$d_td_365_leap_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_365_leap_m == 1400 * 365 )? $pass++: array_push( $failarray, ['d_td_365_leap_m', 1400 * 365 , $d_td_365_leap_m ]);
$d_td_365_leap_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_365_leap_h == 24 * 365 )? $pass++: array_push( $failarray, ['d_td_365_leap_h', 24 * 365 , $d_td_365_leap_h ]);
$d_td_365_leap_y = $aligent->_daysBetween( $date1, $date2, 4 ); //
( $d_td_365_leap_y == 0 )? $pass++: array_push( $failarray, ['d_td_365_leap_y', 0 , $d_td_365_leap_y ]);

$d_wd_365_leap = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_365_leap == 261 )? $pass++: array_push( $failarray, ['d_wd_365_leap', 261, $d_wd_365_leap ]);
$d_wd_365_leap_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_365_leap_s == 86400 * 261  )? $pass++: array_push( $failarray, ['d_wd_365_leap_s', 86400 * 261 , $d_wd_365_leap_s ]);
$d_wd_365_leap_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_365_leap_m == 1400 * 261 )? $pass++: array_push( $failarray, ['d_wd_365_leap_m', 1400 * 261 , $d_wd_365_leap_m ]);
$d_wd_365_leap_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_365_leap_h == 24 * 261 )? $pass++: array_push( $failarray, ['d_wd_365_leap_h', 24 * 261 , $d_wd_365_leap_h ]);
$d_wd_365_leap_y = $aligent->_weekdays( $date1, $date2, 4 ); //
( $d_wd_365_leap_y == 0 )? $pass++: array_push( $failarray, ['d_wd_365_leap_y', 0 , $d_wd_365_leap_y ]);

$d_cw_365_leap = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_365_leap == 52 )? $pass++: array_push( $failarray, ['d_cw_365_leap', 52, $d_cw_365_leap ]);
$d_cw_365_leap_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_365_leap_s == 86400 * 7 * 52 )? $pass++: array_push( $failarray, ['d_cw_365_leap_s', 86400 * 7 * 52 , $d_cw_365_leap_s ]);
$d_cw_365_leap_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_365_leap_m == 1400 * 7 * 52 )? $pass++: array_push( $failarray, ['d_cw_365_leap_m', 1400 * 7 * 52 , $d_cw_365_leap_m ]);
$d_cw_365_leap_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_365_leap_h == 24 * 7 * 52  )? $pass++: array_push( $failarray, ['d_cw_365_leap_h', 24 * 7 * 52 , $d_cw_365_leap_h ]);
$d_cw_365_leap_y = $aligent->_completeWeeks( $date1, $date2, 4 ); //
( $d_cw_365_leap_y == 0 * 52  )? $pass++: array_push( $failarray, ['d_cw_365_leap_y', 0 * 52 , $d_cw_365_leap_y ]);

/////////////////////////////////////
//              730 Days           ///
///////////////////////////////////////
$date1 = new DateTime( "1989-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1991-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_730 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_730 == 729 )? $pass++: array_push( $failarray, ['d_td_730', 729, $d_td_730 ]);
$d_td_730_leap_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_730_leap_s == 86400 * 729 )? $pass++: array_push( $failarray, ['d_td_730_leap_s', 86400 * 729 , $d_td_730_leap_s ]);
$d_td_730_leap_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_730_leap_m == 1400 * 729 )? $pass++: array_push( $failarray, ['d_td_730_leap_m', 1400 * 729 , $d_td_730_leap_m ]);
$d_td_730_leap_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_730_leap_h == 24 * 729 )? $pass++: array_push( $failarray, ['d_td_730_leap_h', 24 * 729 , $d_td_730_leap_h ]);

$d_wd_730 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_730 == 521 )? $pass++: array_push( $failarray, ['d_wd_730', 521, $d_wd_730 ]);
$d_wd_730_leap_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_730_leap_s == 86400 * 521  )? $pass++: array_push( $failarray, ['d_wd_730_leap_s', 86400 * 521 , $d_wd_730_leap_s ]);
$d_wd_730_leap_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_730_leap_m == 1400 * 521 )? $pass++: array_push( $failarray, ['d_wd_730_leap_m', 1400 * 521 , $d_wd_730_leap_m ]);
$d_wd_730_leap_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_730_leap_h == 24 * 521 )? $pass++: array_push( $failarray, ['d_wd_730_leap_h', 24 * 521 , $d_wd_730_leap_h ]);

$d_cw_730 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_730 == 104 )? $pass++: array_push( $failarray, ['d_cw_730', 104, $d_cw_730 ]);
$d_cw_730_leap_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_730_leap_s == 86400 * 7 * 104 )? $pass++: array_push( $failarray, ['d_cw_730_leap_s', 86400 * 7 * 104 , $d_cw_730_leap_s ]);
$d_cw_730_leap_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_730_leap_m == 1400 * 7 * 104 )? $pass++: array_push( $failarray, ['d_cw_730_leap_m', 1400 * 7 * 104 , $d_cw_730_leap_m ]);
$d_cw_730_leap_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_730_leap_h == 24 * 7 * 104  )? $pass++: array_push( $failarray, ['d_cw_730_leap_h', 24 * 7 * 104 , $d_cw_730_leap_h ]);

/////////////////////////////////////
//         731 Days Leap Year      ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1990-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_731_leap = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_731_leap == 730 )? $pass++: array_push( $failarray, ['d_td_731_leap', 730, $d_td_731_leap ]);
$d_td_731_leap_s = $aligent->_daysBetween( $date1, $date2, 1 ); //
( $d_td_731_leap_s == 86400 * 730 )? $pass++: array_push( $failarray, ['d_td_731_leap_s', 86400 * 730 , $d_td_731_leap_s ]);
$d_td_731_leap_m = $aligent->_daysBetween( $date1, $date2, 2 ); //
( $d_td_731_leap_m == 1400 * 730 )? $pass++: array_push( $failarray, ['d_td_731_leap_m', 1400 * 730 , $d_td_731_leap_m ]);
$d_td_731_leap_h = $aligent->_daysBetween( $date1, $date2, 3 ); //
( $d_td_731_leap_h == 24 * 730 )? $pass++: array_push( $failarray, ['d_td_730_leap_h', 24 * 730 , $d_td_731_leap_h ]);

$d_wd_731_leap = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_731_leap == 522 )? $pass++: array_push( $failarray, ['d_wd_731_leap', 522, $d_wd_731_leap ]);
$d_wd_731_leap_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_731_leap_s == 86400 * 522  )? $pass++: array_push( $failarray, ['d_wd_731_leap_s', 86400 * 522 , $d_wd_731_leap_s ]);
$d_wd_731_leap_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_731_leap_m == 1400 * 522 )? $pass++: array_push( $failarray, ['d_wd_731_leap_m', 1400 * 522 , $d_wd_731_leap_m ]);
$d_wd_731_leap_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_731_leap_h == 24 * 522 )? $pass++: array_push( $failarray, ['d_wd_731_leap_h', 24 * 522 , $d_wd_731_leap_h ]);

$d_cw_731_leap = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_731_leap == 104 )? $pass++: array_push( $failarray, ['d_cw_731_leap', 104, $d_cw_731_leap ]);
$d_cw_731_leap_s = $aligent->_completeWeeks( $date1, $date2, 1 ); //
( $d_cw_731_leap_s == 86400 * 7 * 104 )? $pass++: array_push( $failarray, ['d_cw_731_leap_s', 86400 * 7 * 104 , $d_cw_731_leap_s ]);
$d_cw_731_leap_m = $aligent->_completeWeeks( $date1, $date2, 2 ); //
( $d_cw_731_leap_m == 1400 * 7 * 104 )? $pass++: array_push( $failarray, ['d_cw_731_leap_m', 1400 * 7 * 104 , $d_cw_731_leap_m ]);
$d_cw_731_leap_h = $aligent->_completeWeeks( $date1, $date2, 3 ); //
( $d_cw_731_leap_h == 24 * 7 * 104  )? $pass++: array_push( $failarray, ['d_cw_731_leap_h', 24 * 7 * 104 , $d_cw_731_leap_h ]);

/////////////////////////////////////
//         Single test < 7 Days    ///
//  Start = Friday  End = Monday    ///
////////////////////////////////////////
$date1 = new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "UTC" ) ); //Friday
$date2 = new DateTime( "1988-01-11T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday

$d_wd_fri_mon = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_fri_mon == 0 )? $pass++: array_push( $failarray, ['d_wd_fri_mon', 0 , $d_wd_fri_mon ]);
$d_wd_fri_mon_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_fri_mon_s == 86400 * 0  )? $pass++: array_push( $failarray, ['d_wd_fri_mon_s', 86400 * 0 , $d_wd_fri_mon_s ]);
$d_wd_fri_mon_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_fri_mon_m == 1400 * 0 )? $pass++: array_push( $failarray, ['d_wd_fri_mon_m', 1400 * 0 , $d_wd_fri_mon_m ]);
$d_wd_fri_mon_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_fri_mon_h == 24 * 0 )? $pass++: array_push( $failarray, ['d_wd_fri_mon_h', 24 * 0 , $d_wd_fri_mon_h ]);

/////////////////////////////////////
//         Single test < 7 Days    ///
//  Start = Friday  End = Teusday   ///
////////////////////////////////////////
$date1 = new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "UTC" ) ); //Friday
$date2 = new DateTime( "1988-01-12T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_wd_fri_tue = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_fri_tue == 1 )? $pass++: array_push( $failarray, ['d_wd_fri_tue', 1 , $d_wd_fri_tue ]);
$d_wd_fri_tue_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_fri_tue_s == 86400 * 1 )? $pass++: array_push( $failarray, ['d_wd_fri_tue_s', 86400 * 1 , $d_wd_fri_tue_s ]);
$d_wd_fri_tue_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_fri_tue_m == 1400 * 1 )? $pass++: array_push( $failarray, ['d_wd_fri_tue_m', 1400 * 1 , $d_wd_fri_tue_m ]);
$d_wd_fri_tue_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_fri_tue_h == 24 * 1 )? $pass++: array_push( $failarray, ['d_wd_fri_tue_h', 24 * 1 , $d_wd_fri_tue_h ]);

///////////////////////////////////////
//         Single test < 7 Days      ///
//  Start = Friday  End = Wednesday   ///
//////////////////////////////////////////
$date1 = new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "UTC" ) ); //Friday
$date2 = new DateTime( "1988-01-13T00:00:00Z", new DateTimeZone( "UTC" ) ); //Wednesday

$d_wd_fri_wed = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_fri_wed == 2 )? $pass++: array_push( $failarray, ['d_wd_fri_wed', 2 , $d_wd_fri_wed ]);
$d_wd_fri_wed_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_fri_wed_s == 86400 * 2 )? $pass++: array_push( $failarray, ['d_wd_fri_wed_s', 86400 * 2 , $d_wd_fri_wed_s ]);
$d_wd_fri_wed_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_fri_wed_m == 1400 * 2 )? $pass++: array_push( $failarray, ['d_wd_fri_wed_m', 1400 * 2 , $d_wd_fri_wed_m ]);
$d_wd_fri_wed_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_fri_wed_h == 24 * 2 )? $pass++: array_push( $failarray, ['d_wd_fri_wed_h', 24 * 2 , $d_wd_fri_wed_h ]);

///////////////////////////////////////
//         Single test < 7 Days      ///
//  Start = Friday  End = Thursday    ///
//////////////////////////////////////////
$date1 = new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "UTC" ) ); //Friday
$date2 = new DateTime( "1988-01-14T00:00:00Z", new DateTimeZone( "UTC" ) ); //Thursday

$d_wd_fri_thur = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_fri_thur == 3 )? $pass++: array_push( $failarray, ['d_wd_fri_thur', 3 , $d_wd_fri_thur ]);
$d_wd_fri_thur_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_fri_thur_s == 86400 * 3 )? $pass++: array_push( $failarray, ['d_wd_fri_thur_s', 86400 * 3 , $d_wd_fri_thur_s ]);
$d_wd_fri_thur_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_fri_thur_m == 1400 * 3 )? $pass++: array_push( $failarray, ['d_wd_fri_thur_m', 1400 * 3 , $d_wd_fri_thur_m ]);
$d_wd_fri_thur_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_fri_thur_h == 24 * 3 )? $pass++: array_push( $failarray, ['d_wd_fri_thur_h', 24 * 3 , $d_wd_fri_thur_h ]);

///////////////////////////////////////
//         Single test < 8 Days      ///
//  Start = Friday  End = Friday      ///
//////////////////////////////////////////
$date1 = new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "UTC" ) ); //Friday
$date2 = new DateTime( "1988-01-15T00:00:00Z", new DateTimeZone( "UTC" ) ); //Friday

$d_wd_fri = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_fri == 4 )? $pass++: array_push( $failarray, ['d_wd_fri', 4  , $d_wd_fri ]);
$d_wd_fri_s = $aligent->_weekdays( $date1, $date2, 1 ); //
( $d_wd_fri_s == 86400 * 4 )? $pass++: array_push( $failarray, ['d_wd_fri_s', 86400 * 4 , $d_wd_fri_s ]);
$d_wd_fri_m = $aligent->_weekdays( $date1, $date2, 2 ); //
( $d_wd_fri_m == 1400 * 4 )? $pass++: array_push( $failarray, ['d_wd_fri_m', 1400 * 4 , $d_wd_fri_m ]);
$d_wd_fri_h = $aligent->_weekdays( $date1, $date2, 3 ); //
( $d_wd_fri_h == 24 * 4 )? $pass++: array_push( $failarray, ['d_wd_fri_h', 24 * 4 , $d_wd_fri_h ]);


////////////////////////////////////////////
//         Single test LIMITS             ///
//  Start = -6060-03-01  End = 9999-12-31  ///
///////////////////////////////////////////////
$date1 = new DateTime( "-6060-03-01T00:00:00Z", new DateTimeZone( "UTC" ) ); // Thursday
$date2 = new DateTime( "9999-12-31T00:00:00Z", new DateTimeZone( "UTC" ) ); // Friday

$d_limit = $aligent->_daysBetween( $date1, $date2 ); //
( $d_limit == 5865733 )? $pass++: array_push( $failarray, ['d_limit', 5865733 , $d_limit ]);
$d_wd_limit = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_limit == 4189811 )? $pass++: array_push( $failarray, ['d_wd_limit', 4189811 , $d_wd_limit ]);
$d_cw_limit = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_limit == 837961 )? $pass++: array_push( $failarray, ['d_cw_limit', 837961 , $d_cw_limit ]);

////////////////////////////////////////////
//         Single test 100 Years          ///
//  Start = 0001-01-01  End = 0101-01-01   ///
///////////////////////////////////////////////
$date1 = new DateTime( "0001-01-01T00:00:00Z", new DateTimeZone( "UTC" ) ); // Thursday
$date2 = new DateTime( "0101-01-01T00:00:00Z", new DateTimeZone( "UTC" ) ); // Friday

$d_td_100_year = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_100_year == 36523 )? $pass++: array_push( $failarray, ['d_td_100_year', 36523 , $d_td_100_year ]);
$d_wc_100_year = $aligent->_weekdays( $date1, $date2 ); //
( $d_wc_100_year == 26089 )? $pass++: array_push( $failarray, ['d_wc_100_year', 26089 , $d_wc_100_year ]);
$d_cw_100_year = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_100_year == 5217 )? $pass++: array_push( $failarray, ['d_cw_100_year', 5217 , $d_cw_100_year ]);

////////////////////////////////////////////
//         Single test 1000 Years         ///
//  Start = 0001-01-01  End = 1001-01-01   ///
///////////////////////////////////////////////
$date1 = new DateTime( "0001-01-01T00:00:00Z", new DateTimeZone( "UTC" ) ); // Thursday
$date2 = new DateTime( "1001-01-01T00:00:00Z", new DateTimeZone( "UTC" ) ); // Friday

$d_td_1000_year = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_1000_year == 365241 )? $pass++: array_push( $failarray, ['d_td_1000_year', 365241 , $d_td_1000_year ]);
$d_wc_1000_year = $aligent->_weekdays( $date1, $date2 ); //
( $d_wc_1000_year == 260887 )? $pass++: array_push( $failarray, ['d_wc_1000_year', 260887 , $d_wc_1000_year ]);
$d_cw_1000_year = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_1000_year == 52177 )? $pass++: array_push( $failarray, ['d_cw_1000_year', 52177 , $d_cw_1000_year ]);

////////////////////////////////////////
//         Single test INT 0 Days     ///
//  Start = 1989-01-01T00:00:00+00:00  ///  
//  End   = 1990-01-01T00:00:00+00:00   ///
/////////////////////////////////////////////
$date1 = 599616000; // Friday 1989-01-01T00:00:00+00:00
$date2 = 599616000; // Friday 1989-01-01T00:00:00+00:00
$d_td_int_0 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_int_0 == 0 )? $pass++: array_push( $failarray, ['d_td_int_0', 0 , $d_td_int_0 ]);
$d_wd_int_0 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_int_0 == 0 )? $pass++: array_push( $failarray, ['d_wd_int_0', 0 , $d_wd_int_0 ]);
$d_cw_int_0 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_int_0 == 0 )? $pass++: array_push( $failarray, ['d_cw_int_0', 0 , $d_cw_int_0 ]);

////////////////////////////////////////
//         Single test INT 3 Days     ///
//  Start = 1989-01-01T00:00:00+00:00  ///  
//  End   = 1989-01-03T00:00:00+00:00   ///
/////////////////////////////////////////////
$date1 = 599616000; // Sunday 1989-01-01T00:00:00+00:00
$date2 = 599788800; // Tuesday 1989-01-03T00:00:00+00:00
$d_td_int_3 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_int_3 == 1 )? $pass++: array_push( $failarray, ['d_td_int_3', 1 , $d_td_int_3 ]);
$d_wd_int_3 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_int_3 == 1 )? $pass++: array_push( $failarray, ['d_wd_int_3', 1 , $d_wd_int_3 ]);
$d_cw_int_3 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_int_3 == 0 )? $pass++: array_push( $failarray, ['d_cw_int_3', 0 , $d_cw_int_3 ]);

////////////////////////////////////////
//         Single test INT 1 Years    ///
//  Start = 1989-01-01T00:00:00+00:00  ///  
//  End   = 1990-01-01T00:00:00+00:00   ///
/////////////////////////////////////////////
$date1 = 599616000; // Friday 0010-01-01T00:00:00+00:00
$date2 = 631152000; // Friday 9999-12-31T00:00:00+00:00
$d_td_int_1_year = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_int_1_year == 364 )? $pass++: array_push( $failarray, ['d_td_int_1_year', 364 , $d_td_int_1_year ]);
$d_wd_int_1_year = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_int_1_year == 260 )? $pass++: array_push( $failarray, ['d_wd_int_1_year', 260 , $d_wd_int_1_year ]);
$d_cw_int_1_year = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_int_1_year == 52 )? $pass++: array_push( $failarray, ['d_cw_int_1_year', 52 , $d_cw_int_1_year ]);

///////////////////////////////////////////
//         Single test STRING 0 Days     ///
//  Start = 1989-01-01T00:00:00+00:00     ///  
//  End   = 1989-01-01T00:00:00+00:00      ///
///////////////////////////////////////////////
$date1 = '1989-01-01T00:00:00+00:00'; //
$date2 = '1989-01-01T00:00:00+00:00'; //
$d_td_string_0 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_string_0 == 0 )? $pass++: array_push( $failarray, ['d_td_string_0', 0 , $d_td_string_0 ]);
$d_wd_string_0 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_string_0 == 0 )? $pass++: array_push( $failarray, ['d_wd_string_0', 0 , $d_wd_string_0 ]);
$d_cw_string_0 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_string_0 == 0 )? $pass++: array_push( $failarray, ['d_cw_string_0', 0 , $d_cw_string_0 ]);

///////////////////////////////////////////
//  Single test String 0 Days with ','   ///
//  Start = 1989-01-01T00:00:00+00:00     ///  
//  End   = 1990-01-01T00:00:00+00:00      ///
///////////////////////////////////////////////
$date1 = '599,616,000'; // Friday 1989-01-01T00:00:00+00:00
$date2 = '599,616,000'; // Friday 1989-01-01T00:00:00+00:00
$d_td_int_0 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_int_0 == 0 )? $pass++: array_push( $failarray, ['d_td_int_0', 0 , $d_td_int_0 ]);
$d_wd_int_0 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_int_0 == 0 )? $pass++: array_push( $failarray, ['d_wd_int_0', 0 , $d_wd_int_0 ]);
$d_cw_int_0 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_int_0 == 0 )? $pass++: array_push( $failarray, ['d_cw_int_0', 0 , $d_cw_int_0 ]);

///////////////////////////////////////////
//  Single test STRING 0 Days with '/'   ///
//  Start = 1989-01-01T00:00:00+00:00     ///  
//  End   = 1989-01-01T00:00:00+00:00      ///
///////////////////////////////////////////////
$date1 = '1989/01/01T00:00:00+00:00'; //
$date2 = '1989/01/01T00:00:00+00:00'; //
$d_td_forwardSlash_0 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_forwardSlash_0 == 0 )? $pass++: array_push( $failarray, ['d_td_forwardSlash_0', 0 , $d_td_forwardSlash_0 ]);
$d_wd_forwardSlash_0 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_forwardSlash_0 == 0 )? $pass++: array_push( $failarray, ['d_wd_forwardSlash_0', 0 , $d_wd_forwardSlash_0 ]);
$d_cw_forwardSlash_0 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_forwardSlash_0 == 0 )? $pass++: array_push( $failarray, ['d_cw_forwardSlash_0', 0 , $d_cw_forwardSlash_0 ]);

///////////////////////////////////////////
//  Single test STRING 0 Days with '\'   ///
//  Start = 1989-01-01T00:00:00+00:00     ///  
//  End   = 1989-01-01T00:00:00+00:00      ///
///////////////////////////////////////////////
$date1 = '1989\01\01T00:00:00+00:00'; //
$date2 = '1989\01\01T00:00:00+00:00'; //
$d_td_backSlash_0 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_backSlash_0 == 0 )? $pass++: array_push( $failarray, ['d_td_backSlash_0', 0 , $d_td_backSlash_0 ]);
$d_wd_backSlash_0 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_backSlash_0 == 0 )? $pass++: array_push( $failarray, ['d_wd_backSlash_0', 0 , $d_wd_backSlash_0 ]);
$d_cw_backSlash_0 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_backSlash_0 == 0 )? $pass++: array_push( $failarray, ['d_cw_backSlash_0', 0 , $d_cw_backSlash_0 ]);

/////////////////////////////////////////////////
//  Single test STRING 0 Days with T ommited   ///
//  Start = 1989-01-01T00:00:00+00:00           ///  
//  End   = 1989-01-01T00:00:00+00:00            ///
/////////////////////////////////////////////////////
$date1 = '1989\01\01 00:00:00+00:00'; //
$date2 = '1989\01\01 00:00:00+00:00'; //
$d_td_backSlash_0 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_backSlash_0 == 0 )? $pass++: array_push( $failarray, ['d_td_backSlash_0', 0 , $d_td_backSlash_0 ]);
$d_wd_backSlash_0 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_backSlash_0 == 0 )? $pass++: array_push( $failarray, ['d_wd_backSlash_0', 0 , $d_wd_backSlash_0 ]);
$d_cw_backSlash_0 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_backSlash_0 == 0 )? $pass++: array_push( $failarray, ['d_cw_backSlash_0', 0 , $d_cw_backSlash_0 ]);
///////////////////////////////////////////
//         Single test STRING 3 Days     ///
//  Start = 1989-01-01T00:00:00+00:00     ///  
//  End   = 1989-01-01T00:00:00+00:00      ///
///////////////////////////////////////////////
$date1 = '1989-01-01T00:00:00+00:00'; //
$date2 = '1989-01-03T00:00:00+00:00'; //
$d_td_string_3 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_string_3 == 1 )? $pass++: array_push( $failarray, ['d_td_string_3', 1 , $d_td_string_3 ]);
$d_wd_string_3 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_string_3 == 1 )? $pass++: array_push( $failarray, ['d_wd_string_3', 1 , $d_wd_string_3 ]);
$d_cw_string_3 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_string_3 == 0 )? $pass++: array_push( $failarray, ['d_cw_string_3', 0 , $d_cw_string_3 ]);

///////////////////////////////////////////
//         Single test STRING 1 Years    ///
//  Start = 1989-01-01T00:00:00+00:00     ///  
//  End   = 1990-01-01T00:00:00+00:00      ///
///////////////////////////////////////////////
$date1 = '1989-01-01T00:00:00+00:00'; //
$date2 = '1990-01-01T00:00:00+00:00'; //
$d_td_string_1_year = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_string_1_year == 364 )? $pass++: array_push( $failarray, ['d_td_string_1_year', 364 , $d_td_string_1_year ]);
$d_wd_string_1_year = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_string_1_year == 260 )? $pass++: array_push( $failarray, ['d_wd_string_1_year', 260 , $d_wd_string_1_year ]);
$d_cw_string_1_year = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_string_1_year == 52 )? $pass++: array_push( $failarray, ['d_cw_string_1_year', 52 , $d_cw_string_1_year ]);

////////////////////////////////////////////
//         Single test ZERO               ///
//  Start = 0000-00-00  End = 0000-00-00   ///
///////////////////////////////////////////////
/* $date1 = new DateTime( "0000-00-00T00:00:00Z", new DateTimeZone( "UTC" ) ); // Thursday
$date2 = new DateTime( "0000-00-00T00:00:00Z", new DateTimeZone( "UTC" ) ); // Friday

$d_zero = $aligent->_daysBetween( $date1, $date2 ); //
( $d_zero == 0 )? $pass++: array_push( $failarray, ['d_zero', 0 , $d_zero ]);
$d_wd_zero = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_zero == 0 )? $pass++: array_push( $failarray, ['d_wd_zero', 0 , $d_wd_zero ]);
$d_cw_zero = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_zero == 0 )? $pass++: array_push( $failarray, ['d_cw_zero', 0 , $d_cw_zero ]); */

////////////////////////////////////////////
//         Single test ZERO+3             ///
//  Start = 0000-00-00  End = 0000-00-00   ///
///////////////////////////////////////////////
/* $date1 = new DateTime( "0000-00-00T00:00:00Z", new DateTimeZone( "UTC" ) ); // Thursday
$date2 = new DateTime( "0000-00-03T00:00:00Z", new DateTimeZone( "UTC" ) ); // Friday

$d_zero_3 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_zero_3 == 1 )? $pass++: array_push( $failarray, ['d_zero', 1 , $d_zero ]);
$d_wd_zero_3 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_zero_3 == 1 )? $pass++: array_push( $failarray, ['d_wd_zero_3', 1 , $d_wd_zero_3 ]);
$d_cw_zero_3 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_zero_3 == 1 )? $pass++: array_push( $failarray, ['d_cw_zero_3', 1 , $d_cw_zero_3 ]); */

/////////////////////////////////////////////
//         Single test OOB                 ///
//  Start = -6060-02-29  End = 10000-01-01  ///
////////////////////////////////////////////////
/* $date1 = "-10000-01-01T00:00:00Z"; // Thursday
$date2 = "10000-01-01T00:00:00Z"; // Friday
$d_oob = $aligent->_daysBetween( $date1, $date2 ); //
( $d_oob == 0 )? $pass++: array_push( $failarray, ['d_oob', 0 , $d_oob ]); */

############################################
##              RESULTS SCREEN            ##
############################################ 
$row = 0;
?>
<table>
<tr>
    <td>Total tests</td>
    <td><?php echo $pass + count( $failarray ); ?></td>
</tr><tr>
    <td>Success rate</td>
    <td><?php echo round( ( $pass / ( $pass + count( $failarray ) ) * 100 ), 2) . '% ' ?></td>
</tr>
</table>
<?php if( count( $failarray ) > 0 ){?>
<table>
<tr>
    <th>Error #</th>
    <th>Failed Test</th>
    <th>Expect</th>
    <th>Result</th>
</tr>
<?php 
foreach( $failarray as $error ){
    $row++;
?>
<tr>
<td><?php echo '# ' . $row ?></td>
<td><?php echo $error[0]; ?></td>
<td style="text-align:center"><?php echo $error[1]; ?></td>
<td><?php echo $error[2]; ?></td>
</tr>
<?php } }?>