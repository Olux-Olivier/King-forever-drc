<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King Forever | Lubumbashi</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;800&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root{
            --gold:#D4AF37;
            --burgundy:#5C0A18;
            --black:#080808;
        }

        html{scroll-behavior:smooth;}
        body{
            font-family:'Montserrat',sans-serif;
            background:var(--black);
            color:white;
        }

        .title-font{font-family:'Cinzel',serif;}
        .gold{color:var(--gold);}
        .bg-gold{background:var(--gold);}
        .burgundy{background:var(--burgundy);}

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
            border:2px solid var(--gold);
            background:linear-gradient(160deg,#1a1508 0%,#0f0d06 45%,#12100a 100%);
            box-shadow:0 0 60px rgba(212,175,55,.12);
        }

        @media(min-width:768px){
            .ticket-card--featured{transform:scale(1.04);}
            .ticket-card--featured:hover{transform:scale(1.04) translateY(-6px);}
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
            color:var(--gold);
        }

        .ticket-badge--popular{
            background:var(--gold);
            color:var(--black);
            border-color:var(--gold);
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
            background:var(--burgundy);
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
            color:rgba(255,255,255,.65);
            line-height:1.5;
        }

        .ticket-feature i{
            margin-top:.2rem;
            font-size:.75rem;
            color:var(--gold);
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
            transition:background .3s ease,color .3s ease;
        }

        .ticket-cta--outline{
            border:1px solid rgba(212,175,55,.5);
            color:var(--gold);
        }

        .ticket-cta--outline:hover{background:rgba(212,175,55,.1);}

        .ticket-cta--solid{
            background:var(--gold);
            color:var(--black);
        }

        .ticket-cta--solid:hover{background:#e6c555;}

        .ticket-cta--premium{
            background:linear-gradient(135deg,var(--gold),#b8942e);
            color:var(--black);
        }

        .ticket-cta--premium:hover{
            background:linear-gradient(135deg,#e6c555,var(--gold));
        }

        .sale-point-card{
            border:1px solid rgba(212,175,55,.25);
            border-radius:1rem;
            transition:transform .3s ease,border-color .3s ease;
        }

        .sale-point-card:hover{
            transform:translateY(-4px);
            border-color:rgba(212,175,55,.5);
        }
    </style>
</head>
<body>

<nav class="fixed top-0 w-full z-50 bg-black/70 backdrop-blur border-b border-yellow-700/20">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" class="h-12" alt="Logo">
            <div>
                <h2 class="title-font text-xl gold">KING FOREVER</h2>
                <p class="text-xs text-gray-300">L'icône devenue légende</p>
            </div>
        </div>

        <div class="hidden md:flex gap-8">
            <a href="#apropos">À propos</a>
            <a href="#programme">Programme</a>
            <a href="#tickets">Billetterie</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</nav>

<section class="relative min-h-screen flex items-center bg-cover bg-center"
style="background-image:url('{{ asset('images/affiche.jpg') }}')">
    <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-[#5C0A18]/70"></div>

    <div class="relative max-w-7xl mx-auto px-6">
        <div class="max-w-3xl">
            <span class="uppercase tracking-[8px] gold">Lubumbashi • RDC</span>

            <h1 class="title-font text-6xl md:text-8xl font-bold mt-4 gold">
                KING FOREVER
            </h1>

            <p class="text-2xl mt-5">
                Une célébration exceptionnelle de l'héritage de Michael Jackson
            </p>

            <div class="mt-8 space-y-3 text-lg">
                <p><i class="fa-solid fa-calendar-days gold"></i> 25 Juillet 2026</p>
                <p><i class="fa-solid fa-location-dot gold"></i> Pullman Karavia - Chapiteau</p>
                <p><i class="fa-solid fa-clock gold"></i> 17h30</p>
            </div>

            <div class="mt-10 flex flex-wrap gap-4">
                <a href="#tickets" class="bg-gold text-black px-8 py-4 rounded-full font-semibold">
                    Réserver maintenant
                </a>

                <a href="#apropos" class="border border-yellow-600 px-8 py-4 rounded-full">
                    Découvrir
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="title-font text-5xl gold mb-12">Compte à rebours</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="p-8 border border-yellow-700 rounded-xl"><h3 id="days" class="text-5xl gold">00</h3><p>Jours</p></div>
            <div class="p-8 border border-yellow-700 rounded-xl"><h3 id="hours" class="text-5xl gold">00</h3><p>Heures</p></div>
            <div class="p-8 border border-yellow-700 rounded-xl"><h3 id="minutes" class="text-5xl gold">00</h3><p>Minutes</p></div>
            <div class="p-8 border border-yellow-700 rounded-xl"><h3 id="seconds" class="text-5xl gold">00</h3><p>Secondes</p></div>
        </div>
    </div>
</section>

<section id="apropos" class="py-24 burgundy">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <img src="{{ asset('images/mj.jpg') }}" class="rounded-2xl shadow-2xl">
        <div>
            <h2 class="title-font text-5xl gold mb-6">À propos</h2>
            <p class="leading-8">
                KING FOREVER est un spectacle hommage prestigieux réunissant musique, danse,
                humour, poésie et émotions autour de l'univers intemporel de Michael Jackson.
            </p>
        </div>
    </div>
</section>

<section class="py-24">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="title-font text-5xl gold mb-8">Un hommage exceptionnel</h2>
        <p class="text-lg leading-8 text-gray-300">
            Une soirée immersive célébrant l'artiste qui a marqué des générations à travers son talent,
            sa créativité et son impact culturel mondial.
        </p>
    </div>
</section>

<section id="programme" class="py-24 bg-[#111]">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="title-font text-center text-5xl gold mb-16">Programme</h2>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="p-8 border border-yellow-700 rounded-xl text-center"><i class="fa-solid fa-music text-4xl gold"></i><h3 class="mt-4">Musique Live</h3></div>
            <div class="p-8 border border-yellow-700 rounded-xl text-center"><i class="fa-solid fa-masks-theater text-4xl gold"></i><h3 class="mt-4">Spectacle</h3></div>
            <div class="p-8 border border-yellow-700 rounded-xl text-center"><i class="fa-solid fa-face-laugh text-4xl gold"></i><h3 class="mt-4">Humour</h3></div>
            <div class="p-8 border border-yellow-700 rounded-xl text-center"><i class="fa-solid fa-feather-pointed text-4xl gold"></i><h3 class="mt-4">Slam & Poésie</h3></div>
        </div>
    </div>
</section>

<section class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="title-font text-center text-5xl gold mb-16">Artistes & Invités</h2>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center"><img src="{{ asset('images/artiste1.jpg') }}" class="w-48 h-48 rounded-full mx-auto object-cover"><h3 class="mt-4">Artiste 1</h3></div>
            <div class="text-center"><img src="{{ asset('images/artiste2.jpg') }}" class="w-48 h-48 rounded-full mx-auto object-cover"><h3 class="mt-4">Artiste 2</h3></div>
            <div class="text-center"><img src="{{ asset('images/artiste3.jpg') }}" class="w-48 h-48 rounded-full mx-auto object-cover"><h3 class="mt-4">Artiste 3</h3></div>
            <div class="text-center"><img src="{{ asset('images/artiste4.jpg') }}" class="w-48 h-48 rounded-full mx-auto object-cover"><h3 class="mt-4">Artiste 4</h3></div>
        </div>
    </div>
</section>

<section id="tickets" class="py-24 burgundy">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">
            <span class="ticket-badge mb-5">Réservation officielle</span>
            <h2 class="title-font text-5xl gold mb-4">Billetterie</h2>
            <p class="text-white/60 max-w-xl mx-auto">
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
                <p class="text-white/50 text-sm mt-2">Accès au spectacle complet</p>

                <div class="mt-6 flex items-end gap-1">
                    <span class="title-font text-5xl gold font-bold">30</span>
                    <span class="text-2xl gold mb-1">$</span>
                </div>
                <p class="text-white/50 text-xs mt-1 uppercase tracking-wider">par personne</p>

                <hr class="ticket-divider">

                <ul class="space-y-3 flex-1">
                    <li class="ticket-feature"><i class="fa-solid fa-check"></i><span>Accès général au chapiteau</span></li>
                    <li class="ticket-feature"><i class="fa-solid fa-check"></i><span>Placement libre</span></li>
                    <li class="ticket-feature"><i class="fa-solid fa-check"></i><span>Spectacle complet</span></li>
                </ul>

                <div class="ticket-perforation"></div>

                <a href="#contact" class="ticket-cta ticket-cta--outline mt-8">Réserver</a>
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
                <p class="text-white/60 text-sm mt-2">L'expérience recommandée</p>

                <div class="mt-6 flex items-end gap-1">
                    <span class="title-font text-5xl gold font-bold">50</span>
                    <span class="text-2xl gold mb-1">$</span>
                </div>
                <p class="text-white/50 text-xs mt-1 uppercase tracking-wider">par personne</p>

                <hr class="ticket-divider">

                <ul class="space-y-3 flex-1">
                    <li class="ticket-feature"><i class="fa-solid fa-check"></i><span>Accès prioritaire à l'entrée</span></li>
                    <li class="ticket-feature"><i class="fa-solid fa-check"></i><span>Placement réservé</span></li>
                    <li class="ticket-feature"><i class="fa-solid fa-check"></i><span>Espace VIP dédié</span></li>
                    <li class="ticket-feature"><i class="fa-solid fa-check"></i><span>Boisson offerte</span></li>
                </ul>

                <div class="ticket-perforation"></div>

                <a href="#contact" class="ticket-cta ticket-cta--solid mt-8">Réserver VIP</a>
            </article>

            <article class="ticket-card p-8 md:p-10">
                <div class="flex items-center justify-between mb-6">
                    <span class="ticket-badge">Exclusif</span>
                    <i class="fa-solid fa-gem text-2xl gold opacity-80"></i>
                </div>

                <h3 class="title-font text-2xl tracking-widest">VVIP</h3>
                <p class="text-white/50 text-sm mt-2">Le summum de l'expérience</p>

                <div class="mt-6 flex items-end gap-1">
                    <span class="title-font text-5xl gold font-bold">100</span>
                    <span class="text-2xl gold mb-1">$</span>
                </div>
                <p class="text-white/50 text-xs mt-1 uppercase tracking-wider">par personne</p>

                <hr class="ticket-divider">

                <ul class="space-y-3 flex-1">
                    <li class="ticket-feature"><i class="fa-solid fa-check"></i><span>Accès exclusif first row</span></li>
                    <li class="ticket-feature"><i class="fa-solid fa-check"></i><span>Lounge VIP privé</span></li>
                    <li class="ticket-feature"><i class="fa-solid fa-check"></i><span>Service concierge</span></li>
                    <li class="ticket-feature"><i class="fa-solid fa-check"></i><span>Cadeau souvenir officiel</span></li>
                </ul>

                <div class="ticket-perforation"></div>

                <a href="#contact" class="ticket-cta ticket-cta--premium mt-8">Réserver VVIP</a>
            </article>

        </div>

        <h3 class="title-font text-4xl gold text-center mt-20 mb-10">Points de vente</h3>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="sale-point-card p-8 text-center">
                <i class="fa-solid fa-building text-4xl gold"></i>
                <h4 class="mt-4 font-semibold">Synergie UP</h4>
                <p class="text-white/50 text-sm mt-2">Bureau principal</p>
            </div>
            <div class="sale-point-card p-8 text-center">
                <i class="fa-solid fa-hotel text-4xl gold"></i>
                <h4 class="mt-4 font-semibold">Pullman Karavia</h4>
                <p class="text-white/50 text-sm mt-2">Sur place</p>
            </div>
            <div class="sale-point-card p-8 text-center">
                <i class="fa-solid fa-mobile-screen-button text-4xl gold"></i>
                <h4 class="mt-4 font-semibold">Mobile Money</h4>
                <p class="text-white/50 text-sm mt-2">Paiement en ligne</p>
            </div>
        </div>

        <p class="text-center text-white/50 text-sm mt-12">
            <i class="fa-solid fa-circle-info gold mr-2"></i>
            Places limitées — réservez dès maintenant via nos points de vente ou par téléphone.
        </p>

    </div>
</section>

<section class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="title-font text-center text-5xl gold mb-16">Sponsors & Partenaires</h2>
        <div class="grid md:grid-cols-4 gap-10">
            <img src="{{ asset('images/sponsor1.png') }}" class="h-20 mx-auto">
            <img src="{{ asset('images/sponsor2.png') }}" class="h-20 mx-auto">
            <img src="{{ asset('images/sponsor3.png') }}" class="h-20 mx-auto">
            <img src="{{ asset('images/sponsor4.png') }}" class="h-20 mx-auto">
        </div>
    </div>
</section>

<section id="contact" class="py-24 burgundy">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="title-font text-5xl gold mb-8">Contact</h2>

        <p class="mb-4"><i class="fa-solid fa-phone gold"></i> +243 972 973 716</p>
        <p class="mb-8"><i class="fa-solid fa-envelope gold"></i> contact@kingforever.cd</p>

        <div class="flex justify-center gap-8 text-3xl">
            <a href="#"><i class="fab fa-facebook-f gold"></i></a>
            <a href="#"><i class="fab fa-instagram gold"></i></a>
            <a href="#"><i class="fab fa-tiktok gold"></i></a>
            <a href="#"><i class="fab fa-youtube gold"></i></a>
            <a href="#"><i class="fab fa-linkedin gold"></i></a>
        </div>
    </div>
</section>

<footer class="py-12 border-t border-yellow-800/30">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
        <div class="flex items-center gap-4">
            <img src="{{ asset('images/logo.png') }}" class="h-14">
            <div>
                <h3 class="title-font text-2xl gold">KING FOREVER</h3>
                <p class="text-gray-400">L'icône devenue légende</p>
            </div>
        </div>

        <div class="text-center md:text-right mt-6 md:mt-0">
            <p>Lubumbashi - RDC</p>
            <p>+243 972 973 716</p>
            <p>contact@kingforever.cd</p>
        </div>
    </div>
</footer>

<script>
const eventDate = new Date("July 25, 2026 17:30:00").getTime();
setInterval(() => {
const now = new Date().getTime();
const distance = eventDate - now;
document.getElementById('days').innerHTML = Math.floor(distance/(1000*60*60*24));
document.getElementById('hours').innerHTML = Math.floor((distance%(1000*60*60*24))/(1000*60*60));
document.getElementById('minutes').innerHTML = Math.floor((distance%(1000*60*60))/(1000*60));
document.getElementById('seconds').innerHTML = Math.floor((distance%(1000*60))/1000);
},1000);
</script>

</body>
</html>