<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;#AbstractControllerを利用する時に必要
use Symfony\Component\HttpFoundation\Response;#テキスト出力する為のインスタンス(Response)を生成するときに必要
use Symfony\Component\Routing\Annotation\Route; #アノテーションでルートを指定するときに必要

class HelloController extends AbstractController #AbstractControllerを継承してクラスを定義する
{
  /**
   * @Route("/hello", name="hello")
   */
  public function index()
  {
    $result = '<html><body>';
    $result .= '<h1>Subscribed Services</h1>';
    $result .= '<ol>';
    $arr = $this->getSubscribedServices();
    foreach ($arr as $key => $value) {
      $result .= '<li>' .  $key . '</li>';
    }
    $result .= '</ol>';
    $result .= '</body></html>';
    return new Response($result);
  }
}