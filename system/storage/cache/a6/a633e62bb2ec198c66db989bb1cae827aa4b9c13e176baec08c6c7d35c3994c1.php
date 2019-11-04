<?php

/* oc-light/template/common/footer.twig */
class __TwigTemplate_340d2d9f215a593735621ae5a7d5c65b3271dd36b1f56b04ca7931edaedcc564 extends Twig_Template
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
        echo " <footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 5
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 6
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ul>
      </div>
      ";
        }
        // line 14
        echo "      <div class=\"col-sm-3\">
        <h5>";
        // line 15
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 17
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 18
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 19
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 23
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 25
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 26
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 27
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 28
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 32
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 34
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 35
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 36
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 37
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p class=\"text-right\">";
        // line 42
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo " Theme By <a href=\"http://www.spearthemes.com\" >SpearThemes</a></p>
  </div>
</footer>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 46
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

                                ";
        // line 53
        if (((isset($context["module_cookiepolicy_status"]) ? $context["module_cookiepolicy_status"] : null) == "1")) {
            // line 54
            echo "\t\t\t\t\t<script type=\"text/javascript\" >
\t\t\t\t\t\tvar text_before = \"";
            // line 55
            echo $this->getAttribute($this->getAttribute((isset($context["module_cookiepolicy_cookietext"]) ? $context["module_cookiepolicy_cookietext"] : null), "text", array()), (isset($context["langcode"]) ? $context["langcode"] : null), array(), "array");
            echo "\";
\t\t\t\t\t\tvar link_text = \"";
            // line 56
            if (((isset($context["module_cookiepolicy_infopage"]) ? $context["module_cookiepolicy_infopage"] : null) > 0)) {
                echo " ";
                echo (isset($context["module_cookiepolicy_infopage_title"]) ? $context["module_cookiepolicy_infopage_title"] : null);
                echo " ";
            } elseif (((isset($context["module_cookiepolicy_random_url"]) ? $context["module_cookiepolicy_random_url"] : null) == 1)) {
                echo " ";
                echo $this->getAttribute($this->getAttribute((isset($context["module_cookiepolicy_urltext"]) ? $context["module_cookiepolicy_urltext"] : null), "text", array()), (isset($context["langcode"]) ? $context["langcode"] : null), array(), "array");
            }
            echo "\";
\t\t\t\t\t\tvar text_after = \"";
            // line 57
            echo $this->getAttribute($this->getAttribute((isset($context["module_cookiepolicy_cookietext_after"]) ? $context["module_cookiepolicy_cookietext_after"] : null), "text", array()), (isset($context["langcode"]) ? $context["langcode"] : null), array(), "array");
            echo "\";
\t\t\t\t\t\tvar accept_text = \"";
            // line 58
            echo $this->getAttribute($this->getAttribute((isset($context["module_cookiepolicy_buttontext"]) ? $context["module_cookiepolicy_buttontext"] : null), "text", array()), (isset($context["langcode"]) ? $context["langcode"] : null), array(), "array");
            echo "\";
\t\t\t\t\t\tvar cookie_url = \"";
            // line 59
            if (((isset($context["module_cookiepolicy_infopage"]) ? $context["module_cookiepolicy_infopage"] : null) > 0)) {
                echo " ";
                echo (isset($context["module_cookiepolicy_infopage_url"]) ? $context["module_cookiepolicy_infopage_url"] : null);
                echo " ";
            } elseif (((isset($context["module_cookiepolicy_random_url"]) ? $context["module_cookiepolicy_random_url"] : null) == 1)) {
                echo " ";
                echo (isset($context["module_cookiepolicy_url"]) ? $context["module_cookiepolicy_url"] : null);
            }
            echo "\";
\t\t\t\t\t\tvar cookie_expires = ";
            // line 60
            echo (isset($context["module_cookiepolicy_cookie_expires"]) ? $context["module_cookiepolicy_cookie_expires"] : null);
            echo ";
\t\t\t\t\t\tvar text_align = \"";
            // line 61
            echo (isset($context["module_cookiepolicy_text_align"]) ? $context["module_cookiepolicy_text_align"] : null);
            echo "\";
\t\t\t\t\t</script>
\t\t\t\t\t<script src=\"catalog/view/javascript/jquery.cookie.js\"></script>
\t\t\t\t\t<script src=\"catalog/view/javascript/jquery.cookiecuttr.js\"></script>
\t\t\t\t\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/cookiepolicy.css\">
\t\t\t\t\t<style>
\t\t\t\t\t\ta.cc-cookie-accept {
\t\t\t\t\t\t\tcolor: ";
            // line 68
            echo (isset($context["module_cookiepolicy_accept_text_colour"]) ? $context["module_cookiepolicy_accept_text_colour"] : null);
            echo " !important;
\t\t\t\t\t\t\tbackground: ";
            // line 69
            echo (isset($context["module_cookiepolicy_accept_button_colour"]) ? $context["module_cookiepolicy_accept_button_colour"] : null);
            echo ";
\t\t\t\t\t\t}
\t\t\t\t\t\ta.cc-cookie-accept:hover {
\t\t\t\t\t\t\tcolor: ";
            // line 72
            echo (isset($context["module_cookiepolicy_accept_text_hover"]) ? $context["module_cookiepolicy_accept_text_hover"] : null);
            echo " !important;
\t\t\t\t\t\t\tbackground: ";
            // line 73
            echo (isset($context["module_cookiepolicy_accept_button_hover"]) ? $context["module_cookiepolicy_accept_button_hover"] : null);
            echo ";
\t\t\t\t\t\t}
\t\t\t\t\t\t.cc-cookies, .cc-cookies a {
\t\t\t\t\t\t\tcolor: ";
            // line 76
            echo (isset($context["module_cookiepolicy_text_colour"]) ? $context["module_cookiepolicy_text_colour"] : null);
            echo ";
\t\t\t\t\t\t}
\t\t\t\t\t\t.cc-cookies:before {
\t\t\t\t\t\t\topacity: ";
            // line 79
            echo (isset($context["module_cookiepolicy_opacity"]) ? $context["module_cookiepolicy_opacity"] : null);
            echo ";
\t\t\t\t\t\t\tbackground: ";
            // line 80
            echo (isset($context["module_cookiepolicy_background_colour"]) ? $context["module_cookiepolicy_background_colour"] : null);
            echo ";
\t\t\t\t\t\t}
\t\t\t\t\t\t";
            // line 82
            if ((isset($context["module_cookiepolicy_rounded_corners"]) ? $context["module_cookiepolicy_rounded_corners"] : null)) {
                // line 83
                echo "\t\t\t\t\t\t\ta.cc-cookie-accept {
\t\t\t\t\t\t\t\t-webkit-border-radius: 3px 3px 3px 3px;
\t\t\t\t\t\t\t\tborder-radius: 3px 3px 3px 3px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t\t</style>
\t\t\t\t\t
                                    ";
            // line 90
            if (((isset($context["module_cookiepolicy_position"]) ? $context["module_cookiepolicy_position"] : null) == "1")) {
                echo " 
                                        ";
                // line 91
                echo "<style>.cc-cookies{bottom:0;}</style>";
                echo "
                                    ";
            } elseif ((            // line 92
(isset($context["module_cookiepolicy_position"]) ? $context["module_cookiepolicy_position"] : null) == "2")) {
                // line 93
                echo "                                        ";
                echo "<style>.cc-cookies{top:0;}</style>";
                echo "
                                    ";
            } elseif ((            // line 94
(isset($context["module_cookiepolicy_position"]) ? $context["module_cookiepolicy_position"] : null) == "3")) {
                // line 95
                echo "                                        ";
                echo "<style>.cc-cookies{padding:15%; height:100%; top:0;}</style>";
                echo "
                                    ";
            }
            // line 97
            echo "
\t\t\t\t\t<script>
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\$.cookieCuttr();\t
\t\t\t\t\t\t});
\t\t\t\t\t</script>
\t\t\t\t";
        }
        // line 104
        echo "\t\t\t

\t\t\t\t<script src=\"catalog/view/javascript/jquery.elevatezoom.min.js\" type=\"text/javascript\"></script>
\t\t\t\t<script type=\"text/javascript\">
\$(document).ready(function(){\$(\"#zoom_01\").elevateZoom({cursor:\"crosshair\",zoomWindowFadeIn:500,zoomWindowFadeOut:750,lensFadeIn:500,lensFadeOut:500})}),\$(window).on(\"resize\",function(){var o=\$(this);\$(\"#zoom_01\").elevateZoom(o.width()<900?{cursor:\"crosshair\",zoomType:\"inner\",zoomWindowFadeIn:500,zoomWindowFadeOut:750,lensFadeIn:500,lensFadeOut:500}:{cursor:\"crosshair\",zoomType:\"window\",zoomWindowFadeIn:500,zoomWindowFadeOut:750,lensFadeIn:500,lensFadeOut:500})});
\t\t\t\t</script>  
\t\t\t
</body></html>";
    }

    public function getTemplateName()
    {
        return "oc-light/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 104,  298 => 97,  292 => 95,  290 => 94,  285 => 93,  283 => 92,  279 => 91,  275 => 90,  271 => 88,  264 => 83,  262 => 82,  257 => 80,  253 => 79,  247 => 76,  241 => 73,  237 => 72,  231 => 69,  227 => 68,  217 => 61,  213 => 60,  202 => 59,  198 => 58,  194 => 57,  183 => 56,  179 => 55,  176 => 54,  174 => 53,  167 => 48,  158 => 46,  154 => 45,  148 => 42,  138 => 37,  132 => 36,  126 => 35,  120 => 34,  115 => 32,  106 => 28,  100 => 27,  94 => 26,  88 => 25,  83 => 23,  74 => 19,  68 => 18,  62 => 17,  57 => 15,  54 => 14,  49 => 11,  38 => 9,  34 => 8,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/*  <footer>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if informations %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_information }}</h5>*/
/*         <ul class="list-unstyled">*/
/*          {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_service }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_extra }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_account }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*     <hr>*/
/*     <p class="text-right">{{ powered }} Theme By <a href="http://www.spearthemes.com" >SpearThemes</a></p>*/
/*   </div>*/
/* </footer>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* */
/*                                 {% if module_cookiepolicy_status == "1" %}*/
/* 					<script type="text/javascript" >*/
/* 						var text_before = "{{ module_cookiepolicy_cookietext.text[langcode] }}";*/
/* 						var link_text = "{% if module_cookiepolicy_infopage > 0 %} {{ module_cookiepolicy_infopage_title }} {% elseif module_cookiepolicy_random_url == 1 %} {{ module_cookiepolicy_urltext.text[langcode] }}{% endif %}";*/
/* 						var text_after = "{{ module_cookiepolicy_cookietext_after.text[langcode] }}";*/
/* 						var accept_text = "{{ module_cookiepolicy_buttontext.text[langcode] }}";*/
/* 						var cookie_url = "{% if module_cookiepolicy_infopage > 0 %} {{ module_cookiepolicy_infopage_url }} {% elseif module_cookiepolicy_random_url == 1 %} {{ module_cookiepolicy_url }}{% endif %}";*/
/* 						var cookie_expires = {{ module_cookiepolicy_cookie_expires }};*/
/* 						var text_align = "{{ module_cookiepolicy_text_align }}";*/
/* 					</script>*/
/* 					<script src="catalog/view/javascript/jquery.cookie.js"></script>*/
/* 					<script src="catalog/view/javascript/jquery.cookiecuttr.js"></script>*/
/* 					<link rel="stylesheet" href="catalog/view/javascript/cookiepolicy.css">*/
/* 					<style>*/
/* 						a.cc-cookie-accept {*/
/* 							color: {{ module_cookiepolicy_accept_text_colour }} !important;*/
/* 							background: {{ module_cookiepolicy_accept_button_colour }};*/
/* 						}*/
/* 						a.cc-cookie-accept:hover {*/
/* 							color: {{ module_cookiepolicy_accept_text_hover }} !important;*/
/* 							background: {{ module_cookiepolicy_accept_button_hover }};*/
/* 						}*/
/* 						.cc-cookies, .cc-cookies a {*/
/* 							color: {{ module_cookiepolicy_text_colour }};*/
/* 						}*/
/* 						.cc-cookies:before {*/
/* 							opacity: {{ module_cookiepolicy_opacity }};*/
/* 							background: {{ module_cookiepolicy_background_colour }};*/
/* 						}*/
/* 						{% if module_cookiepolicy_rounded_corners %}*/
/* 							a.cc-cookie-accept {*/
/* 								-webkit-border-radius: 3px 3px 3px 3px;*/
/* 								border-radius: 3px 3px 3px 3px;*/
/* 							}*/
/* 						{% endif %}*/
/* 					</style>*/
/* 					*/
/*                                     {% if module_cookiepolicy_position == "1" %} */
/*                                         {{ '<style>.cc-cookies{bottom:0;}</style>' }}*/
/*                                     {% elseif module_cookiepolicy_position == "2" %}*/
/*                                         {{ '<style>.cc-cookies{top:0;}</style>' }}*/
/*                                     {% elseif module_cookiepolicy_position == "3" %}*/
/*                                         {{ '<style>.cc-cookies{padding:15%; height:100%; top:0;}</style>' }}*/
/*                                     {% endif %}*/
/* */
/* 					<script>*/
/* 						$(document).ready(function () {*/
/* 							$.cookieCuttr();	*/
/* 						});*/
/* 					</script>*/
/* 				{% endif %}*/
/* 			*/
/* */
/* 				<script src="catalog/view/javascript/jquery.elevatezoom.min.js" type="text/javascript"></script>*/
/* 				<script type="text/javascript">*/
/* $(document).ready(function(){$("#zoom_01").elevateZoom({cursor:"crosshair",zoomWindowFadeIn:500,zoomWindowFadeOut:750,lensFadeIn:500,lensFadeOut:500})}),$(window).on("resize",function(){var o=$(this);$("#zoom_01").elevateZoom(o.width()<900?{cursor:"crosshair",zoomType:"inner",zoomWindowFadeIn:500,zoomWindowFadeOut:750,lensFadeIn:500,lensFadeOut:500}:{cursor:"crosshair",zoomType:"window",zoomWindowFadeIn:500,zoomWindowFadeOut:750,lensFadeIn:500,lensFadeOut:500})});*/
/* 				</script>  */
/* 			*/
/* </body></html>*/
