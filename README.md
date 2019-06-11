# テスト駆動開発
## 環境
Windows10 Home 64bit  
Vagrant  
CentOS7  
PHP 7.2.12  
PhpStorm2018.2  
  
/TestDriven-Development  
  
composer.jsonの作成  
```
{
  "require-dev": {
    "phpunit/phpunit": "7.*"
  }
}
```
  
`
composer install --dev
`

## PhpStormの設定
### 設定→言語&テストフレームワーク→PHP  
![](https://user-images.githubusercontent.com/36433535/48313946-23d2a600-e606-11e8-8f42-e6d9dc5781bf.png)  
![](https://user-images.githubusercontent.com/36433535/48313952-2503d300-e606-11e8-8179-34536c28221f.png)
![](https://user-images.githubusercontent.com/36433535/48313951-2503d300-e606-11e8-8b70-a13b082796ba.png)
![](https://user-images.githubusercontent.com/36433535/48313950-246b3c80-e606-11e8-82b2-b9e23a958158.png)  
### 設定→言語&テストフレームワーク→PHP→テストフレームワーク  
Composerオートローダを使用するにチェック  
`
/vagrant/TestDriven-Development/vendor/autoload.php 
`
![](https://user-images.githubusercontent.com/36433535/48313949-246b3c80-e606-11e8-9573-e31c0ecc3160.png)  
![](https://user-images.githubusercontent.com/36433535/48313948-246b3c80-e606-11e8-9f14-1e10cf49521c.png)
![](https://user-images.githubusercontent.com/36433535/48313947-246b3c80-e606-11e8-8aae-599fca7a7784.png)
```
<?php
class Test extends \PHPUnit\Framework\TestCase
{
    public function test_operationTest()
    {
        $this->assertEquals(2,2);
    }
}
```
`
composer dumpautoload
`
```
  "autoload": {
    "psr-4": {
      "Money\\": "src/Money"
    }
  }
```

## 参考  
[テスト駆動開発をPHPでやってみる](https://github.com/kunit/tdd-by-example-php)
