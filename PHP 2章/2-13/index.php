<?php
// PHPの研修カリキュラム2-13
?>
<?php
/*
PHPの
研修
カリキュラム
2-13
*/
?>

<?php 
// ceil(切り上げ)
echo ceil (10.50);
echo "<br>";

// floor(切り捨て)
echo floor (10.20);
echo "<br>";

// round(四捨五入)
$score = 279;
var_dump(round($score,300));
echo "<br>";

// pi(円周率)
echo pi();
echo "<br>";

// mt_rand(乱数)
echo mt_rand(1,20);
echo "<br>";

// strlen(文字列の長さ)
$str = "kawaguchi";
echo strlen($str);
echo "<br>";

// strpos(検索)
$str = "saitama";
echo strpos($str,"m");
echo "<br>";

// substr(文字列の切り取り)
$str ="apple";
echo substr($str,1,3);
echo "<br>";

// str_replace(置換)
$str ="saitama";
echo str_replace("saitama","SAITAMA",$str);
echo "<br>";

// printf(フォーマット化した文字列を出力)
$limit_hour = 3;
$limit_minute = 30;
printf("残り%d時間%02d分" , $limit_hour,$limit_minute);
echo "<br>";

// sprintf(変数に代入できるprintf)
$limit_minute = 10;
$limit_second = 30;
printf("残り%02d分%02d秒" ,$limit_minute,$limit_second);
echo "<br>";
$limit_time = sprintf("残り%02d分%02d秒" ,$limit_minute,$limit_second);
echo $limit_time;
?>

<html>
    <p>I say that <?php echo "Hello World!!"; ?></p>
</html>

<?php
echo "1.PostgreSQL・Oracle SQL"."<br>";
echo "※PostgreSQL：リレーショナルデータベース（RDB）の作成や操作、管理ができるオープンソースのデータベース管理システム（DBMS）の一つ。MySQLと人気を二分するオープンソースRDBMSで、Linuxなど主要なUNIX系OSとWindowsに対応し、機能の豊富さや拡張性の高さに定評がある。
※Oracle SQL：PL/SQLは、SQLの手続き型拡張機能としてオラクル社が 提供する言語です • SQLはデータの集合を操作するための言語ですが、実際 の業務処理＇= ビジネス・ロジック（では手続き型の処理が 必要な場合があります • Oracle Databaseの内部でSQLと緊密な連携をおこなうこ とで効率的に業務処理を実行できます"."<br>";

echo "2.TortoiseGit・TortoiseSVN"."<br>";
echo "※ortoiseGit：TortoiseGitとは先程解説したGitをより扱いやすくするために開発されたWindows用ソフトウェアです。※TortoiseSVN：TortoiseSVN（トータスエスブイエヌ）はSubversionのクライアントフロントエンド（各種入力をユーザーから受け取り、バックエンドが使える仕様に合うようにそれを加工する役目を担う）となるソフトウェアです。"."<br>";

echo "3.外部設計・内部設計"."<br>";
echo "※外部設計：ソフトウェアや情報システムの開発工程の一つで、外部から見たシステムの仕様を定義する工程。方法論の違いにより、この工程のことを「基本設計」あるいは「概要設計」などと呼んだり、これらの一部に含める場合もある。
※内部設計：ソフトウェアや情報システムの開発工程の一つで、全体の構成や行うべき処理の詳細など実装に必要な仕様を定義する工程。方法論の違いにより、この工程を「機能設計」あるいは「詳細設計」と呼ぶ場合もある。"."<br>";

?><img class="alignnone size-full wp-image-371" src="http://54.238.147.46/wp-content/uploads/2020/04/update_task_status.png" alt="" width="716" height="180" data-pagespeed-url-hash="608921261" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">