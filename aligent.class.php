<?php
Class Aligent extends DateTime 
{

    /**
     *  Return date as an object from Integer or String
     * 
     * @param Datetime|String|Integer $date1, $date2
     * 
     * @return Datetime
     * 
     */
    Private function _dateTransform( $date ){
        if( !( $date instanceof DateTime ) ){
            //attempt transformation
             if( is_int( $date ) ){
                return new DateTime( date( 'Y-m-d', $date ), new DateTimeZone( "UTC" ) );
            }
 
            if( is_string( $date) ){
                $date = $this->_stringScrubber( $date );
                return new DateTime( date( 'Y-m-d', strtotime( $date ) ), new DateTimeZone( "UTC" ) );
            }             
        }

        return $date;
    }

    /**
     *  Return formatted String for transformation to DateTime
     * 
     * @param Datetime|String $date
     * 
     * @return String
     * 
     */
    Private function _stringScrubber( $date ){
         // lets start checking the date part first
         if( strpos( $date, '/' ) == true ){
            // lets change them to hyphens to be consistent
            $date = str_replace( '/', '-', $date );
        }

        if( strpos( $date, '\\' ) == true ){
            // lets change them to hyphens to be consistent
            $date = str_replace( '\\', '-', $date );
        }

        // lets start checking the date part first
        if( strpos( $date, ' ' ) == true ){
            // lets change them to hyphens to be consistent
            $date = str_replace( ' ', 'T', $date );
        }

        // lets start checking the date part first
        if(strpos( $date, ',' ) == true ){
            // lets change them to hyphens to be consistent
            $date = str_replace( ',', '', $date );
        }

        return $date;
    }

    /**
     *  Return Count of total days
     * 
     * @param Datetime|String $date1, $date2
     * 
     * @return DateInterval
     * 
     */
    Private function _totalDays( $date1, $date2 ){
        $date1 = $this->_dateTransform( $date1 );
        $date2 = $this->_dateTransform( $date2 );

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
        $date1 = $this->_dateTransform( $date1 );
        $date2 = $this->_dateTransform( $date2 );

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
                    if( $this->_isLeapYear( $date1 ) == true || $this->_isLeapYear( $date2 ) ) {
                        if( floor( $days / $splice ) > 0 ){
                            return floor( $days / $splice ) - 1;
                        } else {
                            return floor( $days / $splice );
                        }                        
                    } else {
                        return floor( $days / $splice );
                    }    
                    break;
                default: // days dealt with outside switch
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
        $date1 = $this->_dateTransform( $date1 );
        $date2 = $this->_dateTransform( $date2 );
        
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
                case 4: // years accounts for math error in library                   
                    if( $this->_isLeapYear( $date1 ) == true || $this->_isLeapYear( $date2 ) ) {                      
                        if( floor( $weekdays / $splice ) > 0 ){
                            return floor( $weekdays / $splice ) - 1;
                        } else {
                            return floor( $weekdays / $splice );
                        }                        
                    } else {
                        return floor( $weekdays / $splice );
                    }                    
                    break;
                default: // days dealt with outside switch
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
        $date1 = $this->_dateTransform( $date1 );
        $date2 = $this->_dateTransform( $date2 );

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
                    if( $this->_isLeapYear( $date1 ) == true || $this->_isLeapYear( $date2 ) ) {
                        if( floor( ( $weeks * 7 )/ $splice ) > 0 ){
                            return floor( ( $weeks * 7 ) / $splice ) - 1;
                        } else {
                            return floor( ( $weeks * 7 ) / $splice );
                        }                        
                    } else {
                        return floor( ( $weeks * 7 ) / $splice );
                    }     
                    break;
                default: // days dealt with outside switch
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
    Public function _isLeapYear( $date ){ 
        return $result = ( $date->format( 'Y' ) % 4 ); // use mod =4 to see if we are in a leap year 
    }
}
?>