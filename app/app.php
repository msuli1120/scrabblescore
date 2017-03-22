<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/Score.php';

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
  ));

  $app->get("/", function () use ($app) {
    return $app['twig']->render('index.html.twig');
  });

  $app->post("/calc", function () use ($app) {

    $new_word = new Score;
    $result = $new_word->scoreCalc($_POST['input']);

    return $app['twig']->render('index.html.twig', array('result'=>$result));
  });

  return $app;
?>
