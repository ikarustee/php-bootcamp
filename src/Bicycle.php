<?php

class Bicycle implements DriveInterface {
    public function drive($location) {
        return "Ein Fahrrad fährt in {$location}.";
    }
}

?>