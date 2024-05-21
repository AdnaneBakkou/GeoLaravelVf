<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use App\Models\Gallery;
use App\Models\Biodiversite;
use App\Models\Chefchaouen;
use App\Models\Geologie;
use App\Models\Geosite;
use App\Models\Maison;
use App\Models\MaisonMusee;
use App\Models\Publication;
use App\Models\Sport;
use App\Services\TranslationService;
use Illuminate\Http\Request;

class IndexController extends Controller
{

   public function gallerie()
    {
        $gallerie = Gallery::first();
        $categories = collect($gallerie->images)->groupBy('category');

        return view('gallerie',compact("gallerie","categories"));
    }
    
    public function index()
    {
        return view('index');  // Assurez-vous que la vue 'welcome.blade.php' existe dans 'resources/views'
    }
    
    public function maisonMusee()
    {
        $musee = MaisonMusee::first();
        return view('maisonMusee',compact("musee"));  // Assurez-vous que la vue 'welcome.blade.php' existe dans 'resources/views'
    }

    public function biodiversite()
    {
        $biodiversite = Biodiversite::first();
        return view('biodiversite', compact('biodiversite'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function geologie()
    {
        $publications = Publication::all();
        $geologie = Geologie::first();
        return view('geologie', compact('geologie','publications'));
    }

    public function maison()
    {
        $maison = Maison::first();
        return view('maison', compact('maison'));
    }

    public function presentation()
    {
        $presentation = Presentation::first();
        return view('presentation',compact('presentation'));
    }

    public function sport()
    {
        $sport = Sport::first();
        return view('sport', compact('sport'));
    }
    public function chefchaouen()
    {
        $chefchaouen = Chefchaouen::first();
        return view('chefchaouen', compact('chefchaouen'));
    }
    public function geositeChefchaouen()
    {
        return view('geositeChefchaouen');
    }
    public function geosites()
    {
        $geosite = Geosite::first();
        return view('geosites', compact("geosite"));
    }
    public function publication()
    {
        $publications = Publication::all();
        return view('publication', compact('publications'));
    }
}
