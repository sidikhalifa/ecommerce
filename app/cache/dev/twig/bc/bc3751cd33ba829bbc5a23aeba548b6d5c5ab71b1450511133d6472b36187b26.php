<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_a68490ab1b4fadc0bba9d3dadcdf969451a129473655bcd5472a574ac7b56530 extends Twig_Template
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
        $__internal_01e4c7e675f4f1fdcf1721eaf4f8f09a53292db4217f48465cef7c4ab0398296 = $this->env->getExtension("native_profiler");
        $__internal_01e4c7e675f4f1fdcf1721eaf4f8f09a53292db4217f48465cef7c4ab0398296->enter($__internal_01e4c7e675f4f1fdcf1721eaf4f8f09a53292db4217f48465cef7c4ab0398296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Vous avez perdu votre mot de passe ?</h4>
                    <em>
                        Compl�ter le formulaire, un email vous seras envoy�.<br />
                        Il contiendra la proc�dure � suivre pour r�cup�rer votre mot de passe.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                        <label for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                        <br />
                        <input type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



";
        
        $__internal_01e4c7e675f4f1fdcf1721eaf4f8f09a53292db4217f48465cef7c4ab0398296->leave($__internal_01e4c7e675f4f1fdcf1721eaf4f8f09a53292db4217f48465cef7c4ab0398296_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 21,  43 => 18,  39 => 17,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/*     <div class="span12">*/
/*         <h2>Mot de passe perdu</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/*                 <div class="span4">*/
/*                     <h4>Vous avez perdu votre mot de passe ?</h4>*/
/*                     <em>*/
/*                         Compl�ter le formulaire, un email vous seras envoy�.<br />*/
/*                         Il contiendra la proc�dure � suivre pour r�cup�rer votre mot de passe.*/
/*                     </em>*/
/*                 </div>*/
/* */
/*                 <div class="span4 offset2">*/
/*                     <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*                         <label for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*                         <input type="text" id="username" name="username" required="required" />*/
/*                         <br />*/
/*                         <input type="submit" value="{{ 'resetting.request.submit'|trans }}" class="btn btn-primary" />*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
