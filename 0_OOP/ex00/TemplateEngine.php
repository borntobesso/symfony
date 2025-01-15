<?php
class TemplateEngine
{
    function createFile($fileName, $templateName, $parameters)
    {
        $templateContents = file_get_contents($templateName);
        $newContents = preg_replace_callback("/{(.+?)}/", function ($matches) use ($parameters) {
            $prop = $matches[1];
            return $parameters[$prop];
        }, $templateContents);
        file_put_contents($fileName, $newContents);
    }
}
