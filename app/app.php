<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RPS.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));
    session_start();
    if (empty($_SESSION['games'])) {
        $_SESSION['games'] = array();
    }

    $app->get('/', function() use ($app) {
        return $app['twig']->render('RPSMain.html.twig', array('games' => $_SESSION['games']));
    });

    $app->post('/post', function() use ($app) {
        $game = new RPS($_POST['player1Calls'], "Rock", true);
        $game->save();
        return $app->redirect('/');
    });

    $app->get('/clearHistory', function() use ($app) {
        RPS::clearHistory();
        return $app->redirect('/');
    });

    return $app;
 ?>
