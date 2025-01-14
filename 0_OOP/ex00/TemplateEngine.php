<?php
    class TemplateEngine {
        function createFile($fileName, $templateName, $parameters) {
            $temlateContents = file_get_contents($templateName);
            $newContents = preg_replace(["/{(.+?)}/"], $parameters, $temlateContents);
            file_put_contents($fileName, $newContents);
        }
    }
?>