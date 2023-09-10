<?php
declare(strict_types=1);

namespace BaseNEncoder\Contract;

interface Encoder
{
    public function encode(string $string, bool $padded = true): string;
}