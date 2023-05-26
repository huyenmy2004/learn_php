<?php
$string = "Data test";
$string2 = "test";
$string1 = "Data";
echo "1. Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen() <br>";
function countLength($string){
    return strlen($string);
}
echo "Chuỗi nhập: " . $string . "<br>";
echo "Số ký tự: " . countLength($string) . "<br><br>";

echo "2. Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count() <br>";
function countWord($word){
    return str_word_count($word);
}
echo "Chuỗi nhập: " . $string . "<br>";
echo "Số từ: " . countWord($string) . "<br><br>";

echo "3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev() <br>";
function reverseString($string){
    return strrev($string);
}
echo "Chuỗi nhập: " . $string . "<br>";
echo "Đáp án: " . reverseString($string) . "<br><br>";

echo "4. Viết một chương trình PHP để tìm kiếm vị trí của một chuỗi con trong một chuỗi sử dụng hàm strpos() <br>";
function searchPosition($string, $word){
    return strpos($string, $word);
}
echo "Chuỗi nhập: " . $string . "<br>";
echo "Chuỗi con: " . $string2 . "<br>";
echo "Vị trí của chuỗi con là: " . searchPosition($string, $string2) . "<br> <br>";

echo "5.Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace() <br>";
function replaceString($inString, $newString, $string){
    return str_replace($inString, $newString, $string);
}
$inString = "da";
$newString = "Da";
$unCaplockString = "data test";
echo "Chuỗi ban đầu: " . $unCaplockString. "<br>";
echo "Chuỗi cần thay thế: " . $inString . "<br>";
echo "Chuỗi dùng để thay thế: " . $unCaplockString . "<br>";
echo "Kết quả: " . replaceString($inString, $newString, $unCaplockString) . "<br><br>";

echo "6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp() <br>";
function findWord1($string, $smallString){ 
    return strncmp($string, $smallString, strlen($smallString));
}
echo "Chuỗi nhập: " . $string . "<br>";
echo "Chuỗi con: " . $string1 . "<br>";
if(findWord1($string, $string1) == 0)
    echo 'Chuỗi "' . $string . '" được bắt đầu bằng chuỗi "' . $string1 . '" <br><br>' ;
else
    echo 'Chuỗi "' . $string . '" không được bắt đầu bằng chuỗi "' . $string1 . '"<br> <br>';
// CÁCH 2
// function findWord($word, $word2){
//     return strpos($word, $word2);
// }
// $x = "Hello What";
// $y = "Hi";
// echo strpos($x,$y) . "<br>";
// if(strpos($x, $y) == 0)
//     echo "Có bắt đầu" . "<br>";
// else echo "Không bắt đầu" . "<br>";

echo "7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper() <br>";
function changeToToupper($string){
    return strtoupper($string);
}
echo "Chuỗi nhập: " . $string . "<br>";
echo "Kết quả: " . changeToToupper($string) . "<br><br>";

echo "8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower() <br>";
function changeToLower($string){
    return strtolower($string);
}
echo "Chuỗi nhập: " . $string . "<br>";
echo "Kết quả: " . changeToLower($string) . "<br><br>";

echo "9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords() <br>";
function upperTheFirstWord($string){
    return ucwords($string);
}
echo "Chuỗi nhập: " . $string . "<br>";
echo "Kết quả: " . upperTheFirstWord($unCaplockString) . "<br><br>";

echo "10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim() <br>";
function removeWhiteSpace($string){
    return trim($string);
}
echo "Chuỗi nhập: " . $string . "." . "<br>";
echo "Kết quả: " . removeWhiteSpace($string) . "." . "<br><br>";

echo "11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim() <br>";
function removeFrontCharacter($string, $char){
    return ltrim($string, $char);
}
$errorString = "dData test";
$d_Char = "d";
echo "Chuỗi nhập: " . $string . "<br>";
echo "Ký tự cần xoá: " . $d_Char . "<br>";
echo "Kết quả: " . removeFrontCharacter($errorString, $d_Char) . "<br><br>";

echo "12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim() <br>";
function removeBehindCharacter($string, $char){
    return rtrim($string, $char);
}
$dot_Char = ".";
echo "Chuỗi nhập: " . $string . "<br>";
echo "Ký tự cần xoá: " . $dot_Char . "<br>";
echo "Kết quả: " . removeBehindCharacter($string, $dot_Char) . "<br><br>";

echo "13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode() <br>";
function splitString($char, $string){
    Print_r(explode($char, $string));
}
$comma_Char = ",";
$stringArr = "Data1,Data2,Data3";
echo "Ký tự dùng để phân tách: " . $comma_Char . "<br>";
echo "Chuỗi cần tách: " . $stringArr . "<br>";
echo "Kết quả: ";
echo splitString($comma_Char, $stringArr) . "<br><br>";

echo "14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode() <br>";
function connectElement($char, $arr){
    return implode($char, $arr);
}
$arr  = array("Data1", "Data2", "Data3");
echo "Ký tự dùng để nối: " .$comma_Char . "<br>";
echo "Mảng cần nối: ";
echo print_r($arr) . "<br>";
echo "Kết quả: " . connectElement($comma_Char, $arr) . "<br><br>";

echo "15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad() <br>";
function addNewString($string, $newString){
    return str_pad($string, strlen($newString) + strlen($string), $newString);
}
$string = "Data test";
$newString = " new";
echo "Chuỗi ban đầu: " . $string . "<br>";
echo "Chuỗi thêm: " . $newString . "<br>";
echo "Kết quả: " . addNewString($string, $newString) . "<br><br>"; 

echo "16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr() <br>";
function checkEnd($string, $checkString){
    return strrchr($string, $checkString);
}
$str1 = "New data";
$str2 = "data";
echo "Chuỗi ban đầu: " . $str1 . "<br>";
echo "Chuỗi cần kiểm tra: " . $str2 . "<br>";
if(checkEnd($str1, $str2) == $str2)
    echo 'Kết quả: Chuỗi "' . $str1 . '" có kết thúc bằng chuỗi "' . $str2 . '" . <br><br>';
else 
    echo 'Kết quả: Chuỗi "' . $str1 . '" không có kết thúc bằng chuỗi "' . $str2 . '" <br><br>';

echo "17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr() <br>";
function checkContainString($string, $char){
    return strstr($string, $char);
}
if(checkContainString($string, $string2) == $string2)
    echo 'Kết quả: Chuỗi "' . $string . '" có chứa chuỗi "' . $string2 . '"<br><br>';
else 
    echo 'Kết quả: Chuỗi "' . $string . '" không chứa chuỗi "' . $string2 . '" <br><br>';

echo "18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác 
sử dụng hàm preg_replace() <br>";
function replaceAllCharacter($replace, $string){
    return preg_replace("/[^a-zA-Z0-9]/", $replace, $string);
}
$replace = ".";
echo "Chuỗi ban đầu: " . $string . "<br>";
echo "Ký tự dùng để thay thế: " .$replace . "<br>";
echo "Kết quả: " . replaceAllCharacter($replace, $string) . "<br><br>";

echo "19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int() <br>";
function isInteger($intNum){
    return is_int($intNum);
}
$intNum = 13.4;
echo "Số kiểm tra: " . $intNum . "<br>";
if(isInteger($intNum))
    echo "Kết quả: Số " . $intNum . " là số nguyên <br><br>";
else 
    echo "Kết quả: Số " . $intNum . " không phải là số nguyên <br><br>";

echo "20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var() <br>";
function checkEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
$email = "phm@gmail.com";
echo "Email nhập vào: " . $email . "<br>";
if(checkEmail($email))
    echo "Kết quả: Email " . $email . " hợp lệ <br>";
else
    echo "Kết quả: Email " . $email . " không hợp lệ <br>";
?>