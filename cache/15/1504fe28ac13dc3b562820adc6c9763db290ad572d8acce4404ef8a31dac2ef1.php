<?php

/* main.twig */
class __TwigTemplate_9f8c48ebf24341dd10550f8122b55743f63405d893451da77ecb5b5a9c20097f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'hero' => array($this, 'block_hero'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>

<html lang=\"en\">
<head>
  ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "</head>

<body>
<!--
  <div id=\"feedback\" class=\"success\">
    <h3>Success!</h3>
    <p>You're reading all about Emerson.</p>
  </div>
-->


  <header>
    <h1>Ralph Waldo Emerson</h1>
    <nav>
      <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "\" class=\"selected\">About</a>
      <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/contact"), "html", null, true);
        echo "\">Contact</a>
    </nav>
  </header>

  <div class=\"emerson\">
    ";
        // line 35
        $this->displayBlock('hero', $context, $blocks);
        // line 36
        echo "  </div>

  <main>
    ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "  </main>

  <footer>
    ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "  </footer>

</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"Ralph Waldo Emerson\">
    <meta name=\"author\" content=\"Treehouse\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"css/master.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
    <script src=\"js/global.js\"></script>
  ";
    }

    public function block_title($context, array $blocks = array())
    {
        echo "Ralph Waldo Emerson";
    }

    // line 35
    public function block_hero($context, array $blocks = array())
    {
        echo "<!--img src=\"images/emerson.jpg\" alt=\"Picture of Ralph Waldo Emerson\"-->";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "    ";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "    <p>A project from <strong><a href=\"http://teamtreehouse.com\">Treehouse</a></strong></p>
    <nav>
      <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "\" class=\"selected\">About</a>
      <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/contact"), "html", null, true);
        echo "\">Contact</a>
    </nav>
    ";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 48,  127 => 47,  123 => 45,  120 => 44,  116 => 40,  113 => 39,  107 => 35,  90 => 7,  87 => 6,  84 => 5,  76 => 51,  74 => 44,  69 => 41,  67 => 39,  62 => 36,  60 => 35,  52 => 30,  48 => 29,  32 => 15,  30 => 5,  24 => 1,);
    }
}
/* <!doctype html>*/
/* */
/* <html lang="en">*/
/* <head>*/
/*   {% block head %}*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}Ralph Waldo Emerson{% endblock title %}</title>*/
/*     <meta name="description" content="Ralph Waldo Emerson">*/
/*     <meta name="author" content="Treehouse">*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="css/master.css">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>*/
/*     <script src="js/global.js"></script>*/
/*   {% endblock head %}*/
/* </head>*/
/* */
/* <body>*/
/* <!--*/
/*   <div id="feedback" class="success">*/
/*     <h3>Success!</h3>*/
/*     <p>You're reading all about Emerson.</p>*/
/*   </div>*/
/* -->*/
/* */
/* */
/*   <header>*/
/*     <h1>Ralph Waldo Emerson</h1>*/
/*     <nav>*/
/*       <a href="{{ baseUrl() }}" class="selected">About</a>*/
/*       <a href="{{ siteUrl('/contact') }}">Contact</a>*/
/*     </nav>*/
/*   </header>*/
/* */
/*   <div class="emerson">*/
/*     {% block hero %}<!--img src="images/emerson.jpg" alt="Picture of Ralph Waldo Emerson"-->{% endblock hero %}*/
/*   </div>*/
/* */
/*   <main>*/
/*     {% block content %}*/
/*     {% endblock content %}*/
/*   </main>*/
/* */
/*   <footer>*/
/*     {% block footer %}*/
/*     <p>A project from <strong><a href="http://teamtreehouse.com">Treehouse</a></strong></p>*/
/*     <nav>*/
/*       <a href="{{ baseUrl() }}" class="selected">About</a>*/
/*       <a href="{{ siteUrl('/contact') }}">Contact</a>*/
/*     </nav>*/
/*     {% endblock footer %}*/
/*   </footer>*/
/* */
/* </body>*/
/* </html>*/
/* */
