#!/bin/tcsh
find /root/backup/* -ctime +10 -exec rm -rf {} \;
