<?php

/* ALTestsAJAXBundle:Search:results.html.twig */
class __TwigTemplate_8e8e48d79b06236ad55e3c8cd19fabd7c25a15a86d7e2081f8537a4c15c848a5 extends Twig_Template
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
        // line 2
        echo "<br />
Movie information for <a href=\"https://www.themoviedb.org/person/";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "actor"), "id"), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "actor"), "name"), "html", null, true);
        echo "</strong></a>: <br/> <br/>
<ul id=\"results\">
\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "movies"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 6
            echo "\t\t<li>
\t\t\t<div class=\"search_result\">\t\t\t\t
\t\t\t\tMovie: <a href=\"https://www.themoviedb.org/movie/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
            echo "</a> <br/>\t\t\t\t
\t\t\t\t";
            // line 9
            if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "character", array(), "any", true, true)) {
                echo " Character: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "character"), "html", null, true);
                echo " <br/> ";
            }
            // line 10
            echo "\t\t\t\t<div class=\"optional_info\">
\t\t\t\t\t";
            // line 11
            if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "release_date", array(), "any", true, true)) {
                echo " Release date: ";
                if (twig_test_empty($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "release_date"))) {
                    echo " Unknown ";
                }
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "release_date"), "html", null, true);
                echo ". ";
            }
            // line 12
            echo "\t\t\t\t\t";
            if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "original_title", array(), "any", true, true)) {
                echo " Original title: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "original_title"), "html", null, true);
                echo " ";
            }
            echo " 
\t\t\t\t</div> <br/>
\t\t\t</div>
\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t
</u>
";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "movies"))) {
            // line 19
            echo "\tNo movie acting information found for this actor.
";
        }
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "ALTestsAJAXBundle:Search:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  84 => 19,  58 => 12,  126 => 40,  100 => 30,  90 => 26,  76 => 22,  53 => 13,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 26,  59 => 14,  38 => 9,  94 => 28,  89 => 20,  85 => 25,  75 => 21,  68 => 17,  56 => 14,  87 => 25,  21 => 2,  26 => 6,  93 => 27,  88 => 21,  78 => 16,  46 => 7,  27 => 4,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 38,  117 => 36,  105 => 40,  91 => 27,  62 => 12,  49 => 10,  25 => 2,  24 => 4,  44 => 9,  19 => 2,  79 => 22,  72 => 31,  69 => 25,  47 => 9,  40 => 6,  37 => 8,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 36,  111 => 37,  108 => 36,  101 => 26,  98 => 29,  96 => 25,  83 => 25,  74 => 32,  66 => 27,  55 => 11,  52 => 11,  50 => 19,  43 => 9,  41 => 8,  35 => 4,  32 => 3,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 35,  109 => 34,  106 => 31,  103 => 31,  99 => 29,  95 => 28,  92 => 21,  86 => 8,  82 => 18,  80 => 7,  73 => 19,  64 => 17,  60 => 25,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 7,  36 => 8,  33 => 6,  30 => 7,);
    }
}
