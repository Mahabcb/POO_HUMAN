<?php

trait VieQuotidienneTrait
{
    public function manger(): string
    {
        return $this->prenom ." mange". PHP_EOL;
    }

    public function travailler(): string
    {
        return $this->prenom ." travaille". PHP_EOL;
    }

    public function dormir(): string
    {
        return $this->prenom ." dort". PHP_EOL;
    }

    public function seReposer(): string
    {
        return $this->prenom ." se repose". PHP_EOL;
    }

    public function sePromener(): string
    {
        return $this->prenom ." se promène". PHP_EOL;
    }
}