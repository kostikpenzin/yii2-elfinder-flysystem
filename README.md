Flysystem adaptation for mihaildev/yii2-elfinder
===========================

Extension adaptation https://github.com/barryvdh/elfinder-flysystem-driver


## Installation

```json
    "kostikpenzin/yii2-elfinder-flysystem": "*"
```

## Customization
```php
'components' => [
...
        'ftpFs' => [
			'class' => 'creocoder\flysystem\FtpFilesystem',
			'host' => 'host',
			// 'port' => 21,
			 'username' => 'username',
             'password' => 'password',
			// 'ssl' => true,
			// 'timeout' => 60,
			 //'root' => '/',
			// 'permPrivate' => 0700,
			// 'permPublic' => 0744,
			// 'passive' => false,
			// 'transferMode' => FTP_TEXT,
		],
...
]
...
            'root' => [
				'class' => 'kostikpenzin\elfinder\flysystem\Volume',
				'url' => 'http://www.some.ru/',
                'component' => 'ftpFs'
			],

```

or

```php
...
            'root' => [
				'class' => 'kostikpenzin\elfinder\flysystem\Volume',
				'url' => 'http://www.some.ru/',
                'component' => [
                               			'class' => 'creocoder\flysystem\FtpFilesystem',
                               			'host' => 'host',
                               			// 'port' => 21,
                               			 'username' => 'username',
                                            'password' => 'password',
                               			// 'ssl' => true,
                               			// 'timeout' => 60,
                               			 //'root' => '/',
                               			// 'permPrivate' => 0700,
                               			// 'permPublic' => 0744,
                               			// 'passive' => false,
                               			// 'transferMode' => FTP_TEXT,
                               		]
			],

```

for more information on configuring the repository component see here https://github.com/creocoder/yii2-flysystem

## Useful links

https://github.com/MihailDev/yii2-elfinder/

https://github.com/barryvdh/elfinder-flysystem-driver

https://github.com/creocoder/yii2-flysystem

http://flysystem.thephpleague.com/

