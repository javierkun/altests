<?php

/* ALTestsAJAXBundle:Search:base.html.twig */
class __TwigTemplate_55b91f308178219a62db75d560be154e49d3f3981815482865a7fae68a51be2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'search_box' => array($this, 'block_search_box'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'search_results' => array($this, 'block_search_results'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
\t\t<link href='http://fonts.googleapis.com/css?family=Monofett|Mountains+of+Christmas' rel='stylesheet' type='text/css'>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <!--[if lte IE 7]>
\t\t<style>
\t\t\t.content { margin-right: -1px; } /* este margen negativo de 1 px puede situarse en cualquiera de las columnas de este diseño con el mismo efecto corrector. */
\t\t\tul.nav a { zoom: 1; }  /* la propiedad de zoom da a IE el desencadenante hasLayout que necesita para corregir el espacio en blanco extra existente entre los vínculos */
\t\t</style>
\t\t<![endif]-->
    </head>
    <body>
\t\t<div class=\"container\">
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"logo_name\"> <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("al_tests_ajax_homepage");
        echo "\"><h1>Yasasp!</h1></a></div>
\t\t\t\t<div class=\"logo_desc\"><h4>Yet Another Simple Actor Search Page</h4></div>
\t\t  \t</div>
\t\t  \t<div class=\"sidebar1\"></div>
\t\t  \t<div class=\"content\">
\t\t\t\t";
        // line 24
        $this->displayBlock('search_box', $context, $blocks);
        // line 25
        echo "\t\t\t\t";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 26
        echo "\t\t\t\t";
        $this->displayBlock('search_results', $context, $blocks);
        // line 27
        echo "\t\t\t</div>
\t\t  \t<div class=\"sidebar2\"></div>
\t\t  \t<div class=\"footer\"><div class=\"credits\"><br/><h6>developed by: Víctor Javier Cerquera</h6></div></div>
\t\t</div>
        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 24
    public function block_search_box($context, array $blocks = array())
    {
    }

    // line 25
    public function block_flash_messages($context, array $blocks = array())
    {
    }

    // line 26
    public function block_search_results($context, array $blocks = array())
    {
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ALTestsAJAXBundle:Search:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 24,  126 => 40,  100 => 30,  90 => 26,  76 => 22,  53 => 13,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 26,  59 => 14,  38 => 9,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 19,  56 => 14,  87 => 25,  21 => 2,  26 => 6,  93 => 27,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 38,  117 => 44,  105 => 40,  91 => 24,  62 => 16,  49 => 19,  25 => 2,  24 => 4,  44 => 9,  19 => 2,  79 => 23,  72 => 31,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 36,  111 => 37,  108 => 36,  101 => 26,  98 => 29,  96 => 25,  83 => 25,  74 => 32,  66 => 27,  55 => 15,  52 => 21,  50 => 19,  43 => 8,  41 => 8,  35 => 5,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 35,  109 => 34,  106 => 31,  103 => 31,  99 => 31,  95 => 28,  92 => 21,  86 => 8,  82 => 22,  80 => 7,  73 => 19,  64 => 17,  60 => 25,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 7,  36 => 8,  33 => 4,  30 => 7,);
    }
}
