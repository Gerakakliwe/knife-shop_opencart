<?php

/* oc-light/template/common/menu.twig */
class __TwigTemplate_59dcaed0b257ce0d3627422acef31c88397e62bc0a08dedf6ddb21cd9a8dbfb2 extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "<div class=\"menu_w\">
<div class=\"container\">
  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 5
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 11
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 12
                    echo "        <li class=\"dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 15
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 16
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 17
                            echo "                <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 19
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "</div>
             </div>
        </li>
\t\t<span class=\"separator\" style=\"margin-left: 13px; margin-right: 13px; margin-top: 10px;\"><img src=\"http://localhost/eshop/upload/images/main-nav-separator2.png\"></span>
        ";
                } else {
                    // line 25
                    echo "        <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
\t\t\t";
                    // line 26
                    if (((!twig_in_filter($this->getAttribute($context["category"], "name", array()), "Наборы для хобби") && !twig_in_filter($this->getAttribute($context["category"], "name", array()), "Набори для хоббі")) && !twig_in_filter($this->getAttribute($context["category"], "name", array()), "Kits for hobby"))) {
                        // line 27
                        echo "\t\t\t\t<span class=\"separator\" style=\"margin-left: 13px; margin-right: 13px; margin-top: 10px;\"><img src=\"http://localhost/eshop/upload/images/main-nav-separator2.png\"></span>
\t\t\t";
                    }
                    // line 29
                    echo "        ";
                }
                // line 30
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </ul>
    </div>
  </nav>
</div>
</div>
";
        }
        // line 36
        echo " ";
    }

    public function getTemplateName()
    {
        return "oc-light/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 36,  107 => 31,  101 => 30,  98 => 29,  94 => 27,  92 => 26,  85 => 25,  78 => 20,  71 => 19,  60 => 17,  56 => 16,  53 => 15,  49 => 14,  41 => 12,  38 => 11,  34 => 10,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* <div class="menu_w">*/
/* <div class="container">*/
/*   <nav id="menu" class="navbar">*/
/*     <div class="navbar-header"><span id="category" class="visible-xs">{{ text_category }}</span>*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       <ul class="nav navbar-nav">*/
/*         {% for category in categories %}*/
/*         {% if category.children %}*/
/*         <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*               <ul class="list-unstyled">*/
/*                 {% for child in children %}*/
/*                 <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endfor %}</div>*/
/*              </div>*/
/*         </li>*/
/* 		<span class="separator" style="margin-left: 13px; margin-right: 13px; margin-top: 10px;"><img src="http://localhost/eshop/upload/images/main-nav-separator2.png"></span>*/
/*         {% else %}*/
/*         <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/* 			{% if category.name not in 'Наборы для хобби' and category.name not in 'Набори для хоббі' and category.name not in 'Kits for hobby' %}*/
/* 				<span class="separator" style="margin-left: 13px; margin-right: 13px; margin-top: 10px;"><img src="http://localhost/eshop/upload/images/main-nav-separator2.png"></span>*/
/* 			{% endif %}*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* </div>*/
/* {% endif %} */
