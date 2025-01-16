<?php
class TemplateEngine
{
    function createFile($fileName, $text)
    {
        $content = "<!DOCTYPE html>\n<html>\n";
        $content .= "\t<head>\n";
        $content .= "\t\t<title>Generated Page</title>\n";
        $content .= "\t</head>\n";
        $content .= "\t<body>\n";
        $content .= "\t\t<h1>The Lord of the Rings</h1>\n";
        $content .= "\t\t";

        $bodyContent = $text->readData();
        $content .= $bodyContent;

        $content .= "\n\t</body>\n";
        $content .= "</html>";
        file_put_contents($fileName, $content);
    }
}
