@echo off 
REM Turn off command echoing

cls REM Clear the screen

REM init
TIMEOUT 10 /NOBREAK

:loop 
REM navigate to the php file in order to add the new value into the database
curl http://localhost/JSON2db.php
echo Added to database
REM delay of 1 minute
TIMEOUT 60 
goto loop

