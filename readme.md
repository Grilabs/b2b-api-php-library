# gri B2B - PHP Sınıfı

Gri B2B API ile işlem yapmak için PHP projelerinizde kullanabileceğiniz istek sınıfıdır.
Temel olarak Gri B2B API ile iletişiminizdeki kuralları sağlar.

### İçeriği

- [Gri_B2B.php](Gri_B2B.php): API Request Client
- [Logger.php](Logger.php): Client iletişimi sırasında hataları ve istenirse tüm iletişim verilerini saklar.
- [custom_curl_options.json](custom_curl_options.json): Client için php cURL kurallarını konfigüre etmenizi sağlar. Kullanım şekli aşağıda yer almaktadır.
- [example.php](example.php): Örnek bir API Request Client oluşturur. 

### Metotlar

- `enableDebug()`: Hata ayıklama modunu aktif eder. Hata ayıklama modunda API ile sunucu arasındaki tüm istekler kaydedilir.
- `request($url=''',$params=[],$method='POST)`: API üzerinde istek oluşturmayı sağlar. 
- `get_token()`: Duruma göre lokal verilerden veya API üzerinden `access_token` edinerek döndürür.

#### custom_curl_options.json Örneği
Key olarak kullanılan değer PHP üzerinde tanımlı sabitin INT karşılığı olarak girilmelidir. [(-->)](https://www.php.net/manual/en/curl.constants.php)

Value olarak atanması istenen değer yazılmalıdır.

```
[
    {
        "key": "98",
        "value": "128"
    }
]
```

## İletişim

Daha fazla destek için [b2b@gri.net](emailto:b2b@gri.net) e-posta adresinden iletişim kurabilirsiniz.