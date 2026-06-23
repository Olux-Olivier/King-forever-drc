<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King Forever | Lubumbashi</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

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

                <p>📅 25 Juillet 2026</p>
                <p>📍 Pullman Karavia - Chapiteau</p>
                <p>🕠 17h30</p>

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

            <div class="border border-yellow-700 p-8 rounded-xl">
                <h3 class="text-2xl">🎵 Musique</h3>
            </div>

            <div class="border border-yellow-700 p-8 rounded-xl">
                <h3 class="text-2xl">🎭 Spectacle</h3>
            </div>

            <div class="border border-yellow-700 p-8 rounded-xl">
                <h3 class="text-2xl">😂 Humour</h3>
            </div>

            <div class="border border-yellow-700 p-8 rounded-xl">
                <h3 class="text-2xl">✍️ Slam & Poésie</h3>
            </div>

        </div>

    </div>

</section>

<!-- BILLETTERIE -->
<section id="tickets" class="py-24">

    <div class="max-w-7xl mx-auto px-6">

        <h2 class="title-font text-center text-5xl gold mb-16">
            Billetterie
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="border border-yellow-700 p-10 rounded-2xl">
                <h3 class="text-3xl mb-4">STANDARD</h3>
                <div class="text-5xl gold">30$</div>
            </div>

            <div class="border-2 border-yellow-500 p-10 rounded-2xl">
                <h3 class="text-3xl mb-4">VIP</h3>
                <div class="text-5xl gold">50$</div>
            </div>

            <div class="border border-yellow-700 p-10 rounded-2xl">
                <h3 class="text-3xl mb-4">VVIP</h3>
                <div class="text-5xl gold">100$</div>
            </div>

        </div>

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
