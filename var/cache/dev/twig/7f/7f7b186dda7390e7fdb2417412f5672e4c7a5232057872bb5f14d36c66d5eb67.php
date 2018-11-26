<?php

/* frontal/nuevaVista.html.twig */
class __TwigTemplate_68ee26b3958bf860afab3572811fba2767bd60b0111650baa70c95efafbbf7d1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/nuevaVista.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontal/nuevaVista.html.twig"));

        // line 1
        echo "<HTML>
   <HEAD>
      <TITLE> Contacto </TITLE>
   </HEAD>
   <BODY>
     <table border=1>
     ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vip"] ?? $this->getContext($context, "vip")));
        foreach ($context['_seq'] as $context["_key"] => $context["vips"]) {
            // line 8
            echo "      <th> <p>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["vip"] ?? $this->getContext($context, "vip")), "id", array()), "html", null, true);
            echo "</p> </th>
      <th> <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["vip"] ?? $this->getContext($context, "vip")), "nombre", array()), "html", null, true);
            echo "</p> </th>
      <th> <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["vip"] ?? $this->getContext($context, "vip")), "apellidos", array()), "html", null, true);
            echo "</p> </th>
      <th> <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["vip"] ?? $this->getContext($context, "vip")), "edad", array()), "html", null, true);
            echo "</p> </th>
      <th> <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["vip"] ?? $this->getContext($context, "vip")), "DNI", array()), "html", null, true);
            echo "</p> </th>
      <th> <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["vip"] ?? $this->getContext($context, "vip")), "cargo", array()), "html", null, true);
            echo "</p> </th>
      <th> <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["vip"] ?? $this->getContext($context, "vip")), "telefono", array()), "html", null, true);
            echo "</p> </th>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vips'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </table>
   </BODY>
</HTML>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontal/nuevaVista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  37 => 8,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<HTML>
   <HEAD>
      <TITLE> Contacto </TITLE>
   </HEAD>
   <BODY>
     <table border=1>
     {% for vips in vip %}
      <th> <p>{{ vip.id }}</p> </th>
      <th> <p>{{ vip.nombre }}</p> </th>
      <th> <p>{{ vip.apellidos }}</p> </th>
      <th> <p>{{ vip.edad }}</p> </th>
      <th> <p>{{ vip.DNI }}</p> </th>
      <th> <p>{{ vip.cargo }}</p> </th>
      <th> <p>{{ vip.telefono }}</p> </th>
       {% endfor %}
      </table>
   </BODY>
</HTML>
", "frontal/nuevaVista.html.twig", "C:\\xampp\\htdocs\\2daw\\Programacion\\Symfony\\Examen\\app\\Resources\\views\\frontal\\nuevaVista.html.twig");
    }
}
