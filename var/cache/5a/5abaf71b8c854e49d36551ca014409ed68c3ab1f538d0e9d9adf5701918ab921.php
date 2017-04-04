<?php

/* home.html.twig */
class __TwigTemplate_484280fec6ec47b378a93c39ea87c5b219389570d5edb9293ae78b0965f8ee70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div style=\"background: #ddd;\">
        <img src=\"img/land.png\" style=\"width: 100%;\">
        <div class=\"container\" style=\"padding: 20px 0;\">
            <div class=\"row\">
                <div class=\"twelve columns\">
                    <h2 id=\"vision\" class=\"color-purple\">Vision</h2>
                    <p>
                        To develop rural children in an integrated manner enabling them to stand with other children across the globe.
                    </p>
                    <p>
                        To develop their lives (physical, spiritual, mental and social) -Luke 2:52
                    </p>

                    <h2 id=\"mission\" class=\"color-purple\">Mission</h2>
                    <p>
                        The Upkar project provides high-quality education to rural children in an integrated manner.
                        We aim to give them equal opportunities to learn as others, supported by the best of learning tools and environment.
                        So that they go on to become change makers by breaking the vicious cycle of poverty,
                        illiteracy, and improper hygiene and sanitation; allowing the students to contribute towards India’s transformation
                        so that children can be transformed in their personal, work, society and physical life enabling them to contribute
                        towards India’s transformation.
                    </p>

                    <h2 id=\"teaching-methodology\" class=\"color-purple\">Teaching Methodology</h2>
                    <p>
                        At The Upkar Project, child centric approach is the driving force of everything we do– from curriculum design to how
                        our premises looks. We have taken into consideration that every space and activity provides a full measure of opportunities
                        for the children to learn and thrive. Each day is a combination of individual and group activities, outdoor and indoor
                        activities aimed at integrated development of a child. On the whole our aim at the project is to blossom a child's
                        personality by making the most of the formative years in an ideal learning environment.
                    </p>
                    <p>
                        The school aims at nurturing girls with values and competencies. We aim to accomplish it by giving right balance between
                        curriculum and extra-curricular activities. We aim to help our students stand abreast with students across the globe.
                    </p>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "C:\\Users\\Ashish john\\Desktop\\Phase2\\slim\\upkar\\resources\\views\\home.html.twig");
    }
}
