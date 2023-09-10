<?php
declare(strict_types=1);

namespace BaseNEncoder\Contract;

interface Scheme
{
    public function bitsPerCharacter(): int;

    /** @return array<int, string> */
    public function characterMap(): array;
}