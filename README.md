# TestDriven-Development
### 環境
WindowsHome 64bit  
Vagrant  
CentOS7  
PHP 7.2.12  
PHPStorm2018.2  
  
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

### PHPStormの設定
設定→言語&テストフレームワーク→PHP→テストフレームワーク  
Composerオートローダを使用するにチェック  
/vagrant/TestDriven-Development/vendor/autoload.php  
  
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
