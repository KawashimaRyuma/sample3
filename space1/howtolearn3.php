//関数
<?php
// 1〜10 までを足した値を返す関数
function sum(){

    // $result は結果を保存する変数
    $result = 0;

    // $i は 1　からはじまり 10 より大きくなるまでループする
    for($i = 1; $i <= 10; $i++){

        // $result に　$i を順番に足していく
        $result += $i;
    }

               // $result を結果として返す
    return $result;
}
?>

これだと結果は、何も表示されません。

*echo sum();を追加すると結果で５５と表示される！

function 関数名（仮引数）｛
　　実行する処理
｝
//functionの後には、作りたい関数の名前を書く。
先ほどのは、１から１０までを足して出力する関数。

sum関数に仮引数を持たせることで高機能な関数にする
function sum() {   カッコの中に$maxを代入
echo sum();    カッコの中に100を代入
結果で5050と出る！

//sum関数には仮引数も$maxを設定した。
$maxのように、関数を定義するときに「関数にこんな値を渡してあげたい」というときに仮に渡す変数を 仮引数
また、sum(100)の100のように、実行するときに実際に渡す値のことを 引数

//戻り値
return $result;

strlen　文字の長さの幅
$string = "ABCDEF";
echo strlen($string);
結果　６と表示

str_replace  文字列を置換する
$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP",$string);
echo $new_string;
結果　I love PHP

count 配列の個数
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);
結果　１０

$array = array(2,5,9,7,3,1,8,6,4);
asort($array);  ←配列を昇順（小さい順）に
print_r($array);　　←これで表示する
//=> Array
//=> (
//=>     [5] => 1
//=>     [0] => 2
//=>     [4] => 3
//=>     [8] => 4
//=>     [1] => 5
//=>     [7] => 6
//=>     [3] => 7
//=>     [6] => 8
//=>     [2] => 9
//=> )
//=> と表示される。

逆にarsort($array);  ←降順（大きい順）に

//変数
プログラミングで扱うデータを入れておくための容器
利用可能な文字は、英数字と数字、アンダースコア（＿）
integer 整数
string 文字列

//変数型
プログラミングで扱うデータにはデータには数字や文字列など様々な種類がある。これを、データ型。
整数型
１や100、-10などの整数を扱います。小数点を持つ値は格納できません。

浮動小数点数型
1.5や2.3333、3.14159などの実数を扱います。

文字列型
APPLEやBanana、orangeなどの文字列を扱います。
文字列の左右両端に「”」(ダブルクオート) または「’」(シングルクオート) を付けます。

//配列
複数のデータを一つの変数に入れておきたい時に使う。
$array 配列
配列には、連想配列もある。
例
$animals = [
    "cat" => "猫",
    "dog" => "犬",
    "bird" => "鳥"
];
echo $animals["bird"];

論理型
「=」（イコールが1つ）は値の代入を意味する演算子です。右の値を左に入れます。
それに対して「==」（イコールが2つ）は値の比較を意味する演算子です。右の値と左の値を比較します。

$num = 3;
if ($num == 1) {
    echo "1です";
}
elseif ($num == 2) {
    echo "2です";
}
elseif ($num == 3) {
    echo "3です";
}else {
    echo "どれでもないです";
}
二項演算

// +は加算する演算子
$value = 6;
echo $value + 2;      結果８と表示

// -は減算する
$value = 6;
echo $value - 2;   結果４と表示

// *は積算する
$value = 6;
echo $value * 2;  結果１２と表示

// /は除算する
$value = 6;
echo $value / 2;  結果３と表示

// .は文字列を連結する
$value = "AAA";
echo $value . "BBB";   結果!AAABBB";

論理演算

// ==は左右が等しいか判定
$value = 10;
$result = $value == 20;
var_dump($result);       結果bool(false)

// < は左が右より小さいか判定
$result = $value < 20; こうすると結果　bool(true)

// >は左が右より大きいか判定
$result = $value > 20;   こうすると結果 bool(false)

// ===は左と右が同じ型で同じ値を持つか判定
$a = "20";
$b = 20;
$result = $a == $b;
var_dump($result);   結果　true

$result = $a === $b;
var_dump($result);   結果false

単項演算

// ++は変数の値にひとつ増加させる
$value 10;
++$value;
// $valueに１を足す
echo "value;   結果１１と出る

// -は変数の値を一つ減少させる
$value = 10;
--$value;
echo $value;  結果　９と出る

複合演算

// += は変数の値を増加させる
$value = 10;
// $value に　５足した結果を$valueに代入
$value += 5;
echo $value;      結果　１５と出る

// -= は変数の値を減少
$value -= 5;  こうすると　５と表示

// .=は変数に文字列を連結
$value = 'apple';
$value .= 'orange'; 
echo $value;        結果　apple orange

三項演算

$value 10;
$result = ($value < 20) ? // '$valueは　２０より小さい :
'$value は２０と等しいかまたは大きい
echo $result;   結果　$valueは　２０より小さいと出る

因みに '←"にすると結果　10は20より小さいと表示される。

// 整数の値は、自動的に浮動小数点数に変換されて、浮動小数同士の演算を行う。
これを、型の自動変更とという。