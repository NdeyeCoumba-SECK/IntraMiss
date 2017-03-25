<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6ff6a6dd66b17478c2eb207d16d18cdf2dfea39feca9dbc3afd6a2f9e1f291c4 extends Twig_Template
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
        $__internal_0c4c7277181c634f3dee38d0f0392053e1d7068586f151949446c64b1d1fd481 = $this->env->getExtension("native_profiler");
        $__internal_0c4c7277181c634f3dee38d0f0392053e1d7068586f151949446c64b1d1fd481->enter($__internal_0c4c7277181c634f3dee38d0f0392053e1d7068586f151949446c64b1d1fd481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0c4c7277181c634f3dee38d0f0392053e1d7068586f151949446c64b1d1fd481->leave($__internal_0c4c7277181c634f3dee38d0f0392053e1d7068586f151949446c64b1d1fd481_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
