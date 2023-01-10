<?php 

// stellt sicher, dass sowohl Bicycle als auch Car die public function drive haben
class Car implements DriveInterface {
    protected $ps;

    public function __construct($ps) {
        $this->ps = $ps;
    }

    public function drive($location) {
        return "Ein Auto fährt mit {$this->ps}PS in {$location}.";
    }
} 

// in einer Klasse sollte kein echo oder var_dump stehen, also nichts direkt an den Browser geschickt werden

// kein schließendes php tag: mehrere leere Zeilen werden wie ein echo behandelt und somit als Leerzeilen im Browser dargestellt
// in PHP wiederum werden Leerzeilen ignoriert, und daher gibt es hier kein schließendes Tag