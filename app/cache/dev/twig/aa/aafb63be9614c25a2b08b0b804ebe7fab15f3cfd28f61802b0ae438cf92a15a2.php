<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_87901ebe4bdcf55bfa9859ee146a45fd18ad6738765f6f02b740798e35a89a65 extends Twig_Template
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
        $__internal_95065a4ade4ad5f99773e86b60dfb00375c63088c12a56503589fe950f96c054 = $this->env->getExtension("native_profiler");
        $__internal_95065a4ade4ad5f99773e86b60dfb00375c63088c12a56503589fe950f96c054->enter($__internal_95065a4ade4ad5f99773e86b60dfb00375c63088c12a56503589fe950f96c054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_95065a4ade4ad5f99773e86b60dfb00375c63088c12a56503589fe950f96c054->leave($__internal_95065a4ade4ad5f99773e86b60dfb00375c63088c12a56503589fe950f96c054_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
