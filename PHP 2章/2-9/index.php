<?php
// PHPの研修カリキュラム2-9
?>
<?php
/*
PHPの
研修
カリキュラム
2-9
*/
?>

<?php
for ($i = 1; $i <= 100; $i++) {
    if($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz!!";
        echo "<br>";
    }elseif($i % 3 === 0) {
        echo "Fizz!";
        echo "<br>";
    }elseif($i % 5 === 0) {
        echo "Buzz!";
        echo "<br>";
    }else{
        echo "$i";
        echo "<br>";
    }
}
?>




<html>
    <p>I say that <?php echo "Hello World!!"; ?></p>
</html>

<?php
echo "1.パフォーマンス"."<br>";
echo "※コンピュータなどの機器やソフトウェア、システムなどの処理性能や実行速度、通信回線・ネットワークなどの伝送速度・容量などのことを指すことが多い。"."<br>";

echo "2.スロークエリ"."<br>";
echo "※データベースにおいて、時間のかかっているSQL(遅いSQL)のことをスロークエリと呼びます。 基本的には、MySQLやPostgreSQLの設定により取得することができ、どの程度遅いものを対象とするか等を指定することが出来ます。"."<br>";

echo "3.クエリログ"."<br>";
echo "※クライアントからの MySQL Server への接続・接続解除の情報、およびクライアントから実行された全ての SQL クエリを出力してくれるログです。 SQL 実行エラーが発生した際に、どのような SQL が実行されたのかを正確に把握するのに役に立ちます。"."<br>";

?><img class="alignnone size-full wp-image-371" src="http://54.238.147.46/wp-content/uploads/2020/04/update_task_status.png" alt="" width="716" height="180" data-pagespeed-url-hash="608921261" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">