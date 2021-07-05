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
        // check if zero date 0000-00-00T00:00:00
        if( !( $date1 instanceof DateTime ) ){
            if( is_int( $date1 ) ){
                $date1 = $this->_dateConverter( $date1 );
            } else {
                $date1 = new DateTime( $date1 );
            }
        }

        if( !( $date2 instanceof DateTime ) ){
            if( is_int( $date2 ) ){
                $date2 = $this->_dateConverter( $date2 );
            } else {
                $date2 = new DateTime( $date2 );
            }
        }

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
                    $days_adjust = 0;
                    $leap_mod = ( $this->_getLeaps( $date1, $date2 ) % 8000 ); // accounts for math error in library
                    if( $leap_mod > 42 ){ //acounts for accrual of leap remainder after 4 years
                        $days_adjust = 1;
                    }
                    if( $this->_isLeapYear( $date1 ) == true || $this->_isLeapYear( $date2 ) ) {                      
                        if( floor( $weekdays / $splice ) > 0 ){
                            return floor( $weekdays / $splice ) - 1 + $days_adjust;
                        } else {
                            return floor( $weekdays / $splice ) + $days_adjust;
                        }                        
                    } else {
                        return floor( $weekdays / $splice ) + $days_adjust;
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
    Public function _isLeapYear( $date ){ 
        return $result = ( $date->format( 'Y' ) % 4 ); // use mod =4 to see if we are in a leap year 
    }

    /**
     *  Return if year is a leap year 
     * 
     * @param Datetime|String $date
     * 
     * @return Boolean
     * 
     */ 
    Public function _getLeaps( $date1, $date2 ){ 
        return $result = abs ( ( $date1 )->format('Y') - ( $date2 )->format('Y') );
    }

        /**
     *  Checks the format of the string or object being passed in
     *  If it is not correct then we will dry to transform it
     *  If not then we can throw an exception and deal with that instead
     * 
     * @param Datetime|String $date
     * 
     * @return Datetime
     * 
     */
    Public function _dateConverter( $date ){
        $thisDate = new DateTime();

        if( is_object( $date )){
            try{
                if( $date === false ){
                    throw new Exception();
                }
            } catch( Throwable $e ) {

            } finally {
                $thisDate =  $date;
            }
            //get TZ info
            try{
                if( $thisDate->getTimezone() === false ) {
                    throw new Exception();
                } 
            } catch ( Throwable $e ){
                echo print_r( var_export( $e ) );
            } finally {
                $thisDate = $thisDate->setTimezone(new DateTimeZone( "UTC" ));  
            }
            return $thisDate;
        }

        // check if int and try
        if( is_int( $date )){
            try{    
                if( new DateTime( date( 'Y-m-d', $date ), new DateTimeZone( "UTC" ) ) === false ){
                    throw new Exception();
                }
            } catch( Throwable $e ) {

            } finally {
                return new DateTime( date( 'Y-m-d', $date  ), new DateTimeZone( "UTC" ) );
            }
        }      

        if( is_string( $date )){
            
            $_isDateNull = ( $this->_isDateNull( $date ) )? true : false;
            $date = $this->_getDate( $date );
            if( $_isDateNull == true ){  // its just empty
                return new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "UTC" ) );
            } 

            if( $date instanceof DateTime && $_isDateNull == true){ // Bad date object
                return new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "UTC" ) );
            }        

            $hyphen = ( strpos( $date, '-' ) == true )? true : false;
            $forwardslash = ( strpos( $date, '/' ) == true )? true : false;
            $backslash = ( strpos( $date, '\\' ) == true )? true : false;
            $colon = ( strpos( $date, ':' ) == true )? true : false;
            $char_T = ( strpos( $date, 'T' ) == true )? true : false;
            $char_z = ( strpos( $date, 'Z' ) == true )? true : false;
            $plus = ( strpos( $date, '+' ) == true )? true : false;
            $blank = ( strpos( $date, ' ' ) == true )? true : false;
            $utc = ( strpos( $date, 'UTC' ) == true )? true : false;

            // lets start checking the date part first
            if( $forwardslash == true ){
                // lets change them to hyphens to be consistent
                $thisDate = str_replace( '/', '-', $thisDate );
            }

            if( $backslash == true ){
                // lets change them to hyphens to be consistent
                $thisDate = str_replace( '\\', '-', $thisDate );
            }

            // lets start checking the date part first
            if( $utc == true ){
                // lets change them to hyphens to be consistent
                $thisDate = str_replace( 'UTC', 'T', $thisDate );
            }

            // lets start checking the date part first
            if( $blank == true ){
                // lets change them to hyphens to be consistent
                $thisDate = str_replace( ' ', 'T', $thisDate );
            }
            $stringDate = new DateTime( $date );
            return $stringDate;
        }
        return new DateTime( "0000-01-01T00:00:00Z", new DateTimeZone( "UTC" ) );
    } 

}
?>