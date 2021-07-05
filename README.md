# aligent3
 Takes upto 3 inputs and returns day count in Y, H, I, S
[Yettey74@github](https://www.github.com/yettey74/aligent3 "Aligent3") 
### Created 05/07/2021
### Author Scot Henderson
***
## Description
### Takes 2 dates and:
### Returns
#### 1. total days between
#### 2. total week days
#### 3. complete weeks
### Flags
#### a. Days ( default )
#### b. seconds
#### c. minutes
#### d. hours
#### e. years
***
***
## Version 0.0.1
### Building Scaffold
#### aligent.class.php
* Add ``` _getTotalDays() ```
* Add ``` _daysBetween() ```
* Add ``` _weekdays() ```
* Add ``` _completeWeeks() ```
#### test.php
* Add ``` Single Test harness added ```
#### Updated MarkDown File
#### README.md
***
***
## Version 0.1.0
### TEST = 3
#### aligent.class.php
* Add ``` _getSplice() ``` <br> Return an INT to handle flag call Y,H,I,S
* Updated ``` _daysBetween() ``` <br> Returns days between
* Updated ``` _weekdays() ``` <br> Return weekdays
* Updated ``` _completeWeeks() ``` <br> Return complete weeks
#### test.php
* Add ``` Same Day in Days, WeekDays, Complete Weeks ```
#### Updated MarkDown File
#### README.md
***
## Version 0.1.1
### Handling 7 Days
### TEST = 24
#### aligent.class.php
* Updated ``` _weekdays() ``` <br> Handling Start = Friday && End == Monday || Tuesday where days < 7.  Now returns 0
#### test.php
* Add ``` Next Day in Days, WeekDays, Complete Weeks ```
* Add ``` +2 Days in Days, WeekDays, Complete Weeks ```
* Add ``` +3 Days in Days, WeekDays, Complete Weeks ```
* Add ``` +4 Days in Days, WeekDays, Complete Weeks ```
* Add ``` +5 Days in Days, WeekDays, Complete Weeks ```
* Add ``` +6 Days in Days, WeekDays, Complete Weeks ```
* Add ``` +7 Days in Days, WeekDays, Complete Weeks ```
#### Updated MarkDown File
#### README.md
***
## Version 0.1.2
### Handling 14 ~ 720 Days including leap year tests 
### TEST = 42
#### test.php
* Add ``` +8 Days in Days, WeekDays, Complete Weeks ```
* Add ``` +15 Days in Days, WeekDays, Complete Weeks ```
* Add ``` +365 Days in Days, WeekDays, Complete Weeks ```
* Add ``` +365 Leapyear Days in Days, WeekDays, Complete Weeks ```
* Add ``` +730 Days in Days, WeekDays, Complete Weeks ```
* Add ``` +731 Leapyear Days in Days, WeekDays, Complete Weeks ```
#### Updated MarkDown File
#### README.md
***
## Version 0.1.3
### Handling Flag input of time
### TEST = 150
#### aligent.class.php
* Updated ``` _daysBetween() ``` <br> Implements ```_getSplice() ```
* Updated ``` _weekdays() ``` <br> Implements ```_getSplice() ```
* Updated ``` _completeWeeks() ``` <br> Implements ```_getSplice() ```
#### test.php
* Add ``` +8 Days with splice times ```
* Add ``` +15 Days with splice times ```
* Add ``` +365 Days with splice times ```
* Add ``` +365 Leapyear Days with splice times ```
* Add ``` +730 Days with splice times ```
* Add ``` +731 Leapyear Days with splice times ```
#### Updated MarkDown File
#### README.md
***
## Version 0.1.3
### Handling Flag input of time
### TEST = 158
#### test.php
* Add ``` Single test < 8 Days Friday - Monday ```
* Add ``` Single test < 8 Days Friday - Tuesday ```
#### Updated MarkDown File
#### README.md
***
## Version 0.1.4
### Handling Flag input of time
### TEST = 170
#### test.php
* Add ``` Single test < 8 Days Friday - Wednesday ```
* Add ``` Single test < 8 Days Friday - Thursday ```
* Add ``` Single test < 8 Days Friday - Friday ```
#### Updated MarkDown File
#### README.md
***
## Version 0.1.5
### Handling Flag input of time = Years
### TEST = 223
#### aligent.class.php
* Added ``` _isLeap() ``` <br> Handles wrong result when leap year floor( 366 / 365 ) = 1
* Updated ``` _daysBetween() ``` <br> Added PHP DOCS stub <br> Time is spliced on the fly<br> Handles Leap year
* Updated ``` _weekdays() ``` <br> Added PHP DOCS stub <br> Time is spliced on the fly<br> Handles Leap year
* Updated ``` _completeWeeks() ``` <br> Added PHP DOCS stub <br> Time is spliced on the fly<br> Handles Leap year
#### test.php
* Added ``` Same Day and Next Day complete test blocks ```
* Added ``` Years to each test block ```
#### Updated MarkDown File
#### README.md
***
***
## Version 0.2.0
### Implements Throwable
### TEST = 232 / 98.71% Successs
#### aligent.class.php
* Added ``` _dateConverter() ``` <br> Implements throwable dates to handle int, string, object
* Updated ``` _totalDays() ``` <br> Implenments throwable to scrub dates
#### test.php
* Added ``` Single test LIMITS days between ``` <br> Return correct days
* Added ``` Single test LIMITS  weekday ``` <br> Return correct days
* Added ``` Single test LIMITS complete weeks ``` <br> Return correct days
* Added ``` Single test ZERO days between ``` <br> Return correct days
* Added ``` Single test ZERO  weekday ``` <br> Return correct days
* Added ``` Single test ZERO complete weeks ``` <br> Return correct days
#### Updated MarkDown File
#### README.md
***
## Version 0.2.1
### TEST = 232 / 98.71% Successs
#### aligent.class.php
* Updated ``` _dateConverter() ``` <br> now returns UTC instead of Europe/Paris
#### test.php
#### Updated MarkDown File
#### README.md
***
## Version 0.2.2
### TEST = 262 / 100% Successs
#### aligent.class.php
* Added ``` _stringScrubber_() ``` <br> formats string properly for object transformation
* Added ``` _dateTransform() ``` <br> transforms int & string to object date
* Updated ``` _totalDays() ``` <br> Ability to handle int and strings on the fly
* Updated ``` _weekdays() ``` <br> Ability to handle int and strings on the fly
* Updated ``` _completeWeeks() ``` <br> Ability to handle int and strings on the fly
* Removed ``` _getLeaps() ``` <br> not required at the moment .. need something when year > 1000
* Removed ``` _dateConverter() ``` <br> now handled by dateTransform()
#### test.php
* Added ``` Single test 100 Years ```
* Added ``` Single test 1000 Year ```
* Added ``` Single test INT 0 Days ```
* Added ``` Single test INT 3 Days ```
* Added ``` Single test INT 1 Years ```
* Added ``` Single test STRING 1 Years ```
* Added ``` Single test INT 0 Days with ',' ```
* Added ``` Single test STRING 0 Days with '/' ```
* Added ``` Single test STRING 0 Days with '\' ```
* Added ``` Single test STRING 0 Days with '\' ```
* Added ``` Single test STRING 0 Days with ' ' ```
* Ommitted ``` Single test ZERO ```
* Ommitted ``` Single test ZERO+3 ```
* Ommitted ``` Single test OOB  ```
#### Updated MarkDown File
#### README.md
***
***
## Error Log
* E1 Days returns as 2 when Friday start and tueday end
* E2 731 Days Leap Year test set .. need to check result
* E3 Returns wrong count when days < 8
* E4 Returns wrong count when Year has Feb-29
* E5 TEST d_wd_limit     Expect = 4189809 Result = 4189811 (there are 4014 leaps)
* E6 TEST d_zero	     Expect = 1, Return = 0
* E7 TEST d_wd_zero_3	 Expect = 1, Return = 2
* E8 TEST d_cw_zero_3    Expect = 1, Return = 0
* E9 TEST d_td_1000_year Expect = 365 * 1000 + (leap years), Return = 365241
* E10 TEST d_wc_1000_year Expect = 260 * 1000 + (leapyear offset -1 ), Return = 260887
* E11 string with comma throws error
* E12 string with \ throws error
* E13 string with / throws error

## Whishlist
* Microseconds need to be handled
* E5,6,7,8 are all related to DateTime Library ... write a function to adjust
Input : 0000-00-00T00:00:00+00:00
Output : -001-11-30T00:00:00+00:00

Input : 0000-00-03T00:00:00+00:00
Output : -001-12-03T00:00:00+00:00

* OOB tests int .. need to check int is in range
* OOb tests string .. need to check int is in range

## Attended
1. Scaffold Built
2. Testing with start = Monday 04/01/1988 ( Helps with leap year testing and years > 1000 )
3. E1 Between Days returns 0
4. E2 Between Days returns correct result
5. E3 Between Days returns correct result
5. E4 Years returns correct result
5. E5 Between Days return correct result
6. E9 Returns correct count of days
7. E10 Returns correct count of weekdays
8. E11 Returns formatted string
8. E12 Returns formatted string
8. E13 Returns formatted string