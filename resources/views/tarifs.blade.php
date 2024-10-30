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
    <title>Tarifs</title>
</head>
<body>
    <section class="section_container price_container">
<h2 class="section_header">NOS TARIFS ABONNEMENTS</h2>
<p class="section_subheader">
notre plan tarifaire comprend différents niveaux d'adhésion, chacun étant adapté à 
 répondre à différentes préférences et aspirations en matière de remise en forme

</p>
<div class="price_grid">
    <div class="price_card">
        <div class="price_card_content">
            <h4 class="Basic Plan">Forfait de base</h4>
                <h3>16£</h3>
                <p>
                    <i class="ri-checkbox-circle-line"></i>
                    Plan d'entraînement intelligent
                </p>
                <p>
                    <i class="ri-checkbox-circle-line"></i>
                    Entraînements à domicile
                </p>
                <p>
                <i class="ri-checkbox-circle-line"></i>
                  Cours collectif
                </p>
                <p>
                    <i class="ri-checkbox-circle-line"></i>
                    Entraînements video
                </p>
        </div>
        <button class="btn price_btn">J'en Profite</button>
    </div>

    <div class="price_card">
        <div class="price_card_content">
            <h4>Forfait mensuel</h4>
            <h3>25£</h3>
            <p>
                <i class="ri-checkbox-circle-line"></i>
                Salles de sport et cours ÉLITE
            </p>
            <p>
                <i class="ri-checkbox-circle-line"></i>
                Salles de sport PRO
            </p>
            <p>
                <i class="ri-checkbox-circle-line"></i>
                Musculation
            </p>
            <p>
                <i class="ri-checkbox-circle-line"></i>
                 Entrainement Croisé
            </p>
            <p>
                <i class="ri-checkbox-circle-line"></i>
            entrainement personnel
            </p>

        </div>
        <button class="btn price_btn">J'en Profite</button>

        </div>
        <div class="price_card">
        <div class="price_card_content">
            <h4>Forfait Annuel</h4>
            <h3>45£</h3>
            <p>
                <i class="ri-checkbox-circle-line"></i>
                entraînement cardio
            </p>
            <p>
                <i class="ri-checkbox-circle-line"></i>
                Entrainement Croisé
            </p>
            <p>
                <i class="ri-checkbox-circle-line"></i>
                Salles de sport PRO
            </p>
            <p>
                <i class="ri-checkbox-circle-line"></i>
                Musculation
            </p>
            <p>
                <i class="ri-checkbox-circle-line"></i>
                entrainement personnel
            </p>

        </div>
        <button class="btn price_btn">J'en Profite</button>
        </div>
     </section>
  </body>
</html>
@endsection