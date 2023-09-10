<?php
declare(strict_types=1);

namespace BaseNEncoder\Scheme;

use BaseNEncoder\Contract\Scheme;

final class Base64 implements Scheme
{
    public function bitsPerCharacter(): int
    {
        return 6;
    }

    public function characterMap(): array
    {
        return [
            0b000000 => 'A',
            0b000001 => 'B',
            0b000010 => 'C',
            0b000011 => 'D',
            0b000100 => 'E',
            0b000101 => 'F',
            0b000110 => 'G',
            0b000111 => 'H',
            0b001000 => 'I',
            0b001001 => 'J',
            0b001010 => 'K',
            0b001011 => 'L',
            0b001100 => 'M',
            0b001101 => 'N',
            0b001110 => 'O',
            0b001111 => 'P',
            0b010000 => 'Q',
            0b010001 => 'R',
            0b010010 => 'S',
            0b010011 => 'T',
            0b010100 => 'U',
            0b010101 => 'V',
            0b010110 => 'W',
            0b010111 => 'X',
            0b011000 => 'Y',
            0b011001 => 'Z',
            0b011010 => 'a',
            0b011011 => 'b',
            0b011100 => 'c',
            0b011101 => 'd',
            0b011110 => 'e',
            0b011111 => 'f',
            0b100000 => 'g',
            0b100001 => 'h',
            0b100010 => 'i',
            0b100011 => 'j',
            0b100100 => 'k',
            0b100101 => 'l',
            0b100110 => 'm',
            0b100111 => 'n',
            0b101000 => 'o',
            0b101001 => 'p',
            0b101010 => 'q',
            0b101011 => 'r',
            0b101100 => 's',
            0b101101 => 't',
            0b101110 => 'u',
            0b101111 => 'v',
            0b110000 => 'w',
            0b110001 => 'x',
            0b110010 => 'y',
            0b110011 => 'z',
            0b110100 => '0',
            0b110101 => '1',
            0b110110 => '2',
            0b110111 => '3',
            0b111000 => '4',
            0b111001 => '5',
            0b111010 => '6',
            0b111011 => '7',
            0b111100 => '8',
            0b111101 => '9',
            0b111110 => '+',
            0b111111 => '/',
        ];
    }
}