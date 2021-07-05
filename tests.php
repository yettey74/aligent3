<?php
require 'aligent.class.php';
$aligent = new Aligent();

$pass = 0;
$failarray = array();

/////////////////////////////////////
//              Same Day           ///
////////////////////////////////////////
$date1 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "UTC" ) );
$date2 = new DateTime( "2021-01-04T00:00:00Z", new DateTimeZone( "UTC" ) );

$d_td_sd = $aligent->_daysBetween( $date1, $date2 ); //
( $d_td_sd == 0 )? $pass++: array_push( $failarray, ['d_td_sd', 0, $d_td_sd ]);
$d_wd_sd = $aligent->_weekdays( $date1, $date2 ); //
( $d_wd_sd == 0 )? $pass++: array_push( $failarray, ['d_wd_sd', 0, $d_wd_sd ]);
$d_cw_sd = $aligent->_completeWeeks( $date1, $date2 ); //
( $d_cw_sd == 0 )? $pass++: array_push( $failarray, ['d_cw_sd', 0, $d_cw_sd ]);

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