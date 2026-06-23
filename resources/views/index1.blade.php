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
            <div class="p-8 border border-yellow-700 rounded-xl text-center"><i class="fa-solid fa-star text-4xl gold"></i><h3 class="mt-4">Spectacle</h3></div>
            <div class="p-8 border border-yellow-700 rounded-xl text-center"><i class="fa-solid fa-microphone text-4xl gold"></i><h3 class="mt-4">Humour</h3></div>
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
        <h2 class="title-font text-center text-5xl gold mb-16">Billetterie</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="border p-10 rounded-2xl"><h3>STANDARD</h3><div class="text-5xl gold mt-4">30$</div></div>
            <div class="border-2 border-yellow-500 p-10 rounded-2xl"><h3>VIP</h3><div class="text-5xl gold mt-4">50$</div></div>
            <div class="border p-10 rounded-2xl"><h3>VVIP</h3><div class="text-5xl gold mt-4">100$</div></div>
        </div>

        <h3 class="title-font text-4xl gold text-center mt-20 mb-10">Points de vente</h3>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-8 border rounded-xl text-center"><i class="fa-solid fa-building text-4xl gold"></i><h4 class="mt-4">Synergie UP</h4></div>
            <div class="p-8 border rounded-xl text-center"><i class="fa-solid fa-hotel text-4xl gold"></i><h4 class="mt-4">Pullman Karavia</h4></div>
            <div class="p-8 border rounded-xl text-center"><i class="fa-solid fa-mobile-screen-button text-4xl gold"></i><h4 class="mt-4">Mobile Money</h4></div>
        </div>
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