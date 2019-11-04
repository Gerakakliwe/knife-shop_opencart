<?php

/* oc-light/template/extension/module/featured.twig */
class __TwigTemplate_cc058df5f03bcd3c6f232afe3c35af2a53aa1aa348e2a42fad5ee76e1f39a670 extends Twig_Template
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
        echo "<div class=\"title-h\">
<h3>";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
</div>
<div class=\"row\">
 ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6\">
    <div class=\"product-thumb transition\">
      <div class=\"image hoverimg\" data-sw=\"";
            // line 8
            echo $this->getAttribute($context["product"], "swap", array());
            echo "\"><a href=\"";
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
      <div class=\"caption equal text-center\">
        <h4><a href=\"";
            // line 10
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
        ";
            // line 11
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 12
                echo "        <div class=\"rating\">
          ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 14
                    echo "          ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 15
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 17
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    // line 19
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        </div>
        ";
            }
            // line 22
            echo "        ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 23
                echo "        <p class=\"price\">
          ";
                // line 24
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 25
                    echo "          ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
          ";
                } else {
                    // line 27
                    echo "          <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
          ";
                }
                // line 29
                echo "          ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 30
                    echo "          <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
          ";
                }
                // line 32
                echo "        </p>
        ";
            }
            // line 34
            echo "      </div>
      <div class=\"text-center\">
          <button type=\"button\" class=\"btn btn-default\" onclick=\"cart.add('";
            // line 36
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> ";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</button>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "oc-light/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 41,  126 => 36,  122 => 34,  118 => 32,  110 => 30,  107 => 29,  99 => 27,  93 => 25,  91 => 24,  88 => 23,  85 => 22,  81 => 20,  75 => 19,  71 => 17,  67 => 15,  64 => 14,  60 => 13,  57 => 12,  55 => 11,  49 => 10,  36 => 8,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="title-h">*/
/* <h3>{{ heading_title }}</h3>*/
/* </div>*/
/* <div class="row">*/
/*  {% for product in products %}*/
/*   <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6">*/
/*     <div class="product-thumb transition">*/
/*       <div class="image hoverimg" data-sw="{{ product.swap }}"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*       <div class="caption equal text-center">*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         {% if product.rating %}*/
/*         <div class="rating">*/
/*           {% for i in 5 %}*/
/*           {% if product.rating < i %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% else %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if product.price %}*/
/*         <p class="price">*/
/*           {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*           {% endif %}*/
/*           {% if product.tax %}*/
/*           <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*           {% endif %}*/
/*         </p>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="text-center">*/
/*           <button type="button" class="btn btn-default" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> {{ button_cart }}</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
