<?php

/* default/newgame.html.twig */
class __TwigTemplate_bcfe060de48f77950983d641e6a19a916d856cc59247decba6e732417c148032 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/newgame.html.twig", 1);
        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'java' => [$this, 'block_java'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/newgame.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "

    <div>
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "numberPlayers", []), 'label');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "numberPlayers", []), 'widget');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "numberPlayers", []), 'errors');
        echo "
    </div>

    <div id=\"players\">

        ";
        // line 19
        echo "            ";
        // line 20
        echo "            ";
        // line 21
        echo "
        ";
        // line 23
        echo "
        ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, true), "numberPlayers", [], "array", false, true), "vars", [], "any", false, true), "value", [], "array", true, true)) {
            // line 25
            echo "            ";
            $context["numberPlayers"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "children", []), "numberPlayers", [], "array"), "vars", []), "value", [], "array");
            // line 26
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numberPlayers"]) || array_key_exists("numberPlayers", $context) ? $context["numberPlayers"] : (function () { throw new Twig_Error_Runtime('Variable "numberPlayers" does not exist.', 26, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 27
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, true), ("name" . $context["i"]), [], "array", true, true)) {
                    // line 28
                    echo "                    <div>
                        ";
                    // line 29
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), ("name" . $context["i"])), 'label');
                    echo "
                        ";
                    // line 30
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), ("name" . $context["i"])), 'widget');
                    echo "
                        ";
                    // line 31
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), ("name" . $context["i"])), 'errors');
                    echo "
                    </div>
                ";
                }
                // line 34
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        ";
        }
        // line 37
        echo "    </div>

    <div>
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "save", []), 'label');
        echo "
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "save", []), 'widget');
        echo "
    </div>

    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_java($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "java"));

        // line 49
        echo "    <script>
        \$('#new_game_numberPlayers').on('change', function() {
            \$(\"#players\").empty();
            var value = \$(this).val();
            for (var i = 1; i <= value; i++) {
                var name = \"<div>\"+\"<label for='new_game_name\" + i + \"' class='required'>Nazwa gracza\" + i + \":</label>\"+
                    \"<input type='text' id='new_game_name\" + i + \"' name='new_game[name\" + i + \"]' required='required' />\"+
                    \"</div>\";
                \$(\"#players\").append(name);
            }


        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/newgame.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  157 => 48,  147 => 44,  141 => 41,  137 => 40,  132 => 37,  129 => 36,  122 => 34,  116 => 31,  112 => 30,  108 => 29,  105 => 28,  102 => 27,  97 => 26,  94 => 25,  92 => 24,  89 => 23,  86 => 21,  84 => 20,  82 => 19,  74 => 13,  70 => 12,  66 => 11,  60 => 8,  57 => 7,  51 => 6,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block stylesheets %}
{% endblock %}

{% block body %}

    {{ form_start(form) }}

    <div>
        {{ form_label(form.numberPlayers) }}
        {{ form_widget(form.numberPlayers) }}
        {{ form_errors(form.numberPlayers) }}
    </div>

    <div id=\"players\">

        {#<div>#}
            {#<label for=\"new_game_name1\" class=\"required\">Nazwa gracza 1:</label>#}
            {#<input type=\"text\" id=\"new_game_name1\" name=\"new_game[name1]\" required=\"required\" />#}

        {#</div>#}

        {% if form.children['numberPlayers'].vars['value'] is defined %}
            {% set numberPlayers = form.children['numberPlayers'].vars['value'] %}
            {% for i in range(1, numberPlayers) %}
                {% if form.children['name' ~ i] is defined %}
                    <div>
                        {{ form_label(attribute(form, \"name\" ~ i)) }}
                        {{ form_widget(attribute(form, \"name\" ~ i)) }}
                        {{ form_errors(attribute(form, \"name\" ~ i)) }}
                    </div>
                {% endif %}

            {%  endfor %}
        {% endif %}
    </div>

    <div>
        {{ form_label(form.save) }}
        {{ form_widget(form.save) }}
    </div>

    {{ form_end(form) }}

{% endblock %}

{% block java %}
    <script>
        \$('#new_game_numberPlayers').on('change', function() {
            \$(\"#players\").empty();
            var value = \$(this).val();
            for (var i = 1; i <= value; i++) {
                var name = \"<div>\"+\"<label for='new_game_name\" + i + \"' class='required'>Nazwa gracza\" + i + \":</label>\"+
                    \"<input type='text' id='new_game_name\" + i + \"' name='new_game[name\" + i + \"]' required='required' />\"+
                    \"</div>\";
                \$(\"#players\").append(name);
            }


        });
    </script>
{% endblock %}", "default/newgame.html.twig", "/home/dawid/PhpstormProjects/mars/templates/default/newgame.html.twig");
    }
}
