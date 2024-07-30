<?php
// Q1 変数と文字列
$name = "仲井";
$message = "私の名前は$name" . $newMassage = "です。";
echo $message;

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
echo $num / 2 . "\n";

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$date = new DateTime('now');
echo $date->format('Y年m月d日 H時i分s秒');
$nowTime = "現在時刻は、" .$date->format('Y年m月d日 H時i分s秒') ."です。";
echo $nowTime;

// Q4 条件分岐-1 if文
$device = "mac";
if ($device === "mac" || $device === "windows"){
    echo "使用OSは、" . "$device" . "です。";
} 
else {
    echo "どちらでもありません。";
}

// Q5 条件分岐-2 三項演算子
$age = 7;
$adult = ($age >= 18) ? "成人です。" : "未成年です。";
echo $adult;

// Q6 配列
$east = ["東京都", "神奈川県", "群馬県", "栃木県", "千葉県", "茨城県", "埼玉県"];
echo $east[3] . "と" . $east[4] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$seven = ["tokyo" => "新宿区", "kanagawa" => "横浜市", "tiba" => "千葉市", "saitama" => "さいたま市", "totigi" => "宇都宮市", "gunnma" => "前橋市", "ibaraki" => "水戸市"];
foreach($seven as $value) {
    echo $value . "<br>";
}

// Q8 連想配列-2
$seven = ["東京都" => "新宿区", "神奈川県" => "横浜市", "千葉県" => "千葉市", "埼玉県" => "さいたま市", "栃木県" => "宇都宮市", "群馬県" => "前橋市", "茨城県" => "水戸市"];
$sai = "埼玉県";
if (array_key_exists($sai, $seven)) {
    echo $sai . "の県庁所在地は、" . $seven[$sai] . "です。";
} 

// Q9 連想配列-3
$seven = ["東京都" => "新宿区", "神奈川県" => "横浜市", "千葉県" => "千葉市", "埼玉県" => "さいたま市", "栃木県" => "宇都宮市", "群馬県" => "前橋市", "茨城県" => "水戸市", "愛知県" => "名古屋市", "大阪府" => "大阪市"];
$kanto = ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県"];
foreach ($seven as $key => $value) {
    if (in_array($key, $kanto)) {
        echo $key . "の県庁所在地は、" . $value . "です。<br>";
    } else {
        echo $key . "は関東地方ではありません。<br>";
    }
}


// Q10 関数-1
function hello($name) {
    return $name . "さん、こんにちは。";
}
echo hello("金谷") . "<br>";
echo hello("安藤") . "<br>";

// Q11 関数-2
function calcTaxInPrice($price) {
    $taxRate = 0.10; // 消費税率 10%
    $taxInPrice = $price * (1 + $taxRate); 
    return $taxInPrice;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price . "円の商品の税込価格は" . round($taxInPrice) . "円です。";

// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 == 0) {
        return $num . "は偶数です。";
    } else {
        return $num . "は奇数です。";
    }
}
$oddNumber = 11;
$evenNumber = 24;
echo distinguishNum($oddNumber) . "<br>";
echo distinguishNum($evenNumber) . "<br>";

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return "合格です。";
        case 'C':
            return "合格ですが追加課題があります。";
        case 'D':
            return "不合格です。";
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}
echo evaluateGrade('A') . "<br>";
echo evaluateGrade('X') . "<br>";

?>