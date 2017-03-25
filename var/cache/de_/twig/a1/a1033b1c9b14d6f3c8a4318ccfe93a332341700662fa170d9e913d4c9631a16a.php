<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b45cacd6c5f6a7e4ecac663dbff6f4a777f444f837c85515420d31146be9edcc extends Twig_Template
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
        $__internal_c58ec95f41c2e2f7b026e2776a6453769703ba22958055424d06d130a8ca34dd = $this->env->getExtension("native_profiler");
        $__internal_c58ec95f41c2e2f7b026e2776a6453769703ba22958055424d06d130a8ca34dd->enter($__internal_c58ec95f41c2e2f7b026e2776a6453769703ba22958055424d06d130a8ca34dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c58ec95f41c2e2f7b026e2776a6453769703ba22958055424d06d130a8ca34dd->leave($__internal_c58ec95f41c2e2f7b026e2776a6453769703ba22958055424d06d130a8ca34dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
