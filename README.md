# api-help (multi purpose api helpers via query string) 
 ---
Usage:
/api-help?$method_name1=$value1

Available methods:
---

fromHexListToIntList
===
Given a list of hex values generates the list of corresponding list of decimal values

Example:
---
api-help.php?api_key=&fromHexListToIntList=FF,FF,FF

Output:
---
255,255,255

fromIntListToHexList
===
Given a list of int values generates the list of corresponding list of hex values

Example:
---
api-help.php?api_key=&fromIntListToHexList=255,255,255

Output:
---
#ff,#ff,#ff

fromIntToHex
===
Given an int value generates the corresponding hex value

Example:
---
api-help.php?api_key=&fromIntToHex=255

Output:
---
#ff

fromHexToInt
===
Given an hex value generates the corresponding int value

Example:
---
api-help.php?api_key=&fromHexToInt=ff

Output:
---
255


DEMO Endpoint
===
https://www.rlieh.com/api-help/api-help.php?api_key=&
