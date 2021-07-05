<?php
Class Aligent extends DateTime 
{
    Private function _totalDays( $date1, $date2 ){
        // We scrub the input passed here
        return $days = $date1->diff( $date2 )->format( '%a' );
    }

    Public function _daysBetween( $date1, $date2, $flag = '' ){
        if( $this->_totalDays( $date1, $date2 ) > 0 ){
            if( is_int( $flag ) ){
                $splice = $this->_getSplice( $flag );
            } else {
                $splice = 1; // its default
            }
            
            return ( $this->_totalDays( $date1, $date2 ) - 1 ) * $this->_getSplice( $flag );
        }

        return 0;        
    }

    Public function _weekdays( $date1, $date2, $flag = '' ){

        if( is_int( $flag ) ){
            $splice = $this->_getSplice( $flag );
        } else {
            $splice = 1; // its default
        }

        $days = $this->_daysBetween( $date1, $date2 );
        $weeks_difference = floor( $days / 7 ); // Define Days as Weeks
        $days_remainder = floor( $days % 7 ); // Define total days left over
        
        $weekday_start = ( $date1 )->format( 'w' ); // Define start day as INT
        $weekday_end = ( $date2 )->format( 'w' ); // Define end day as INT
        
        if( $weekday_start == 5 && $weekday_end == 1 && $days < 8 ){ // specifically looking at Fri-Mon           
            return 0;
        } 
        
        if( $weekday_start == 5 && $weekday_end == 2 && $days < 8 ){ // specifically looking at Fri-Tues           
            return 1 * $splice;
        }

        if( $weekday_start == 5 && $weekday_end == 3 && $days < 8 ){ // specifically looking at Fri-Wed           
            return 2 * $splice;
        }

        if( $weekday_start == 5 && $weekday_end == 4 && $days < 8 ){ // specifically looking at Fri-Thurs           
            return 3 * $splice;
        }

        if( $weekday_start == 5 && $weekday_end == 5 && $days < 8 ){ // specifically looking at Fri-Fri           
            return 4 * $splice;
        }
        
        if( $days_remainder > 7 ){
            $days_remainder--;
        }

        if( $days_remainder > 6 ){
            $days_remainder--;
        }      

        $weekdays = ($weeks_difference * 5 ) + $days_remainder ;

        return $weekdays * $splice;
    }

    Public function _completeWeeks( $date1, $date2, $flag = '' ){
        if( is_int( $flag ) ){
            $splice = $this->_getSplice( $flag );
        } else {
            $splice = 1; // its default
        }

        $weeks = floor( $this->_daysBetween( $date1, $date2 ) / 7 );
        
        if( $splice > 1 ){
            return $weeks * 7 * $splice;
        }

        return $weeks * $splice;
    }

    Private function  _getSpilce( $flag ){
        if( !is_null( $flag ) ){
            $spliceArray = ['86400', '1400', '24', '31622400'];
            ( $flag > 0 )?? $flag--; //adjust for array start  = 0
            return $spliceArray[ $flag ];
        } else {
            return 1;
        }

        return 1;
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
        if( is_int( $flag ) ){
            $flag--; // array offset
            $spliceArray = ['86400', '1400', '24', '31622400'];            
            return $spliceArray[ $flag ];
        } else {
            return 1; // as default days
        }

        return 0; // jsut return zero so the systemdoes not break in test mode
    }

}
?>