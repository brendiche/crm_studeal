<?php

/* BGPlateformBundle:Default:index.html.twig */
class __TwigTemplate_9bb8b5afe5c844326a15e2b541116e193513b59c3cd121bb0053a91d22256b1b extends Twig_Template
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

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-12 col-md-12 col-xs-12\" style=\"text-align:center\"> <h1>Assistant de gestion de contact</h1></div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BGPlateformBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
