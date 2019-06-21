@echo off

cd C:\Users\tsmekal\Documents\Projekty\Einhell\PlentyMarket\Plugins\HelloWorld

git add .

set /p message="Enter GIT commit message: "

git commit -m "%message%"

git push
