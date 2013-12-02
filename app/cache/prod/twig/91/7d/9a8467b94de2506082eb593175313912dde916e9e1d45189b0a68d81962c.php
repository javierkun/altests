<?php

/* ALTestsPHPBundle:Search:actors.html.twig */
class __TwigTemplate_917d9a8467b94de2506082eb593175313912dde916e9e1d45189b0a68d81962c extends Twig_Template
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
\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "total_results"), "html", null, true);
        echo " actor results for <strong>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</strong>. Select one to get movie information: <br/> <br/>
\t\tPage ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page"), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "total_pages"), "html", null, true);
        echo ".<br/><br/>
\t\t";
        // line 11
        if (($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "total_pages") > 1)) {
            // line 12
            echo "\t\t\t<div class=\"navigation_block\">
\t\t\t\t";
            // line 13
            if (($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") > 1)) {
                // line 14
                echo "\t\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t\t<a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("al_tests_php_search", array("page" => ($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") - 1), "name" => (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\">Previous</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
            if (($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") < $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "total_pages"))) {
                // line 19
                echo "\t\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t\t<a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("al_tests_php_search", array("page" => ($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") + 1), "name" => (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\">Next</a>
\t\t\t\t\t</div>\t
\t\t\t\t";
            }
            // line 22
            echo "\t
\t\t\t\t<br/><br/>
\t\t\t</div>
\t\t";
        }
        // line 25
        echo "\t
\t\t<ul id=\"results\">
\t\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "results"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 28
            echo "\t\t\t\t<li><div class=\"search_result\">\t\t\t\t
\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("al_tests_php_esearch", array("id" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), "name" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "name"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "name"), "html", null, true);
            echo "</a> <br/> <br/>
\t\t\t\t</div></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t</ul>
\t\t";
        // line 33
        if (($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "total_pages") > 1)) {
            // line 34
            echo "\t\t\t<div class=\"navigation_block\">
\t\t\t\t";
            // line 35
            if (($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") > 1)) {
                // line 36
                echo "\t\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t\t<a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("al_tests_php_search", array("page" => ($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") - 1), "name" => (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\">Previous</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t";
            if (($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") < $this->getAttribute((isset($context["response"]) ? $context["response"] : null), "total_pages"))) {
                // line 41
                echo "\t\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t\t<a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("al_tests_php_search", array("page" => ($this->getAttribute((isset($context["response"]) ? $context["response"] : null), "page") + 1), "name" => (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\">Next</a>
\t\t\t\t\t</div>\t
\t\t\t\t";
            }
            // line 44
            echo "\t
\t\t\t</div>
\t\t";
        }
        // line 46
        echo "\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ALTestsPHPBundle:Search:actors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 46,  137 => 42,  134 => 41,  120 => 35,  52 => 11,  37 => 6,  114 => 35,  84 => 22,  96 => 25,  74 => 32,  58 => 12,  126 => 40,  100 => 30,  90 => 25,  76 => 22,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 44,  135 => 53,  131 => 40,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 14,  59 => 14,  38 => 9,  94 => 27,  89 => 20,  85 => 25,  79 => 22,  75 => 19,  68 => 17,  56 => 11,  50 => 10,  29 => 3,  87 => 25,  72 => 18,  55 => 11,  21 => 2,  26 => 6,  98 => 28,  93 => 27,  88 => 21,  78 => 20,  46 => 7,  27 => 4,  40 => 7,  44 => 9,  35 => 4,  31 => 5,  43 => 9,  41 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 38,  117 => 34,  115 => 33,  105 => 40,  101 => 29,  91 => 27,  69 => 25,  66 => 15,  62 => 12,  49 => 10,  32 => 4,  25 => 2,  24 => 4,  53 => 13,  47 => 9,  28 => 4,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 37,  122 => 36,  116 => 41,  112 => 32,  109 => 34,  106 => 31,  103 => 31,  99 => 29,  95 => 28,  92 => 21,  86 => 8,  82 => 18,  80 => 7,  73 => 19,  64 => 17,  60 => 25,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 7,  36 => 8,  33 => 6,  30 => 7,);
    }
}
