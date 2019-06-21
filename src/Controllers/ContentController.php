<?php
/**
 * Created by PhpStorm.
 * User: tsmekal
 * Date: 6/21/2019
 * Time: 7:54 AM
 */

namespace MemosPlugin\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        return $twig->render('MemosPlugin::content.memos');
    }
}