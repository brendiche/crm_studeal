<?php

/* BGUserBundle:Default:user.html.twig */
class __TwigTemplate_e1f704337e73e427e9d0f26d280d01ec7caae92b5e27a641aef28d630758fd06 extends Twig_Template
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
\t\t\t\t\t";
        // line 12
        if ( !twig_test_empty((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")))) {
            // line 13
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 14
                echo "\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t\t\t<div class=\"well\" style=\"text-align:center\">
\t\t\t\t\t\t\t<h2>Vos n'avez pas encore de contact.</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t</div>\t
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("bg_plateform_add_client");
        echo "\">Ajouter client</a>
\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("bg_plateform_add_company");
        echo "\">Ajouter entreprise</a>
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
        return array (  85 => 26,  81 => 25,  77 => 23,  71 => 19,  68 => 18,  59 => 15,  56 => 14,  51 => 13,  49 => 12,  39 => 4,  36 => 3,  11 => 1,);
    }
}
