<?
error_reporting(E_ALL);
define("__DEFAULT_SEPARATOR__", ",");
define("__API_KEY__", "api_key");

/**
 * fromHexToInt 
 *
 * @param [string] $value
 * @return [int] dechex($value) 
 */
function fromHexToInt($value) {
    return hexdec($value);
}

/**
 * fromIntToHex 
 *
 * @param [int] $value
 * @return [string] hexdec($value) 
 */
function fromIntToHex($value) {
    return "#".dechex($value);
}

/**
 * fromIntListToHexList 
 *
 * @param [string] $list
 * @return [int] $list
 */
function fromHexListToIntList($list) {
    return array_map("fromHexToInt", $list);
}

/**
 * fromIntListToHexList 
 *
 * @param [int] $list
 * @return [string] $list
 */
function fromIntListToHexList($list) {
    return array_map("fromIntToHex", $list);
}

$request = $_REQUEST;
if (isset($request[__API_KEY__])) {
    if(count($request) > 0)
    {
        array_shift($request);
        $param1 = array_keys($request)[0];
        $value1 = $request[$param1];
        switch($param1){
            case "fromHexToInt": $result = fromHexToInt($value1); break;
            case "fromIntToHex": $result = fromIntToHex($value1); break;
            case "fromHexListToIntList": $result = fromHexListToIntList(explode(__DEFAULT_SEPARATOR__,$value1)); break;
            case "fromIntListToHexList": $result = fromIntListToHexList(explode(__DEFAULT_SEPARATOR__,$value1)); break;
            default: $result = null;
        }    
        if (is_numeric($result) || is_string($result)){
            echo $result;
        } elseif (is_array($result)) {
            echo implode(__DEFAULT_SEPARATOR__, $result);
        }
    }
}