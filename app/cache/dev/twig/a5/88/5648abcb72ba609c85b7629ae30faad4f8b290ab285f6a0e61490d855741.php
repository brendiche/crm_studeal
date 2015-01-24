<?php

/* BGPlateformBundle:Default:addClient.html.twig */
class __TwigTemplate_a5885648abcb72ba609c85b7629ae30faad4f8b290ab285f6a0e61490d855741 extends Twig_Template
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
        echo "\t<div class=\"content-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t\t ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t <div class=\"form-group\">
\t\t\t\t \t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom", array()), 'label', array("label_attr" => array("class" => "col-lg-3 control-label"), "label" => "Nom du client"));
        echo "
\t\t\t\t \t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom", array()), 'errors');
        echo "
\t\t\t\t \t<div class=\"col-lg-4\">
\t\t\t\t \t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t \t</div>
\t\t\t\t </div>
\t\t\t\t <div class=\"form-group\">
\t\t\t\t \t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Prenom", array()), 'label', array("label_attr" => array("class" => "col-lg-3 control-label"), "label" => "Prénom du client"));
        echo "
\t\t\t\t \t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Prenom", array()), 'errors');
        echo "
\t\t\t\t \t<div class=\"col-lg-4\">
\t\t\t\t \t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t \t</div>
\t\t\t\t </div>
\t\t\t\t <div class=\"form-group\">
\t\t\t\t \t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Email", array()), 'label', array("label_attr" => array("class" => "col-lg-3 control-label"), "label" => "Email du client"));
        echo "
\t\t\t\t \t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Email", array()), 'errors');
        echo "
\t\t\t\t\t <div class=\"col-lg-4\">
\t\t\t\t\t \t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Telephone", array()), 'label', array("label_attr" => array("class" => "col-lg-3 control-label"), "label" => "Téléphone du client"));
        echo "
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Telephone", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Coment", array()), 'label', array("label_attr" => array("class" => "col-lg-3 control-label"), "label" => "Commentaire"));
        echo "
\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Coment", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Coment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addCompany", array()), 'label', array("label_attr" => array("class" => "col-lg-3 control-label"), "label" => "Voulez vous lui associer une entreprise"));
        echo "
\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addCompany", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addCompany", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" id=\"company\">
\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Company", array()), 'label', array("label_attr" => array("class" => "col-lg-3 control-label"), "label" => "Entreprise du client"));
        echo "
\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Company", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Company", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-7\" style=\"text-align:center\">
\t\t\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t</div> 
\t\t\t\t</div>
\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t\t\t\t";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "BGPlateformBundle:Default:addClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 64,  172 => 62,  166 => 59,  158 => 54,  153 => 52,  149 => 51,  142 => 47,  137 => 45,  133 => 44,  126 => 40,  121 => 38,  117 => 37,  110 => 33,  105 => 31,  101 => 30,  94 => 26,  89 => 24,  85 => 23,  78 => 19,  73 => 17,  69 => 16,  62 => 12,  57 => 10,  53 => 9,  48 => 7,  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
