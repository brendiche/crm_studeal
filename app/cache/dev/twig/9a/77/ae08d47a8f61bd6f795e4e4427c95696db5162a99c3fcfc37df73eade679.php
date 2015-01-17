<?php

/* ::layout/home.html.twig */
class __TwigTemplate_9a77ae08d47a8f61bd6f795e4e4427c95696db5162a99c3fcfc37df73eade679 extends Twig_Template
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
        echo "\">Orm - Studeal</a>
\t\t\t</div>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t";
        // line 10
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 11
            echo "\t\t\t\t<li class=\"btn-primary\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bg_plateform_user", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" style=\"color:black;text-align:center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t<li class=\"btn-danger\"><a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" style=\"color:black;text-align:center\">Déconnexion</a></li>\t\t\t\t\t
\t\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t<li class=\"btn-info\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" style=\"color:black;text-align:center\">Connexion</a></li>
\t\t\t\t<li class=\"btn-success\"><a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" style=\"color:black;text-align:center\">Inscription</a></li>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t</ul>
\t\t</div>
\t</nav>
    ";
        // line 20
        $this->displayBlock('main', $context, $blocks);
        // line 21
        echo "    \t
";
    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        // line 21
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
        return array (  90 => 21,  87 => 20,  82 => 21,  80 => 20,  75 => 17,  70 => 15,  65 => 14,  60 => 12,  53 => 11,  51 => 10,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
