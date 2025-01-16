<?php
class Tea extends HotBeverage {
    private static $description = "Tea is an aromatic beverage commonly prepared by pouring hot or boiling water over cured or fresh leaves of the Camellia sinensis, an evergreen shrub native to East Asia.";
    private static $comment = "Tea is the most widely consumed drink in the world after water.";
    
    function get_description() {
        return self::$description;
    }
    function get_comment() {
        return self::$comment;
    }
}