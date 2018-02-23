<?php
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
?>
<Module>
    <ModulePrefs title=" Sample Game ">
    </ModulePrefs>
    <Content type="html" view="canvas"><![CDATA[
        <div id="sample">Test Game no Cookie</div>
        <script type="text/javascript">
            function init() {
                document.getElementById("sample").innerHTML = " Sample Game ";
            }
            gadgets.util.registerOnLoadHandler(init);
        </script>
        ]]></Content>
</Module>
