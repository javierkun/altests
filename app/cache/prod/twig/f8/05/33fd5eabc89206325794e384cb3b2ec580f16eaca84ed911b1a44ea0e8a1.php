<?php

/* ALTestsPHPBundle:Search:base.html.twig */
class __TwigTemplate_f80533fd5eabc89206325794e384cb3b2ec580f16eaca84ed911b1a44ea0e8a1 extends Twig_Template
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
        echo "        \t<!--[if lte IE 7]>
\t\t\t<style>
\t\t\t\t.content { margin-right: -1px; } /* este margen negativo de 1 px puede situarse en cualquiera de las columnas de este diseño con el mismo efecto corrector. */
\t\t\t\tul.nav a { zoom: 1; }  /* la propiedad de zoom da a IE el desencadenante hasLayout que necesita para corregir el espacio en blanco extra existente entre los vínculos */
\t\t\t</style>
\t\t\t<![endif]-->
    </head>
    <body>
\t\t<div class=\"container\">
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"logo_name\"> <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("al_tests_php_homepage");
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
        return "ALTestsPHPBundle:Search:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  148 => 46,  137 => 42,  134 => 41,  120 => 35,  52 => 10,  37 => 6,  114 => 35,  84 => 22,  96 => 25,  74 => 32,  58 => 24,  126 => 40,  100 => 30,  90 => 25,  76 => 22,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 44,  135 => 53,  131 => 40,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 26,  59 => 14,  38 => 9,  94 => 27,  89 => 20,  85 => 25,  79 => 22,  75 => 19,  68 => 17,  56 => 12,  50 => 19,  29 => 3,  87 => 25,  72 => 31,  55 => 11,  21 => 2,  26 => 6,  98 => 28,  93 => 27,  88 => 26,  78 => 22,  46 => 7,  27 => 4,  40 => 7,  44 => 9,  35 => 4,  31 => 3,  43 => 9,  41 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 38,  117 => 34,  115 => 33,  105 => 40,  101 => 26,  91 => 24,  69 => 19,  66 => 27,  62 => 15,  49 => 9,  32 => 7,  25 => 2,  24 => 4,  53 => 13,  47 => 9,  28 => 4,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 37,  122 => 36,  116 => 41,  112 => 32,  109 => 34,  106 => 31,  103 => 31,  99 => 29,  95 => 28,  92 => 21,  86 => 8,  82 => 18,  80 => 7,  73 => 20,  64 => 17,  60 => 25,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 6,  36 => 8,  33 => 6,  30 => 7,);
    }
}
