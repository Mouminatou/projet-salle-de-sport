
@extends('base')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
     integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Contact</title>
</head>
<body>
    <section class="contact">
        <div class="contents">
            <h2>Contactez-Nous</h2> <br>
             <p> Je prends rendez-vous pour planifier mon cours gratuit et visiter le Club 
                </p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><b></b><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3>Adresse</h3>
                        <p>10 RUE MALPART <br>59800 <br> LILLE</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><b></b><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3>Téléphone</h3>
                        <p>0745674321</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><b></b><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>fitnessclub59@hotmail.com</p>
                    </div>
                </div>
                <h2 class="txt">Connecter</h2>
                <ul class="sci">
                   <li><a href="#"><i class="fa-brands 
                   fa-x-twitter"></i></a></li>
                   <li><a href="#"><i class="fa-brands 
                   fa-facebook-f"></i></a></li>
                   <li><a href="#"><i class="fa-brands
                   fa-instagram"></i></a></li>
                   <li><a href="#"><i class="fa-brands
                   fa-linkedin-in"></i></a></li>
                  </ul>
            </div>
            <div class="contactForm">
               <form>
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Full Name</span>
              </div>
              <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Email</span>
                  </div>
                  <div class="inputBox">
                   <textarea required="required"></textarea>
                    <span>Type your Message...</span>
                      </div>
                      <div class="inputBox">
                   <input type="submit" value="Send">
                </form> 
             </div>
         </div>
         </section>
         <section class="rdv">
         <h2>Selectioner l'heure du rendez-vous:</h2>
   <form>
    <select>
        <option value="9h30">9h30</option>
        <option value="10h30">10h30</option>
        <option value="11h30">11h30</option>
        <option value="12h30">12h30</option>
        <option value="13h30">13h30</option>
        <option value="14h30">14h30</option>
        <option value="15h30">15h30</option>
        <option value="16h30">16h30</option>
        <option value="17h30">17h30</option>
        <option value="18h30">18h30</option>
        <option value="19h30">19h30</option>
    </select>
   </form>
   </section>
     <div class="rv">
        
        <input type="submit" value="prendre rendez-vous?">
     </div>
   
  </body>
</html>

@endsection
