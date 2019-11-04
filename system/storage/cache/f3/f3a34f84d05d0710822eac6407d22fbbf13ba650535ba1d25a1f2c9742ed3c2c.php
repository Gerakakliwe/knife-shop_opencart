<?php

/* oc-light/template/common/header.twig */
class __TwigTemplate_f07111d426fff709226f53c2da55a079bad11402b9f0630b1ac7ef4fba6c7846 extends Twig_Template
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
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 27
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<link href=\"catalog/view/theme/oc-light/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<script src=\"catalog/view/javascript/madeshop.js\" type=\"text/javascript\"></script>
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 32
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "<script src=\"catalog/view/theme/oc-light/js/common.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/theme/oc-light/js/equal.js\" type=\"text/javascript\"></script>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 37
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 40
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
               <style type=\"text/css\">
               @media (max-width: 767px){
               \t#header_sign_box{
               \t\tdisplay:none !important;
               \t}
               }
               </style>
            
</head>
<body>
<nav id=\"top\">
  <div class=\"container\">";
        // line 54
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
    ";
        // line 55
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
";
        // line 56
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            echo " 
\t\t\t\t<div id=\"header_sign_box\" class=\"pull-right\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<form action=\"index.php?route=account/login\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"\" placeholder=\"E-Mail\" id=\"input-email\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"Пароль\" id=\"input-password\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Войти\" class=\"btn btn-primary\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        }
        // line 72
        echo "            
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        <li class=\"dropdown\"><a href=\"";
        // line 75
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 77
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 78
            echo "            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 79
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 80
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 81
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 82
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
            ";
        } else {
            // line 84
            echo "            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 85
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
            ";
        }
        // line 87
        echo "          </ul>
        </li>
        <li><a href=\"";
        // line 89
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 90
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3\">
        <div id=\"logo\">";
        // line 99
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive logofix\" /></a>";
        } else {
            // line 100
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 101
        echo "</div>
      </div>
      <div class=\"col-sm-6\">";
        // line 103
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
      <div class=\"col-sm-3\">";
        // line 104
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
    </div>
  </div>
</header>
";
        // line 108
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oc-light/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 108,  303 => 104,  299 => 103,  295 => 101,  287 => 100,  275 => 99,  259 => 90,  251 => 89,  247 => 87,  240 => 85,  233 => 84,  226 => 82,  220 => 81,  214 => 80,  208 => 79,  201 => 78,  199 => 77,  190 => 75,  185 => 72,  166 => 56,  162 => 55,  158 => 54,  144 => 42,  136 => 40,  132 => 39,  121 => 37,  117 => 36,  113 => 34,  104 => 32,  100 => 31,  96 => 29,  83 => 27,  79 => 26,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/* <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* <link href="catalog/view/theme/oc-light/stylesheet/stylesheet.css" rel="stylesheet">*/
/* <script src="catalog/view/javascript/madeshop.js" type="text/javascript"></script>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/theme/oc-light/js/common.js" type="text/javascript"></script>*/
/* <script src="catalog/view/theme/oc-light/js/equal.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* */
/*                <style type="text/css">*/
/*                @media (max-width: 767px){*/
/*                	#header_sign_box{*/
/*                		display:none !important;*/
/*                	}*/
/*                }*/
/*                </style>*/
/*             */
/* </head>*/
/* <body>*/
/* <nav id="top">*/
/*   <div class="container">{{ currency }}*/
/*     {{ language }}*/
/* {% if (not logged) %} */
/* 				<div id="header_sign_box" class="pull-right">*/
/* 					<div class="form-group">*/
/* 					<form action="index.php?route=account/login" method="post" enctype="multipart/form-data">*/
/* 						<div class="col-sm-5">*/
/* 						<input type="text" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">*/
/* 						</div>*/
/* 						<div class="col-sm-5">*/
/* 						<input type="password" name="password" value="" placeholder="Пароль" id="input-password" class="form-control">*/
/* 						</div>*/
/* 						<div class="col-sm-2">*/
/* 						<input type="submit" value="Войти" class="btn btn-primary">*/
/* 						</div>*/
/* 					</form>*/
/* 					</div>*/
/* 				</div>{% endif %}*/
/*             */
/*     <div id="top-links" class="nav pull-right">*/
/*       <ul class="list-inline">*/
/*         <li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_account }}</span> <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu dropdown-menu-right">*/
/*             {% if logged %}*/
/*             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*             <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*             <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*             {% else %}*/
/*             <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*             <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </li>*/
/*         <li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_shopping_cart }}</span></a></li>*/
/*         <li><a href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_checkout }}</span></a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* <header>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-sm-3">*/
/*         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive logofix" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}</div>*/
/*       </div>*/
/*       <div class="col-sm-6">{{ search }}</div>*/
/*       <div class="col-sm-3">{{ cart }}</div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* {{ menu }}*/
/* */
