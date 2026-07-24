<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Performances</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body class="bg-gray-100">

    <div class="max-w-7xl mx-auto py-10 px-6">

        <div class="mb-10">

            <h1 class="text-4xl font-bold text-gray-800">
                Tableau de bord des performances
            </h1>

            <p class="text-gray-500 mt-2">
                Analyse des performances du site King Forever
            </p>

        </div>


        <!-- Cartes principales -->

        <div class="grid lg:grid-cols-5 md:grid-cols-2 gap-6">

            <div class="bg-white rounded-2xl shadow-lg p-6">

                <div class="flex justify-between items-center">

                    <div>

                        <p class="text-gray-500">
                            Visites
                        </p>

                        <h2 class="text-4xl font-bold mt-3">
                            {{ number_format($visits) }}
                        </h2>

                    </div>

                    <div
                        class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center">

                        <i class="fa-solid fa-eye text-blue-600 text-xl"></i>

                    </div>

                </div>

            </div>



            <div class="bg-green-500 text-white rounded-2xl shadow-lg p-6">

                <div class="flex justify-between items-center">

                    <div>

                        <p>WhatsApp</p>

                        <h2 class="text-4xl font-bold mt-3">
                            {{ number_format($whatsapp) }}
                        </h2>

                    </div>

                    <i class="fab fa-whatsapp text-4xl"></i>

                </div>

            </div>



            <div class="bg-blue-500 text-white rounded-2xl shadow-lg p-6">

                <div class="flex justify-between items-center">

                    <div>

                        <p>Standard</p>

                        <h2 class="text-4xl font-bold mt-3">
                            {{ number_format($standard) }}
                        </h2>

                    </div>

                    <i class="fa-solid fa-ticket text-4xl"></i>

                </div>

            </div>



            <div class="bg-yellow-500 text-white rounded-2xl shadow-lg p-6">

                <div class="flex justify-between items-center">

                    <div>

                        <p>VIP</p>

                        <h2 class="text-4xl font-bold mt-3">
                            {{ number_format($vip) }}
                        </h2>

                    </div>

                    <i class="fa-solid fa-crown text-4xl"></i>

                </div>

            </div>



            <div class="bg-red-500 text-white rounded-2xl shadow-lg p-6">

                <div class="flex justify-between items-center">

                    <div>

                        <p>VVIP</p>

                        <h2 class="text-4xl font-bold mt-3">
                            {{ number_format($vvip) }}
                        </h2>

                    </div>

                    <i class="fa-solid fa-gem text-4xl"></i>

                </div>

            </div>

        </div>


        <!-- Conversions -->

        <div class="grid md:grid-cols-4 gap-6 mt-10">

            <div class="bg-white rounded-2xl shadow-lg p-6">

                <p class="text-gray-500">
                    Conversion WhatsApp
                </p>

                <h2 class="text-5xl font-bold text-green-600 mt-5">
                    {{ $conversionWhatsapp }}%
                </h2>

            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6">

                <p class="text-gray-500">
                    Conversion Standard
                </p>

                <h2 class="text-5xl font-bold text-blue-600 mt-5">
                    {{ $conversionStandard }}%
                </h2>

            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6">

                <p class="text-gray-500">
                    Conversion VIP
                </p>

                <h2 class="text-5xl font-bold text-yellow-500 mt-5">
                    {{ $conversionVip }}%
                </h2>

            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6">

                <p class="text-gray-500">
                    Conversion VVIP
                </p>

                <h2 class="text-5xl font-bold text-red-600 mt-5">
                    {{ $conversionVvip }}%
                </h2>

            </div>

        </div>



        <!-- Tableau -->

        <div class="bg-white rounded-2xl shadow-lg mt-10 overflow-hidden">

            <div class="px-8 py-6 border-b">

                <h2 class="text-2xl font-bold">
                    Résumé des performances
                </h2>

            </div>

            <table class="w-full">

                <thead class="bg-gray-50">

                    <tr>

                        <th class="text-left px-6 py-4">
                            Action
                        </th>

                        <th class="text-center py-4">
                            Nombre
                        </th>

                        <th class="text-center py-4">
                            Conversion
                        </th>

                    </tr>

                </thead>

                <tbody>

                    <tr class="border-b">

                        <td class="px-6 py-4">
                            👁️ Visites
                        </td>

                        <td class="text-center">
                            {{ $visits }}
                        </td>

                        <td class="text-center">
                            100%
                        </td>

                    </tr>

                    <tr class="border-b">

                        <td class="px-6 py-4">
                            💬 WhatsApp
                        </td>

                        <td class="text-center">
                            {{ $whatsapp }}
                        </td>

                        <td class="text-center">
                            {{ $conversionWhatsapp }}%
                        </td>

                    </tr>

                    <tr class="border-b">

                        <td class="px-6 py-4">
                            🎫 Billets Standard
                        </td>

                        <td class="text-center">
                            {{ $standard }}
                        </td>

                        <td class="text-center">
                            {{ $conversionStandard }}%
                        </td>

                    </tr>

                    <tr class="border-b">

                        <td class="px-6 py-4">
                            👑 Billets VIP
                        </td>

                        <td class="text-center">
                            {{ $vip }}
                        </td>

                        <td class="text-center">
                            {{ $conversionVip }}%
                        </td>

                    </tr>

                    <tr>

                        <td class="px-6 py-4">
                            💎 Billets VVIP
                        </td>

                        <td class="text-center">
                            {{ $vvip }}
                        </td>

                        <td class="text-center">
                            {{ $conversionVvip }}%
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</body>

</html>
