<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_ca13ff74decf3d3c616645f013bb9863bb991d4e15bfcc00fc4d30fe97ae6967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
\t\t<link href='http://fonts.googleapis.com/css?family=Monofett|Mountains+of+Christmas' rel='stylesheet' type='text/css'>
        <meta charset=\"UTF-8\" />
        <title>\tYasasp!</title>
\t\t<style>@import url('/symfony/web/bundles/altestsajax/css/styles.css');</style>
\t\t<!--[if lte IE 7]>
\t\t<style>
\t\t\t.content { margin-right: -1px; } /* este margen negativo de 1 px puede situarse en cualquiera de las columnas de este diseño con el mismo efecto corrector. */
\t\t\tul.nav a { zoom: 1; }  /* la propiedad de zoom da a IE el desencadenante hasLayout que necesita para corregir el espacio en blanco extra existente entre los vínculos */
\t\t</style>
\t\t<![endif]-->
    </head>
    <body>
\t\t<div class=\"container\">
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"logo_name\"> <h1>Yasasp!</h1></div>
\t\t\t\t<div class=\"logo_desc\"><h4>Yet Another Simple Actor Search Page</h4></div>
\t\t  \t</div>
\t\t  \t<div class=\"sidebar1\"></div>
\t\t  \t<div class=\"content\">
\t\t\t\t<div class=\"results\"><h2>Oops! An Error Occurred</h2><br/><h2>The server returned a \"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\".</h2>
\t\t\t\t<br/><br/> <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("al_tests_php_homepage");
        echo "\"><h5>Return to PHP only version homepage.</h5></a>
\t\t\t\t<br/><br/> <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("al_tests_ajax_homepage");
        echo "\"><h5>Return to PHP only version homepage.</h5></a></div>
\t\t\t</div>
\t\t  \t<div class=\"sidebar2\"></div>
\t\t  \t<div class=\"footer\"><div class=\"credits\"><br/><h6>developed by: Víctor Javier Cerquera</h6></div></div>
\t\t</div>
            </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 24,  19 => 1,  79 => 21,  72 => 13,  69 => 12,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  101 => 33,  98 => 32,  96 => 31,  83 => 25,  74 => 14,  66 => 11,  55 => 16,  52 => 21,  50 => 25,  43 => 9,  41 => 8,  35 => 9,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 29,  86 => 24,  82 => 22,  80 => 24,  73 => 19,  64 => 19,  60 => 6,  57 => 12,  54 => 26,  51 => 10,  48 => 9,  45 => 17,  42 => 16,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
