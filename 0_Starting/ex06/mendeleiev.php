<?php
$contents = file_get_contents("ex06.txt");
$lines = explode("\n", $contents);
$elements = [];
foreach ($lines as $line) {
    echo $line . "\n";
    list($name, $data) = explode(" = ", $line);
    $properties = explode(", ", $data);

    $element = [];
    $element["name"] = $name;

    foreach($properties as $property) {
        list($key, $value) = explode(":", $property);
        $element[$key] = trim($value);
    }

    $row = ceil((intval($element["number"]) - 1) / 18);
    $col = intval($element["position"]);
    echo "row: " . $row . " col: " . $col . "\n";
    $elements[$row][$col] = $element;
}
echo json_encode($elements);
?>