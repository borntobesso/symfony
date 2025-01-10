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
    function capital_city_from($state) {
        global $states, $capitals;
        if (array_key_exists($state, $states))
            return $capitals[$states[$state]];
        return "Unknown";
    }
?>