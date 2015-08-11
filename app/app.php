<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_anagrams", function() use ($app) {
        $word = $_GET['word'];
        $correct_input_check = explode(", ", $word);
        $user_word = $correct_input_check[0];
        $user_list = explode(", ", $_GET['anagram_list']);
        $dummy_anagrams = new Anagram;
        $anagrams = $dummy_anagrams->checkAnagram($word, $user_list);
        return $app['twig']->render('view_anagrams.html.twig', array('word' => $user_word, 'anagrams' => $anagrams[0], 'fails' => $anagrams[1]));
    });

    return $app;

?>
