<?php
// PHPの研修カリキュラム2-5
?>
<?php
/*
PHPの
研修
カリキュラム
2-5
*/
?>

<!-- //以下の条件分岐を記載して、コミット、プッシュしてください。 -->
<!-- 1.名前とパスワードの変数を用意する。
2.名前が「 taro 」、パスワードが「 pass 」であった場合、「 ログイン成功です 」と出力する。
3.名前だけ正しかった場合、「 パスワードが間違っています。 」と出力する。
4.パスワードだけ正しかった場合、「 名前が間違っています。 」と出力する。
5.名前もパスワードも間違っていた場合は、「 入力情報が間違っています 」と出力する。 -->
<?php
$name = "taro";
$pass = "pass";

if ($name === "taro" && $pass === "pass") {
    echo "ログイン成功です。";
} elseif($name === "taro") {
    echo "パスワードが間違っています。";
} elseif($pass === "pass") {
    echo "名前が間違っています。";
} else {
    echo "入力内容が間違っています。";
}
?>

<html>
    <p>I say that <?php echo "Hello World!!"; ?></p>
</html>

<?php
echo "1.IDE(統合開発環境)"."<br>";
echo "※ソフトウェア開発に必要なソフトウェアを一つに組み合わせ、同じ操作画面から統一的な操作法で利用できるようにしたソフトウェアパッケージ。一般的にはコードエディタやコンパイラ、リンカ、デバッガ、テストツール、バージョン管理ソフトなどで構成される。"."<br>";

echo "2.JOIN(データーベースにおいて)"."<br>";
echo "※複数のテーブル（データを入れておく箱）を合体させて1つのテーブルの様にすること"."<br>";

echo "3.コンフリクト"."<br>";
echo "※競合、衝突、対立、葛藤、緊張、紛争などの意味を持つ英単語。ITの分野では、複数の装置やプログラムなどが同じ資源を同時に利用しようとして競合状態になってしまうことを意味する場合が多い。「競合」「衝突」の訳語が当てられることが多い。"."<br>";
?><img class="alignnone size-full wp-image-371" src="http://54.238.147.46/wp-content/uploads/2020/04/update_task_status.png" alt="" width="716" height="180" data-pagespeed-url-hash="608921261" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">