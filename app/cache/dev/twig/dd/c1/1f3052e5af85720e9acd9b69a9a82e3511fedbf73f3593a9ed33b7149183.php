<?php

/* ALTestsPHPBundle:Search:results.html.twig */
class __TwigTemplate_ddc11f3052e5af85720e9acd9b69a9a82e3511fedbf73f3593a9ed33b7149183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ALTestsPHPBundle:Search:index.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'search_results' => array($this, 'block_search_results'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ALTestsPHPBundle:Search:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tYasasp!
";
    }

    // line 6
    public function block_search_results($context, array $blocks = array())
    {
        // line 7
        echo "\t<div class=\"results\">
\t\t<br />
\t\tMovie information for <a href=\"https://www.themoviedb.org/person/";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["response"]) ? $context["response"] : $this->getContext($context, "response")), "actor"), "id"), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["response"]) ? $context["response"] : $this->getContext($context, "response")), "actor"), "name"), "html", null, true);
        echo "</strong></a>: <br/> <br/>
\t\t<ul id=\"results\">
\t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["response"]) ? $context["response"] : $this->getContext($context, "response")), "movies"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 12
            echo "\t\t\t\t<li>
\t\t\t\t\t<div class=\"search_result\">\t\t\t\t
\t\t\t\t\t\tMovie: <a href=\"https://www.themoviedb.org/movie/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title"), "html", null, true);
            echo "</a> <br/>\t\t\t\t
\t\t\t\t\t\t";
            // line 15
            if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "character", array(), "any", true, true)) {
                echo " Character: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "character"), "html", null, true);
                echo " <br/> ";
            }
            // line 16
            echo "\t\t\t\t\t\t<div class=\"optional_info\">
\t\t\t\t\t\t\t";
            // line 17
            if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "release_date", array(), "any", true, true)) {
                echo " Release date: ";
                if (twig_test_empty($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "release_date"))) {
                    echo " Unknown ";
                }
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "release_date"), "html", null, true);
                echo ". ";
            }
            // line 18
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "original_title", array(), "any", true, true)) {
                echo " Original title: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "original_title"), "html", null, true);
                echo " ";
            }
            echo " 
\t\t\t\t\t\t</div> <br/>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t
\t\t</u>
\t\t";
        // line 24
        if (twig_test_empty($this->getAttribute((isset($context["response"]) ? $context["response"] : $this->getContext($context, "response")), "movies"))) {
            // line 25
            echo "\t\t\tNo movie acting information found for this actor.
\t\t";
        }
        // line 27
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "ALTestsPHPBundle:Search:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 27,  104 => 24,  65 => 15,  97 => 29,  148 => 46,  137 => 42,  134 => 41,  114 => 35,  84 => 18,  58 => 24,  126 => 40,  100 => 22,  90 => 25,  76 => 22,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 44,  135 => 53,  119 => 42,  102 => 32,  71 => 16,  67 => 15,  63 => 26,  59 => 14,  38 => 9,  94 => 27,  89 => 20,  85 => 25,  75 => 19,  68 => 17,  56 => 12,  87 => 25,  21 => 2,  26 => 6,  93 => 27,  88 => 26,  78 => 22,  46 => 7,  27 => 4,  44 => 9,  31 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 38,  117 => 34,  105 => 40,  91 => 24,  62 => 15,  49 => 9,  25 => 2,  24 => 4,  53 => 13,  28 => 4,  19 => 2,  79 => 22,  72 => 31,  69 => 19,  47 => 9,  40 => 7,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 40,  123 => 47,  120 => 35,  115 => 33,  111 => 37,  108 => 36,  101 => 26,  98 => 28,  96 => 25,  83 => 25,  74 => 17,  66 => 27,  55 => 12,  52 => 10,  50 => 19,  43 => 9,  41 => 8,  35 => 4,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 37,  122 => 36,  116 => 41,  112 => 32,  109 => 34,  106 => 25,  103 => 31,  99 => 29,  95 => 28,  92 => 21,  86 => 8,  82 => 18,  80 => 7,  73 => 20,  64 => 17,  60 => 25,  57 => 11,  54 => 10,  51 => 11,  48 => 13,  45 => 17,  42 => 7,  39 => 6,  36 => 8,  33 => 6,  30 => 7,);
    }
}
