<?php
class TemplateEngine
{
    function createFile(HotBeverage $text)
    {
        $templateContents = file_get_contents("template.html");
        $reflection = new ReflectionClass($text);
        $properties = $reflection->getProperties();
        foreach ($properties as $property) {
            $propName = $property->name;
            $methodName = "get_" . $propName;
            $parameters[$propName] = $text->$methodName();
        }
        $newContents = preg_replace_callback("/{(.+?)}/", function ($matches) use ($parameters) {
            $prop = $matches[1];
            if ($prop == "nom")
                $prop = "name";
            return $parameters[$prop];
        }, $templateContents);
        file_put_contents($text->name . ".html", $newContents);
    }
}
