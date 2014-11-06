<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_ade9d6d289d14bf87d38bf84012699e7d8906f9018c83cbdb1c100bb99bc3296 extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Affichage de l'annonce</title>
    </head>
    <body>
        <h1>J'ai trouvée c'est  Annonce n°";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "!!</h1>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 8,  19 => 2,);
    }
}
