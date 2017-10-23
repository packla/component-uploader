<?php

use Delement\ComponentUploader\components\FileUploaderComponent;
use Delement\ComponentUploader\models\UploaderModel;

return [
    'components' => [
        'fileUploader' => [
            'class'              => FileUploaderComponent ::class,
            'mainUploadDir'      => '@app/uploads/',
            'uploaderModelClass' => UploaderModel::class,
        ],
    ],
];
