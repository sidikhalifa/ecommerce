<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_47403f5d9544967b1631215e8d62edeb036c929b9e39abb7c38a72f7339959b2 extends Twig_Template
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
        $__internal_844ba8a4edc3e7f0c8ca22b9a201511817fd9baf40d54fa7bedb319c8a23aa30 = $this->env->getExtension("native_profiler");
        $__internal_844ba8a4edc3e7f0c8ca22b9a201511817fd9baf40d54fa7bedb319c8a23aa30->enter($__internal_844ba8a4edc3e7f0c8ca22b9a201511817fd9baf40d54fa7bedb319c8a23aa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_844ba8a4edc3e7f0c8ca22b9a201511817fd9baf40d54fa7bedb319c8a23aa30->leave($__internal_844ba8a4edc3e7f0c8ca22b9a201511817fd9baf40d54fa7bedb319c8a23aa30_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
