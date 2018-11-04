<?
error_reporting(E_ALL);
define("__DEFAULT_SEPARATOR__", ",");


/**
 * fromIntToHexfrom 
 *
 * @param [string] $value
 * @return [int] dechex($value) 
 */
function fromHexToInt($value) {
    return dechex($value);
}

/**
 * fromIntToHexfrom 
 *
 * @param [int] $value
 * @return [string] hexdec($value) 
 */
function fromIntToHexfrom($value) {
    return hexdec($value);
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
    return array_map("fromIntToHexfrom", $list);
}


if(isset($_REQUEST)) {
    list($param1,$param2) = $_REQUEST;
    $result = "";
    switch($param1){
        case "fromHexToInt": $result = fromHexToInt($param2); break;
        case "fromIntToHexfrom": $result = fromHexToInt($param2); break;
        case "fromHexListToIntList": $result = fromHexToInt($param2); break;
        case "fromIntListToHexList": $result = fromHexToInt($param2); break;
    }    
    if (is_numeric($result) || is_string($result)){
        echo $result;
    } elseif (is_array($result) === "array") {
        echo implode(__DEFAULT_SEPARATOR__, $result);
    }
}


?>