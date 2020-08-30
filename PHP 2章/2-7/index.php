<?php
// PHPの研修カリキュラム2-7
?>
<?php
/*
PHPの
研修
カリキュラム
2-7
*/
?>

<?php
$color = array("red" => "赤", "blue" => "青","green" => "緑",);
var_dump($color);

$color["yellow"] = "黄色";
var_dump($color);
?>

<html>
    <p>I say that <?php echo "Hello World!!"; ?></p>
</html>

<?php
echo "1.プルリクエスト(マージリクエスト)"."<br>";
echo "※コードの変更をレビュワーに通知し、マージを依頼する機能です。 コードのレビューを受けることで、1人で作ると気がつかないコードの指摘やバグや記述ミスの発見ができ、コードの品質を高めること。"."<br>";

echo "2.Git Flow"."<br>";
echo "※チームで Git を使う際に役立つ、運用ルールをまとめたツール（プラグイン）になります。Git は分散型バージョン管理システムで、複数名でプロジェクト・ファイルを共有できる特徴があります。開発スピードの向上やミスの低減などメリットがある一方で、開発スタート時に運用ルールを定めておかないと、プロジェクトがまとまらない、というデメリットがあります。"."<br>";

echo "3.CRON"."<br>";
echo "※多くのUNIX系OSで標準的に利用される常駐プログラム（デーモン）の一種で、利用者の設定したスケジュールに従って指定されたプログラムを定期的に起動してくれるもの。"."<br>";

?><img class="alignnone size-full wp-image-371" src="http://54.238.147.46/wp-content/uploads/2020/04/update_task_status.png" alt="" width="716" height="180" data-pagespeed-url-hash="608921261" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">