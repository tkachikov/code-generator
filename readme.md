## Code generator

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