@extends('base')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <title>Web Design Mastery</title>
</head>
<body>
   <header class="section_container header_container">
    <div class="header_content">
        <span class="bg_blur"></span>
        <span class="bg_blur header_blur"></span>
        <h4>MEILLEUR FITNESS DE LA VILLE</h4><br>
        <h1><span>METS</span> TOI EN FORME</h1><br>
<p>
    Libérez votre potentiel et embarquez pour un voyage versun monde plus fort. 
    Vous êtes plus en forme et plus confiant. Inscrivez-vous dès maintenant à « Make Your Body Shape »
    et soyez témoin de l'incroyable transformation dont votre corps est capable !
</p><br>
    <button class="btn">Commencer</button>
</div>
    <div class="header_image">
        <img src="fitt6.png" alt="header" />
    </div>
</header>
<section class="section_container explore_container">
    <div class="explore_header">
        <h2 class="section_header">DECOUVREZ NOTRE PROGRAMME</h2>
        <div class="explore_nav">
            <span><i class="ri-arrow-left-line"></i></span>
            <span><i class="ri-arrow-right-line"></i></span>
        </div>
    </div>
<div class="explore_grid">
    <div class="explore_card">
        <span><i class="ri-boxing-fill"></i></span>
        <h4>Force</h4>
<p>
embrassez l'essence de la force en explorant ses différentes
dimensions physique, mentale et émotionnelle.
</p>
<a href="#">Rejoindre Maintenant<i class="ri-arrow-right-line"></i></a>
    </div>
    <div class="explore_card">
             <span><i class="ri-heart-pulse-fill"></i></span>
             <h4>Forme Physique</h4>
             <p>
                 Il comprend une gamme d'activités qui améliorent la santé, la force,
                 flexibilité et bien-être général.
        </p>
        <a href="#">Rejoindre Maintenant<i class= "ri-arrow-right-line"></i></a>
    </div>
    <div class="explore_card">
        <span><i class="ri-run-line"></i></span>
        <h4>Perte de Graisse</h4>
        <p>
            Grâce à une combinaison de routines d'entraînement et de conseils d'experts, nous allons
            vous donner les moyens d'atteindre vos objectifs.
        </p>
        <a href="#">Rejoindre Maintenant <i class="ri-arrow-right-line"></i> </a>
    </div>
    <div class="explore_card">
        <span><i class="ri-shopping-basket-fill"></i></span>
        <h4>Prise de Poids</h4>
        <p>
            Conçu pour les particuliers, notre programme offre une approche efficace pour gagner
            poids de manière durable.
        </p>
        <a href="#">Rejoindre Maintenant<i class="ri-arrow-right-line"></i></a>
    </div>
</section>
<section class="section_container class_container">
    <div class="class_image">
        <span class="bg_blur"></span>
        <img src="fa2.jpg" alt="class" class="class_img-1">
        <img src="fa1.jpg" alt="class" class="class_img-2">
    </div>
    <div class="class_content">
        <h2 class="section_header">THE CLASS YOU WILL GET HERE</h2>
        <p>
            led by our team of expert and motivational instructors, "The Class you will Get
            here" is a high-energy,results-driven session that combines a perfect 
            blend of cardio,strength training and functional
            exercices.Each class is carefully curated to keep your engaged and challenged
            ensuring you never hit a plateau in your fitness endeavors
        </p><br>
        <button class="btn">Reserver un Cours</button>
        </div>
    </section>
  </body>
</html>

@endsection