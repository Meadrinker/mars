<?php

/* admin/admin.html.twig */
class __TwigTemplate_d833b61325837a2e00a81b8666e50aca760cbc9568dec2ee5672e87c419e492b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 8
            echo "        <div id=\"era\">
            <a href=\"/game/era\">Era: ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "era", []), "html", null, true);
            echo "</a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <div id=\"tabs\">
        <ul>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "                <li><a href=\"#tabs-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "name", []), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </ul>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "            <div id=\"tabs-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">

                <div>
                    <span class=\"resource\" style=\"background-color: #ffcc00\">Posiadane megakredyty:</span>
                    <span class=\"mcurrent-";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "megacredit", []), "html", null, true);
            echo "</span>
                    <input type=\"text\" class=\"megacredit\" data-id=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                </div>

                <div>
                    <span style=\"background-color: chocolate\">Posiadane żelazo:</span> <span class=\"icurrent-";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "iron", []), "html", null, true);
            echo "</span>
                    <input type=\"text\" class=\"iron\" data-id=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                </div>

                <div>
                    <span style=\"background-color: #aaaaaa\">Posiadany tytan:</span> <span class=\"tcurrent-";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "titan", []), "html", null, true);
            echo "</span>
                    <input type=\"text\" class=\"titan\" data-id=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                </div>

                <div>
                    <span style=\"background-color: lawngreen\">Posiadana roślinność:</span> <span class=\"pcurrent-";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "plant", []), "html", null, true);
            echo "</span>
                    <input type=\"text\" class=\"plant\" data-id=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                </div>

                <div>
                    <span style=\"background-color: mediumpurple\">Posiadana energia:</span> <span class=\"ecurrent-";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "energy", []), "html", null, true);
            echo "</span>
                    <input type=\"text\" class=\"energy\" data-id=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                </div>

                <div>
                    <span style=\"background-color: coral\">Posiadane ciepło:</span> <span class=\"hcurrent-";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "heat", []), "html", null, true);
            echo "</span>
                    <input type=\"text\" class=\"heat\" data-id=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                </div>

                <div>
                    <span style=\"background-color: #ffcc00\">Produkcja megakredytów:</span> <span class=\"mpcurrent-";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "production", []), "megacredit", []), "html", null, true);
            echo "</span>
                    <input type=\"text\" class=\"megacreditprod\" data-id=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                </div>

                <div>
                    <span style=\"background-color: chocolate\">Produkcja żelaza:</span> <span class=\"ipcurrent-";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "production", []), "iron", []), "html", null, true);
            echo "</span>
                    <input type=\"text\" class=\"ironprod\" data-id=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                </div>

                <div>
                    <span style=\"background-color: #aaaaaa\">Produkcja tytanu:</span> <span class=\"tpcurrent-";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "production", []), "titan", []), "html", null, true);
            echo "</span>
                    <input type=\"text\" class=\"titanprod\" data-id=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                </div>

                <div>
                    <span style=\"background-color: lawngreen\">Produkcja roślinności:</span> <span class=\"ppcurrent-";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "production", []), "plant", []), "html", null, true);
            echo "</span>
                    <input type=\"text\" class=\"plantprod\" data-id=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                </div>

                <div>
                    <span style=\"background-color: mediumpurple\">Produkcja energii:</span> <span class=\"epcurrent-";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "production", []), "energy", []), "html", null, true);
            echo "</span>
                    <input type=\"text\" class=\"energyprod\" data-id=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                </div>

                <div>
                    <span style=\"background-color: coral\">Produkcja ciepła:</span> <span class=\"hpcurrent-";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "production", []), "heat", []), "html", null, true);
            echo "</span>
                    <input type=\"text\" class=\"heatprod\" data-id=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                </div>

                <div>
                    <input type=\"submit\" value=\"Zapisz zmiany\" data-id=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\" class=\"save\">
                </div>

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block_java($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "java"));

        // line 94
        echo "    <script>
        \$(document).ready(function() {
            \$(function () {
                \$(\"#tabs\").tabs();
            });


            \$('input.save').click(function () {
                var id = \$(this).attr('data-id');
                var megacredit = \$('input.megacredit[data-id=\"' + id + '\"]').val();
                var iron = \$('input.iron[data-id=\"' + id + '\"]').val();
                var titan = \$('input.titan[data-id=\"' + id + '\"]').val();
                var plant = \$('input.plant[data-id=\"' + id + '\"]').val();
                var energy = \$('input.energy[data-id=\"' + id + '\"]').val();
                var heat = \$('input.heat[data-id=\"' + id + '\"]').val();
                var megacreditprod = \$('input.megacreditprod[data-id=\"' + id + '\"]').val();
                var ironprod = \$('input.ironprod[data-id=\"' + id + '\"]').val();
                var titanprod = \$('input.titanprod[data-id=\"' + id + '\"]').val();
                var plantprod = \$('input.plantprod[data-id=\"' + id + '\"]').val();
                var energyprod = \$('input.energyprod[data-id=\"' + id + '\"]').val();
                var heatprod = \$('input.heatprod[data-id=\"' + id + '\"]').val();
                \$.ajax({
                    url: \"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_data");
        echo "\",
                    cache: false,
                    type: \"post\",
                    dataType: 'json',
                    data: {
                        'id': id,
                        'megacredit': megacredit,
                        'iron': iron,
                        'titan': titan,
                        'plant': plant,
                        'energy': energy,
                        'heat': heat,
                        'megacreditprod': megacreditprod,
                        'ironprod': ironprod,
                        'titanprod': titanprod,
                        'plantprod': plantprod,
                        'energyprod': energyprod,
                        'heatprod': heatprod
                    }
                })
                .done(function (response) {
                    \$('span.mcurrent-' + response.id).text(response.megacredit);
                    \$('span.icurrent-' + response.id).text(response.iron);
                    \$('span.tcurrent-' + response.id).text(response.titan);
                    \$('span.pcurrent-' + response.id).text(response.plant);
                    \$('span.ecurrent-' + response.id).text(response.energy);
                    \$('span.hcurrent-' + response.id).text(response.heat);
                    \$('span.mpcurrent-' + response.id).text(response.megacreditprod);
                    \$('span.ipcurrent-' + response.id).text(response.ironprod);
                    \$('span.tpcurrent-' + response.id).text(response.titanprod);
                    \$('span.ppcurrent-' + response.id).text(response.plantprod);
                    \$('span.epcurrent-' + response.id).text(response.energyprod);
                    \$('span.hpcurrent-' + response.id).text(response.heatprod);
                })
                .always(function() {
                    var megacredit = \$('input.megacredit[data-id=\"' + id + '\"]').val(\"\");
                    var iron = \$('input.iron[data-id=\"' + id + '\"]').val(\"\");
                    var titan = \$('input.titan[data-id=\"' + id + '\"]').val(\"\");
                    var plant = \$('input.plant[data-id=\"' + id + '\"]').val(\"\");
                    var energy = \$('input.energy[data-id=\"' + id + '\"]').val(\"\");
                    var heat = \$('input.heat[data-id=\"' + id + '\"]').val(\"\");
                    var megacreditprod = \$('input.megacreditprod[data-id=\"' + id + '\"]').val(\"\");
                    var ironprod = \$('input.ironprod[data-id=\"' + id + '\"]').val(\"\");
                    var titanprod = \$('input.titanprod[data-id=\"' + id + '\"]').val(\"\");
                    var plantprod = \$('input.plantprod[data-id=\"' + id + '\"]').val(\"\");
                    var energyprod = \$('input.energyprod[data-id=\"' + id + '\"]').val(\"\");
                    var heatprod = \$('input.heatprod[data-id=\"' + id + '\"]').val(\"\");
                })
            })
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 116,  291 => 94,  285 => 93,  276 => 89,  265 => 84,  258 => 80,  252 => 79,  245 => 75,  239 => 74,  232 => 70,  226 => 69,  219 => 65,  213 => 64,  206 => 60,  200 => 59,  193 => 55,  187 => 54,  180 => 50,  174 => 49,  167 => 45,  161 => 44,  154 => 40,  148 => 39,  141 => 35,  135 => 34,  128 => 30,  122 => 29,  115 => 25,  109 => 24,  101 => 20,  97 => 19,  94 => 18,  83 => 16,  79 => 15,  74 => 12,  65 => 9,  62 => 8,  57 => 7,  51 => 6,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block stylesheets %}
{% endblock %}

{% block body %}
    {% for g in game %}
        <div id=\"era\">
            <a href=\"/game/era\">Era: {{ g.era }}</a>
        </div>
    {% endfor %}

    <div id=\"tabs\">
        <ul>
            {% for user in users %}
                <li><a href=\"#tabs-{{ user.resource.player.id }}\">{{ user.resource.player.name }}</a></li>
            {% endfor %}
        </ul>
        {% for user in users %}
            <div id=\"tabs-{{ user.resource.player.id }}\">

                <div>
                    <span class=\"resource\" style=\"background-color: #ffcc00\">Posiadane megakredyty:</span>
                    <span class=\"mcurrent-{{ user.resource.player.id }}\">{{ user.resource.megacredit }}</span>
                    <input type=\"text\" class=\"megacredit\" data-id=\"{{ user.resource.player.id }}\">
                </div>

                <div>
                    <span style=\"background-color: chocolate\">Posiadane żelazo:</span> <span class=\"icurrent-{{ user.resource.player.id }}\">{{ user.resource.iron }}</span>
                    <input type=\"text\" class=\"iron\" data-id=\"{{ user.resource.player.id }}\">
                </div>

                <div>
                    <span style=\"background-color: #aaaaaa\">Posiadany tytan:</span> <span class=\"tcurrent-{{ user.resource.player.id }}\">{{ user.resource.titan }}</span>
                    <input type=\"text\" class=\"titan\" data-id=\"{{ user.resource.player.id }}\">
                </div>

                <div>
                    <span style=\"background-color: lawngreen\">Posiadana roślinność:</span> <span class=\"pcurrent-{{ user.resource.player.id }}\">{{ user.resource.plant }}</span>
                    <input type=\"text\" class=\"plant\" data-id=\"{{ user.resource.player.id }}\">
                </div>

                <div>
                    <span style=\"background-color: mediumpurple\">Posiadana energia:</span> <span class=\"ecurrent-{{ user.resource.player.id }}\">{{ user.resource.energy }}</span>
                    <input type=\"text\" class=\"energy\" data-id=\"{{ user.resource.player.id }}\">
                </div>

                <div>
                    <span style=\"background-color: coral\">Posiadane ciepło:</span> <span class=\"hcurrent-{{ user.resource.player.id }}\">{{ user.resource.heat }}</span>
                    <input type=\"text\" class=\"heat\" data-id=\"{{ user.resource.player.id }}\">
                </div>

                <div>
                    <span style=\"background-color: #ffcc00\">Produkcja megakredytów:</span> <span class=\"mpcurrent-{{ user.resource.player.id }}\">{{ user.production.megacredit }}</span>
                    <input type=\"text\" class=\"megacreditprod\" data-id=\"{{ user.resource.player.id }}\">
                </div>

                <div>
                    <span style=\"background-color: chocolate\">Produkcja żelaza:</span> <span class=\"ipcurrent-{{ user.resource.player.id }}\">{{ user.production.iron }}</span>
                    <input type=\"text\" class=\"ironprod\" data-id=\"{{ user.resource.player.id }}\">
                </div>

                <div>
                    <span style=\"background-color: #aaaaaa\">Produkcja tytanu:</span> <span class=\"tpcurrent-{{ user.resource.player.id }}\">{{ user.production.titan }}</span>
                    <input type=\"text\" class=\"titanprod\" data-id=\"{{ user.resource.player.id }}\">
                </div>

                <div>
                    <span style=\"background-color: lawngreen\">Produkcja roślinności:</span> <span class=\"ppcurrent-{{ user.resource.player.id }}\">{{ user.production.plant }}</span>
                    <input type=\"text\" class=\"plantprod\" data-id=\"{{ user.resource.player.id }}\">
                </div>

                <div>
                    <span style=\"background-color: mediumpurple\">Produkcja energii:</span> <span class=\"epcurrent-{{ user.resource.player.id }}\">{{ user.production.energy }}</span>
                    <input type=\"text\" class=\"energyprod\" data-id=\"{{ user.resource.player.id }}\">
                </div>

                <div>
                    <span style=\"background-color: coral\">Produkcja ciepła:</span> <span class=\"hpcurrent-{{ user.resource.player.id }}\">{{ user.production.heat }}</span>
                    <input type=\"text\" class=\"heatprod\" data-id=\"{{ user.resource.player.id }}\">
                </div>

                <div>
                    <input type=\"submit\" value=\"Zapisz zmiany\" data-id=\"{{ user.resource.player.id }}\" class=\"save\">
                </div>

            </div>
        {% endfor %}

    </div>
{% endblock %}

{% block java %}
    <script>
        \$(document).ready(function() {
            \$(function () {
                \$(\"#tabs\").tabs();
            });


            \$('input.save').click(function () {
                var id = \$(this).attr('data-id');
                var megacredit = \$('input.megacredit[data-id=\"' + id + '\"]').val();
                var iron = \$('input.iron[data-id=\"' + id + '\"]').val();
                var titan = \$('input.titan[data-id=\"' + id + '\"]').val();
                var plant = \$('input.plant[data-id=\"' + id + '\"]').val();
                var energy = \$('input.energy[data-id=\"' + id + '\"]').val();
                var heat = \$('input.heat[data-id=\"' + id + '\"]').val();
                var megacreditprod = \$('input.megacreditprod[data-id=\"' + id + '\"]').val();
                var ironprod = \$('input.ironprod[data-id=\"' + id + '\"]').val();
                var titanprod = \$('input.titanprod[data-id=\"' + id + '\"]').val();
                var plantprod = \$('input.plantprod[data-id=\"' + id + '\"]').val();
                var energyprod = \$('input.energyprod[data-id=\"' + id + '\"]').val();
                var heatprod = \$('input.heatprod[data-id=\"' + id + '\"]').val();
                \$.ajax({
                    url: \"{{ path('admin_data') }}\",
                    cache: false,
                    type: \"post\",
                    dataType: 'json',
                    data: {
                        'id': id,
                        'megacredit': megacredit,
                        'iron': iron,
                        'titan': titan,
                        'plant': plant,
                        'energy': energy,
                        'heat': heat,
                        'megacreditprod': megacreditprod,
                        'ironprod': ironprod,
                        'titanprod': titanprod,
                        'plantprod': plantprod,
                        'energyprod': energyprod,
                        'heatprod': heatprod
                    }
                })
                .done(function (response) {
                    \$('span.mcurrent-' + response.id).text(response.megacredit);
                    \$('span.icurrent-' + response.id).text(response.iron);
                    \$('span.tcurrent-' + response.id).text(response.titan);
                    \$('span.pcurrent-' + response.id).text(response.plant);
                    \$('span.ecurrent-' + response.id).text(response.energy);
                    \$('span.hcurrent-' + response.id).text(response.heat);
                    \$('span.mpcurrent-' + response.id).text(response.megacreditprod);
                    \$('span.ipcurrent-' + response.id).text(response.ironprod);
                    \$('span.tpcurrent-' + response.id).text(response.titanprod);
                    \$('span.ppcurrent-' + response.id).text(response.plantprod);
                    \$('span.epcurrent-' + response.id).text(response.energyprod);
                    \$('span.hpcurrent-' + response.id).text(response.heatprod);
                })
                .always(function() {
                    var megacredit = \$('input.megacredit[data-id=\"' + id + '\"]').val(\"\");
                    var iron = \$('input.iron[data-id=\"' + id + '\"]').val(\"\");
                    var titan = \$('input.titan[data-id=\"' + id + '\"]').val(\"\");
                    var plant = \$('input.plant[data-id=\"' + id + '\"]').val(\"\");
                    var energy = \$('input.energy[data-id=\"' + id + '\"]').val(\"\");
                    var heat = \$('input.heat[data-id=\"' + id + '\"]').val(\"\");
                    var megacreditprod = \$('input.megacreditprod[data-id=\"' + id + '\"]').val(\"\");
                    var ironprod = \$('input.ironprod[data-id=\"' + id + '\"]').val(\"\");
                    var titanprod = \$('input.titanprod[data-id=\"' + id + '\"]').val(\"\");
                    var plantprod = \$('input.plantprod[data-id=\"' + id + '\"]').val(\"\");
                    var energyprod = \$('input.energyprod[data-id=\"' + id + '\"]').val(\"\");
                    var heatprod = \$('input.heatprod[data-id=\"' + id + '\"]').val(\"\");
                })
            })
        })
    </script>
{% endblock %}", "admin/admin.html.twig", "/home/dawid/PhpstormProjects/mars/templates/admin/admin.html.twig");
    }
}
