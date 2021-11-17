//基本構造
//<h1>見出し</h1>　このとおり「見出しを表現するため」
<a>Tech Boost</a> Tech Boost リンクという情報

<!DOCTYPE html>
>html lang="ja">
  <head>
      <meta charset="UTF-8">
      <title>tech boost</title>
  </head>
  <body>
  </body>
 </html> 
 
 //htmlタグ　１番初めに書く要素
 <!DOCTYPE html> このコードは、文章の型を定義する
 
 <html lang="ja"> このコードは、属性と呼ばれ、オプションを指定。
 
// headタグ 文章のタイトル等のヘッダ情報を記述するための
//<meta charset="UTF-8">は、文字コードの設定をおこなっています。
//<title>TechBoost</title> これは、文章のタイトル

//bodyタグ　実際にブラウザで表示されるテキストや画像といった内容を記述する要素

//pタグ
*<p>テキスト</p>
pタグは、段落を表現する際に使用。

//aタグ
//<a href="https://google.com">Google</a>　　結果「Google」と表示・。
aタグは。別のページへリンクを張る際に使用。

//imgタグ
//imgタグは、画像を表示する際に使用。srcの後に表示させたい画像のURを、altの後に記述する。

//ulタグ　箇条書きのリストで要素を並べる際に使用。
<ul>
  <li>項目1</li>
  <li>項目2</li>
  <li>項目3</li>
</ul>
結果＝
・項目１
・項目２
・項目３

//olタグ
<ol>
  <li>項目1</li>
  <li>項目2</li>
  <li>項目3</li>
</ol>
結果＝
１．項目１
２．項目２
３．項目３

//divタグ
<div></div> 要素をグループ化することが主な役割

//headerタグ　ヘッダーを示す際に使用。
<header>
  ここにいくつか要素が入ります
</header>

//footerタグ フッタを示す際に使用。
<footer>
  ここにいくつかの要素が入ります
</footer>

//sectionタグ　webページにおいて意味や機能のまとまりである。
<section>
  ここにいくつか要素が入ります
</section>

//セレクタ=CSSを適用するのかを指定するためのもの。 　h1=セレクタ　color=プロパティ　
h1 {
   color: red;
}
　
//id,classをセレクタに指定。
*<h1 id="title">Hello world!!!</h1>
<p class="description">CSSの入門！</p>
そこに装飾を付け足すには、
　#title {
  color: red;
}

.description {
  color: blue;
}

routeからそのニュースの作成画面に移動する

