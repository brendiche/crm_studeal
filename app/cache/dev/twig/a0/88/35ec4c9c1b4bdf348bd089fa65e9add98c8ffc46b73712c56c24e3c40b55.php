<?php

/* ::layout/home.html.twig */
class __TwigTemplate_a08835ec4c9c1b4bdf348bd089fa65e9add98c8ffc46b73712c56c24e3c40b55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<nav class=\"navbar navbar-default\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("bg_plateform_home");
        echo "\">Crm - Studeal</a>
\t\t\t</div>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t";
        // line 10
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 11
            echo "\t\t\t\t<li class=\"dropdown btn-primary\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" style=\"color:black;text-align:center\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t                  <li><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bg_plateform_user", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Répertoire</a></li>
\t                  <li class=\"divider\"></li>
\t                  <li><a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Mon compte</a></li>
\t                </ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"btn-danger\"><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" style=\"color:black;text-align:center\">Déconnexion</a></li>\t\t\t\t\t
\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t<li class=\"btn-info\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" style=\"color:black;text-align:center\">Connexion</a></li>
\t\t\t\t<li class=\"btn-success\"><a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" style=\"color:black;text-align:center\">Inscription</a></li>
\t\t\t\t";
        }
        // line 24
        echo "\t\t\t</ul>
\t\t</div>
\t</nav>
    ";
        // line 27
        $this->displayBlock('main', $context, $blocks);
        // line 28
        echo "    \t
";
    }

    // line 27
    public function block_main($context, array $blocks = array())
    {
        // line 28
        echo "\t";
    }

    public function getTemplateName()
    {
        return "::layout/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  99 => 27,  94 => 28,  92 => 27,  87 => 24,  82 => 22,  77 => 21,  72 => 19,  66 => 16,  61 => 14,  56 => 12,  53 => 11,  51 => 10,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
