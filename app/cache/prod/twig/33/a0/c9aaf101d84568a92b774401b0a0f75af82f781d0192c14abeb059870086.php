<?php

/* ALTestsAJAXBundle:Search:actors.html.twig */
class __TwigTemplate_33a0c9aaf101d84568a92b774401b0a0f75af82f781d0192c14abeb059870086 extends Twig_Template
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
";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "total_results"), "html", null, true);
        echo " actor results for <strong>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</strong>. Select one to get movie information: <br/> <br/>
Page ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page"), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "total_pages"), "html", null, true);
        echo ".<br/><br/>
";
        // line 5
        if (($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "total_pages") > 1)) {
            // line 6
            echo "\t<div class=\"navigation_block\">
\t\t";
            // line 7
            if (($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") > 1)) {
                // line 8
                echo "\t\t\t<div class=\"navigation\">
\t\t\t\t<a onclick=\"return false;\"  href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("al_tests_ajax_search", array("page" => ($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") - 1), "name" => (isset($context["name"]) ? $context["name"] : null), "quick" => 0)), "html", null, true);
                echo "\">Previous</a>
\t\t\t</div>
\t\t";
            }
            // line 12
            echo "\t\t";
            if (($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") < $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "total_pages"))) {
                // line 13
                echo "\t\t\t<div class=\"navigation\">
\t\t\t\t<a onclick=\"return false;\"  href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("al_tests_ajax_search", array("page" => ($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") + 1), "name" => (isset($context["name"]) ? $context["name"] : null), "quick" => 0)), "html", null, true);
                echo "\">Next</a>
\t\t\t</div>\t
\t\t";
            }
            // line 16
            echo "\t
\t\t<br/><br/>
\t</div>
";
        }
        // line 19
        echo "\t
<ul id=\"results\">
\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "results"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 22
            echo "\t\t<li><div class=\"search_result\">\t\t\t\t
\t\t\t<a onclick=\"return false;\"  href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("al_tests_ajax_esearch", array("id" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), "name" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "name"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "name"), "html", null, true);
            echo "</a> <br/> <br/>
\t\t</div></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>
";
        // line 27
        if (($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "total_pages") > 1)) {
            // line 28
            echo "\t<div class=\"navigation_block\">
\t\t";
            // line 29
            if (($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") > 1)) {
                // line 30
                echo "\t\t\t<div class=\"navigation\">
\t\t\t\t<a  onclick=\"return false;\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("al_tests_ajax_search", array("page" => ($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") - 1), "name" => (isset($context["name"]) ? $context["name"] : null), "quick" => 0)), "html", null, true);
                echo "\">Previous</a>
\t\t\t</div>
\t\t";
            }
            // line 34
            echo "\t\t";
            if (($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") < $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "total_pages"))) {
                // line 35
                echo "\t\t\t<div class=\"navigation\">
\t\t\t\t<a onclick=\"return false;\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("al_tests_ajax_search", array("page" => ($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") + 1), "name" => (isset($context["name"]) ? $context["name"] : null), "quick" => 0)), "html", null, true);
                echo "\">Next</a>
\t\t\t</div>\t
\t\t";
            }
            // line 38
            echo "\t
\t</div>
";
        }
        // line 40
        echo "\t

";
    }

    public function getTemplateName()
    {
        return "ALTestsAJAXBundle:Search:actors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 40,  100 => 30,  90 => 26,  76 => 22,  53 => 13,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 23,  75 => 17,  68 => 19,  56 => 14,  29 => 3,  87 => 25,  72 => 21,  55 => 15,  21 => 2,  26 => 6,  98 => 29,  93 => 27,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  35 => 5,  31 => 5,  43 => 8,  41 => 8,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 38,  117 => 44,  115 => 36,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 16,  49 => 19,  32 => 4,  25 => 3,  24 => 4,  50 => 12,  44 => 9,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 35,  109 => 34,  106 => 33,  103 => 31,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 7,  36 => 6,  33 => 4,  30 => 7,);
    }
}
