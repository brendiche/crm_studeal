<?php

/* BGUserBundle:Default:user.html.twig */
class __TwigTemplate_1790e2d3ca8cda8ed8a7c0a39fc4183f5b8129bc31953783cdf9c7d6bc7bd244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout/home.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"container-fluid\">
\t\t<din class=\"row\">
\t\t\t<div class=\"col-lg-6\" >
\t\t\t\t<h3>Répertoire</h3>
\t\t\t\t\t<ul class=\"nav nav-tabs nav-justified\">
\t\t\t\t\t\t<li ><a href=\"#\">Client</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Entreprise</a></li>
\t\t\t\t\t</ul>
\t\t\t\t<div class=\"well\">
\t\t\t\t\tuser1
\t\t\t\t</div>
\t\t\t\t<div class=\"well\">
\t\t\t\t\tuser2
\t\t\t\t</div>
\t\t\t\t<div class=\"well\">
\t\t\t\t\tuser3
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("bg_plateform_add_client");
        echo "\">Ajouter client</a>
\t\t\t\t<a class=\"btn btn-default\">Ajouter entreprise</a>
\t\t\t</div>
\t\t</din>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "BGUserBundle:Default:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 23,  39 => 4,  36 => 3,  11 => 1,);
    }
}
