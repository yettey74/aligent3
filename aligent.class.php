<?php
Class Aligent extends DateTime 
{
    /**
     *  Return Count of total days
     * 
     * @param Datetime|String $date1, $date2
     * 
     * @return DateInterval
     * 
     */
    Private function _totalDays( $date1, $date2 ){
        // We scrub the input passed here
        return $days = $date1->diff( $date2 )->format( '%a' );
    }

    /**
     *  Return Count of days between
     * 
     * @param Datetime|String $date1, $date2
     * 
     * @param Integer|NULL $flag
     * 
     * @return DateInterval
     * 
     */
    Public function _daysBetween( $date1, $date2, $flag = '' ){
        $days = $this->_totalDays( $date1, $date2 ); // get the total days firt

        if( $days > 0 ){ // set correct mount of days between
            $days--;
        }        

        if( is_int ( $flag ) ){
            $splice = $this->_getSplice( $flag );
            switch ( $flag ){
                case 1: //seconds                   
                case 2: // minutes
                case 3: // hours
                    return $days * $splice;
                    break;
                case 4: // years
                    if( $this->_isLeap( $date1 ) == true || $this->_isLeap( $date2 ) ) {
                        if( floor( $days / $splice ) > 0 ){
                            return floor( $days / $splice ) - 1;
                        } else {
                            return floor( $days / $splice );
                        }                        
                    } else {
                        return floor( $days / $splice );
                    }    
                    break;
                default: // days
                    break;
            }
        } else { // we return in days only
            return $days;
        }
        return 0;
    }

    /**
     *  Return Count of Weekdays
     * 
     * @param Datetime|String $date1, $date2
     * 
     * @param Integer|NULL $flag
     * 
     * @return DateInterval
     * 
     */
    Public function _weekdays( $date1, $date2, $flag = '' ){
        $days = $this->_totalDays( $date1, $date2 ); // get the total days firt
        $splice = ( is_int( $flag ) )? $this->_getSplice( $flag ) : 1; // we need it early this time so extra call on stack
        if( $days > 0 ){ // set correct mount of days between
            $days--;
        }
       
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

        if( is_int ( $flag ) ){            
            switch ( $flag ){
                case 1: //seconds                   
                case 2: // minutes
                case 3: // hours
                    return $weekdays * $splice;
                    break;
                case 4: // years

                    if( $this->_isLeap( $date1 ) == true || $this->_isLeap( $date2 ) ) {
                        if( floor( $weekdays / $splice ) > 0 ){
                            return floor( $weekdays / $splice ) - 1;
                        } else {
                            return floor( $weekdays / $splice );
                        }                        
                    } else {
                        return floor( $weekdays / $splice );
                    }                    
                    break;
                default: // days
                    break;
            }
        } else { // we return in days only
            return $weekdays;
        }
        return 0;
    }

    /**
     *  Return Count of complete weeks $date2
     * 
     * @param Datetime|String $date1, $date2
     * 
     * @param Integer|NULL $flag
     * 
     * @return DateInterval
     * 
     */
    Public function _completeWeeks( $date1, $date2, $flag = '' ){

        $days = $this->_totalDays( $date1, $date2 ); // get the total days firt
        
        if( $days > 0 ){ // set correct mount of days between
            $days--;
        }

        $weeks = floor( $days / 7 ); // we dont need the remainder
        
        if( is_int ( $flag ) ){
            $splice = $this->_getSplice( $flag );
            switch ( $flag ){
                case 1: //seconds                   
                case 2: // minutes
                case 3: // hours
                    return ( $weeks * 7 ) * $splice;
                    break;
                case 4: // years
                    if( $this->_isLeap( $date1 ) == true || $this->_isLeap( $date2 ) ) {
                        if( floor( ( $weeks * 7 )/ $splice ) > 0 ){
                            return floor( ( $weeks * 7 ) / $splice ) - 1;
                        } else {
                            return floor( ( $weeks * 7 ) / $splice );
                        }                        
                    } else {
                        return floor( ( $weeks * 7 ) / $splice );
                    }     
                    break;
                default: // days
                    break;
            } 
        } else { // we return in days only
            return $weeks;
        }
        return 0;
    }

    /**
     * Return the timeing requried to splice the day 
     * requested by api call
     * 
     * @param Integer| BULL $flag
     * 
     * @return Integer
     * 
     */
    Public function _getSplice( $flag ){
        if( is_int( $flag ) ){
            $flag--; // array offset
            $spliceArray = ['86400', '1400', '24', '365'];            
            return $spliceArray[ $flag ];
        } else {
            return 1; // as default days
        }

        return 0; // jsut return zero so the system does not break in test mode
    }

    /**
     *  Return if year is a leap year 
     * 
     * @param Datetime|String $date
     * 
     * @return Boolean
     * 
     */ 
    Public function _isLeap( $date ){ 
        return $result = ( $date->format( 'Y' ) % 4 ); // use mod =4 to see if we are in a leap year 
    }

}
?>