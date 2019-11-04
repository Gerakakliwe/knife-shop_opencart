<?php

/* extension/module/jivosite_login.twig */
class __TwigTemplate_32f0b3d83021110f64034812fb01216a563e07bd71d32b4bddc08ae004782053 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <a href=\"";
        // line 6
        echo (isset($context["nastr"]) ? $context["nastr"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_nastr"]) ? $context["button_nastr"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_nastr"]) ? $context["button_nastr"] : null);
        echo "</a></div>
        ";
        // line 7
        if (((isset($context["logintrue"]) ? $context["logintrue"] : null) == twig_constant("true"))) {
            echo " 
        <div class=\"pull-right\">
        <form method=\"POST\" name=\"form-new\" action=\"https://admin.jivosite.com/integration/login\" target=\"_blank\">
          <input type=\"hidden\" name=\"partnerId\" value=\"store.pe-art.ru\">
          <input type=\"hidden\" name=\"lang\" value=\"";
            // line 11
            echo (isset($context["jivlang"]) ? $context["jivlang"] : null);
            echo "\">
          <input type=\"hidden\" name=\"token\" value=\"";
            // line 12
            echo (isset($context["jtoken"]) ? $context["jtoken"] : null);
            echo "\">
          <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 13
            echo (isset($context["button_newwind"]) ? $context["button_newwind"] : null);
            echo "\" title=\"";
            echo (isset($context["button_newwind2"]) ? $context["button_newwind2"] : null);
            echo "\">&nbsp
        </form>
        </div>
        ";
        }
        // line 16
        echo " 
      <h1>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 21
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 22
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo " 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        
          ";
        // line 32
        if ((isset($context["error_jiverror"]) ? $context["error_jiverror"] : null)) {
            echo " 
              <div class=\"text-danger\">";
            // line 33
            echo (isset($context["error_jiverror"]) ? $context["error_jiverror"] : null);
            echo "</div>
          ";
        }
        // line 34
        echo " 
           <div class=\"center-block text-center\">
          ";
        // line 36
        if (((isset($context["logintrue"]) ? $context["logintrue"] : null) == twig_constant("true"))) {
            echo " 
          <iframe name=\"my_frame\" width=\"100%\" height=\"1000\"></iframe>
    <form method=\"POST\" name=\"form\" action=\"https://admin.jivosite.com/integration/login\" target=\"my_frame\">
      <input type=\"hidden\" name=\"partnerId\" value=\"store.pe-art.ru\">
      <input type=\"hidden\" name=\"lang\" value=\"";
            // line 40
            echo (isset($context["jivlang"]) ? $context["jivlang"] : null);
            echo "\">
      <input type=\"hidden\" name=\"token\" value=\"";
            // line 41
            echo (isset($context["jtoken"]) ? $context["jtoken"] : null);
            echo "\">
    </form>
<script>
document.form.submit();
</script>
        ";
        } else {
            // line 46
            echo " 
        <br/>
          <a href=\"";
            // line 48
            echo (isset($context["nastr"]) ? $context["nastr"] : null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_setup"]) ? $context["button_setup"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_setup"]) ? $context["button_setup"] : null);
            echo "</a>
        <br/><br/><br/>
        ";
        }
        // line 50
        echo " 
          </div>
        <div class=\"pull-left\">";
        // line 52
        echo (isset($context["entry_donate"]) ? $context["entry_donate"] : null);
        echo "</div>
        <div class=\"pull-right\">";
        // line 53
        echo (isset($context["entry_cop"]) ? $context["entry_cop"] : null);
        echo "</div>
      </div>
    </div>
  </div>
</div>
";
        // line 58
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/jivosite_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 58,  148 => 53,  144 => 52,  140 => 50,  130 => 48,  126 => 46,  117 => 41,  113 => 40,  106 => 36,  102 => 34,  97 => 33,  93 => 32,  86 => 28,  81 => 25,  74 => 22,  70 => 21,  63 => 17,  60 => 16,  51 => 13,  47 => 12,  43 => 11,  36 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }} */
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <a href="{{ nastr }}" data-toggle="tooltip" title="{{ button_nastr }}" class="btn btn-primary">{{ button_nastr }}</a></div>*/
/*         {% if (logintrue == constant('true')) %} */
/*         <div class="pull-right">*/
/*         <form method="POST" name="form-new" action="https://admin.jivosite.com/integration/login" target="_blank">*/
/*           <input type="hidden" name="partnerId" value="store.pe-art.ru">*/
/*           <input type="hidden" name="lang" value="{{ jivlang }}">*/
/*           <input type="hidden" name="token" value="{{ jtoken }}">*/
/*           <input type="submit" class="btn btn-primary" value="{{ button_newwind }}" title="{{ button_newwind2 }}">&nbsp*/
/*         </form>*/
/*         </div>*/
/*         {% endif %} */
/*       <h1>{{ heading_title }}</h1>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if (error_warning) %} */
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }} */
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %} */
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         */
/*           {% if (error_jiverror) %} */
/*               <div class="text-danger">{{ error_jiverror }}</div>*/
/*           {% endif %} */
/*            <div class="center-block text-center">*/
/*           {% if (logintrue == constant('true')) %} */
/*           <iframe name="my_frame" width="100%" height="1000"></iframe>*/
/*     <form method="POST" name="form" action="https://admin.jivosite.com/integration/login" target="my_frame">*/
/*       <input type="hidden" name="partnerId" value="store.pe-art.ru">*/
/*       <input type="hidden" name="lang" value="{{ jivlang }}">*/
/*       <input type="hidden" name="token" value="{{ jtoken }}">*/
/*     </form>*/
/* <script>*/
/* document.form.submit();*/
/* </script>*/
/*         {% else %} */
/*         <br/>*/
/*           <a href="{{ nastr }}" data-toggle="tooltip" title="{{ button_setup }}" class="btn btn-primary">{{ button_setup }}</a>*/
/*         <br/><br/><br/>*/
/*         {% endif %} */
/*           </div>*/
/*         <div class="pull-left">{{ entry_donate }}</div>*/
/*         <div class="pull-right">{{ entry_cop }}</div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
