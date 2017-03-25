<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b4b799a43ad643b820ded1dff181521af9aa949a849a316f552983e77c6468e9 extends Twig_Template
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
        $__internal_e254b6d36c6d82e1785f10a8b10b82b6320a21142f90836194b7f433a18425ef = $this->env->getExtension("native_profiler");
        $__internal_e254b6d36c6d82e1785f10a8b10b82b6320a21142f90836194b7f433a18425ef->enter($__internal_e254b6d36c6d82e1785f10a8b10b82b6320a21142f90836194b7f433a18425ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e254b6d36c6d82e1785f10a8b10b82b6320a21142f90836194b7f433a18425ef->leave($__internal_e254b6d36c6d82e1785f10a8b10b82b6320a21142f90836194b7f433a18425ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
