<?php
    $file = fopen("hello2.txt", "w");
    
    $str = "만나서 반갑습니다. 좋은 하루 되세요";
    fwrite($file, $str);

    echo "파일 쓰기 완료";
    fclose($file);
?>