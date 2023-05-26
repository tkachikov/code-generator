## Code generator

[![Memory release: 1.1](https://img.shields.io/badge/packagist-1.1-00B2EE.svg)](https://packagist.org/packages/tkachikov/memory)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)

This package generate approved codes. Example: 1224, 456678, etc.

## Installation
```sh
composer require tkachikov/code-generator
```

### Usage

#### Code generate for length 4
```shell
$code = CodeGenerator::get(4); // 0123
```

#### Code generate for length 6
```shell
$code = CodeGenerator::get(6); // 123456
```

#### Equal codes
```shell
$hasCode = '0123';
$requestCode = 123;
$equal = CodeGenerator::equals($hasCode, $requestCode); // true
```

## License

This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
