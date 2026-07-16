<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King Forever | Lubumbashi</title>

    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}

    <script src="https://cdn.tailwindcss.com"></script>

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

        .scrollbar-hide::-webkit-scrollbar{
    display:none;
}

.scrollbar-hide{
    -ms-overflow-style:none;
    scrollbar-width:none;
}

.artist-card{
    min-width:230px;
    flex-shrink:0;
    background:#181818;
    border:1px solid rgba(255,255,255,.08);
    border-radius:18px;
    padding:28px 22px;
    text-align:center;
    transition:.35s;
}

.artist-card:hover{
    transform:translateY(-8px);
    border-color:rgba(212,175,55,.45);
    box-shadow:0 15px 35px rgba(0,0,0,.35);
}

.artist-avatar{
    width:90px;
    height:90px;
    margin:auto;
    border-radius:9999px;
    background:#242424;
    display:flex;
    align-items:center;
    justify-content:center;
    border:1px solid rgba(255,255,255,.08);
}

.artist-avatar i{
    font-size:36px;
    color:#9CA3AF;
}

.artist-card h4{
    margin-top:18px;
    font-size:20px;
    font-weight:600;
    color:#fff;
}

.artist-card p{
    margin-top:6px;
    color:#9ca3af;
    font-size:14px;
}

.sponsor-slider{

    position:relative;

    width:100%;

    overflow:hidden;

    mask-image:linear-gradient(to right,
        transparent,
        black 10%,
        black 90%,
        transparent);

}

.sponsor-track{

    display:flex;

    align-items:center;

    gap:70px;

    width:max-content;

    animation:scrollSponsor 28s linear infinite;

}

.sponsor-slider:hover .sponsor-track{

    animation-play-state:paused;

}

.sponsor-item{

    width:220px;

    height:120px;

    background:rgba(255,255,255,.04);

    border:1px solid rgba(255,255,255,.08);

    border-radius:20px;

    display:flex;

    align-items:center;

    justify-content:center;

    transition:.35s;

    flex-shrink:0;

}

.sponsor-item:hover{

    transform:translateY(-8px);

    border-color:rgba(212,175,55,.45);

    box-shadow:0 20px 45px rgba(0,0,0,.35);

}

.sponsor-item img{

    max-width:140px;

    max-height:70px;

    object-fit:contain;

    filter:grayscale(100%) brightness(.9);

    opacity:.75;

    transition:.35s;

}

.sponsor-item:hover img{

    filter:none;

    opacity:1;

    transform:scale(1.08);

}

@keyframes scrollSponsor{

    from{

        transform:translateX(0);

    }

    to{

        transform:translateX(calc(-50%));

    }

}
    </style>
</head>
<body>

<nav class="fixed top-0 w-full z-50 bg-black/70 backdrop-blur border-b border-yellow-700/20">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" class="h-16" alt="Logo">
            <div>
                <h2 class="title-font text-xl gold">KING FOREVER</h2>
                <p class="text-xs text-gray-300">L'icône devenue légende en hommage à L'shi</p>
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

<section class="relative min-h-screen overflow-hidden">

    <!-- Image de fond -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/affiche.jpg') }}"
             class="w-full h-full object-cover object-center"
             alt="King Forever">

        <!-- Dégradés -->
        <div class="absolute inset-0 bg-black/75"></div>

        <div class="absolute inset-0 bg-gradient-to-r from-[#090909] via-[#090909]/60 to-transparent"></div>

        <div class="absolute inset-0 bg-gradient-to-t from-[#090909] via-transparent to-black/30"></div>

        <!-- Halo -->
        <div class="absolute -top-40 -left-20 w-[500px] h-[500px] rounded-full bg-yellow-500/10 blur-3xl"></div>

        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] rounded-full bg-red-900/20 blur-3xl"></div>

    </div>

    <!-- Contenu -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 min-h-screen flex items-center pt-28 md:pt-0">

        <div class="max-w-2xl">

            <span
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-sm uppercase tracking-[4px] text-gray-300">

                <span class="w-2 h-2 rounded-full bg-yellow-500"></span>

                Lubumbashi • RDC

            </span>

            <h1 class="title-font text-6xl md:text-8xl xl:text-9xl font-bold leading-none mt-8">

                <span class="block text-white">
                    KING
                </span>

                <span
                    class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-yellow-500 to-yellow-700">

                    FOREVER

                </span>

            </h1>

            <p class="mt-8 text-xl md:text-2xl text-gray-300 leading-relaxed">

                Une soirée unique où la musique, la danse, l'humour,
                le slam et la poésie célèbrent l'héritage intemporel
                de Michael Jackson.

            </p>

            <!-- Informations -->

           <div class="mt-10 grid grid-cols-3 gap-2">

    <!-- Date -->
                <div
                    class="flex flex-col items-center justify-center text-center gap-2 px-2 py-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur">

                    <i class="fa-regular fa-calendar text-yellow-500 text-xl"></i>

                    <div>
                        <p class="text-[10px] sm:text-xs text-gray-400 uppercase">
                            Date
                        </p>

                        <p class="text-xs sm:text-base font-medium">
                            25 Juillet 2026
                        </p>
                    </div>

                </div>

                <!-- Lieu -->
                <div
                    class="flex flex-col items-center justify-center text-center gap-2 px-2 py-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur">

                    <i class="fa-solid fa-location-dot text-yellow-500 text-xl"></i>

                    <div>
                        <p class="text-[10px] sm:text-xs text-gray-400 uppercase">
                            Lieu
                        </p>

                        <p class="text-xs sm:text-base font-medium">
                            Pullman Karavia
                        </p>
                    </div>

                </div>

                <!-- Heure -->
                <div
                    class="flex flex-col items-center justify-center text-center gap-2 px-2 py-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur">

                    <i class="fa-regular fa-clock text-yellow-500 text-xl"></i>

                    <div>
                        <p class="text-[10px] sm:text-xs text-gray-400 uppercase">
                            Heure
                        </p>

                        <p class="text-xs sm:text-base font-medium">
                            17h30
                        </p>
                    </div>

                </div>

            </div>
            <!-- Boutons -->

            <div class="mt-12 flex justify-center">
                <a href="#tickets"
                    class="inline-flex items-center gap-3 px-8 py-4 rounded-full border border-yellow-500/50 bg-white/10 backdrop-blur-md shadow-lg shadow-yellow-500/20 text-white font-semibold hover:bg-yellow-500 hover:text-black hover:scale-105 transition-all duration-300">

                    <i class="fa-solid fa-ticket"></i>
                    Réserver maintenant

                </a>
            </div>

        </div>

    </div>

    <!-- Indicateur de scroll -->

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2">

        <a href="#apropos"
            class="flex flex-col items-center gap-2 text-gray-400 hover:text-white transition">

            <span class="text-xs uppercase tracking-[4px]">
                Défiler
            </span>

            <div
                class="w-6 h-10 rounded-full border border-white/20 flex justify-center">

                <div class="w-1 h-3 bg-yellow-500 rounded-full mt-2 animate-bounce"></div>

            </div>

        </a>

    </div>

</section>

<section class="py-24 bg-gradient-to-b from-[#0b0b0b] to-[#111]">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">

            <span class="uppercase tracking-[4px] text-yellow-600 text-sm">
                Plus que
            </span>

            <h2 class="title-font text-4xl md:text-5xl mt-3">
                Compte à rebours
            </h2>

            <p class="text-gray-400 mt-4 max-w-xl mx-auto">
                Le rendez-vous approche. Réservez votre place dès maintenant.
            </p>

        </div>

        <div class="grid grid-cols-4 gap-2 md:gap-6">

            <div class="count-card">
                <h3 id="days" class="count-number">00</h3>
                <span class="count-label">Jours</span>
            </div>

            <div class="count-card">
                <h3 id="hours" class="count-number">00</h3>
                <span class="count-label">Heures</span>
            </div>

            <div class="count-card">
                <h3 id="minutes" class="count-number">00</h3>
                <span class="count-label">Minutes</span>
            </div>

            <div class="count-card">
                <h3 id="seconds" class="count-number">00</h3>
                <span class="count-label">Secondes</span>
            </div>

        </div>

    </div>

</section>

<section id="apropos" class="py-24 burgundy">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <img src="{{ asset('images/michael.jpg') }}" class="rounded-2xl shadow-2xl">
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

<section class="py-24">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="title-font text-5xl gold mb-8">Pourquoi participer ?</h2>
        <p class="text-lg leading-8 text-gray-300">
            En participant à King Forever Lubumbashi, découvrez un spectacle où la danse, la musique, l'humour et le slam s'unissent pour rendre un hommage exceptionnel au Roi de la Pop.
            Une soirée immersive qui vous fera revivre la magie de Michael Jackson.
        </p>
    </div>
</section>

<section id="artistes" class="py-24 bg-[#111]">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-20">
            <span class="uppercase tracking-[5px] text-yellow-600 text-sm">
                King Forever
            </span>

            <h2 class="title-font text-5xl text-white mt-3">
                Les artistes à l'affiche
            </h2>

            <p class="text-gray-400 mt-4 max-w-2xl mx-auto">
                Une programmation exceptionnelle mêlant musique, humour, slam,
                acrobaties et spectacle.
            </p>
        </div>

        <!-- MUSIQUE -->
        <div class="mb-16">

            <div class="flex items-center gap-4 mb-8">
                <div class="w-10 h-[2px] bg-yellow-600"></div>
                <h3 class="title-font text-3xl text-white">Musique</h3>
            </div>

            <div class="flex gap-6 overflow-x-auto pb-4 scrollbar-hide">

                <div class="artist-card">
                    <div class="artist-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h4>L Cam's</h4>
                    <p>Artiste musicien</p>
                </div>

                <div class="artist-card">
                    <div class="artist-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h4>Chorale Française</h4>
                    <p>Chorale</p>
                </div>

                <div class="artist-card">
                    <div class="artist-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h4>Kenny</h4>
                    <p>Artiste interprète</p>
                </div>

            </div>

        </div>

        <!-- HUMOUR -->
        <div class="mb-16">

            <div class="flex items-center gap-4 mb-8">
                <div class="w-10 h-[2px] bg-yellow-600"></div>
                <h3 class="title-font text-3xl text-white">Humour</h3>
            </div>

            <div class="flex gap-6 overflow-x-auto pb-4 scrollbar-hide">

                <div class="artist-card">
                    <div class="artist-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h4>Marcus Joe</h4>
                    <p>Humoriste</p>
                </div>

                <div class="artist-card">
                    <div class="artist-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h4>Narcisse Kokodioko</h4>
                    <p>Humoriste</p>
                </div>

                <div class="artist-card">
                    <div class="artist-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h4>El Pumbu</h4>
                    <p>Humoriste</p>
                </div>

            </div>

        </div>

        <!-- SLAM -->
        <div class="mb-16">

            <div class="flex items-center gap-4 mb-8">
                <div class="w-10 h-[2px] bg-yellow-600"></div>
                <h3 class="title-font text-3xl text-white">Slam & Poésie</h3>
            </div>

            <div class="flex gap-6 overflow-x-auto pb-4 scrollbar-hide">

                <div class="artist-card">
                    <div class="artist-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h4>Jonathan</h4>
                    <p>Slameur</p>
                </div>

            </div>

        </div>

        <!-- ACROBATES -->
        <div class="mb-16">

            <div class="flex items-center gap-4 mb-8">
                <div class="w-10 h-[2px] bg-yellow-600"></div>
                <h3 class="title-font text-3xl text-white">Acrobates</h3>
            </div>

            <div class="flex gap-6 overflow-x-auto pb-4 scrollbar-hide">

                <div class="artist-card">
                    <div class="artist-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h4>Groupe Lushi</h4>
                    <p>Troupe d'acrobates</p>
                </div>

            </div>

        </div>

        <!-- HÔTE -->
        <div>

            <div class="flex items-center gap-4 mb-8">
                <div class="w-10 h-[2px] bg-yellow-600"></div>
                <h3 class="title-font text-3xl text-white">Hôte de l'événement</h3>
            </div>

            <div class="flex gap-6 overflow-x-auto pb-4 scrollbar-hide">

                <div class="artist-card border-yellow-500/40">
                    <div class="artist-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h4>Spectacle NJ</h4>
                    <p>Maître de cérémonie</p>
                </div>

            </div>

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

        <div class="grid md:grid-cols-3 gap-8">

    <!-- STANDARD -->
    <div class="bg-white/5 border border-yellow-500/20 rounded-2xl p-10 text-center hover:border-yellow-500 transition duration-300">

        <h3 class="title-font text-3xl uppercase tracking-[6px] text-yellow-400">
            Standard
        </h3>

        <p class="text-6xl font-bold text-yellow-400 my-8">
            30$
        </p>

        <a href="https://wa.me/243972973716?text=Bonjour%20je%20souhaite%20r%C3%A9server%20un%20billet%20STANDARD%20pour%20King%20Forever."
            target="_blank"
            class="inline-block bg-yellow-500 hover:bg-yellow-400 text-black font-semibold px-8 py-3 rounded-full transition">
            Réserver
        </a>

    </div>

    <!-- VIP -->
    <div class="bg-gradient-to-b from-yellow-500/10 to-black border-2 border-yellow-500 rounded-2xl p-10 text-center shadow-2xl shadow-yellow-500/10 scale-105">

        <span class="inline-block bg-yellow-500 text-black text-xs px-3 py-1 rounded-full uppercase mb-5">
            Le plus demandé
        </span>

        <h3 class="title-font text-3xl uppercase tracking-[6px] text-yellow-400">
            VIP
        </h3>

        <p class="text-6xl font-bold text-yellow-400 my-8">
            50$
        </p>

        <a href="https://wa.me/243972973716?text=Bonjour%20je%20souhaite%20r%C3%A9server%20un%20billet%20VIP%20pour%20King%20Forever."
            target="_blank"
            class="inline-block bg-yellow-500 hover:bg-yellow-400 text-black font-semibold px-8 py-3 rounded-full transition">
            Réserver
        </a>

    </div>

    <!-- VVIP -->
    <div class="bg-white/5 border border-yellow-500/20 rounded-2xl p-10 text-center hover:border-yellow-500 transition duration-300">

        <h3 class="title-font text-3xl uppercase tracking-[6px] text-yellow-400">
            VVIP
        </h3>

        <p class="text-6xl font-bold text-yellow-400 my-8">
            100$
        </p>

        <a href="https://wa.me/243972973716?text=Bonjour%20je%20souhaite%20r%C3%A9server%20un%20billet%20VVIP%20pour%20King%20Forever."
            target="_blank"
            class="inline-block bg-yellow-500 hover:bg-yellow-400 text-black font-semibold px-8 py-3 rounded-full transition">
            Réserver
        </a>

    </div>

</div>
        <h3 class="title-font text-4xl gold text-center mt-20 mb-10">Points de vente</h3>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="sale-point-card p-8 text-center">
                <i class="fa-solid fa-building text-4xl gold"></i>
                <h4 class="mt-4 font-semibold">Le Boucher</h4>
                <p class="text-white/50 text-sm mt-2">Complexe la plage</p>
            </div>

            <div class="sale-point-card p-8 text-center">
                <i class="fa-solid fa-building text-4xl gold"></i>
                <h4 class="mt-4 font-semibold">La Casa Mia</h4>
                <p class="text-white/50 text-sm mt-2">Avenue Lumumba</p>
            </div>

            <div class="sale-point-card p-8 text-center">
                <i class="fa-solid fa-building text-4xl gold"></i>
                <h4 class="mt-4 font-semibold">Hewabora lounge</h4>
                <p class="text-white/50 text-sm mt-2">Batiment Hypnose centre ville</p>
            </div>

            <div class="sale-point-card p-8 text-center">
                <i class="fa-solid fa-building text-4xl gold"></i>
                <h4 class="mt-4 font-semibold">Synergie UP</h4>
                <p class="text-white/50 text-sm mt-2">Bureau principal</p>
            </div>
            {{-- <div class="sale-point-card p-8 text-center">
                <i class="fa-solid fa-hotel text-4xl gold"></i>
                <h4 class="mt-4 font-semibold">Pullman Karavia</h4>
                <p class="text-white/50 text-sm mt-2">Sur place</p>
            </div> --}}
            <div class="sale-point-card p-8 text-center">
                <i class="fa-solid fa-mobile-screen-button text-4xl gold"></i>
                <h4 class="mt-4 font-semibold">Mobile Money</h4>
                <p class="text-white/50 text-sm mt-2">+243 972 973 716</p>
            </div>
        </div>

        <p class="text-center text-white/50 text-sm mt-12">
            <i class="fa-solid fa-circle-info gold mr-2"></i>
            Places limitées — réservez dès maintenant via nos points de vente ou par téléphone.
        </p>

    </div>
</section>

<section class="py-24 bg-[#0d0d0d] overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">

            <span class="uppercase tracking-[4px] text-yellow-600 text-sm">
                Ils nous font confiance
            </span>

            <h2 class="title-font text-5xl mt-3">
                Sponsors & Partenaires
            </h2>

            <p class="text-gray-400 mt-4">
                Merci à nos partenaires qui contribuent à faire de King Forever
                une expérience inoubliable.
            </p>

        </div>

    </div>

    <div class="sponsor-slider">

        <div class="sponsor-track">

            <!-- Logos -->

            <div class="sponsor-item">
                <img src="{{ asset('images/sponsor1.png') }}">
            </div>

            <div class="sponsor-item">
                <img src="{{ asset('images/sponsor2.png') }}">
            </div>

            <div class="sponsor-item">
                <img src="{{ asset('images/sponsor3.png') }}">
            </div>

            <div class="sponsor-item">
                <img src="{{ asset('images/sponsor4.png') }}">
            </div>

            <!-- duplication -->

            <div class="sponsor-item">
                <img src="{{ asset('images/sponsor1.png') }}">
            </div>

            <div class="sponsor-item">
                <img src="{{ asset('images/sponsor2.png') }}">
            </div>

            <div class="sponsor-item">
                <img src="{{ asset('images/sponsor3.png') }}">
            </div>

            <div class="sponsor-item">
                <img src="{{ asset('images/sponsor4.png') }}">
            </div>

        </div>

    </div>

</section>

<section id="contact" class="py-24 burgundy">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- Texte -->

            <div>

                <span class="uppercase tracking-[4px] text-yellow-400 text-sm">
                    Contact
                </span>

                <h2 class="title-font text-5xl mt-4">
                    Réservez votre place dès aujourd'hui
                </h2>

                <p class="text-gray-300 mt-6 leading-8 text-lg">
                    Pour toute réservation, demande d'information ou partenariat,
                    notre équipe est à votre disposition.
                    Contactez-nous directement par téléphone ou via nos réseaux sociaux.
                </p>

                <a href="https://wa.me/243972973716"
                    target="_blank"
                    class="inline-flex items-center gap-3 mt-10 bg-gradient-to-r from-yellow-500 to-yellow-600 text-black font-semibold px-8 py-4 rounded-full hover:scale-105 transition">

                    <i class="fab fa-whatsapp text-xl"></i>

                    Discuter sur WhatsApp

                </a>

            </div>

            <!-- Cartes -->

            <div class="space-y-6">

                <div class="contact-card">

                    <div class="contact-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>

                    <div>

                        <span class="contact-label">
                            Téléphone
                        </span>

                        <p class="contact-value">
                            +243 972 973 716
                        </p>

                    </div>

                </div>

                <div class="contact-card">

                    <div class="contact-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div>

                        <span class="contact-label">
                            Email
                        </span>

                        <p class="contact-value">
                            contact@kingforever.cd
                        </p>

                    </div>

                </div>

                <div class="contact-card">

                    <div>

                        <span class="contact-label block mb-5">
                            Suivez-nous
                        </span>

                        <div class="flex gap-4">

                            <a href="https://web.facebook.com/kingforevermjdrc?locale=fr_FR" class="social-btn">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="https://www.instagram.com/kingforevermjdrc/" class="social-btn">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="https://www.tiktok.com/@kingforevermj" class="social-btn">
                                <i class="fab fa-tiktok"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<footer class="py-12 border-t border-yellow-800/30">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
        <div class="flex items-center gap-4">
            <img src="{{ asset('images/logo.png') }}" class="h-16">
            <div>
                <h3 class="title-font text-2xl gold">KING FOREVER</h3>
                <p class="text-gray-400">L'icône devenue légende en hommage à L'shi</p>
            </div>
        </div>

        <div class="text-center md:text-right mt-6 md:mt-0 text-gray-300">
            <p>&copy; {{ date('Y') }} Synergie UP. Tous droits réservés.</p>
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
