# adfly_api
adfly api wrapper

```php
$KEY    = 'YOUR-KEY';
$UID    = 'YOUR-UID';
$adfly  = new adfly\Api($KEY,$UID);

$link   = $adfly->__get('http://www.google.com');
```