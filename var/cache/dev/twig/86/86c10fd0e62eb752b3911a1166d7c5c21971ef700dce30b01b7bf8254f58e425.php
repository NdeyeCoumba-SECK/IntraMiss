<?php

/* ::principale.html.twig */
class __TwigTemplate_c293a6cffbe30064c9abdf33cd4eccfad6bd9592f8f77b90096f02cddbbbdae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c86e6b6bda46a1033e0c80a5a01e7e8b7ef03a6b45e7c8dcccdb525925c9b4e5 = $this->env->getExtension("native_profiler");
        $__internal_c86e6b6bda46a1033e0c80a5a01e7e8b7ef03a6b45e7c8dcccdb525925c9b4e5->enter($__internal_c86e6b6bda46a1033e0c80a5a01e7e8b7ef03a6b45e7c8dcccdb525925c9b4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::principale.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_c86e6b6bda46a1033e0c80a5a01e7e8b7ef03a6b45e7c8dcccdb525925c9b4e5->leave($__internal_c86e6b6bda46a1033e0c80a5a01e7e8b7ef03a6b45e7c8dcccdb525925c9b4e5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_210cdadf3f9c4596d86e40c8494e0343297f02b0a72524fc61f6bb859d2511a5 = $this->env->getExtension("native_profiler");
        $__internal_210cdadf3f9c4596d86e40c8494e0343297f02b0a72524fc61f6bb859d2511a5->enter($__internal_210cdadf3f9c4596d86e40c8494e0343297f02b0a72524fc61f6bb859d2511a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_210cdadf3f9c4596d86e40c8494e0343297f02b0a72524fc61f6bb859d2511a5->leave($__internal_210cdadf3f9c4596d86e40c8494e0343297f02b0a72524fc61f6bb859d2511a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be757f959f58f2d24b7bf205d6046eb6de763493e295c444a4ceba52ae978426 = $this->env->getExtension("native_profiler");
        $__internal_be757f959f58f2d24b7bf205d6046eb6de763493e295c444a4ceba52ae978426->enter($__internal_be757f959f58f2d24b7bf205d6046eb6de763493e295c444a4ceba52ae978426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "           <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
           <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
           <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_be757f959f58f2d24b7bf205d6046eb6de763493e295c444a4ceba52ae978426->leave($__internal_be757f959f58f2d24b7bf205d6046eb6de763493e295c444a4ceba52ae978426_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_62287cb560c1ca404550d3d969de82d5f5b61385a52dc7c1878a31281684896f = $this->env->getExtension("native_profiler");
        $__internal_62287cb560c1ca404550d3d969de82d5f5b61385a52dc7c1878a31281684896f->enter($__internal_62287cb560c1ca404550d3d969de82d5f5b61385a52dc7c1878a31281684896f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62287cb560c1ca404550d3d969de82d5f5b61385a52dc7c1878a31281684896f->leave($__internal_62287cb560c1ca404550d3d969de82d5f5b61385a52dc7c1878a31281684896f_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8d982801baeffee23e031a45156ebec70dd3b63e665368dc2680f5de7ac1386 = $this->env->getExtension("native_profiler");
        $__internal_f8d982801baeffee23e031a45156ebec70dd3b63e665368dc2680f5de7ac1386->enter($__internal_f8d982801baeffee23e031a45156ebec70dd3b63e665368dc2680f5de7ac1386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_f8d982801baeffee23e031a45156ebec70dd3b63e665368dc2680f5de7ac1386->leave($__internal_f8d982801baeffee23e031a45156ebec70dd3b63e665368dc2680f5de7ac1386_prof);

    }

    public function getTemplateName()
    {
        return "::principale.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 16,  109 => 15,  103 => 14,  92 => 13,  83 => 9,  79 => 8,  74 => 7,  68 => 6,  56 => 5,  47 => 18,  44 => 14,  42 => 13,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*            <link href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/*            <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet" />*/
/*            <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*          <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*          <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
