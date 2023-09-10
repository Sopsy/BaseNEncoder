<?php
declare(strict_types=1);

namespace BaseNEncoder;

use BaseNEncoder\Contract\Scheme;

use function array_shift;
use function count;
use function unpack;

final class Encoder implements Contract\Encoder
{
    public function __construct(private readonly Scheme $scheme)
    {
    }

    public function encode(string $string, bool $padded = true): string
    {
        /** @var int[] $bytes */
        $bytes = unpack('C*', $string);
        $bitCount = count($bytes) * 8;

        $buffer = 0;
        $bufferedBits = 0;
        $consumedBits = 0;
        $return = '';
        while ($bufferedBits || count($bytes) !== 0) {
            if ($bufferedBits < $this->scheme->bitsPerCharacter()) {
                $bufferedBits += 8;
                $buffer <<= 8;
                if (count($bytes) !== 0) {
                    $buffer += array_shift($bytes);
                }
            }

            if ($bitCount > $consumedBits) {
                $return .= $this->scheme->characterMap()[$buffer >> ($bufferedBits - $this->scheme->bitsPerCharacter())];
            } elseif ($padded) {
                $return .= '=';
            }

            $bufferedBits -= $this->scheme->bitsPerCharacter();
            $consumedBits += $this->scheme->bitsPerCharacter();

            $buffer &= 0b1111111111111111 >> 16 - $bufferedBits;
        }

        return $return;
    }
}