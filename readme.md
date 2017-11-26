## 用法

```
composer require composer require hongli/hasher
```

或者在你的 `composer.json` 的 require 部分中添加:
```
 "hongli/hasher": "1.0.*"
```

下载完毕之后,直接配置 `app/config.php` 的 `providers`:
```
//Illuminate\Hashing\HashServiceProvider::class,
Hongli\Hasher\MD5HasherServiceProvider::class,
```
就是替换原来的 Hash,对于 Facades ,也是一样的:
```
//'Hash' => Illuminate\Support\Facades\Hash::class,
'Hash' => Hongli\Hasher\Facades\Hash::class,
```
这样就大功告成了。在 Laravel 5.1 , 5.2 , 5.3 , 5.4 , 5.5 这几个版本测试通过,有任何问题可以直接提 issue 或 pr。
