## Компонент для загрузки изображения

## Конфигурация
```php
return [
    'components' => [
        'fileUploader' => [
            'class'              => 'Класс компонента',
            'mainUploadDir'      => 'директория, куда загружаются файлы',
            'uploaderModelClass' => 'Класс модели, в которой находится вся логика',
        ],
    ],
];
```

## Использование

### Загрузка изображения
```php
Yii::$app->fileUploader->upload(array $config): UploadedFileInterface - объект загруженного файла
```
где,
```
$config - массив конфигураций, состоящий из ключей:
instance - объект класса yii\web\UploadedFile,
entityType - тип сущности(на основе него строится директория сохранения файла),
entityId - идентификатор сущности,
``` 

### Получение пути к файлу
```php
Yii::$app->fileUploader->getFilePath(array $config): string - путь к файлу
```
где, 
```
$config - массив конфигураций, состоящий из ключей:
fileName - название файла,
entityType - тип сущности,
entityId - идентификатор сущности,
```