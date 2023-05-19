<?php
declare(strict_types=1);

namespace Tkachikov;

class CodeGenerator
{
    /**
     * @param int $length
     *
     * @return string
     */
    public static function get(int $length = 4): string
    {
        return self::prepare(rand(0, 10 ** $length - 1), $length);
    }

    /**
     * @param int|string $code
     * @param int        $length
     * @return string
     */
    public static function prepare(int|string $code, int $length = 4): string
    {
        return str_pad((string) $code, $length, '0', STR_PAD_LEFT);
    }

    /**
     * @param string     $hasCode
     * @param int|string $equalsCode
     *
     * @return bool
     */
    public static function equals(string $hasCode, int|string $equalsCode): bool
    {
        return $hasCode === self::prepare($equalsCode, strlen($hasCode));
    }
}