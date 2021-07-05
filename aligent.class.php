<?php
Class Aligent extends DateTime 
{
    Private function _totalDays( $date1, $date2 ){
        // We scrub the input passed here
        return $days = $date1->diff( $date2 )->format( '%a' );
    }

    Public function _daysBetween( $date1, $date2, $flag = '' ){
        if( $this->_totalDays( $date1, $date2 ) > 0 ){
            return $this->_totalDays( $date1, $date2 ) - 1;
        }

        return 0;        
    }

    Public function _weekdays( $date1, $date2, $flag = '' ){

        $days = $this->_daysBetween( $date1, $date2 );
        $weeks_difference = floor( $days / 7 ); // Define Days as Weeks
        $days_remainder = floor( $days % 7 ); // Define total days left over
        
        $weekday_start = ( $date1 )->format( 'w' ); // Define start day as INT
        $weekday_end = ( $date2 )->format( 'w' ); // Define end day as INT
        
        if( $weekday_start == 5 && $weekday_end == 1 && $days < 4 ){ // specifically looking at Fri-Mon           
            return 0;
        } 
        
        if( $weekday_start == 5 && $weekday_end == 2 && $days < 5 ){ // specifically looking at Fri-Tues           
            return 0;
        } 
        
        if( $days_remainder > 7 ){
            $days_remainder--;
        }

        if( $days_remainder > 6 ){
            $days_remainder--;
        }      

        $weekdays = ($weeks_difference * 5 ) + $days_remainder ;

     /*    if(  0 < $weekday_start && $weekday_start < 6 ){ // if between day = 0 (sunday) and day = 6 (saturday)
            if( $weekdays > 0 ){
                $weekdays--;
            }
        } */

        return $weekdays;
    }

    Public function _completeWeeks( $date1, $date2, $flag = '' ){
        
        $weeks = floor( $this->_daysBetween( $date1, $date2 ) / 7 );         

        return $weeks;
    }

    Private function  _getSpilce( $byTime ){
        
        return $splice;
    }

    /**
     *  Return the timeing requried to splice the day 
     * requested by api call
     * 
     * @param Integer $flag
     * 
     * @return Integer
     * 
     */
    Public function _getSplice( $flag ){
        if( !is_null( $flag ) ){
            $spliceArray = ['86400', '1400', '24', '31622400'];
            ( $flag > 0 )?? $flag--;
            return $spliceArray[ $flag ];
        } else {
            return 1; // as default days
        }

        return 0; // jsut return zero so the systemdoes not break in test mode
    }

}
?>