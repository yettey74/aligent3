# aligent3
 Takes upto 3 inputs and returns day count in Y, H, I, S
[Yettey74@github](https://www.github.com/yettey74/aligent2 "Aligent2") 
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
### TEST = 36
#### test.php
* Add ``` +8 Days in Days, WeekDays, Complete Weeks ```
* Add ``` +15 Days in Days, WeekDays, Complete Weeks ```
* Add ``` +365 Days in Days, WeekDays, Complete Weeks ```
* Add ``` +365 Leapyear Days in Days, WeekDays, Complete Weeks ```
* Add ``` +730 Days in Days, WeekDays, Complete Weeks ```
* Add ``` +731 Leapyear Days in Days, WeekDays, Complete Weeks ```
#### Updated MarkDown File
#### README.md
## Error Log
* E1 Days returns as 2 when Friday start and tueday end
* E2 731 Days Leap Year test set .. need to check result

## Whishlist

## Attended
1. Scaffold Built
2. Testing with start = Monday 04/01/1988 ( Helps with leap year testing and years > 1000 )
3. E1 Days returns 0

