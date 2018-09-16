# Codeigniter TCMB Döviz Kurları
Codeigniter ile TCMB Döviz Kurlarını Çekme

## Gereksinimler
1.  PHP 5.6+
2.  CodeIgniter 3+

## Kurulum
```php
$this->load->library('Doviz');
```

## Kullanım
```php
$viewData->dolar_alis           = $this->doviz->kurAlis('USD');
$viewData->euro_alis            = $this->doviz->kurAlis('EUR');
$viewData->dolar_satis          = $this->doviz->kurSatis('USD');
$viewData->euro_satis           = $this->doviz->kurSatis('EUR');

$viewData->dolar_efektif_alis   = $this->doviz->kurAlis('USD', \Doviz::TYPE_EFEKTIFALIS);
$viewData->euro_efektif_alis    = $this->doviz->kurAlis('EUR', \Doviz::TYPE_EFEKTIFALIS);
$viewData->dolar_efektif_satis  = $this->doviz->kurSatis('USD', \Doviz::TYPE_EFEKTIFSATIS);
$viewData->euro_efektif_satis   = $this->doviz->kurSatis('EUR', \Doviz::TYPE_EFEKTIFSATIS);
```

## Cache Kullanımı
```php
$kurlar = 'kurlar.json';
if (file_exists($kurlar)) {
    $this->doviz->setData(json_decode(file_get_contents($kurlar), true));
} else {
    file_put_contents($kurlar, json_encode($this->doviz->getData()));
}

$kur = json_decode(file_get_contents($kurlar));
$viewData->dolar_alis           = $kur->currencies->USD->ForexBuying;
$viewData->euro_alis            = $kur->currencies->EUR->ForexBuying;
$viewData->dolar_satis          = $kur->currencies->USD->ForexSelling;
$viewData->euro_satis           = $kur->currencies->EUR->ForexSelling;

$viewData->dolar_efektif_alis   = $kur->currencies->USD->BanknoteBuying;
$viewData->euro_efektif_alis    = $kur->currencies->EUR->BanknoteBuying;
$viewData->dolar_efektif_satis  = $kur->currencies->USD->BanknoteSelling;
$viewData->euro_efektif_satis   = $kur->currencies->EUR->BanknoteSelling;
```
