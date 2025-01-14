<?php
    $states = [
        'Oregon' => 'OR',
        'Alabama' => 'AL',
        'New Jersey' => 'NJ',
        'Colorado' => 'CO',
    ];
    $capitals = [
        'OR' => 'Salem',
        'AL' => 'Montgomery',
        'NJ' => 'trenton',
        'KS' => 'Topeka',
    ];
    function search_by_states($states_or_capitals) {
        global $states, $capitals;
        $args = explode(",", $states_or_capitals);
        $trimmed_args = array_map("trim", $args);
        $results = array();
        foreach ($trimmed_args as $arg) {
            if (array_key_exists($arg, $states)) {
                if (array_key_exists($states[$arg], $capitals))
                    $results[] = $capitals[$states[$arg]] . " is the capital of " . $arg . ".";
                else
                    $results[] = $arg . " is a state but has no capital.";
            }
            else {
                $key = array_search($arg, $capitals);
                if ($key && $val = array_search($key, $states))
                    $results[] = $arg . " is the capital of " . $val . ".";
                else
                    $results[] = $arg . " is neither a capital nor a state.";
            }
        }
        return $results;
    }
?>