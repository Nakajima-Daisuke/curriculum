<?php
// PHPの研修カリキュラム2-12
?>
<?php
/*
PHPの
研修
カリキュラム
2-12
*/
?>

<form action="result.php" method="post">
    <!-- この中にinputタグを記述していきます。 --> 
    お名前：<input type="text" name="my_name" /><br>
    ご希望商品：
    <input type="radio" name="Freebie" value="A賞">A賞
    <input type="radio" name="Freebie" value="B賞">B賞          
    <input type="radio" name="Freebie" value="C賞">C賞
    <br>
    個数：
    <select name="number">
        <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
        <?php echo $i; ?>
        </option>
        <?php } ?>
    </select><br>
    <input type="submit" value="申込" />
</form>

<html>
    <p>I say that <?php echo "Hello World!!"; ?></p>
</html>

<?php
echo "1.モジュール"."<br>";
echo "※機能単位、交換可能な構成部分などを意味する英単語。機器やシステムの一部を構成するひとまとまりの機能を持った部品で、システム中核部や他の部品への接合部（インターフェース）の仕様が明確に定義され、容易に追加や交換ができるようなもののことを指す。"."<br>";

echo "2.バージョン管理システム"."<br>";
echo "※ファイルの変更履歴の保存・管理を行うソフトウェア。管理下のファイルについて、過去の版の参照や、複数の版の比較、差分の検出などを行うことができる。"."<br>";

echo "3.サブクエリ"."<br>";
echo "※データベースなどの問い合わせ（クエリ）文の内部に含まれる、別の問い合わせ文のこと。サブクエリの結果を反映したクエリを実行することができる。"."<br>";

?><img class="alignnone size-full wp-image-371" src="http://54.238.147.46/wp-content/uploads/2020/04/update_task_status.png" alt="" width="716" height="180" data-pagespeed-url-hash="608921261" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">