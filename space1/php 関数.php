<php
// 1~10　までを足した値を返す関数
function sum(){
 // $result　は結果を保存する変数
  $result = 0;
 // $i　は　1から始まり10より大きくなるまでループする。
 for($i = 1; $i <= 10; $i++){
 // $rsult　に　$i　を順番に足す
 $result += $i;
}
    // $rsult を結果として返す
}
これだと、何も表示されない！
関数を実行するには　　　　　echo sum();を追記
すると結果に55と表示される。

厳密な関数の定義の仕方。
function 関数名（仮引数) {
   実行する処理
}

function sum($max) {
  $i <= $max;
 echo sum(100);
 変えると結果　5050と出る
 
 戻り値　　return $result;
 returnの後に書かれた値を戻り値と言う。
 
 PHPのビルトイン関数
 初めから用意されている関数がある。
 
 strlen 文字の長さを取得する
 $string = "ABCDEF";
 echo strlen($string);
 結果　　６
 
 str_replace  文字列を置換する
 $string = "T love Ruby!";
 // Ruby　という文字列を文字列を　PHPに置換する
 $new_string = str_replace("Ruby, "PHP,$string);
 echo $new_string;
 結果  I love PHP
 
 count 配列の要素の個数を取得する
$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);
結果　　　  １０と出る

$array = array(2,5,9,7,3,1,8,6,4)
// 配列を昇順(小さい順）にソートする
asport($array);
// print_rで表示
print_r($array);
結果
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
//=> )　　　表示

// $array を降順(大きい順)にソートする
arsort($array);