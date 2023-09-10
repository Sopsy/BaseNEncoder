<?php
declare(strict_types=1);

namespace BaseNEncoder\Scheme;

use BaseNEncoder\Contract\Scheme;

final class Base32Hex implements Scheme
{
    public function bitsPerCharacter(): int
    {
        return 5;
    }

    public function characterMap(): array
    {
        return [
            0b00000 => '0',
            0b00001 => '1',
            0b00010 => '2',
            0b00011 => '3',
            0b00100 => '4',
            0b00101 => '5',
            0b00110 => '6',
            0b00111 => '7',
            0b01000 => '8',
            0b01001 => '9',
            0b01010 => 'A',
            0b01011 => 'B',
            0b01100 => 'C',
            0b01101 => 'D',
            0b01110 => 'E',
            0b01111 => 'F',
            0b10000 => 'G',
            0b10001 => 'H',
            0b10010 => 'I',
            0b10011 => 'J',
            0b10100 => 'K',
            0b10101 => 'L',
            0b10110 => 'M',
            0b10111 => 'N',
            0b11000 => 'O',
            0b11001 => 'P',
            0b11010 => 'Q',
            0b11011 => 'R',
            0b11100 => 'S',
            0b11101 => 'T',
            0b11110 => 'U',
            0b11111 => 'V',
        ];
    }
}