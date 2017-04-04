<?php

/* layouts/nav.html.twig */
class __TwigTemplate_ef1ee806f5342dfd0f329587a46133fd13874a3774e70ea5b3bb11d0d358bfb6 extends Twig_Template
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
        echo "<div class=\"navbar\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"twelve columns\">

                <ul class=\"nav brand\">
                    <li><a href=\"/\">Upkar Project</a></li>
                </ul>

                <ul class=\"nav hamburger\">
                    <li><a class=\"u-pointer\"><i class=\"fa fa-fw fa-bars\"></i></a></li>
                </ul>

                <ul class=\"nav nav-right\">
                    <li><a href=\"/contact\">Contact</a></li>
                    <li><a href=\"https://goo.gl/6wQuG5\" target=\"_blank\">Donate</a></li>
                </ul>

            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/nav.html.twig", "C:\\Users\\Ashish john\\Desktop\\Phase2\\slim\\upkar\\resources\\views\\layouts\\nav.html.twig");
    }
}
