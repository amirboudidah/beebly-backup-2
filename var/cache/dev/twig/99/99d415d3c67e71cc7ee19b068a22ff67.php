<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* templateFront.html.twig */
class __TwigTemplate_3e6e68ff7c5e1c95bda8c8763b3964c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templateFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templateFront.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Ogani Template\">
    <meta name=\"keywords\" content=\"Ogani, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/elegant-icons.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/nice-select.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/jquery-ui.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/owl.carousel.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/slicknav.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/mixitup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Humberger Begin -->
    <div class=\"humberger__menu__overlay\"></div>
    <div class=\"humberger__menu__wrapper\">
        <div class=\"humberger__menu__logo\">
            <a href=\"#\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/beebly.png"), "html", null, true);
        echo "\" alt=\"\"></a>
        </div>
        <div class=\"humberger__menu__cart\">
            <ul>
                <li><a href=\"#\"><i class=\"fa fa-heart\"></i> <span>1</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i> <span>3</span></a></li>
            </ul>
            <div class=\"header__cart__price\">item: <span>\$150.00</span></div>
        </div>
        <div class=\"humberger__menu__widget\">
            <div class=\"header__top__right__language\">
                <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/language.png"), "html", null, true);
        echo "\" alt=\"\">
                <div>English</div>
                <span class=\"arrow_carrot-down\"></span>
                <ul>
                    <li><a href=\"#\">Spanis</a></li>
                    <li><a href=\"#\">English</a></li>
                </ul>
            </div> 
            <div class=\"header__top__right__auth\">
                <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_logout");
        echo "\"><i class=\"fa fa-user\"></i>Log out</a>
            </div>
        </div>
        <nav class=\"humberger__menu__nav mobile-menu\">
            <ul>
                <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profilefront");
        echo "\">Profile</a></li>
                
                <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamationFront");
        echo "\">Reclamation</a></li>
                <li><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventsFront");
        echo "\">Evenement</a></li>
<li><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topicFront");
        echo "\">Topics</a></li>
            </ul>
        </nav>
        <div id=\"mobile-menu-wrap\"></div>
        <div class=\"header__top__right__social\">
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
            <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
        </div>
        <div class=\"humberger__menu__contact\">
            <ul>
                <li><i class=\"fa fa-envelope\"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of \$99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class=\"header\">
        <div class=\"header__top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"header__top__left\">
                            <ul>
                                <li><i class=\"fa fa-envelope\"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of \$99</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"header__top__right\">
                            <div class=\"header__top__right__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                            <div class=\"header__top__right__language\">
                                <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/language.png"), "html", null, true);
        echo "\" alt=\"\">
                                <div>English</div>
                                <span class=\"arrow_carrot-down\"></span>
                                <ul>
                                    <li><a href=\"#\">Spanis</a></li>
                                    <li><a href=\"#\">English</a></li>
                                </ul>
                            </div>

                            
                            <div class=\"header__top__right__auth\">
                <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_logout");
        echo "\"><i class=\"fa fa-user\"></i>Log out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"header__logo\">
                        <a href=\"./index.html\"><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/beebly.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <nav class=\"header__menu\">
                        <ul>
                            <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                            <li><a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profilefront");
        echo "\">Profile</a></li>
                            <li><a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_my_propositions");
        echo "\">Proposition livre</a></li>
                            <li><a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_offres");
        echo "\">Estimation offre</a></li>
                            <li><a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesLivraisons");
        echo "\">Détails livraison</a></li>
                            <li><a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesclotures");
        echo "\">Cloture achat</a></li>

                           <li><a href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamationFront");
        echo "\">Reclamation</a></li>
                            <li><a href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventsFront");
        echo "\">Events</a></li>
                            
<li><a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topicFront");
        echo "\">Topics</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"header__cart\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-heart\"></i> <span>1</span></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i> <span>3</span></a></li>
                        </ul>
                        <div class=\"header__cart__price\">item: <span>\$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class=\"humberger__open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class=\"hero\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"hero__categories\">
                        <div class=\"hero__categories__all\">
                            <i class=\"fa fa-bars\"></i>
                            <span>menu</span>
                        </div>
                        <ul>
                            <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                            <li><a href=\"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profilefront");
        echo "\">Profile</a></li>
                            <li><a href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_my_propositions");
        echo "\">Proposition livre</a></li>
                            <li><a href=\"";
        // line 188
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_offres");
        echo "\">Estimation offre</a></li>
                            <li><a href=\"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesLivraisons");
        echo "\">Détails livraison</a></li>
                            <li><a href=\"";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesclotures");
        echo "\">Cloture achat</a></li>

                            <li><a href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\">Reclamation</a></li>
                            <li><a href=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\">Evenement</a></li>

                            <li><a href=\"./contact.html\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-9\">
                  ";
        // line 200
        $this->displayBlock('body', $context, $blocks);
        // line 202
        echo "                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Footer Section Begin -->
    <footer class=\"footer spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"footer__about\">
                        <div class=\"footer__about__logo\">
                            <a href=\"./index.html\"><img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/beebly.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6 offset-lg-1\">
                    <div class=\"footer__widget\">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href=\"#\">About Us</a></li>
                            <li><a href=\"#\">About Our Shop</a></li>
                            <li><a href=\"#\">Secure Shopping</a></li>
                            <li><a href=\"#\">Delivery infomation</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href=\"#\">Who We Are</a></li>
                            <li><a href=\"#\">Our Services</a></li>
                            <li><a href=\"#\">Projects</a></li>
                            <li><a href=\"#\">Contact</a></li>
                            <li><a href=\"#\">Innovation</a></li>
                            <li><a href=\"#\">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"footer__widget\">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action=\"#\">
                            <input type=\"text\" placeholder=\"Enter your mail\">
                            <button type=\"submit\" class=\"site-btn\">Subscribe</button>
                        </form>
                        <div class=\"footer__widget__social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"footer__copyright\">
                        <div class=\"footer__copyright__text\"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class=\"footer__copyright__payment\"><img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/payement-item.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->


</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 200
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "templateFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 200,  441 => 268,  385 => 215,  370 => 202,  368 => 200,  358 => 193,  354 => 192,  349 => 190,  345 => 189,  341 => 188,  337 => 187,  333 => 186,  297 => 153,  292 => 151,  288 => 150,  283 => 148,  279 => 147,  275 => 146,  271 => 145,  267 => 144,  257 => 137,  243 => 126,  229 => 115,  185 => 74,  181 => 73,  177 => 72,  172 => 70,  163 => 64,  151 => 55,  137 => 44,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Ogani Template\">
    <meta name=\"keywords\" content=\"Ogani, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"{{ asset('front/css/bootstrap.min.css') }}\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"{{ asset('front/css/font-awesome.min.css') }}\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"{{ asset('front/css/elegant-icons.css') }}\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"{{ asset('front/css/nice-select.css') }}\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"{{ asset('front/css/jquery-ui.min.css') }}\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"{{ asset('front/css/owl.carousel.min.css') }}\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"{{ asset('front/css/slicknav.min.css') }}\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"{{ asset('front/css/style.css') }}\" type=\"text/css\">
<script src=\"{{ asset('front/js/jquery-3.3.1.min.js') }}\"></script>
<script src=\"{{ asset('front/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('front/js/jquery.nice-select.min.js') }}\"></script>
<script src=\"{{ asset('front/js/jquery-ui.min.js') }}\"></script>
<script src=\"{{ asset('front/js/jquery.slicknav.js') }}\"></script>
<script src=\"{{ asset('front/js/mixitup.min.js') }}\"></script>
<script src=\"{{ asset('front/js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('front/js/main.js') }}\"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Humberger Begin -->
    <div class=\"humberger__menu__overlay\"></div>
    <div class=\"humberger__menu__wrapper\">
        <div class=\"humberger__menu__logo\">
            <a href=\"#\"><img src=\"{{ asset('front/img/beebly.png') }}\" alt=\"\"></a>
        </div>
        <div class=\"humberger__menu__cart\">
            <ul>
                <li><a href=\"#\"><i class=\"fa fa-heart\"></i> <span>1</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i> <span>3</span></a></li>
            </ul>
            <div class=\"header__cart__price\">item: <span>\$150.00</span></div>
        </div>
        <div class=\"humberger__menu__widget\">
            <div class=\"header__top__right__language\">
                <img src=\"{{ asset('front/img/language.png')}}\" alt=\"\">
                <div>English</div>
                <span class=\"arrow_carrot-down\"></span>
                <ul>
                    <li><a href=\"#\">Spanis</a></li>
                    <li><a href=\"#\">English</a></li>
                </ul>
            </div> 
            <div class=\"header__top__right__auth\">
                <a href=\"{{path('app_user_logout')}}\"><i class=\"fa fa-user\"></i>Log out</a>
            </div>
        </div>
        <nav class=\"humberger__menu__nav mobile-menu\">
            <ul>
                <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                <li><a href=\"{{path('app_user_profilefront')}}\">Profile</a></li>
                
                <li><a href=\"{{path('reclamationFront')}}\">Reclamation</a></li>
                <li><a href=\"{{path('eventsFront')}}\">Evenement</a></li>
<li><a href=\"{{path('topicFront')}}\">Topics</a></li>
            </ul>
        </nav>
        <div id=\"mobile-menu-wrap\"></div>
        <div class=\"header__top__right__social\">
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
            <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
        </div>
        <div class=\"humberger__menu__contact\">
            <ul>
                <li><i class=\"fa fa-envelope\"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of \$99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class=\"header\">
        <div class=\"header__top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"header__top__left\">
                            <ul>
                                <li><i class=\"fa fa-envelope\"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of \$99</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"header__top__right\">
                            <div class=\"header__top__right__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                            <div class=\"header__top__right__language\">
                                <img src=\"{{ asset('front/img/language.png')}}\" alt=\"\">
                                <div>English</div>
                                <span class=\"arrow_carrot-down\"></span>
                                <ul>
                                    <li><a href=\"#\">Spanis</a></li>
                                    <li><a href=\"#\">English</a></li>
                                </ul>
                            </div>

                            
                            <div class=\"header__top__right__auth\">
                <a href=\"{{path('app_user_logout')}}\"><i class=\"fa fa-user\"></i>Log out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"header__logo\">
                        <a href=\"./index.html\"><img src=\"{{ asset('front/img/beebly.png')}}\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <nav class=\"header__menu\">
                        <ul>
                            <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                            <li><a href=\"{{path('app_user_profilefront')}}\">Profile</a></li>
                            <li><a href=\"{{path('show_my_propositions')}}\">Proposition livre</a></li>
                            <li><a href=\"{{path('mes_offres')}}\">Estimation offre</a></li>
                            <li><a href=\"{{path('mesLivraisons')}}\">Détails livraison</a></li>
                            <li><a href=\"{{path('mesclotures')}}\">Cloture achat</a></li>

                           <li><a href=\"{{path('reclamationFront')}}\">Reclamation</a></li>
                            <li><a href=\"{{path('eventsFront')}}\">Events</a></li>
                            
<li><a href=\"{{path('topicFront')}}\">Topics</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"header__cart\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-heart\"></i> <span>1</span></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i> <span>3</span></a></li>
                        </ul>
                        <div class=\"header__cart__price\">item: <span>\$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class=\"humberger__open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class=\"hero\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"hero__categories\">
                        <div class=\"hero__categories__all\">
                            <i class=\"fa fa-bars\"></i>
                            <span>menu</span>
                        </div>
                        <ul>
                            <li class=\"active\"><a href=\"./index.html\">Home</a></li>
                            <li><a href=\"{{path('app_user_profilefront')}}\">Profile</a></li>
                            <li><a href=\"{{path('show_my_propositions')}}\">Proposition livre</a></li>
                            <li><a href=\"{{path('mes_offres')}}\">Estimation offre</a></li>
                            <li><a href=\"{{path('mesLivraisons')}}\">Détails livraison</a></li>
                            <li><a href=\"{{path('mesclotures')}}\">Cloture achat</a></li>

                            <li><a href=\"{{path('app_reclamation_new')}}\">Reclamation</a></li>
                            <li><a href=\"{{path('app_evenement_index')}}\">Evenement</a></li>

                            <li><a href=\"./contact.html\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-9\">
                  {% block body %}
{% endblock %}
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Footer Section Begin -->
    <footer class=\"footer spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"footer__about\">
                        <div class=\"footer__about__logo\">
                            <a href=\"./index.html\"><img src=\"{{ asset('front/img/beebly.png')}}\" alt=\"\"></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6 offset-lg-1\">
                    <div class=\"footer__widget\">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href=\"#\">About Us</a></li>
                            <li><a href=\"#\">About Our Shop</a></li>
                            <li><a href=\"#\">Secure Shopping</a></li>
                            <li><a href=\"#\">Delivery infomation</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href=\"#\">Who We Are</a></li>
                            <li><a href=\"#\">Our Services</a></li>
                            <li><a href=\"#\">Projects</a></li>
                            <li><a href=\"#\">Contact</a></li>
                            <li><a href=\"#\">Innovation</a></li>
                            <li><a href=\"#\">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"footer__widget\">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action=\"#\">
                            <input type=\"text\" placeholder=\"Enter your mail\">
                            <button type=\"submit\" class=\"site-btn\">Subscribe</button>
                        </form>
                        <div class=\"footer__widget__social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"footer__copyright\">
                        <div class=\"footer__copyright__text\"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class=\"footer__copyright__payment\"><img src=\"{{ asset('front/img/payement-item.png')}}\" alt=\"\"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->


</body>

</html>", "templateFront.html.twig", "C:\\Users\\amirb\\OneDrive\\Bureau\\web\\beebly-backup-2\\templates\\templateFront.html.twig");
    }
}
