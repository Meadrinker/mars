<?php

/* game/game.html.twig */
class __TwigTemplate_c36debd5888ce37063cf0aac19d03d3bbf7543b023cc28d9b255bda98d16786b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "game/game.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "game/game.html.twig"));

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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 9
            echo "        <div id=\"era\">
            Era: ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "era", []), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "        <div class=\"player\">
            <div class=\"playername\">
                Gracz: <a href=\"/admin\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "name", []), "html", null, true);
            echo "</a>
            </div>

            <div class=\"resourceBlock\">
                <div class=\"resourceTop\">
                    Surowce
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: #ffcc00\">
                            Megakredyty:
                        </span>
                    </div>
                    <div class=\"rpAmount mr-";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                        ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "megacredit", []), "html", null, true);
            echo "
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: chocolate\">
                            Żelazo:
                        </span>
                    </div>
                    <div class=\"rpAmount ir-";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                        ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "iron", []), "html", null, true);
            echo "
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: #aaaaaa\">
                            Tytan:
                        </span>
                    </div>
                    <div class=\"rpAmount tr-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                        ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "titan", []), "html", null, true);
            echo "
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: lawngreen\">
                            Roślinność:
                        </span>
                    </div>
                    <div class=\"rpAmount pr-";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                        ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "plant", []), "html", null, true);
            echo "
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: mediumpurple\">
                            Energia:
                        </span>
                    </div>
                    <div class=\"rpAmount er-";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                        ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "energy", []), "html", null, true);
            echo "
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: coral\">
                            Ciepło:
                        </span>
                    </div>
                    <div class=\"rpAmount hr-";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                        ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "heat", []), "html", null, true);
            echo "
                    </div>
                </div>
            </div>

            <div class=\"productionBlock\">
                <div class=\"productionTop\">
                    Produkcja
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: #ffcc00\">
                            Megakredyty:
                        </span>
                    </div>
                    <div class=\"rpAmount mp-";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                        ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "production", []), "megacredit", []), "html", null, true);
            echo "
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: chocolate\">
                            Żelazo:
                        </span>
                    </div>
                    <div class=\"rpAmount ip-";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                        ";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "production", []), "iron", []), "html", null, true);
            echo "
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: #aaaaaa\">
                            Tytan:
                        </span>
                    </div>
                    <div class=\"rpAmount tp-";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                        ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "production", []), "titan", []), "html", null, true);
            echo "
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: lawngreen\">
                            Roślinność:
                        </span>
                    </div>
                    <div class=\"rpAmount pp-";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                        ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "production", []), "plant", []), "html", null, true);
            echo "
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: mediumpurple\">
                            Energia:
                        </span>
                    </div>
                    <div class=\"rpAmount ep-";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                        ";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "production", []), "energy", []), "html", null, true);
            echo "
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: coral\">
                            Ciepło:
                        </span>
                    </div>
                    <div class=\"rpAmount hp-";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "resource", []), "player", []), "id", []), "html", null, true);
            echo "\">
                        ";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "production", []), "heat", []), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "
    <div class=\"messageBlock\">
        ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 155, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 156
            echo "            <div class=\"message\">
                ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "text", []), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    </div>

    <div id=\"prototype\" style=\"display: none;\">
        <div class=\"message\">
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 169
    public function block_java($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "java"));

        // line 170
        echo "    <script>
        var id = 0;
        \$(document).ready(function() {
            getData();
        });

        function getData() {
            \$.ajax({
                url: \"";
        // line 178
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_data");
        echo "\",
                cache: false,
                timeout:50000,
                type: \"post\",
                dataType: 'json',
                data: { \"id\": id }
            })
            .done(function(response) {
                id = response.id;
                \$.each(response.messages, function(index, val) {
                    var message = \$('#prototype').html();
                    message = \$(message).text(
                        '' + response.messages[index].text + ''
                    );
                    \$('div.messageBlock').prepend(message);
                });
                \$.each(response.users, function(index, val) {
                    \$('div.rpAmount.mr-' + response.users[index].id).text(response.users[index].mr);
                    \$('div.rpAmount.ir-' + response.users[index].id).text(response.users[index].ir);
                    \$('div.rpAmount.tr-' + response.users[index].id).text(response.users[index].tr);
                    \$('div.rpAmount.pr-' + response.users[index].id).text(response.users[index].pr);
                    \$('div.rpAmount.er-' + response.users[index].id).text(response.users[index].er);
                    \$('div.rpAmount.hr-' + response.users[index].id).text(response.users[index].hr);
                    \$('div.rpAmount.mp-' + response.users[index].id).text(response.users[index].mp);
                    \$('div.rpAmount.ip-' + response.users[index].id).text(response.users[index].ip);
                    \$('div.rpAmount.tp-' + response.users[index].id).text(response.users[index].tp);
                    \$('div.rpAmount.pp-' + response.users[index].id).text(response.users[index].pp);
                    \$('div.rpAmount.ep-' + response.users[index].id).text(response.users[index].ep);
                    \$('div.rpAmount.hp-' + response.users[index].id).text(response.users[index].hp);
                });
                \$.each(response.games, function(index, val){
                    \$('div#era').text('Era: ' + response.games[index].era);
                });

                getData();
            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "game/game.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 178,  341 => 170,  335 => 169,  321 => 160,  312 => 157,  309 => 156,  305 => 155,  301 => 153,  289 => 147,  285 => 146,  273 => 137,  269 => 136,  257 => 127,  253 => 126,  241 => 117,  237 => 116,  225 => 107,  221 => 106,  209 => 97,  205 => 96,  187 => 81,  183 => 80,  171 => 71,  167 => 70,  155 => 61,  151 => 60,  139 => 51,  135 => 50,  123 => 41,  119 => 40,  107 => 31,  103 => 30,  87 => 17,  83 => 15,  79 => 14,  76 => 13,  67 => 10,  64 => 9,  60 => 8,  57 => 7,  51 => 6,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block stylesheets %}
{% endblock %}

{% block body %}

    {% for g in game %}
        <div id=\"era\">
            Era: {{ g.era }}
        </div>
    {% endfor %}

    {% for user in users %}
        <div class=\"player\">
            <div class=\"playername\">
                Gracz: <a href=\"/admin\">{{ user.resource.player.name }}</a>
            </div>

            <div class=\"resourceBlock\">
                <div class=\"resourceTop\">
                    Surowce
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: #ffcc00\">
                            Megakredyty:
                        </span>
                    </div>
                    <div class=\"rpAmount mr-{{ user.resource.player.id }}\">
                        {{ user.resource.megacredit }}
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: chocolate\">
                            Żelazo:
                        </span>
                    </div>
                    <div class=\"rpAmount ir-{{ user.resource.player.id }}\">
                        {{ user.resource.iron }}
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: #aaaaaa\">
                            Tytan:
                        </span>
                    </div>
                    <div class=\"rpAmount tr-{{ user.resource.player.id }}\">
                        {{ user.resource.titan }}
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: lawngreen\">
                            Roślinność:
                        </span>
                    </div>
                    <div class=\"rpAmount pr-{{ user.resource.player.id }}\">
                        {{ user.resource.plant }}
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: mediumpurple\">
                            Energia:
                        </span>
                    </div>
                    <div class=\"rpAmount er-{{ user.resource.player.id }}\">
                        {{ user.resource.energy }}
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: coral\">
                            Ciepło:
                        </span>
                    </div>
                    <div class=\"rpAmount hr-{{ user.resource.player.id }}\">
                        {{ user.resource.heat }}
                    </div>
                </div>
            </div>

            <div class=\"productionBlock\">
                <div class=\"productionTop\">
                    Produkcja
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: #ffcc00\">
                            Megakredyty:
                        </span>
                    </div>
                    <div class=\"rpAmount mp-{{ user.resource.player.id }}\">
                        {{ user.production.megacredit }}
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: chocolate\">
                            Żelazo:
                        </span>
                    </div>
                    <div class=\"rpAmount ip-{{ user.resource.player.id }}\">
                        {{ user.production.iron }}
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: #aaaaaa\">
                            Tytan:
                        </span>
                    </div>
                    <div class=\"rpAmount tp-{{ user.resource.player.id }}\">
                        {{ user.production.titan }}
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: lawngreen\">
                            Roślinność:
                        </span>
                    </div>
                    <div class=\"rpAmount pp-{{ user.resource.player.id }}\">
                        {{ user.production.plant }}
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: mediumpurple\">
                            Energia:
                        </span>
                    </div>
                    <div class=\"rpAmount ep-{{ user.resource.player.id }}\">
                        {{ user.production.energy }}
                    </div>
                </div>
                <div>
                    <div class=\"rpName\">
                        <span style=\"background-color: coral\">
                            Ciepło:
                        </span>
                    </div>
                    <div class=\"rpAmount hp-{{ user.resource.player.id }}\">
                        {{ user.production.heat }}
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}

    <div class=\"messageBlock\">
        {% for message in messages %}
            <div class=\"message\">
                {{ message.text }}
            </div>
        {% endfor %}
    </div>

    <div id=\"prototype\" style=\"display: none;\">
        <div class=\"message\">
        </div>
    </div>

{% endblock %}

{% block java %}
    <script>
        var id = 0;
        \$(document).ready(function() {
            getData();
        });

        function getData() {
            \$.ajax({
                url: \"{{ path('game_data') }}\",
                cache: false,
                timeout:50000,
                type: \"post\",
                dataType: 'json',
                data: { \"id\": id }
            })
            .done(function(response) {
                id = response.id;
                \$.each(response.messages, function(index, val) {
                    var message = \$('#prototype').html();
                    message = \$(message).text(
                        '' + response.messages[index].text + ''
                    );
                    \$('div.messageBlock').prepend(message);
                });
                \$.each(response.users, function(index, val) {
                    \$('div.rpAmount.mr-' + response.users[index].id).text(response.users[index].mr);
                    \$('div.rpAmount.ir-' + response.users[index].id).text(response.users[index].ir);
                    \$('div.rpAmount.tr-' + response.users[index].id).text(response.users[index].tr);
                    \$('div.rpAmount.pr-' + response.users[index].id).text(response.users[index].pr);
                    \$('div.rpAmount.er-' + response.users[index].id).text(response.users[index].er);
                    \$('div.rpAmount.hr-' + response.users[index].id).text(response.users[index].hr);
                    \$('div.rpAmount.mp-' + response.users[index].id).text(response.users[index].mp);
                    \$('div.rpAmount.ip-' + response.users[index].id).text(response.users[index].ip);
                    \$('div.rpAmount.tp-' + response.users[index].id).text(response.users[index].tp);
                    \$('div.rpAmount.pp-' + response.users[index].id).text(response.users[index].pp);
                    \$('div.rpAmount.ep-' + response.users[index].id).text(response.users[index].ep);
                    \$('div.rpAmount.hp-' + response.users[index].id).text(response.users[index].hp);
                });
                \$.each(response.games, function(index, val){
                    \$('div#era').text('Era: ' + response.games[index].era);
                });

                getData();
            });
        }
    </script>
{% endblock %}", "game/game.html.twig", "/home/dawid/PhpstormProjects/mars/templates/game/game.html.twig");
    }
}
