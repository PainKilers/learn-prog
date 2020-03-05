SET dirname="%date:~5,10%"
mkdir "%dirname%\class works\1"
cd %dirname%\class works\1
echo hi>index.html
echo hi>style.css
echo hi>script.js
cd..
cd..
cd..
mkdir "%dirname%\home works\1"
cd %dirname%\home works\1
echo hi>index.html
echo hi>style.css
echo hi>script.js

