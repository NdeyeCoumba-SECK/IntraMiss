<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4bd95bd4b190fc43f80c87dcd8cacb86b4554881470f55d181372813d84f9588 extends Twig_Template
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
        $__internal_5001dc07946c490ad3c180f67eb9d7f548561d4e07515444720e47abf8a730f9 = $this->env->getExtension("native_profiler");
        $__internal_5001dc07946c490ad3c180f67eb9d7f548561d4e07515444720e47abf8a730f9->enter($__internal_5001dc07946c490ad3c180f67eb9d7f548561d4e07515444720e47abf8a730f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5001dc07946c490ad3c180f67eb9d7f548561d4e07515444720e47abf8a730f9->leave($__internal_5001dc07946c490ad3c180f67eb9d7f548561d4e07515444720e47abf8a730f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
