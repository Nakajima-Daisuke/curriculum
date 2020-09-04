<?php
// PHPの研修カリキュラム2-14  
?>
<?php
/*
PHPの
研修
カリキュラム
2-14
*/
?>

<?php 
// count（要素の数を数える）
$country = ["America", "spain" , "japan" , "germany" , "italy"];
echo count ($country);
echo "<br>";

// sort（要素の並べ替え）
$country = ["America", "spain" , "japan" , "germany" , "italy"];
sort($country);
var_dump($country);
echo "<br>";

// in_array（配列に中にある要素が存在しているか）
$score = [279 , 197 , 300 , 245 , 199];
var_dump(in_array(199 , $score));
echo "<br>";

// implode（配列を結合して文字列に変換）
$station = ["ueno" , "tokyo" , "shinagawa" , "yokohama" , "omiya"];
$atstr = implode("@" , $station);
var_dump($atstr);
echo "<br>";

// explode（文字列を指定の区切りで配列にする）
$country = ["America", "spain" , "japan" , "germany" , "italy"];
$cnt = implode("@" , $country);
var_dump($cnt);

$re_country = explode("@" , $cnt);
var_dump($re_country);
?>


<html>
    <p>I say that <?php echo "Hello World!!"; ?></p>
</html>

<?php
echo "1.要件定義(要求仕様書)"."<br>";
echo "※システムやソフトウェアの開発において、実装すべき機能や満たすべき性能などのを明確にしていく作業のこと。いわゆる上流工程の一部で、実際の開発・実装作業を始める前に行う作業の一つである。"."<br>";

echo "2.単体テスト・結合テスト"."<br>";
echo "※単体テスト：ソフトウェアやシステムのテスト手法の一つで、単一の部品（モジュール）を対象に行うテスト。
※結合テスト：開発中のソフトウェアのテスト手法の一つで、複数のモジュール（部品）を組み合わせて行うテスト。個々のモジュールの単体テスト後に行う。"."<br>";

echo "3.テスト仕様書(どのようなもの、項目)"."<br>";
echo "※テスト仕様書：システムやソフトウェアが、クライアントのヒアリングをもとに作り上げた要件定義書の通りに機能するかどうか、テストするポイントをまとめたドキュメントです。 具体的には、結合テストや総合テストの工程でどの機能を、どのテスト技法を使ってテストするのか記されています。
※項目：	•テストを実施した環境•実施するテストの内容•テストを実施するためのシステムの操作手順•テストの実行結果•個々のテスト項目を識別するための番号や記号（通し番号など）•テストを実施した年月日•テストを実行した担当者"."<br>";

?><img class="alignnone size-full wp-image-371" src="http://54.238.147.46/wp-content/uploads/2020/04/update_task_status.png" alt="" width="716" height="180" data-pagespeed-url-hash="608921261" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">