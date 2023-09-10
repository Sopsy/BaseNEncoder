<?php
declare(strict_types=1);

namespace BaseNEncoder\Scheme;

use BaseNEncoder\Contract\Scheme;

final class Base32 implements Scheme
{
    public function bitsPerCharacter(): int
    {
        return 5;
    }

    public function characterMap(): array
    {
        return [
            0b00000 => 'A',
            0b00001 => 'B',
            0b00010 => 'C',
            0b00011 => 'D',
            0b00100 => 'E',
            0b00101 => 'F',
            0b00110 => 'G',
            0b00111 => 'H',
            0b01000 => 'I',
            0b01001 => 'J',
            0b01010 => 'K',
            0b01011 => 'L',
            0b01100 => 'M',
            0b01101 => 'N',
            0b01110 => 'O',
            0b01111 => 'P',
            0b10000 => 'Q',
            0b10001 => 'R',
            0b10010 => 'S',
            0b10011 => 'T',
            0b10100 => 'U',
            0b10101 => 'V',
            0b10110 => 'W',
            0b10111 => 'X',
            0b11000 => 'Y',
            0b11001 => 'Z',
            0b11010 => '2',
            0b11011 => '3',
            0b11100 => '4',
            0b11101 => '5',
            0b11110 => '6',
            0b11111 => '7',
        ];
    }
}