<?php

// 1. 문자열을 특정 크기로 나누고 ':'로 구분하기
$str1 = "033000";
$chunked_str1 = implode(":", str_split($str1, 2));
echo "1. Chunked string: " . $chunked_str1 . "\n";

// 2. 문자열에 PHP가 있는지 확인하고, 위치를 출력하기
$str2 = "I love PHP because PHP is great!";
$position = strpos($str2, "PHP");
if ($position !== false) {
    echo "2. The PHP word is present at position: " . $position . "\n";
} else {
    echo "2. The PHP word is not present.\n";
}

// 3. 파일 이름 추출하기
$str3 = "/var/www/html/index.php";
$file_name = basename($str3);
echo "3. File name: " . $file_name . "\n";

// 4. 문자열에서 첫 번째 'the'를 'That'으로 교체하기
$str4 = "the quick brown fox jumps over the lazy dog";
$replaced_str4 = preg_replace("/\bthe\b/", "That", $str4, 1);
echo "4. Replaced string: " . $replaced_str4 . "\n";

// 5. 두 문자열에서 첫 번째로 다른 문자 찾기
$str5 = "abcdefg";
$str6 = "abcxyfg";
$diff_pos = -1;
for ($i = 0; $i < min(strlen($str5), strlen($str6)); $i++) {
    if ($str5[$i] !== $str6[$i]) {
        $diff_pos = $i;
        break;
    }
}
if ($diff_pos !== -1) {
    echo "5. First different character at position: " . $diff_pos . " (" . $str5[$diff_pos] . " vs " . $str6[$diff_pos] . ")\n";
} else {
    echo "5. No differences found or one string is a prefix of the other.\n";
}

// 6. 문자열 암호화 (알파벳을 다음 문자로 바꾸기)
$str4_encrypted = '';
for ($i = 0; $i < strlen($str4); $i++) {
    $char = $str4[$i];
    if (ctype_alpha($char)) {
        if ($char === 'z') {
            $char = 'a';
        } elseif ($char === 'Z') {
            $char = 'A';
        } else {
            $char = chr(ord($char) + 1);
        }
    }
    $str4_encrypted .= $char;
}
echo "6. Encrypted string: " . $str4_encrypted . "\n";

?>
