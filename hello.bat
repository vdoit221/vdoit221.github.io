@echo off
rem echo "Prateek"
rem set /P year="Enter the Year between 1995 and 2020: "
rem set /P month="Enter the month between 01 and 12: "
rem echo "Are your sure you want to continue?"
rem pause
rem cmd /c exit /P %year% %month%
set year=%1
set month=%2
rem START cmd.exe /k "C:\"Program Files"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script scripts\feed_tools.py && C:\"Program Files"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script scripts\download_feeds.py && C:\"Program Files"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script scripts\download_filings.py feeds\xbrlrss-%year%-%month% && C:\"Program Files"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script scripts\build_secdb.py --create-tables --log=C:\Users\anant\Downloads\SECDB-master\logs\log-%year%-%month%.txt feeds\xbrlrss-%year%-%month%.xml"
START cmd.exe /k "C:\"Program Files (x86)"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script scripts\feed_tools.py && C:\"Program Files (x86)"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script scripts\download_feeds.py && C:\"Program Files (x86)"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script scripts\download_filings.py feeds\xbrlrss-%year%-%month% && C:\"Program Files (x86)"\Altova\RaptorXMLXBRLServer2020\bin\RaptorXMLXBRL.exe script scripts\build_secdb.py --create-tables --log=C:\Users\anant\Downloads\SECDB-master\logs\log-%year%-%month%.txt feeds\xbrlrss-%year%-%month%.xml"