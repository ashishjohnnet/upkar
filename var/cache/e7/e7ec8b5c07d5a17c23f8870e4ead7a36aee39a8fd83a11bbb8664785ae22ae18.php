<?php

/* layouts/base.html.twig */
class __TwigTemplate_a7e8a30d2484128d8d1a2a49d2dc6cada0f2cda54dccceb256c2203e9693da9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"css/app.min.css\">
        <meta charset=\"utf-8\">
        <meta name=\"description\" content=\"\">
        <title>Upkar Project</title>
    </head>
    <body>

        ";
        // line 13
        $this->loadTemplate("layouts/nav.html.twig", "layouts/base.html.twig", 13)->display($context);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
        <script src=\"/js/base.min.js\"></script>

        ";
        // line 20
        $this->loadTemplate("layouts/footer.html.twig", "layouts/base.html.twig", 20)->display($context);
        // line 21
        echo "
    </body>
</html>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  49 => 21,  47 => 20,  41 => 16,  39 => 15,  36 => 14,  34 => 13,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/base.html.twig", "C:\\Users\\Ashish john\\Desktop\\Phase2\\slim\\upkar\\resources\\views\\layouts\\base.html.twig");
    }
}
