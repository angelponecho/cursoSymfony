<?php

/* ZenvaWorkoutBundle:Default:index.html.twig */
class __TwigTemplate_31c2a48c70ec4d3500943583a06b3686ccc44e85151090531c8035aace8b7406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "una variable: ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "
largo de un arreglo: ";
        // line 2
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["workouts"]) ? $context["workouts"] : $this->getContext($context, "workouts"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ZenvaWorkoutBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
