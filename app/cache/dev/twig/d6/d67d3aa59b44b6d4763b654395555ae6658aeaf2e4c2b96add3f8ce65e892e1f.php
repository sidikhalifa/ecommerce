<?php

/* @FOSUser/Resetting/reset_content.html.twig */
class __TwigTemplate_b03164c9c48634a6f2e67d68e4d0eff53a0023ce5419dbe6b5329ee2ed60a60a extends Twig_Template
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
        $__internal_8336c4834844a4f1c55003c7528bca0615c369d572a5ed643df3e8d29f4ff6ea = $this->env->getExtension("native_profiler");
        $__internal_8336c4834844a4f1c55003c7528bca0615c369d572a5ed643df3e8d29f4ff6ea->enter($__internal_8336c4834844a4f1c55003c7528bca0615c369d572a5ed643df3e8d29f4ff6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

        // line 2
        echo "<div class=\"row\">
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>R�cup�ration du mot de passe ?</h4>
                    <em>
                        Compl�ter le formulaire, votre mot de passe sera alors r�initialiser.<br /><br />
                        Une fois valid�, vous devrez utiliser le nouveau mot de passe que vous avez d�fini.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                        <br />
                         <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_8336c4834844a4f1c55003c7528bca0615c369d572a5ed643df3e8d29f4ff6ea->leave($__internal_8336c4834844a4f1c55003c7528bca0615c369d572a5ed643df3e8d29f4ff6ea_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  42 => 17,  38 => 16,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="row">*/
/*     <div class="span12">*/
/*         <h2>Mot de passe perdu</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/*                 <div class="span4">*/
/*                     <h4>R�cup�ration du mot de passe ?</h4>*/
/*                     <em>*/
/*                         Compl�ter le formulaire, votre mot de passe sera alors r�initialiser.<br /><br />*/
/*                         Une fois valid�, vous devrez utiliser le nouveau mot de passe que vous avez d�fini.*/
/*                     </em>*/
/*                 </div>*/
/* */
/*                 <div class="span4 offset2">*/
/*                     {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*                     {{ form_widget(form) }}*/
/* */
/*                         <br />*/
/*                          <input class="btn btn-primary" type="submit" value="{{ 'resetting.reset.submit'|trans }}" />*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */