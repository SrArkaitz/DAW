<?php
class Persona
{
    private static $personasEnElMundo = 0;

    public function __construct() {
        self::$personasEnElMundo++;
    }

    public function cuantasPersonas(){
        echo self::$personasEnElMundo;
    }
    public static function cuantasPersonass(){
        echo self::$personasEnElMundo;
    }
}