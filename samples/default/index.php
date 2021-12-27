<!doctype html>
<html>
    <head>
        <script>
            DocContent = <?=json_encode(['c' => $raw], JSON_UNESCAPED_UNICODE)?>;
            viewerURI = "<?=$uri['wiki']?>";
            monacoVersion = "0.20.0";
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/<?=$conf['editor_version']?>/min/vs/loader.js"></script>
        <script src="/src/script/monaco.js"></script>
        <title> editor test </title>
    </head>
    <body>
        <form>
            <h1>Uman Editor formed in PressDo</h1>
            <ul data-pressdo-editor-top>
                <li data-pressdo-editor-top>
                    <button id="m" class="a e tr" data-pressdo-editor-top type="button" class="a"><?=$lang['editor:monaco']?></button>
                </li>
                <li data-pressdo-editor-top>
                    <button id="r" class="e" data-pressdo-editor-top type="button"><?=$lang['editor:raw']?></button>
                </li>
                <li data-pressdo-editor-top>
                    <button id="p" class="e" data-pressdo-editor-top type="button"><?=$lang['editor:preview']?></button>
                </li>
                <li data-pressdo-editor-top class="t">
                    <div data-pressdo-editor-top>
                        <button id="btn-bold" data-pressdo-editor-top type="button"><?=$lang['editor:bold']?></button>
                    </div><div data-pressdo-editor-top>
                        <button id="btn-italic" data-pressdo-editor-top type="button"><?=$lang['editor:italic']?></button>
                    </div><div data-pressdo-editor-top>
                        <button id="btn-strike" data-pressdo-editor-top type="button"><?=$lang['editor:strike']?></button>
                    </div><div data-pressdo-editor-top>
                        <button id="btn-link" data-pressdo-editor-top type="button"><?=$lang['editor:link']?></button>
                    </div><div data-pressdo-editor-top>
                        <button id="btn-file" data-pressdo-editor-top type="button"><?=$lang['editor:file']?></button>
                    </div><div data-pressdo-editor-top>
                        <button id="btn-ref" data-pressdo-editor-top type="button"><?=$lang['editor:ref']?></buttonv>
                    </div><div data-pressdo-editor-top>
                        <button id="btn-template"n data-pressdo-editor-top type="button"><?=$lang['editor:template']?></button>
                    </div>
                </li>
            </ul>
            <div class="c">
                <div class="a">
                    <textarea name="text" wrap="soft"></textarea>
                </div>
            </div>
        </form>
    </body>
</html>
