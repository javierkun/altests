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
\t\t<style>@import url('";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/altestsajax/css/styles.css"), "html", null, true);
        echo "');</style>
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
        return array (  53 => 25,  47 => 24,  28 => 8,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 27,  86 => 24,  82 => 22,  80 => 21,  73 => 19,  64 => 15,  60 => 13,  57 => 26,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
