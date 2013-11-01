<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_6c5fde84931d6ed12c08eab2d5849e16c21a33f4116d37698fd79eabaf51ca69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  47 => 25,  41 => 23,  37 => 21,  35 => 20,  23 => 12,  20 => 11,  34 => 16,  31 => 19,  29 => 13,  26 => 14,  22 => 12,  19 => 11,);
    }
}
