<?php
$contents = file_get_contents("ex06.txt");
$lines = explode("\n", $contents);
$elements = [];
foreach ($lines as $line) {
    if (!stristr($line, "="))
        continue;
    list($name, $data) = explode(" = ", $line);
    $properties = explode(", ", $data);

    $element = [];
    $element["name"] = $name;

    foreach($properties as $property) {
        list($key, $value) = explode(":", $property);
        $element[$key] = $value;
    }

    if (intval($element["number"]) <= 10) {
        if (intval($element["number"]) <= 2)
            $row = 0;
        else
            $row = 1;
    }
    else if ((intval($element["number"]) <= 86 && intval($element["number"]) >= 73) || (intval($element["number"]) <= 118 && intval($element["number"]) >= 109))
        $row = ceil(intval($element["number"]) / 18);
    else
        $row = ceil(intval($element["number"]) / 18) + 1;
    $col = intval($element["position"]);
    // echo "row: " . $row . " col: " . $col . "\n";
    $elements[$row][$col] = $element;
}
$html = "<!DOCTYPE html>\n<html>\n";
$html .= "\t<head>\n";
$html .= "\t\t<title>Mendeleiev Table</title>\n";
$html .= "\t\t<style>\n";
$html .= "\t\t\th2 {\n";
$html .= "\t\t\t\ttext-align: center;\n";
$html .= "\t\t\t}\n";
$html .= "\t\t\ttable {\n";
$html .= "\t\t\t\tborder-collapse: collapse;\n";
$html .= "\t\t\t}\n";
$html .= "\t\t\ttd {\n";
$html .= "\t\t\t\tborder: 1px solid black;\n";
$html .= "\t\t\t\tpadding: 10px;\n";
$html .= "\t\t\t}\n";
$html .= "\t\t</style>\n";
$html .= "\t</head>\n";
$html .= "\t<body>\n";
$html .= "\t\t<h2>Mendeleiev Table</h2>\n";
$html .= "\t\t<table>\n";

foreach($elements as $row) {
    $html .= "\t\t\t<tr>\n";
    for ($i = 0; $i <= 17; $i++) {
        if (isset($row[$i])) {
            $element = $row[$i];
            $html .= "\t\t\t\t<td>\n";
            $html .= "\t\t\t\t\t<h4>" . $element["name"] . "</h4>\n";
            $html .= "\t\t\t\t\t<ul>\n";
            $html .= "\t\t\t\t\t\t<li>" . $element["number"] . "</li>\n";
            $html .= "\t\t\t\t\t\t<li>" . $element["small"] . "</li>\n";
            $html .= "\t\t\t\t\t\t<li>" . $element["molar"] . "</li>\n";
            $html .= "\t\t\t\t\t\t<li>" . $element["electron"] . "</li>\n";
            $html .= "\t\t\t\t\t</ul>\n";
            $html .= "\t\t\t\t</td>\n";
        }
        else
            $html .= "\t\t\t\t<td></td>\n";
    }
    $html .= "\t\t\t</tr>\n";
}

$html .= "\t\t</table>\n";
$html .= "\t</body>\n";
$html .= "</html>\n";
file_put_contents("mendeleiev.html", $html);
?>