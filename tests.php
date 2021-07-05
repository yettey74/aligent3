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