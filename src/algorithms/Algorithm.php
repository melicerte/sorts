<?php

interface Algorithm {
    public function sort(array $array): array;

    public function getName(): string;
}