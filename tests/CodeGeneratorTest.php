<?php
declare(strict_types=1);

namespace tests;

use Tkachikov\CodeGenerator;
use PHPUnit\Framework\TestCase;

final class CodeGeneratorTest extends TestCase
{
    /**
     * @return array
     */
    public static function lengths(): array
    {
        return [
            [1],
            [2],
            [3],
            [4],
            [5],
            [6],
        ];
    }

    /**
     * @return array
     */
    public static function codes(): array
    {
        return [
            ['0123', '0123'],
            ['0432', '432'],
            ['0456', 456],
            ['123123', 123123],
            ['02345', 2345],
            ['123123', '123123'],
            ['123123', 123123],
        ];
    }

    /**
     * @return array
     */
    public static function codesNotEquals(): array
    {
        return [
            ['0123', '1234'],
            ['234555', 23455],
            ['345678', '034567'],
        ];
    }

    /**
     * @description testing correct generate codes
     *
     * @dataProvider lengths
     *
     * @param int $length
     *
     * @return void
     */
    public function testCodeGeneration(int $length): void
    {
        $code = CodeGenerator::get($length);
        $this->assertSame(strlen($code), $length);
    }

    /**
     * @description testing equals generate code and request code
     *
     * @dataProvider codes
     *
     * @param string     $hasCode
     * @param int|string $equalCode
     *
     * @return void
     */
    public function testEqualCodes(string $hasCode, int|string $equalCode): void
    {
        $this->assertTrue(CodeGenerator::equals($hasCode, $equalCode));
    }

    /**
     * @description testing not equals codes
     *
     * @dataProvider codesNotEquals
     *
     * @param string     $hasCode
     * @param int|string $equalCode
     *
     * @return void
     */
    public function testNotEqualCodes(string $hasCode, int|string $equalCode): void
    {
        $this->assertFalse(CodeGenerator::equals($hasCode, $equalCode));
    }
}