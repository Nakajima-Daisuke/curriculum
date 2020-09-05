<?php
// PHPの研修カリキュラム2-16
?>
<?php
/*
PHPの
研修
カリキュラム
2-16
*/
?>

<!-- ファイルが書き込み可能なのか確認する -->
<?php
// index.php
$testFile = "test.txt";
$contents = "こんばんは！";

if (is_writable($testFile)) {

    // 書き込み可能なときの処理
    // 確認のため、echoで表示だけさせる
    echo "writable!!";
    echo "<br>";
} else {
    // 書き込み不可のときの処理
    echo "not writable!";
    exit;
    echo "<br>";
}
?>

<!-- 書き込みをする -->
<?php
$testFile = "test.txt";
$contents = "こんばんは！";

if (is_writable($testFile)) {
    // 書き込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($testFile, "a");

    // 対象のファイルに書き込む
    fwrite($fp, $contents);

    // ファイルを閉じる
    fclose($fp);

    // 書き込みした旨の表示
    echo "finish writing!!";
    echo "<br>";
} else {
    // 書き込み不可のときの処理
    echo "not writable!";
    exit;
}
?>

<!-- zファイルの読み込み -->
<?php
$test_file = "test2.txt";

if (is_readable($test_file)) {
    // 読み込み可能なときの処理

    // 対象のファイルを開く
    $fp = fopen($test_file, "r");

    // 開いたファイルから1行ずつ読み込む
    while ($line = fgets($fp)) {
        // 改行コード込みで1行ずつ出力
        echo $line.'<br>';
    }
    // ファイルを閉じる
    fclose($fp);
} else {
    // 読み込み不可のときの処理
    echo "not readable!";
    exit;
}
?>

<html>
    <p>I say that <?php echo "Hello World!!"; ?></p>
</html>

<?php
echo "1.CakePHPの2系・3系の違い"."<br>";
echo "※バージョン：速度、使える機能が多い・Composer：ライブラリのバージョン管理が容易・インストールが楽
Autoload・Namepace・PSR-2・trait：可読性の向上・デザインの向上・モデル周りの一新：できることが増える・拡張性が大幅に向上"."<br>";

echo "2.LAMP"."<br>";
echo "※データベースを利用したWebアプリケーションを開発・運用するのに適した、人気の高いオープンソースソフトウェアの組み合わせの一つで、OSの「Linux」、Webサーバの「Apache」、データベースの「MySQL」（後にMariaDBも選択肢に追加された）、プログラミング言語および実行環境の「PHP」「Perl」「Python」（のいずれか）の頭文字を繋いだもの。"."<br>";

echo "3.AWS"."<br>";
echo "※米アマゾンドットコム（Amazon.com）社が事業者向けに提供しているクラウドサービス。企業などが情報システムの運用やオンラインサービスの運営のために必要とするITインフラや様々な個別の情報処理機能を、インターネットを通じてサービスとして販売している。"."<br>";

?><img class="alignnone size-full wp-image-371" src="http://54.238.147.46/wp-content/uploads/2020/04/update_task_status.png" alt="" width="716" height="180" data-pagespeed-url-hash="608921261" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">