<?php

class character {

    private int $health;
    private int $mana;
    private stuff $stuff;

    public function __construct() {
        
    }

    public function __destruct() {
        
    }

    public function chat(string $var): string {
        
    }

}

class orc extends character {

    private int $health = 1000;

    public function useHammer(): bool {
        
    }

    public function useSword() {
        
    }

}

class stuff {

    private string $head;
    private string $body;
    private string $weapon;

    public function __construct() {
        
    }

    public function view() {
        
    }

    public function __destruct() {
        
    }

}
