<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog/show.html.twig */
class __TwigTemplate_32d1c2c42eb16382caaa4914a3fd6bb89b6355d44ff77ec8b1e2e08858422005 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"col-sm-4 container col-12 mt-1\" style=\"position: absolute; right: 75px\">
        ";
        // line 7
        echo twig_include($this->env, $context, "includes/sidebar.html.twig", ["latests" => (isset($context["latests"]) || array_key_exists("latests", $context) ? $context["latests"] : (function () { throw new RuntimeError('Variable "latests" does not exist.', 7, $this->source); })())]);
        echo "
    </div>
    <div class=\"col-sm-7 mt-4 mx-4\">
            <div class=\"row post mb-1\">
                <div class=\"col-12\">
                    <h2 class=\"text-capitalize\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
                    <p class=\"added\"><a href=\"\" class=\"username\">Hamza</a>";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 13, $this->source); })()), "time", [], "any", false, false, false, 13), "F jS \\a\\t g:ia"), "html", null, true);
        echo "</p>
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "body", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"row post mb-1\">
                <div class=\"col-12\">
                    <h2 class=\"text-capitalize\">Commentaires <span class=\"badge badge-dark\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 19, $this->source); })()), "getComments", [], "any", false, false, false, 19), "count", [], "any", false, false, false, 19), "html", null, true);
        echo "</span></h2>
                    <hr>
                    ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 22
            echo "                        <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_add");
            echo "\" method=\"post\">
                            <div class=\"form-group\">
                                <textarea name=\"_body\" id=\"body\" placeholder=\"Ajouter un commentaire\" cols=\"30\" rows=\"10\" class = \"form-control\"></textarea>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                            </div>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"post_id\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                        </form>
                    ";
        } else {
            // line 33
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Connectez vous pour commenter</a>
                    ";
        }
        // line 35
        echo "                    <hr>
                    <!-- show comments -->
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 37, $this->source); })()), "getComments", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 38
            echo "                        <div class=\"media mt-3\">
                            <div class=\"media-body\">
                                <p>
                                    <span class=\"comment-username\">
                                        ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 42), "username", [], "any", false, false, false, 42), "html", null, true);
            echo "
                                        ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created", [], "any", false, false, false, 43), "F jS \\àg:ia"), "html", null, true);
            echo "
                                        <p class=\"comment\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "body", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                                    </span>
                                </p>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
                </div>
            </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 50,  171 => 44,  167 => 43,  163 => 42,  157 => 38,  153 => 37,  149 => 35,  143 => 33,  137 => 30,  133 => 29,  122 => 22,  120 => 21,  115 => 19,  107 => 14,  103 => 13,  99 => 12,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ post.title }}{% endblock %}

{% block body %}
    <div class=\"col-sm-4 container col-12 mt-1\" style=\"position: absolute; right: 75px\">
        {{ include('includes/sidebar.html.twig',{'latests':latests}) }}
    </div>
    <div class=\"col-sm-7 mt-4 mx-4\">
            <div class=\"row post mb-1\">
                <div class=\"col-12\">
                    <h2 class=\"text-capitalize\">{{ post.title }}</h2>
                    <p class=\"added\"><a href=\"\" class=\"username\">Hamza</a>{{ post.time|date(\"F jS \\\\a\\\\t g:ia\") }}</p>
                    <p>{{ post.body }}</p>
                </div>
            </div>
            <div class=\"row post mb-1\">
                <div class=\"col-12\">
                    <h2 class=\"text-capitalize\">Commentaires <span class=\"badge badge-dark\">{{ post.getComments.count }}</span></h2>
                    <hr>
                    {% if is_granted('ROLE_USER') %}
                        <form action=\"{{ path('comment_add')}}\" method=\"post\">
                            <div class=\"form-group\">
                                <textarea name=\"_body\" id=\"body\" placeholder=\"Ajouter un commentaire\" cols=\"30\" rows=\"10\" class = \"form-control\"></textarea>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                            </div>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                            <input type=\"hidden\" name=\"post_id\" value=\"{{ post.id }}\">
                        </form>
                    {% else %}
                        <a href=\"{{ path('security_login') }}\">Connectez vous pour commenter</a>
                    {% endif %}
                    <hr>
                    <!-- show comments -->
                    {% for comment in post.getComments %}
                        <div class=\"media mt-3\">
                            <div class=\"media-body\">
                                <p>
                                    <span class=\"comment-username\">
                                        {{ comment.user.username }}
                                        {{ comment.created | date(\"F jS \\\\àg:ia\") }}
                                        <p class=\"comment\">{{ comment.body }}</p>
                                    </span>
                                </p>
                            </div>
                        </div>
                    {% endfor %}

                </div>
            </div>
    </div>
{% endblock %}
", "blog/show.html.twig", "C:\\wamp64\\www\\project\\templates\\blog\\show.html.twig");
    }
}
