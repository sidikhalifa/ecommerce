<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_0bc6631ac97d425225cdef36243796d432a5e75bde198830a252e6ab42026a60 extends Twig_Template
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
        $__internal_08b6c900b070f5e3840b9b4417c0f9b82ddeb1abb2705917db99ba1340da5136 = $this->env->getExtension("native_profiler");
        $__internal_08b6c900b070f5e3840b9b4417c0f9b82ddeb1abb2705917db99ba1340da5136->enter($__internal_08b6c900b070f5e3840b9b4417c0f9b82ddeb1abb2705917db99ba1340da5136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_08b6c900b070f5e3840b9b4417c0f9b82ddeb1abb2705917db99ba1340da5136->leave($__internal_08b6c900b070f5e3840b9b4417c0f9b82ddeb1abb2705917db99ba1340da5136_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
