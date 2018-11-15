# api-help (multi purpose api helpers via query string) 
 ---
Usage:
/api-help?$function_name1=$value1

Available APIs:
---

* fromHexToInt
* fromIntToHex
* fromHexListToIntList
* fromIntListToHexList

Example:
---
api-help/api-help.php?api_key=&fromHexListToIntList=FF,FF,FF

Output:
---
255,255,255
