<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a179c69933b59edda3ee9193035da39695d4e5b981d4e58994a6d1b604dbe345 extends Twig_Template
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
        $__internal_57940ed7e7bc9faaf7c484ba266d131d4b74168eedcf8ba84d52b496c0a111e9 = $this->env->getExtension("native_profiler");
        $__internal_57940ed7e7bc9faaf7c484ba266d131d4b74168eedcf8ba84d52b496c0a111e9->enter($__internal_57940ed7e7bc9faaf7c484ba266d131d4b74168eedcf8ba84d52b496c0a111e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_57940ed7e7bc9faaf7c484ba266d131d4b74168eedcf8ba84d52b496c0a111e9->leave($__internal_57940ed7e7bc9faaf7c484ba266d131d4b74168eedcf8ba84d52b496c0a111e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
