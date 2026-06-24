<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King Forever | Lubumbashi</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;800&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Montserrat',sans-serif;
            background:#080808;
        }

        .title-font{
            font-family:'Cinzel',serif;
        }

        .gold{
            color:#D4AF37;
        }

        .bg-gold{
            background:#D4AF37;
        }

        .ticket-card{
            position:relative;
            display:flex;
            flex-direction:column;
            background:linear-gradient(160deg,#161616 0%,#0c0c0c 55%,#111 100%);
            border:1px solid rgba(212,175,55,.22);
            border-radius:1.25rem;
            overflow:visible;
            transition:transform .35s ease,border-color .35s ease,box-shadow .35s ease;
        }

        .ticket-card:hover{
            transform:translateY(-6px);
            border-color:rgba(212,175,55,.45);
            box-shadow:0 24px 48px rgba(0,0,0,.45),0 0 0 1px rgba(212,175,55,.08);
        }

        .ticket-card--featured{
            border:2px solid #D4AF37;
            background:linear-gradient(160deg,#1a1508 0%,#0f0d06 45%,#12100a 100%);
            box-shadow:0 0 60px rgba(212,175,55,.12);
        }

        @media(min-width:768px){
            .ticket-card--featured{
                transform:scale(1.04);
            }

            .ticket-card--featured:hover{
                transform:scale(1.04) translateY(-6px);
            }
        }

        .ticket-badge{
            display:inline-block;
            font-size:.65rem;
            font-weight:600;
            letter-spacing:.2em;
            text-transform:uppercase;
            padding:.35rem .85rem;
            border-radius:9999px;
            border:1px solid rgba(212,175,55,.35);
            color:#D4AF37;
        }

        .ticket-badge--popular{
            background:#D4AF37;
            color:#080808;
            border-color:#D4AF37;
        }

        .ticket-divider{
            border:none;
            border-top:1px dashed rgba(212,175,55,.25);
            margin:1.75rem 0;
        }

        .ticket-perforation{
            position:absolute;
            left:50%;
            bottom:5.5rem;
            transform:translateX(-50%);
            width:calc(100% - 2rem);
            height:1px;
            background:repeating-linear-gradient(
                90deg,
                transparent,
                transparent 6px,
                rgba(212,175,55,.2) 6px,
                rgba(212,175,55,.2) 12px
            );
        }

        .ticket-perforation::before,
        .ticket-perforation::after{
            content:'';
            position:absolute;
            top:50%;
            width:1.25rem;
            height:1.25rem;
            background:#080808;
            border-radius:50%;
            transform:translateY(-50%);
        }

        .ticket-perforation::before{left:-1.85rem;}
        .ticket-perforation::after{right:-1.85rem;}

        .ticket-feature{
            display:flex;
            align-items:flex-start;
            gap:.75rem;
            font-size:.9rem;
            color:#b3b3b3;
            line-height:1.5;
        }

        .ticket-feature i{
            margin-top:.2rem;
            font-size:.75rem;
            color:#D4AF37;
        }

        .ticket-cta{
            display:block;
            width:100%;
            margin-top:auto;
            padding:.95rem 1.5rem;
            border-radius:.75rem;
            font-weight:600;
            font-size:.875rem;
            letter-spacing:.05em;
            text-transform:uppercase;
            text-align:center;
            transition:background .3s ease,color .3s ease,transform .2s ease;
        }

        .ticket-cta--outline{
            border:1px solid rgba(212,175,55,.5);
            color:#D4AF37;
        }

        .ticket-cta--outline:hover{
            background:rgba(212,175,55,.1);
        }

        .ticket-cta--solid{
            background:#D4AF37;
            color:#080808;
        }

        .ticket-cta--solid:hover{
            background:#e6c555;
        }

        .ticket-cta--premium{
            background:linear-gradient(135deg,#D4AF37,#b8942e);
            color:#080808;
        }

        .ticket-cta--premium:hover{
            background:linear-gradient(135deg,#e6c555,#D4AF37);
        }
    </style>
</head>
<body class="text-white">

<!-- NAVBAR -->
<nav class="fixed top-0 w-full z-50 backdrop-blur-md bg-black/40 border-b border-yellow-600/20">
    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center h-20">

            <a href="#" class="title-font text-2xl font-bold gold">
                KING FOREVER
            </a>

            <div class="hidden md:flex gap-8">
                <a href="#apropos">À propos</a>
                <a href="#programme">Programme</a>
                <a href="#tickets">Billetterie</a>
                <a href="#contact">Contact</a>
            </div>

        </div>

    </div>
</nav>

<!-- HERO -->
<section
class="relative min-h-screen flex items-center bg-cover bg-center"
style="background-image:url('{{ asset('images/affiche.jpg') }}')">

    <div class="absolute inset-0 bg-black/80"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        <div class="max-w-3xl">

            <span class="uppercase tracking-[8px] text-yellow-500">
                Lubumbashi
            </span>

            <h1 class="title-font text-6xl md:text-8xl font-bold mt-4 gold">
                KING FOREVER
            </h1>

            <p class="text-2xl mt-4">
                L'icône devenue légende
            </p>

            <div class="mt-8 space-y-2 text-lg">

                <p><i class="fa-solid fa-calendar-days gold"></i> 25 Juillet 2026</p>
                <p><i class="fa-solid fa-location-dot gold"></i> Pullman Karavia - Chapiteau</p>
                <p><i class="fa-solid fa-clock gold"></i> 17h30</p>

            </div>

            <div class="mt-10 flex gap-4">

                <a href="#tickets"
                   class="bg-gold text-black px-8 py-4 rounded-full font-semibold">
                    Réserver un billet
                </a>

                <a href="#apropos"
                   class="border border-yellow-500 px-8 py-4 rounded-full">
                    Découvrir
                </a>

            </div>

        </div>

    </div>

</section>

<!-- COMPTE À REBOURS -->
<section class="py-20 bg-black">

    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="title-font text-4xl gold mb-10">
            Compte à rebours
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

            <div class="border border-yellow-600 p-8 rounded-xl">
                <h3 id="days" class="text-5xl font-bold gold">00</h3>
                <p>Jours</p>
            </div>

            <div class="border border-yellow-600 p-8 rounded-xl">
                <h3 id="hours" class="text-5xl font-bold gold">00</h3>
                <p>Heures</p>
            </div>

            <div class="border border-yellow-600 p-8 rounded-xl">
                <h3 id="minutes" class="text-5xl font-bold gold">00</h3>
                <p>Minutes</p>
            </div>

            <div class="border border-yellow-600 p-8 rounded-xl">
                <h3 id="seconds" class="text-5xl font-bold gold">00</h3>
                <p>Secondes</p>
            </div>

        </div>

    </div>

</section>

<!-- A PROPOS -->
<section id="apropos" class="py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-12 items-center">

            <img src="{{ asset('images/mj.jpg') }}"
                 class="rounded-2xl shadow-2xl">

            <div>

                <h2 class="title-font text-5xl gold mb-6">
                    À propos
                </h2>

                <p class="text-gray-300 leading-8">
                    King Forever est un spectacle hommage exceptionnel
                    célébrant l'héritage artistique de Michael Jackson à
                    travers la musique, le spectacle, l'humour,
                    le slam et la poésie.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- PROGRAMME -->
<section id="programme" class="py-24 bg-[#111]">

    <div class="max-w-7xl mx-auto px-6">

        <h2 class="title-font text-center text-5xl gold mb-16">
            Programme
        </h2>

        <div class="grid md:grid-cols-4 gap-8">

            <div class="border border-yellow-700 p-8 rounded-xl text-center">
                <i class="fa-solid fa-music text-4xl gold"></i>
                <h3 class="text-2xl mt-4">Musique</h3>
            </div>

            <div class="border border-yellow-700 p-8 rounded-xl text-center">
                <i class="fa-solid fa-masks-theater text-4xl gold"></i>
                <h3 class="text-2xl mt-4">Spectacle</h3>
            </div>

            <div class="border border-yellow-700 p-8 rounded-xl text-center">
                <i class="fa-solid fa-face-laugh text-4xl gold"></i>
                <h3 class="text-2xl mt-4">Humour</h3>
            </div>

            <div class="border border-yellow-700 p-8 rounded-xl text-center">
                <i class="fa-solid fa-feather-pointed text-4xl gold"></i>
                <h3 class="text-2xl mt-4">Slam & Poésie</h3>
            </div>

        </div>

    </div>

</section>

<!-- BILLETTERIE -->
<section id="tickets" class="py-24 bg-gradient-to-b from-[#080808] via-[#0d0b07] to-[#080808]">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">
            <span class="ticket-badge mb-5">Réservation officielle</span>
            <h2 class="title-font text-5xl gold mb-4">
                Billetterie
            </h2>
            <p class="text-gray-400 max-w-xl mx-auto">
                Sélectionnez la formule qui correspond à votre expérience King Forever.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 items-stretch">

            <article class="ticket-card p-8 md:p-10">
                <div class="flex items-center justify-between mb-6">
                    <span class="ticket-badge">Entrée</span>
                    <i class="fa-solid fa-ticket text-2xl gold opacity-60"></i>
                </div>

                <h3 class="title-font text-2xl tracking-widest">STANDARD</h3>
                <p class="text-gray-500 text-sm mt-2">Accès au spectacle complet</p>

                <div class="mt-6 flex items-end gap-1">
                    <span class="title-font text-5xl gold font-bold">30</span>
                    <span class="text-2xl gold mb-1">$</span>
                </div>
                <p class="text-gray-500 text-xs mt-1 uppercase tracking-wider">par personne</p>

                <hr class="ticket-divider">

                <ul class="space-y-3 flex-1">
                    <li class="ticket-feature">
                        <i class="fa-solid fa-check"></i>
                        <span>Accès général au chapiteau</span>
                    </li>
                    <li class="ticket-feature">
                        <i class="fa-solid fa-check"></i>
                        <span>Placement libre</span>
                    </li>
                    <li class="ticket-feature">
                        <i class="fa-solid fa-check"></i>
                        <span>Spectacle complet</span>
                    </li>
                </ul>

                <div class="ticket-perforation"></div>

                <a href="#contact" class="ticket-cta ticket-cta--outline mt-8">
                    Réserver
                </a>
            </article>

            <article class="ticket-card ticket-card--featured p-8 md:p-10">
                <div class="absolute top-0 right-0">
                    <span class="ticket-badge ticket-badge--popular rounded-none rounded-bl-xl rounded-tr-xl px-4 py-2 text-xs">
                        Populaire
                    </span>
                </div>

                <div class="flex items-center justify-between mb-6">
                    <span class="ticket-badge">Premium</span>
                    <i class="fa-solid fa-crown text-2xl gold"></i>
                </div>

                <h3 class="title-font text-2xl tracking-widest gold">VIP</h3>
                <p class="text-gray-400 text-sm mt-2">L'expérience recommandée</p>

                <div class="mt-6 flex items-end gap-1">
                    <span class="title-font text-5xl gold font-bold">50</span>
                    <span class="text-2xl gold mb-1">$</span>
                </div>
                <p class="text-gray-500 text-xs mt-1 uppercase tracking-wider">par personne</p>

                <hr class="ticket-divider">

                <ul class="space-y-3 flex-1">
                    <li class="ticket-feature">
                        <i class="fa-solid fa-check"></i>
                        <span>Accès prioritaire à l'entrée</span>
                    </li>
                    <li class="ticket-feature">
                        <i class="fa-solid fa-check"></i>
                        <span>Placement réservé</span>
                    </li>
                    <li class="ticket-feature">
                        <i class="fa-solid fa-check"></i>
                        <span>Espace VIP dédié</span>
                    </li>
                    <li class="ticket-feature">
                        <i class="fa-solid fa-check"></i>
                        <span>Boisson offerte</span>
                    </li>
                </ul>

                <div class="ticket-perforation"></div>

                <a href="#contact" class="ticket-cta ticket-cta--solid mt-8">
                    Réserver VIP
                </a>
            </article>

            <article class="ticket-card p-8 md:p-10">
                <div class="flex items-center justify-between mb-6">
                    <span class="ticket-badge">Exclusif</span>
                    <i class="fa-solid fa-gem text-2xl gold opacity-80"></i>
                </div>

                <h3 class="title-font text-2xl tracking-widest">VVIP</h3>
                <p class="text-gray-500 text-sm mt-2">Le summum de l'expérience</p>

                <div class="mt-6 flex items-end gap-1">
                    <span class="title-font text-5xl gold font-bold">100</span>
                    <span class="text-2xl gold mb-1">$</span>
                </div>
                <p class="text-gray-500 text-xs mt-1 uppercase tracking-wider">par personne</p>

                <hr class="ticket-divider">

                <ul class="space-y-3 flex-1">
                    <li class="ticket-feature">
                        <i class="fa-solid fa-check"></i>
                        <span>Accès exclusif first row</span>
                    </li>
                    <li class="ticket-feature">
                        <i class="fa-solid fa-check"></i>
                        <span>Lounge VIP privé</span>
                    </li>
                    <li class="ticket-feature">
                        <i class="fa-solid fa-check"></i>
                        <span>Service concierge</span>
                    </li>
                    <li class="ticket-feature">
                        <i class="fa-solid fa-check"></i>
                        <span>Cadeau souvenir officiel</span>
                    </li>
                </ul>

                <div class="ticket-perforation"></div>

                <a href="#contact" class="ticket-cta ticket-cta--premium mt-8">
                    Réserver VVIP
                </a>
            </article>

        </div>

        <p class="text-center text-gray-500 text-sm mt-12">
            <i class="fa-solid fa-circle-info gold mr-2"></i>
            Places limitées — réservez dès maintenant via nos points de vente ou par téléphone.
        </p>

    </div>

</section>

<!-- CONTACT -->
<section id="contact" class="py-24 bg-[#111]">

    <div class="max-w-4xl mx-auto px-6 text-center">

        <h2 class="title-font text-5xl gold mb-8">
            Contact
        </h2>

        <p class="text-xl mb-4">
            +243 972 973 716
        </p>

        <p>
            contact@kingforever.cd
        </p>

    </div>

</section>

<!-- FOOTER -->
<footer class="py-10 text-center border-t border-yellow-700/20">

    <h3 class="title-font text-2xl gold">
        KING FOREVER
    </h3>

    <p class="mt-4 text-gray-400">
        © 2026 Tous droits réservés
    </p>

</footer>

<script>
const eventDate = new Date("July 25, 2026 17:30:00").getTime();

setInterval(() => {

    const now = new Date().getTime();
    const distance = eventDate - now;

    document.getElementById('days').innerHTML =
        Math.floor(distance/(1000*60*60*24));

    document.getElementById('hours').innerHTML =
        Math.floor((distance%(1000*60*60*24))/(1000*60*60));

    document.getElementById('minutes').innerHTML =
        Math.floor((distance%(1000*60*60))/(1000*60));

    document.getElementById('seconds').innerHTML =
        Math.floor((distance%(1000*60))/1000);

},1000);
</script>

</body>
</html>
