if文
$height = 160;
// もし $height が 150 未満の数値なら、{ } のなかが実行される
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} 
結果　何も表示されない。
その時に、else文を使用。
else {
echo "ご乗車なれます。";

例　「晴れたら教室で、雨が降ったら家で、曇りだったら近くのカフェで」
$height = 230;
// もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
// もし $height が 200 以上の数値なら、 else ifのあとの{ }の中のコードが実行される
// それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200){
  echo "200cm 以上の方はご乗車できません。";
}else {
  echo "ご乗車になれます。";
}
//=> "200cm 以上の方はご乗車できません。" が表示

$weekday = "月曜";
switch ($weekday) {
 case "月曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
    echo "資源ごみの日です。";
    break;
  default:
    echo "回収はありません。";
    break;
}
結果　　可燃ごみの日です。が表示

break文を入れないとすべての条件が実行される。
$weekday = "木曜";
// $weekday が月曜か木曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示したい
switch ($weekday) {
  case "月曜":
  case "木曜":
    echo "可燃ごみの日です。";
    結果　可燃ごみの日です。表示
caseは、いくつでも連続しても書くことができる。

$a = 3;
$b = 3;
$c = "3";

$aと$bが等しい時
var_dump($a == $b);     結果　true

等しくない時に
var_dump($a != $b);     結果　false

$aと$bより大きい時に
var_dump($a > $b);     　結果　false

$aが$b以上の時
var_dump($a >=$b);       結果　true

$aが$bより小さいか、等しいか
var_dump($a <= $b);      結果　true

$aが$cとデータが等しく、かつ値も等しい
var_dump($a === $c);   結果false

$aと$cとデータ型が等しくないか、もしくは値が等しくない時
var_dump($a !== $c);      結果true

for文
for($i = 0; $i < 10; $i++){
  echo $i;
}　　　結果　0123456789が表示

一つ目を$iに０を代入
２つ目を条件として、$iが１０未満になるまで１足し続ける。
３つ目は、$iに１を足す。

for ( カウンター変数の初期化; ループを続ける条件; 条件の変化指定 ) {
  要素一つに対して実行したい処理
}
a4total = 0;
echo $total;     結果　０と表示

for ($i = 0; $i <= 100; $i++) {
   $total += $I;
}
echo $total;     結果　　5050と表示

配列の最初の要素は０で、配列の要素の数はcount()という関数。

$fruits = array("apple", "orange", "lemon");
echo count($fruits);       結果　3と表示

for ($i = 0; $i <count($fruits); $i++) {
    echo "要素は" . $fruits[$i};
    echo "\n";
}       結果　　　要素はapple 要素はorange 要素はlemon  と表示

foreach文は、配列の要素を順番に処理するため
$animals = array("dog", "cat","panda");
foreach($animals as $animal){
    echo "要素は" . $animal;
    echo "\n";
}          結果　要素はdog 要素はcat 要素はpanda　と表示

foreach (配列　as 一時変数) {
  要素１つに対して実行したい処理
}

コメントの形式は、「//コメント」　「＃コメント」　/*コメント/」

