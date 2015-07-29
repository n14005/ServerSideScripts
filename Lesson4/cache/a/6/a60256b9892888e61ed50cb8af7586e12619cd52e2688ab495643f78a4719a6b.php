<?php

/* output.tpl */
class __TwigTemplate_a60256b9892888e61ed50cb8af7586e12619cd52e2688ab495643f78a4719a6b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
<meta name=\"charset\" content=\"UTF-8\">
<link href=\"./bootstrap-3.3.5-dist/css/bootstrap.css\" rel=\"stylesheet\" media=\"screen\">
<title>ロバblog 表示画面</title>
</head>
<body>
<center><h1 class=\"text-success\">ロバblog 表示画面</h1></center>
<hr />
<center><h2>投稿者</h2>
<p>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</p></center>
<hr />
<center><h2>本文</h2>
<p>
";
        // line 16
        echo nl2br(twig_escape_filter($this->env, (isset($context["article"]) ? $context["article"] : null), "html", null, true));
        echo "
</p></center>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "output.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  32 => 12,  19 => 1,);
    }
}
