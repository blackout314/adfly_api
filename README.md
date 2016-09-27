# adfly_api
---
[adfly](http://adf.ly/?id=6900742) api wrapper | [payout](https://adf.ly/rates)

```php
$KEY    = 'YOUR-KEY';
$UID    = 'YOUR-UID';
$adfly  = new adfly\Api($KEY,$UID);

$link   = $adfly->__get('http://www.google.com');
```
