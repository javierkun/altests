<?php

/* ALTestsPHPBundle:Search:index.html.twig */
class __TwigTemplate_3a2407ee4aaa05b4b3275d526c43ca3f6b44834a0d7d5a6447dafe812f87d969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ALTestsPHPBundle:Search:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'search_box' => array($this, 'block_search_box'),
            'flash_messages' => array($this, 'block_flash_messages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ALTestsPHPBundle:Search:base.html.twig";
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    <style>@import url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/altestsajax/css/styles.css"), "html", null, true);
        echo "');</style>
";
    }

    // line 9
    public function block_search_box($context, array $blocks = array())
    {
        // line 10
        echo "\t<div class=\"search_box\">
\t<br/>
\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
\t\t<div class=\"help_line\"><h6>Help!</h6></div>
\t\t<div>
\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'widget');
        echo "
\t\t</div>
\t
\t\t<div>
\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "search"), 'widget');
        echo "
\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lucky_search"), 'widget');
        echo "
\t\t</div>
\t";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t</div>
";
    }

    // line 25
    public function block_flash_messages($context, array $blocks = array())
    {
        // line 26
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "flash"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "\t\t<div class=\"flash-notice\">
\t\t\t<br/>
\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ALTestsPHPBundle:Search:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  148 => 46,  137 => 42,  134 => 41,  120 => 35,  52 => 10,  37 => 6,  114 => 35,  84 => 22,  96 => 25,  74 => 32,  58 => 12,  126 => 40,  100 => 30,  90 => 25,  76 => 22,  53 => 13,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 44,  135 => 53,  131 => 40,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 14,  59 => 14,  47 => 9,  38 => 9,  94 => 27,  89 => 20,  85 => 25,  79 => 22,  75 => 19,  68 => 17,  56 => 12,  29 => 3,  87 => 25,  72 => 18,  55 => 11,  21 => 2,  26 => 6,  98 => 28,  93 => 27,  88 => 26,  78 => 22,  46 => 7,  27 => 4,  40 => 7,  35 => 4,  31 => 3,  43 => 9,  41 => 8,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 38,  117 => 34,  115 => 33,  105 => 40,  101 => 29,  91 => 27,  69 => 19,  66 => 15,  62 => 15,  49 => 9,  32 => 4,  25 => 2,  24 => 4,  50 => 10,  44 => 9,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 37,  122 => 36,  116 => 41,  112 => 32,  109 => 34,  106 => 31,  103 => 31,  99 => 29,  95 => 28,  92 => 21,  86 => 8,  82 => 18,  80 => 7,  73 => 20,  64 => 17,  60 => 25,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 6,  36 => 8,  33 => 6,  30 => 7,);
    }
}
