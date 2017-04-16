<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 09/01/2017
 * Time: 11:45
 */

if ($app->environment() !== 'production')
{
    //don't want to render this unless it's LIVE
    return;
}

\Cryslo\Core\Api\Google\Analytics::getHtmlIfIpAllowed('UA-61673839-5');