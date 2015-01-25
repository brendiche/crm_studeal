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
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\" >
\t\t\t\t<h3>Répertoire</h3>
\t\t\t\t<div id=\"tabs\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#tabs-1\">Clients</a></li>
\t\t\t\t\t\t<li><a href=\"#tabs-2\">Entreprises</a></li>
\t\t\t\t\t\t<li><a href=\"#tabs-3\">Oportunités</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"tabs-1\">
\t\t\t\t\t\t";
        // line 15
        if ( !twig_test_empty((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")))) {
            // line 16
            echo "
\t\t\t\t\t\t\t";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 18
                echo "\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["client"], "coment", array()))) {
                    // line 19
                    echo "\t\t\t\t\t\t\t\t<div class=\"well\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "coment", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                } else {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t\t\t\t<strong>Nom : </strong>
\t\t\t\t\t\t\t\t\t";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "prenom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t<strong>| Email : </strong>
\t\t\t\t\t\t\t\t\t";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
                echo " 
\t\t\t\t\t\t\t\t\t<strong>| Téléphone : </strong>
\t\t\t\t\t\t\t\t\t\t0";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "telephone", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t";
                // line 30
                if ( !twig_test_empty($this->getAttribute($context["client"], "Company", array()))) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t\t\t<strong>Entreprise : </strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "Company", array()), "nom", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t\t\tCe client n'est pas rattaché à une entreprise.
\t\t\t\t\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["client"], "Oportunity", array()))) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t";
                    // line 37
                    if (($this->getAttribute($this->getAttribute($context["client"], "Oportunity", array()), "state", array()) == "f")) {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn-info\"><strong>État de l'oportunité : </strong>Froid</span>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute($this->getAttribute($context["client"], "OPortunity", array()), "state", array()) == "c")) {
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn-warning\"><strong>État de l'oportunité : </strong>Chaud</span>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute($this->getAttribute($context["client"], "Oportunity", array()), "state", array()) == "cs")) {
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn-danger\"><strong>État de l'oportunité : </strong>Contrat signé</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<strong>Pas d'oportunité</strong>
\t\t\t\t\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\" style=\"margin-top:20px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bg_plateform_edit_client", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\" style=\"width:100%\">Editer le client</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\" style=\"margin-top:20px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bg_plateform_delete_client", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\" >Supprimer le client</a>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\" style=\"margin-top:20px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 56
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
            // line 61
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 62
            echo "\t\t\t\t\t\t\t<div class=\"well\" style=\"text-align:center\">
\t\t\t\t\t\t\t\t<h3>Vos n'avez pas encore enregisté de client.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"tabs-2\">
\t\t\t\t\t\t";
        // line 68
        if ( !twig_test_empty((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")))) {
            // line 69
            echo "
\t\t\t\t\t\t\t";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                // line 71
                echo "\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["company"], "coment", array()))) {
                    // line 72
                    echo "\t\t\t\t\t\t\t\t<div class=\"well\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "coment", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                } else {
                    // line 74
                    echo "\t\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t";
                }
                // line 76
                echo "\t\t\t\t\t\t\t\t\t<strong>Nom : </strong>
\t\t\t\t\t\t\t\t\t";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "nom", array()), "html", null, true);
                echo " 
\t\t\t\t\t\t\t\t\t<strong>| Adresse : </strong>
\t\t\t\t\t\t\t\t\t";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "adresse", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t<strong>| SIRET : </strong>
\t\t\t\t\t\t\t\t\t";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "sIRET", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3\" style=\"margin-top:20px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bg_plateform_edit_company", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\" style=\"width:100%\">Editer l'entreprise</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" style=\"margin-top:20px\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 87
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
            // line 92
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 93
            echo "\t\t\t\t\t\t\t<div class=\"well\" style=\"text-align:center\">
\t\t\t\t\t\t\t\t<h3>Vos n'avez pas encore enregisté d'entreprise.</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t<div id=\"tabs-3\">
\t\t\t\t\t";
        // line 99
        if ( !twig_test_empty((isset($context["oportunities"]) ? $context["oportunities"] : $this->getContext($context, "oportunities")))) {
            // line 100
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["oportunities"]) ? $context["oportunities"] : $this->getContext($context, "oportunities")));
            foreach ($context['_seq'] as $context["_key"] => $context["oportunity"]) {
                // line 101
                echo "\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t<strong>Contenu : </strong>
\t\t\t\t\t\t\t";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["oportunity"], "content", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<strong>État : </strong>
\t\t\t\t\t\t\t\t";
                // line 106
                if (($this->getAttribute($context["oportunity"], "state", array()) == "f")) {
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn-info\">Froid</span>
\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($context["oportunity"], "state", array()) == "c")) {
                    // line 109
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn-warning\">Chaud</span>
\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($context["oportunity"], "state", array()) == "cs")) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn-danger\">Contrat signé</span>
\t\t\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oportunity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "\t\t\t\t\t";
        } else {
            // line 116
            echo "\t\t\t\t\t<div class=\"well\" style=\"text-align:center\">
\t\t\t\t\t\t<h3>Vos n'avez pas encore enregisté d'opportunité.</h3>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 120
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("bg_plateform_add_client");
        echo "\">Ajouter client</a>
\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("bg_plateform_add_company");
        echo "\">Ajouter entreprise</a>
\t\t\t</div>
\t\t</div>
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
        return array (  303 => 125,  299 => 124,  293 => 120,  287 => 116,  284 => 115,  277 => 113,  273 => 111,  269 => 109,  265 => 107,  263 => 106,  257 => 103,  253 => 101,  248 => 100,  246 => 99,  241 => 96,  235 => 93,  232 => 92,  221 => 87,  215 => 84,  209 => 81,  204 => 79,  199 => 77,  196 => 76,  192 => 74,  186 => 72,  183 => 71,  179 => 70,  176 => 69,  174 => 68,  170 => 66,  164 => 62,  161 => 61,  150 => 56,  144 => 53,  138 => 50,  134 => 48,  129 => 45,  126 => 44,  122 => 42,  118 => 40,  114 => 38,  112 => 37,  109 => 36,  106 => 35,  102 => 33,  96 => 31,  94 => 30,  89 => 28,  84 => 26,  77 => 24,  74 => 23,  70 => 21,  64 => 19,  61 => 18,  57 => 17,  54 => 16,  52 => 15,  39 => 4,  36 => 3,  11 => 1,);
    }
}
