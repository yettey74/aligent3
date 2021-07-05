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
$d_wd_sd = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_sd == 0 )? $pass++: array_push( $failarray, ['d_wd_sd', 0, $d_wd_sd ]);
$d_cw_sd = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_sd == 0 )? $pass++: array_push( $failarray, ['d_cw_sd', 0, $d_cw_sd ]);


/////////////////////////////////////
//              Next Day           ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-05T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_sd = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_sd == 0 )? $pass++: array_push( $failarray, ['d_td_sd', 0, $d_td_sd ]);
$d_wd_sd = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_sd == 0 )? $pass++: array_push( $failarray, ['d_wd_sd', 0, $d_wd_sd ]);
$d_cw_sd = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_sd == 0 )? $pass++: array_push( $failarray, ['d_cw_sd', 0, $d_cw_sd ]);

/////////////////////////////////////
//              2 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-06T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_2 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_2 == 1 )? $pass++: array_push( $failarray, ['d_td_2', 1, $d_td_2 ]);
$d_wd_2 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_2 == 1 )? $pass++: array_push( $failarray, ['d_wd_2', 1, $d_wd_2 ]);
$d_cw_sd = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_sd == 0 )? $pass++: array_push( $failarray, ['d_cw_sd', 0, $d_cw_sd ]);


/////////////////////////////////////
//              3 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-07T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_3 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_3 == 2 )? $pass++: array_push( $failarray, ['d_td_3', 2, $d_td_3 ]);
$d_wd_3 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_3 == 2 )? $pass++: array_push( $failarray, ['d_wd_3', 2, $d_wd_3 ]);
$d_cw_3 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_3 == 0 )? $pass++: array_push( $failarray, ['d_cw_3', 0, $d_cw_3 ]);

/////////////////////////////////////
//              4 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-08T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_4 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_4 == 3 )? $pass++: array_push( $failarray, ['d_td_4', 3, $d_td_4 ]);
$d_wd_4 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_4 == 3 )? $pass++: array_push( $failarray, ['d_wd_4', 3, $d_wd_4 ]);
$d_cw_4 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_4 == 0 )? $pass++: array_push( $failarray, ['d_cw_4', 0, $d_cw_4 ]);

/////////////////////////////////////
//              5 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-09T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_5 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_5 == 4 )? $pass++: array_push( $failarray, ['d_td_5', 4, $d_td_5 ]);
$d_wd_5 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_5 == 4 )? $pass++: array_push( $failarray, ['d_wd_5', 4, $d_wd_5 ]);
$d_cw_5 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_5 == 0 )? $pass++: array_push( $failarray, ['d_cw_5', 0, $d_cw_5 ]);

/////////////////////////////////////
//              6 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-10T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_6 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_6 == 5 )? $pass++: array_push( $failarray, ['d_td_6', 5, $d_td_6 ]);
$d_wd_6 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_6 == 5 )? $pass++: array_push( $failarray, ['d_wd_6', 5, $d_wd_6 ]);
$d_cw_6 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_6 == 0 )? $pass++: array_push( $failarray, ['d_cw_6', 0, $d_cw_6 ]);

/////////////////////////////////////
//              7 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-11T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_7 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_7 == 6 )? $pass++: array_push( $failarray, ['d_td_7', 6, $d_td_7 ]);
$d_wd_7 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_7 == 6 )? $pass++: array_push( $failarray, ['d_wd_7', 6, $d_wd_7 ]);
$d_cw_7 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_7 == 0 )? $pass++: array_push( $failarray, ['d_cw_7', 0, $d_cw_7 ]);

/////////////////////////////////////
//              8 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-12T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_8 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_8 == 7 )? $pass++: array_push( $failarray, ['d_td_8', 7, $d_td_8 ]);
$d_wd_8 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_8 == 5 )? $pass++: array_push( $failarray, ['d_wd_8', 5, $d_wd_8 ]);
$d_cw_8 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_8 == 1 )? $pass++: array_push( $failarray, ['d_cw_8', 1, $d_cw_8 ]);

/////////////////////////////////////
//              15 Days             ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1988-01-19T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_15 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_15 == 14 )? $pass++: array_push( $failarray, ['d_td_15', 14, $d_td_15 ]);
$d_wd_15 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_15 == 10 )? $pass++: array_push( $failarray, ['d_wd_15', 10, $d_wd_15 ]);
$d_cw_15 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_15 == 2 )? $pass++: array_push( $failarray, ['d_cw_15', 2, $d_cw_15 ]);

/////////////////////////////////////
//              365 Days           ///
///////////////////////////////////////
$date1 = new DateTime( "1989-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1990-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_365 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_365 == 364 )? $pass++: array_push( $failarray, ['d_td_365', 364, $d_td_365 ]);
$d_wd_365 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_365 == 260 )? $pass++: array_push( $failarray, ['d_wd_365', 260, $d_wd_365 ]);
$d_cw_365 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_365 == 52 )? $pass++: array_push( $failarray, ['d_cw_365', 52, $d_cw_365 ]);

/////////////////////////////////////
//         365 Days Leap Year      ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1989-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_365_leap = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_365_leap == 365 )? $pass++: array_push( $failarray, ['d_td_365_leap', 365, $d_td_365_leap ]);
$d_wd_365_leap = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_365_leap == 261 )? $pass++: array_push( $failarray, ['d_wd_365_leap', 261, $d_wd_365_leap ]);
$d_cw_365_leap = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_365_leap == 52 )? $pass++: array_push( $failarray, ['d_cw_365_leap', 52, $d_cw_365_leap ]);

/////////////////////////////////////
//              730 Days           ///
///////////////////////////////////////
$date1 = new DateTime( "1989-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1991-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_730 = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_730 == 729 )? $pass++: array_push( $failarray, ['d_td_730', 729, $d_td_730 ]);
$d_wd_730 = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_730 == 521 )? $pass++: array_push( $failarray, ['d_wd_730', 521, $d_wd_730 ]);
$d_cw_730 = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_730 == 104 )? $pass++: array_push( $failarray, ['d_cw_730', 104, $d_cw_730 ]);

/////////////////////////////////////
//         731 Days Leap Year      ///
///////////////////////////////////////
$date1 = new DateTime( "1988-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Monday
$date2 = new DateTime( "1990-01-04T00:00:00Z", new DateTimeZone( "UTC" ) ); //Tuesday

$d_td_730_leap = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_730_leap == 730 )? $pass++: array_push( $failarray, ['d_td_730_leap', 730, $d_td_730_leap ]);
$d_wd_730_leap = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_730_leap == 522 )? $pass++: array_push( $failarray, ['d_wd_730_leap', 522, $d_wd_730_leap ]);
$d_cw_730_leap = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_730_leap == 104 )? $pass++: array_push( $failarray, ['d_cw_730_leap', 104, $d_cw_730_leap ]);

############################################
##              RESULTS SCREEN            ##
############################################ 
$row = 0;?>
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