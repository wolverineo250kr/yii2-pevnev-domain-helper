<?php

namespace wolverineo250kr\helpers\domain;

use Yii;
use yii\base\Object;

class DomainHelper extends Object
{
    static public function getBase(): string
    {
        return preg_replace("/^([a-zA-Z0-9].*\.)?([a-zA-Z0-9][a-zA-Z0-9-]{1,61}[a-zA-Z0-9]\.[a-zA-Z.]{2,})$/", '$2', Yii::$app->request->hostName);
    }

	static public function getScheme(): string
    {
        return (Yii::$app->request->isSecureConnection) ? 'https' : 'http';
    }
}
