<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Géoparc de chefchaouen</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg">
    <!-- CSS here -->
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<style>
        .custom-translate {
            position: relative;
            display: inline-block;
        }

        .translate-toggle {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            padding: 5px 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .translate-toggle img {
            width: 20px;
            height: auto;
            margin-right: 5px;
        }

        .translate-options {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            z-index: 1;
            top: 100%;
            left: 0;
            width: 100%;
        }

        .translate-options .translate-option {
            padding: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .translate-options .translate-option:hover {
            background-color: #e0e0e0;
        }

        .translate-options .translate-option img {
            width: 20px;
            height: auto;
            margin-right: 5px;
        }

        .banner-area.rtl {
            direction: rtl;
        }

        /* Hide Google Translate tooltips */
        .goog-te-banner-frame.skiptranslate, 
        .goog-te-gadget-icon, 
        .goog-tooltip, 
        .goog-te-balloon-frame {
            display: none !important;
        }

        /* Prevent Google Translate from changing element's layout */
        body {
            top: 0 !important;
        }

        /* Hide the google translate iframe */
        iframe[id*=":1"].goog-te-banner-frame {
            display: none !important;
        }
    </style>
    <style>
        body {
            top: 0 !important;

        }

        .skiptranslate iframe {
            display: none;
        }
        .goog-gt-tt{
            display:none;
        }
        /* Hide Google Translate tooltips */
.goog-te-banner-frame.skiptranslate, 
.goog-te-gadget-icon, 
.goog-tooltip, 
.goog-te-balloon-frame {
    display: none !important;
}


/* Hide the google translate iframe */
iframe[id*=":1"].goog-te-banner-frame {
    display: none !important;
}

.section-subtitle-ar {
    font-size: 18px;
    font-weight: var(--bd-fw-regular);
    display: inline-block;
    text-transform: uppercase;
    color: var(--bd-primary);
letter-spacing: 0 !important;    font-family: var(--bd-ff-heading);
        font-family: "El Messiri", sans-serif !important;
}

    </style>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'fr',
            includedLanguages: 'fr,ar,en,es',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }

    document.addEventListener('DOMContentLoaded', function() {
        var googleTranslateElement = document.getElementById('google_translate_element');
        var customTranslations = {
            'fr': {
                "Accueil": "Accueil",
                "presentation":"Présentation",
                "Explorer": "Explorer",
                "geologie": "Géologie",
                "biodiversite": "Biodiversité",
                "chefchaouen": "La ville de Chefchaouen ",
                "maison": " Maison d’abeille (dar nahla)",
                "sport": "Sport de montagnes ",
                "publication": "Publications",
                "geosite": " Géosites",
                "carte": "  Carte géoparc chefchaouen",
                "musee": " Musée géoparc chefchaouen ",
                "gallerie": " Gallerie ",
                "contact": " Contact",
                "bienvenue": " BienvenueAu GéoParc de chefchaouenntact",
                "TextHomeSport": "Le Géoparc Chefchaouen, offre de nombreuses possibilités pour les amateurs de sports de montagne",
                "Unesco": "Qu’est-ce qu’un Géoparc Mondial UNESCO ?",
                "TextHomeBio": "Le Géoparc de Chefchaouen présente aussi une richesse patrimoniale culturelle ...",
                "TextHomeGeo": "Le futur Géoparc de Chefchaouen est un espace naturel à la géodiversité ...",
                "TextApropos": "Dans un Géoparc, le géotourisme participe au développement local à travers un tourisme durable qui met en lumière cet héritage géologique remarquable.",
                "TextApropos2": "Dans un Géoparc, la géologie est une porte d’entrée privilégiée pour la sensibilisation à l’environnement et au territoire.",
                "TextApropos1": "Géoparc Chefchaouen",
                "footer": "Le futur « Géoparc de Chefchaouen », qui comprend le Parc National de Talassemtane et la Côte de Ghomara (PNTLS-CG), est inscrit sur la liste du patrimoine exceptionnel du Maroc par l’UNESCO.",
                "emplacement": "Géoparc Chefchaouen / Quartier Ain Haouzi , BP 101",
                "partenaire": "Rencontrez Nos Alliés",
                "actu": "Découvrez les Dernières Nouvelles"
            },
            'ar': {
                "Accueil": "الرئيسيه",
                "presentation":"تقديم",
                "Explorer": "تصفح",
                "geologie": "جيولوجيا",
                "biodiversite": "التنوع البيولوجي",
                "chefchaouen": "مدينة شفشاون",
                "maison": "بيت النحل (دار النحلة)",
                "sport": "رياضة الجبل",
                "publication": "منشورات",
                "geosite": "المواقع الجيولوجية",
                "carte": "خريطة الجيوبارك بشفشاون",
                "musee": "متحف الجيوبارك بشفشاون",
                "gallerie": " معرض الصور",
                "contact": "اتصل بنا",
                "bienvenue": " مرحبا بكم في جييوبارك شفشاون",
                "TextHomeSport": "يوفر جييوبارك شفشاون العديد من الإمكانيات لعشاق الرياضات الجبلية",
                "Unesco": "ما هو جيوبارك عالم اليونسكو؟",
                "TextHomeBio": "يقدم جيوبارك شفشاون أيضًا تراثًا ثقافيًا غنيًا...",
                "TextHomeGeo": "يعد جيوبارك شفشاون المستقبلي مساحة طبيعية ذات تنوع جيولوجي...",
                "TextApropos": "وفي جيوبارك، تساهم السياحة الجيولوجية في التنمية المحلية من خلال السياحة المستدامة التي تسلط الضوء على هذا التراث الجيولوجي الرائع.",
                "TextApropos2": "في جيوبارك، تعد الجيولوجيا بوابة رئيسية لزيادة الوعي بالبيئة والإقليم.",
                "TextApropos1": "جيوبارك شفشاون",
                "footer": "تم إدراج \"جيوبارك شفشاون \" المستقبلي، الذي يضم الحديقة الوطنية تلاسمطان وساحل غمارة ، في قائمة التراث الاستثنائي للمغرب من قبل اليونسكو.",
                "emplacement": "جيوبارك شفشاون / حي عين الحوزي ص.ب 101",
                "partenaire": "تعرف على شركائنا",
                "actu": "اكتشف آخر الأخبار"
            },
            'en': {
                "Accueil": "Home",
                "presentation": "Presentation",
                "Explorer": "Explore",
                "geologie": "Geology",
                "biodiversite": "Biodiversity",
                "chefchaouen": "Chefchaouen City",
                "maison": "Bee House (Dar Nahla)",
                "sport": "Mountain Sport",
                "publication": "Publications",
                "geosite": "Geosites",
                "carte": "Geopark Chefchaouen Map",
                "musee": "Geopark Chefchaouen Museum",
                "gallerie": "Gallery",
                "contact": "Contact",
                "bienvenue": "WELCOME TO CHEFCHAOUEN GEOPARC",
                "TextHomeSport": "The Chefchaouen Geopark offers many possibilities for mountain sports enthusiasts",
                "Unesco": "What is a Geopark UNESCO World?",
                "TextHomeBio": "The Chefchaouen Geopark also presents a rich cultural heritage...",
                "TextHomeGeo": "The future Chefchaouen Geopark is a natural space with geodiversity...",
                "TextApropos": "In a Geopark, geotourism contributes to local development through sustainable tourism which highlights this remarkable geological heritage.",
                "TextApropos2": "In a Geopark, geology is a key gateway to raising awareness of the environment and the territory.",
                "TextApropos1": "Chefchaouen Geopark",
                "footer": "The future “Chefchaouen Geopark”, which includes the Talassemtane National Park and the Ghomara Coast (PNTLS-CG), is included on the list of exceptional heritage of Morocco by UNESCO.",
                "emplacement": "Chefchaouen Geopark / Ain Haouzi District, BP 101",
                "partenaire": "Meet Our Allies",
                "actu": "Discover the Latest News"
            },
            'es': {
                "Accueil": "Inicio",
                "presentation": "Presentación",
                "Explorer": "Explorar",
                "geologie": "Geología",
                "biodiversite": "Biodiversidad",
                "chefchaouen": "Ciudad de Chefchaouen",
                "maison": "Casa de Abejas (Dar Nahla)",
                "sport": "Deporte de Montaña",
                "publication": "Publicaciones",
                "geosite": "Geositios",
                "carte": "Mapa Geoparque Chefchaouen",
                "musee": "Museo Geoparque Chefchaouen",
                "gallerie": "Galería",
                "contact": "Contacto",
                "bienvenue": "BIENVENIDO AL GEOPARC DE CHEFCHAOUEN",
                "TextHomeSport": "El Geoparque de Chefchaouen ofrece muchas posibilidades a los amantes de los deportes de montaña",
                "Unesco": "Qué es un Geoparque? ¿El mundo de la UNESCO?",
                "TextHomeBio": "El Geoparque de Chefchaouen también presenta un rico patrimonio cultural...",
                "TextHomeGeo": "El futuro Geoparque de Chefchaouen es un espacio natural con geodiversidad...",
                "TextApropos": "En un Geoparque, el geoturismo contribuye al desarrollo local a través de un turismo sostenible que pone en valor este notable patrimonio geológico.",
                "TextApropos2": "En un Geoparque, la geología es una puerta clave para la sensibilización sobre el medio ambiente y el territorio.",
                "TextApropos1": "Geoparque de Chefchaouen",
                "footer": "El futuro “Geoparque de Chefchaouen”, que incluye el Parque Nacional de Talassemtane y la Costa de Ghomara (PNTLS-CG), está incluido en la lista del patrimonio excepcional de Marruecos por la UNESCO.",
                "emplacement": "Geoparque de Chefchaouen / Distrito de Ain Haouzi, BP 101",
                "partenaire": "Nuestros aliados",
                "actu": "Discover the Latest News"
            }
        };

        function applyCustomTranslations() {
            const lang = document.documentElement.lang || 'fr';
            if (customTranslations[lang]) {
                document.querySelectorAll('[data-default]').forEach(element => {
                    const defaultText = element.getAttribute('data-default');
                    if (customTranslations[lang][defaultText]) {
                        element.textContent = customTranslations[lang][defaultText];
                    }
                });

                // Apply right-to-left styling if the language is Arabic
                if (lang === 'ar') {
                    document.documentElement.style.direction = 'rtl';
                    document.querySelectorAll('.section-subtitle').forEach(element => {
                        element.classList.add('section-subtitle-ar');
                    });
                } else {
                    document.documentElement.style.direction = 'ltr';
                    document.querySelectorAll('.section-subtitle').forEach(element => {
                        element.classList.remove('section-subtitle-ar');
                    });
                }
            }
        }

        setInterval(applyCustomTranslations, 2000);
        applyCustomTranslations(); // Initial call to apply translations
    });
</script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

</head>



<body>

    <!-- preloader start -->
    <div id="preloader">
        <div class="bd-three-bounce">
            <div class="bd-child bd-bounce1"></div>
            <div class="bd-child bd-bounce2"></div>
            <div class="bd-child bd-bounce3"></div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- Header area start -->
    <header>
        <!-- header top bar start -->
        <div class="header-top-area bg-theme-primary d-none d-sm-block">
            <div class="container">
                <div class="header-top-main">
                    <div class="header-top-left d-flex align-items-center">
                        <div class="header-top-left-item">
                            <span><i class="fa-solid fa-location-dot"></i></span>
                            <a href="#">Géoparc Chefchaouen / Quartier Ain Haouzi , BP 101</a>
                        </div>
                        <div class="header-top-left-item">
                            <span><i class="fa-solid fa-envelope"></i></span>
                            <a href=""><span class="cf_email" data-cfemail="">assated@yahoo.fr</span></a>
                        </div>
                    </div>
                    <div class="heder-top-right d-none d-md-flex align-items-center gap-3">
                        <div class="topbar-social">
                            <ul>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-youtube"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top bar end -->
        <div id="header-sticky" class="header-area">
            <div class="container">
                <div class="mega-menu-wrapper p-relative">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="header-logo">
                                <a href="{{ url('/') }}"> <img loading="lazy"
                                        style=" transition: transform 0.3s ease-in-out; max-width: 112%;"
                                        src="assets/images/bg/new_logo.png" alt="logo not found">
                                </a>
                                <style>
                                    .header-logo img:hover {
                                        transform: scale(1.1);
                                        /* Adjust scaling factor to desired zoom level */
                                    }
                                </style>
                            </div>
                            <div class="mean-menu-wrapper d-none d-xl-block">
                                <div class="main-menu">
                                    <nav class="main-menu main-menu-three skiptranslate"  id="mobile-menu">
                                        <ul>
                                            <li class="has-mega-menu">
                                                <a href="{{ url('/') }}" id="home-link"
                                                    data-default="Accueil">Accueil</a>
                                               
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="{{ url('/presentation') }}"  data-default="presentation">Présentation</a>
                                               
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0)" data-default="Explorer">Explorer</a>
                                                <ul class="submenu">
                                                    <li class="">
                                                        <a href="{{ url('/geologie') }}"  data-default="geologie">Géologie</a>
                                                     
                                                    </li>
                                                    <li class="">
                                                        <a href="{{ url('/biodiversite') }}"  data-default="biodiversite" >biodiversite</a>
                                                      
                                                    </li>
                                                    <li class="">
                                                        <a href="{{ url('/chefchaouen') }}"  data-default="chefchaouen">Ville de chefchaouen</a>
                                                      
                                                    </li>
                                                    <li class="">
                                                        <a href="{{ url('/maison') }}"  data-default="maison">Maison d’abeille (dar
                                                            nahla)</a>
                                                       
                                                    </li>
                                                    <li class="">
                                                        <a href="{{ url('/sport') }}"  data-default="sport">Sport de montagne</a>
                                                       
                                                    </li>
                                                </ul>
                                            </li>


                                            <li class="menu-item-has-children">
                                                <a href="{{ url('/publication') }}"  data-default="publication">Publications</a>

                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="{{ url('/geosites') }}"  data-default="geosite">Géosites</a>
                                                <ul class="submenu last-children">
                                                    <li class="">
                                                        <a href="{{ url('/geosites') }}" data-default="geosite">Géosites</a>
                                                     
                                                    </li>
                                                    <li class="">
                                                        <a href="{{ url('/geositeChefchaouen') }}" data-default="carte">Carte géoparc
                                                            chefchaouen</a>
                                                
                                                    </li>
                                                    <li class="">
                                                        <a href="{{ url('/maison-musee') }}" data-default="musee">Musée Géoparc chefchaouen
                                                        </a>
                                                     
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('/gallerie') }}" data-default="gallerie">Gallerie</a></li>
                                            <li><a href="{{ url('/contact') }}" data-default="contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right">


                            <div class="header-action d-flex align-items-center">
                                <div class="header-btn-wrap">
                                    <div class="d-none d-xs-inline-flex gap-15 align-items-center">

                                        <div class="header-language-item header-language">

                                            <div id="google_translate_element"></div>

                                            {{-- <span class="header-language-toggle" id="header-language-toggle">Fr</span>
                                            <ul>
                                           
                                            </ul> --}}

                                        </div>
                                    </div>
                                </div>
                                <div class="header-hamburger">
                                    <div class="sidebar-toggle">
                                        <a class="bar-icon-square" href="javascript:void(0)">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                                <!-- for wp -->
                                <div class="header-hamburger ml-20 d-none">
                                    <button type="button" class="hamburger-btn offcanvas-open-btn">
                                        <span>01</span>
                                        <span>01</span>
                                        <span>01</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas-area">
            <div class="offcanvas-wrapper">
                <div class="offcanvas-content">
                    <div class="offcanvas-top d-flex justify-content-between align-items-center mb-25">
                        <div class="offcanvas-logo">
                            <a href="{{ url('/') }}">
                                <img loading="lazy" src="{{ asset('assets/images/bg/new_logo.png') }}"
                                    alt="logo not found">
                            </a>
                        </div>
                        <div class="offcanvas-close">
                            <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                                    <span class="offcanvas-m-line line--1"></span><span
                                        class="offcanvas-m-line line--2"></span><span
                                        class="offcanvas-m-line line--3"></span>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="mobile-menu fix mb-25"></div>
                    <div class="offcanvas-about d-none d-lg-block mb-25">
                        <h4 class="offcanvas-title-meta">A propos </h4>
                        <p>Le futur « Géoparc de Chefchaouen », qui comprend le Parc National de Talassemtane et la Côte
                            de Ghomara (PNTLS-CG), est inscrit sur la liste du patrimoine exceptionnel du Maroc par
                            l’UNESCO.</p>
                    </div>
                    <div class="offcanvas-contact mb-25">
                        <h4 class="offcanvas-title-meta">Informations de contact</h4>
                        <ul>
                            <li class="d-flex align-items-center gap-10">
                                <div class="offcanvas-contact-icon">
                                    <a target="_blank" href="#">
                                        <i class="fal fa-map-marker-alt"></i></a>
                                </div>
                                <div class="offcanvas-contact-text">
                                    <a target="_blank" href="{{ url('/contact') }}"> Géoparc Chefchaouen / Quartier
                                        Ain Haouzi , BP 101</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-10">
                                <div class="offcanvas-contact-icon">
                                    <a href="tel:"><i class="far fa-phone"></i></a>
                                </div>
                                <div class="offcanvas-contact-text">
                                    <a href="">+212539989727</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center gap-10">
                                <div class="offcanvas-contact-icon">
                                    <a href=""><i class="fal fa-envelope"></i></a>
                                </div>
                                <div class="offcanvas-contact-text">
                                    <a href=""><span class="cf_email"
                                            data-cfemail="">assated@yahoo.fr</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="google_translate_element"></div>

                    <div class="offcanvas-social">
                        <h4 class="offcanvas-title-meta">Suivez nous !</h4>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>
    <!-- Offcanvas area start -->

    <!-- search popup area start here  -->
    <div class="bd-search-popup-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bd-search-popup">
                        <div class="bd-search-form">
                            <form action="#">
                                <div class="bd-search-input">
                                    <input type="search" name="search" placeholder="Type here to serach ...">
                                    <div class="bd-search-submit">
                                        <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div class="bd-search-close">
                                <div class="bd-search-close-btn">
                                    <button><i class="fa-thin fa-close"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search popup overlay  -->
    <div class="bd-search-overlay"></div>
    <!-- search popup area end here  -->
