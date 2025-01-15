<?php
class TemplateEngine
{
    function createFile($fileName, $text)
    {
        $content =
            "<!DOCTYPE html>\n<html>\n\t<head>\n\t\t<title>Generated Page</title>\n\t</head>\n\t<body>\n\t\t<h1>The Lord of the Rings</h1>\n\t\t";
        $bodyContent = $text->readData();
        $content = $content . $bodyContent;
        $content = $content .
            "\n\t</body>\n</html>";
        file_put_contents($fileName, $content);
    }
}
