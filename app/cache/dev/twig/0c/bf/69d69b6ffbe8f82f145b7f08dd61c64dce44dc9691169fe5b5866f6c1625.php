<?php

/* default/index.html.twig */
class __TwigTemplate_0cbf69d69b6ffbe8f82f145b7f08dd61c64dce44dc9691169fe5b5866f6c1625 extends Twig_Template
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
        echo "\t";
        // line 5
        echo "\t<form id=\"ajaxform\" action=\"/symfony_test\">
\t\t<select id=\"client_id\" name=\"client_id\">
\t\t\t<option value=\"0\">Select</option>
\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 9
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "clientId", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "clientName", array()), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t</select>
\t\t<select id=\"datefilter\" name=\"datefilter\">
\t\t\t<option value=\"0\">Select</option>
\t\t\t<option value=\"1\">This Month</option>
\t\t\t<option value=\"2\">This Year</option>
\t\t\t<option value=\"3\">Last Year</option>
\t\t</select>
\t\t<br/><br/>
\t\t<select id=\"product_id\" name=\"product_id\">
\t\t\t<option value=\"0\">Select</option>
\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 22
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_description", array()), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</select>
\t\t <br/><br/>
  \t\t<input type=\"submit\" id=\"submit\" value=\"Submit\">
\t\t<br/><br/>
\t</form> 
<div id=\"result\">

</div>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  77 => 22,  73 => 21,  61 => 11,  50 => 9,  46 => 8,  41 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
