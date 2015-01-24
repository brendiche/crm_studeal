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
\t\t\t\t<div id=\"tabs\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li ><a href=\"#tabs-1\">Client</a></li>
\t\t\t\t\t\t<li><a href=\"#tabs-2\">Entreprise</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"tabs-1\">
\t\t\t\t\t\t";
        // line 14
        if ( !twig_test_empty((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")))) {
            // line 15
            echo "
\t\t\t\t\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 17
                echo "\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["client"], "coment", array()))) {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t<div class=\"well\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "coment", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                } else {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t\t\t\t\t<strong>Nom : </strong>
\t\t\t\t\t\t\t\t\t";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "prenom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t<strong>| Email : </strong>
\t\t\t\t\t\t\t\t\t";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
                echo " 
\t\t\t\t\t\t\t\t\t<strong>| Téléphone : </strong>
\t\t\t\t\t\t\t\t\t";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "telephone", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t";
                // line 29
                if ( !twig_test_empty($this->getAttribute($context["client"], "Company", array()))) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t\t<strong>Entreprise : </strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "Company", array()), "nom", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t\t\tCe client n'est pas rattaché à une entreprise.
\t\t\t\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["client"], "Oportunity", array()))) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "Oportunity", array()), "state", array()), "html", null, true);
                    echo "</strong>
\t\t\t\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\" style=\"margin-top:20px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bg_plateform_edit_client", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\" style=\"width:100%\">Editer le client</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\" style=\"margin-top:20px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bg_plateform_delete_client", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\" >Supprimer le client</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\" style=\"margin-top:20px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bg_plateform_oportunity", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\"  >Ajouter une opportunité</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t\t\t<div class=\"well\" style=\"text-align:center\">
\t\t\t\t\t\t\t\t<h3>Vos n'avez pas encore enregisté de client.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"tabs-2\">
\t\t\t\t\t\t";
        // line 58
        if ( !twig_test_empty((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")))) {
            // line 59
            echo "
\t\t\t\t\t\t\t";
            // line 60
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                // line 61
                echo "\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["company"], "coment", array()))) {
                    // line 62
                    echo "\t\t\t\t\t\t\t\t<div class=\"well\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "coment", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                } else {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t\t\t\t<strong>Nom : </strong>
\t\t\t\t\t\t\t\t\t";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "nom", array()), "html", null, true);
                echo " 
\t\t\t\t\t\t\t\t\t<strong>| Adresse : </strong>
\t\t\t\t\t\t\t\t\t";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "adresse", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t<strong>| SIRET : </strong>
\t\t\t\t\t\t\t\t\t";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "sIRET", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\" style=\"margin-top:20px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bg_plateform_edit_company", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\" style=\"width:100%\">Editer l'entreprise</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" style=\"margin-top:20px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bg_plateform_delete_company", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\" style=\"width:100%\">Supprimer l'entreprise</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 83
            echo "\t\t\t\t\t\t\t<div class=\"well\" style=\"text-align:center\">
\t\t\t\t\t\t\t\t<h3>Vos n'avez pas encore enregisté d'entreprise.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("bg_plateform_add_client");
        echo "\">Ajouter client</a>
\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 92
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
        return array (  233 => 92,  229 => 91,  223 => 87,  217 => 83,  214 => 82,  203 => 77,  197 => 74,  191 => 71,  186 => 69,  181 => 67,  178 => 66,  174 => 64,  168 => 62,  165 => 61,  161 => 60,  158 => 59,  156 => 58,  152 => 56,  146 => 52,  143 => 51,  132 => 46,  126 => 43,  120 => 40,  116 => 38,  111 => 36,  108 => 35,  105 => 34,  101 => 32,  95 => 30,  93 => 29,  88 => 27,  83 => 25,  76 => 23,  73 => 22,  69 => 20,  63 => 18,  60 => 17,  56 => 16,  53 => 15,  51 => 14,  39 => 4,  36 => 3,  11 => 1,);
    }
}
