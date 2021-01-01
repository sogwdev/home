#!/bin/sh

$date = Get-Date -Format "yyyy-MM-dd HH:mm"

cd "D:\home\traveler"
git add .
git commit -m $date
git push origin master