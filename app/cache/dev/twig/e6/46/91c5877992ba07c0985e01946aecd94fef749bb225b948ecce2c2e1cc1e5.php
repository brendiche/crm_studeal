<?php

/* BGUserBundle:Default:admin_user.html.twig */
class __TwigTemplate_e64691c5877992ba07c0985e01946aecd94fef749bb225b948ecce2c2e1cc1e5 extends Twig_Template
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
        echo "\t<div class=\"container-fluid\">
\t\t<din class=\"row\">
\t\t\t<div class=\"col-lg-6\" >
\t\t\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 7
            echo "\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t<strong>Username : </strong>
\t\t\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "
\t\t\t\t\t\t<strong>Email : </strong>
\t\t\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a class=\"btn btn-success\" style=\"margin-top:20px\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bg_plateform_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Voir le répertoire</a>
\t\t\t\t\t\t<a class=\"btn btn-danger\" style=\"margin-top:20px\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bg_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"> Supprimer le compte </a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "BGUserBundle:Default:admin_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  66 => 14,  62 => 13,  57 => 11,  52 => 9,  48 => 7,  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
