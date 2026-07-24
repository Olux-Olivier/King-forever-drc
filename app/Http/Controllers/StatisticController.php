<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    /**
     * Enregistre une visite du site
     */
    public function visit()
    {
        $exists = Statistic::where('event', 'visit')
        ->where('ip_address', request()->ip())
        ->where('user_agent', request()->userAgent())
        ->whereDate('created_at', today())
        ->exists();

        if (!$exists) {
            Statistic::create([
                'event'      => 'visit',
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ]);
        }

        return view('index1'); // ou la vue de ton site
    }

    /**
     * Clic sur le bouton WhatsApp
     */
    public function whatsapp()
    {
        $exists = Statistic::where('event', 'whatsapp')
        ->where('ip_address', request()->ip())
        ->where('user_agent', request()->userAgent())
        ->whereDate('created_at', today())
        ->exists();

        if (!$exists) {
            Statistic::create([
                'event'      => 'whatsapp',
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ]);
        }

        return redirect('https://wa.me/243972973716?text='.urlencode(
            'Bonjour, je souhaite discuter avec vous concernant votre événement King Forever.'
        ));
    }

    /**
     * Clic sur le billet Standard
     */
    public function standard()
    {
        $exists = Statistic::where('event', 'ticket_standard')
        ->where('ip_address', request()->ip())
        ->where('user_agent', request()->userAgent())
        ->whereDate('created_at', today())
        ->exists();

        if (!$exists) {
            Statistic::create([
                'event'      => 'ticket_standard',
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ]);
        }

        return redirect('https://wa.me/243972973716?text='.urlencode(
            'Bonjour, je souhaite réserver un billet STANDARD pour King Forever.'
        ));
    }

    /**
     * Clic sur le billet VIP
     */
    public function vip()
    {
        $exists = Statistic::where('event', 'ticket_vip')
        ->where('ip_address', request()->ip())
        ->where('user_agent', request()->userAgent())
        ->whereDate('created_at', today())
        ->exists();

        if (!$exists) {
            Statistic::create([
                'event'      => 'ticket_vip',
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ]);
        }

        return redirect('https://wa.me/243972973716?text='.urlencode(
            'Bonjour, je souhaite réserver un billet VIP pour King Forever.'
        ));
    }

    /**
     * Clic sur le billet VVIP
     */
    public function vvip()
    {
        $exists = Statistic::where('event', 'ticket_vvip')
        ->where('ip_address', request()->ip())
        ->where('user_agent', request()->userAgent())
        ->whereDate('created_at', today())
        ->exists();

        if (!$exists) {
            Statistic::create([
                'event'      => 'ticket_vvip',
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ]);
        }

        return redirect('https://wa.me/243972973716?text='.urlencode(
            'Bonjour, je souhaite réserver un billet VVIP pour King Forever.'
        ));
    }

    /**
     * Tableau de bord des statistiques
     */
    public function dashboard()
    {
        $visits = Statistic::where('event', 'visit')->count();

        $whatsapp = Statistic::where('event', 'whatsapp')->count();

        $standard = Statistic::where('event', 'ticket_standard')->count();

        $vip = Statistic::where('event', 'ticket_vip')->count();

        $vvip = Statistic::where('event', 'ticket_vvip')->count();

        $conversionWhatsapp = $visits > 0 ? round(($whatsapp / $visits) * 100, 2) : 0;
        $conversionStandard = $visits > 0 ? round(($standard / $visits) * 100, 2) : 0;
        $conversionVip = $visits > 0 ? round(($vip / $visits) * 100, 2) : 0;
        $conversionVvip = $visits > 0 ? round(($vvip / $visits) * 100, 2) : 0;

        return view('dashboard.performances', compact(
            'visits',
            'whatsapp',
            'standard',
            'vip',
            'vvip',
            'conversionWhatsapp',
            'conversionStandard',
            'conversionVip',
            'conversionVvip'
        ));
    }
}
