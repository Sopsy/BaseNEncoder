<?php
declare(strict_types=1);

namespace BaseNEncoder\Scheme;

use BaseNEncoder\Contract\Scheme;

final class Base16 implements Scheme
{
    public function bitsPerCharacter(): int
    {
        return 4;
    }

    public function characterMap(): array
    {
        return [
            0b0000 => '0',
            0b0001 => '1',
            0b0010 => '2',
            0b0011 => '3',
            0b0100 => '4',
            0b0101 => '5',
            0b0110 => '6',
            0b0111 => '7',
            0b1000 => '8',
            0b1001 => '9',
            0b1010 => 'A',
            0b1011 => 'B',
            0b1100 => 'C',
            0b1101 => 'D',
            0b1110 => 'E',
            0b1111 => 'F',
        ];
    }
}