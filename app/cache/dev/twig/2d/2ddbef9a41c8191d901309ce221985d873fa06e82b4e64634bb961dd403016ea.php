<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_385e6936be573cc44157cb03280c52629a7831d7b674b9b303aa977dc560aa74 extends Twig_Template
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
        $__internal_48ac9d7566905da142310c97e88f1182883a8dc25dfc433c00de20c26082d9ea = $this->env->getExtension("native_profiler");
        $__internal_48ac9d7566905da142310c97e88f1182883a8dc25dfc433c00de20c26082d9ea->enter($__internal_48ac9d7566905da142310c97e88f1182883a8dc25dfc433c00de20c26082d9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_48ac9d7566905da142310c97e88f1182883a8dc25dfc433c00de20c26082d9ea->leave($__internal_48ac9d7566905da142310c97e88f1182883a8dc25dfc433c00de20c26082d9ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */