<?php

/* BGPlateformBundle:Default:error.html.twig */
class __TwigTemplate_cf4e5325ebcd541b529d1dc668f323bd25822e92bbc9fafceed090ec912cc9a8 extends Twig_Template
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
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\"><h1>403 - Erreur.</h1></div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\"><h3>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "</h3></div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "BGPlateformBundle:Default:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
