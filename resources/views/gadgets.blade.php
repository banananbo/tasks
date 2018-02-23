<?php
session_start();
if (!isset($_SESSION['count'])) {
    // キー'count'が登録されていなければ、1を設定
    $_SESSION['count'] = 1;
} else {
    //  キー'count'が登録されていれば、その値をインクリメント
    $_SESSION['count']++;
}


echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

?>
<Module>
    <ModulePrefs title=" Sample Game ">
    </ModulePrefs>
    <Content type="html" view="canvas"><![CDATA[
        <div id="sample">Test Game</div>
        <?php
          echo $_SESSION['count']."回目の訪問です。";
        ?>
        <script type="text/javascript">
            function init() {
                document.getElementById("sample").innerHTML = " Sample Game ";
            }
            gadgets.util.registerOnLoadHandler(init);
        </script>
        ]]></Content>
</Module>
