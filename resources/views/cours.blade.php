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
    <title>Document</title>
</head>
<body>
    <section class="section_container join_container">
        <h2 class="section_header">NOS COURS</h2>
        <p class="section_subheader">
            Decouvrez nos Master Class et Small Group par secteurs
            Ajustez votre training plan en visant l'accessiblité
        </p>
        <div class="join_image">
            <img src="tre.jpg" alt="join">
            <div class="join_grid">
                <div class="join_card">
                    <span><i class="ri-user-star-fill"></i></span>
                    <div class="join_card_content">
                        <h4>PILATES</h4>
                        <p>Discipline douce à pratiquer sans modération </p>
                    </div>
                </div>
                <div class="join_card">
                    <span><i class="ri-vidicon-fill"></i></span>
                    <div class="join_card_content">
                        <h4>BODY PUMP</h4>
                        <p>PUMP le secret des muscles fins et athlétiques </p>
                    </div>
                </div>
                <div class="join_card">
                    <span><i class="ri-building-line"></i></span>
                    <div class="join_card_content">
                        <h4>CX WORK</h4>
                        <p> 30MNS pour renforcer vos abdominaux</p>
                    </div>
                </div>
                <div class="join_card">
                    <span><i class="ri-vidicon-fill"></i></span>
                    <div class="join_card_content">
                        <h4>FUNCTIONNAL</h4>
                        <p> inspiré des mouvements de votre quotidien</p>
                    </div>
                </div>
                <div class="join_card">
                    <span><i class="ri-vidicon-fill"></i></span>
                    <div class="join_card_content">
                        <h4>BOXE ET ROP</h4>
                        <p>Bruler jusqu'a 800 calories </p>
                    </div>
                </div>
                <div class="join_card">
                    <span><i class="ri-vidicon-fill"></i></span>
                    <div class="join_card_content">
                        <h4>BOXE</h4>
                        <p>Enfiler vos gants</p>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
@endsection 