<?php

/* extension/extension/module.twig */
class __TwigTemplate_bce7c040ae93c6fd11b700ac40175b2a594d0fb0ec2e50e9f4452a5eea822b53 extends Twig_Template
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
        echo "<fieldset>
  <legend>";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</legend>
  ";
        // line 3
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 4
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 8
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo (isset($context["text_layout"]) ? $context["text_layout"] : null);
        echo "</div>
   ";
        // line 14
        if ( !twig_test_empty((isset($context["hiden"]) ? $context["hiden"] : null))) {
            // line 15
            echo "    <div class=\"alert alert-info\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["text_hide_modules"]) ? $context["text_hide_modules"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 19
        echo "  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-left\">";
        // line 23
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
          <td class=\"text-left\">";
        // line 24
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
          <td class=\"text-right\">";
        // line 25
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
      
      ";
        // line 30
        if ((isset($context["extensions"]) ? $context["extensions"] : null)) {
            // line 31
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 32
                echo "      <tr>
        <td><b>";
                // line 33
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</b></td>
        <td>";
                // line 34
                echo $this->getAttribute($context["extension"], "status", array());
                echo "</td>
        <td class=\"text-right\">";
                // line 35
                if ($this->getAttribute($context["extension"], "installed", array())) {
                    // line 36
                    echo "          ";
                    if ($this->getAttribute($context["extension"], "module", array())) {
                        echo " <a href=\"";
                        echo $this->getAttribute($context["extension"], "edit", array());
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo (isset($context["button_add"]) ? $context["button_add"] : null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></a> ";
                    } else {
                        echo " <a href=\"";
                        echo $this->getAttribute($context["extension"], "edit", array());
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a> ";
                    }
                    // line 37
                    echo "          ";
                } else {
                    // line 38
                    echo "          <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
          ";
                }
                // line 40
                echo "          ";
                if ( !$this->getAttribute($context["extension"], "installed", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["extension"], "install", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_install"]) ? $context["button_install"] : null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a> ";
                } else {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["extension"], "uninstall", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_uninstall"]) ? $context["button_uninstall"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>";
                }
                echo "</td>
      </tr>
      ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 43
                    echo "      <tr>
        <td class=\"text-left\">&nbsp;&nbsp;&nbsp;<i class=\"fa fa-folder-open\"></i>&nbsp;&nbsp;&nbsp;";
                    // line 44
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</td>
        <td class=\"text-left\">";
                    // line 45
                    echo $this->getAttribute($context["module"], "status", array());
                    echo "</td>
        <td class=\"text-right\"><a href=\"";
                    // line 46
                    echo $this->getAttribute($context["module"], "edit", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa-pencil\"></i></a> <a href=\"";
                    echo $this->getAttribute($context["module"], "delete", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
                    echo "\" class=\"btn btn-warning\"><i class=\"fa fa-trash-o\"></i></a></td>
      </tr>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "      ";
        } else {
            // line 51
            echo "      <tr>
        <td class=\"text-center\" colspan=\"3\">";
            // line 52
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
      </tr>
      ";
        }
        // line 55
        echo "      </tbody>
      
    </table>
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "extension/extension/module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 55,  186 => 52,  183 => 51,  180 => 50,  174 => 49,  159 => 46,  155 => 45,  151 => 44,  148 => 43,  144 => 42,  126 => 40,  122 => 38,  119 => 37,  104 => 36,  102 => 35,  98 => 34,  94 => 33,  91 => 32,  86 => 31,  84 => 30,  76 => 25,  72 => 24,  68 => 23,  62 => 19,  54 => 15,  52 => 14,  47 => 13,  39 => 9,  36 => 8,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <fieldset>*/
/*   <legend>{{ heading_title }}</legend>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_layout }}</div>*/
/*    {% if hiden is not empty %}*/
/*     <div class="alert alert-info"><i class="fa fa-check-circle"></i> {{ text_hide_modules }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*   <div class="table-responsive">*/
/*     <table class="table table-bordered table-hover">*/
/*       <thead>*/
/*         <tr>*/
/*           <td class="text-left">{{ column_name }}</td>*/
/*           <td class="text-left">{{ column_status }}</td>*/
/*           <td class="text-right">{{ column_action }}</td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       */
/*       {% if extensions %}*/
/*       {% for extension in extensions %}*/
/*       <tr>*/
/*         <td><b>{{ extension.name }}</b></td>*/
/*         <td>{{ extension.status }}</td>*/
/*         <td class="text-right">{% if extension.installed %}*/
/*           {% if extension.module %} <a href="{{ extension.edit }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></a> {% else %} <a href="{{ extension.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a> {% endif %}*/
/*           {% else %}*/
/*           <button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-pencil"></i></button>*/
/*           {% endif %}*/
/*           {% if not extension.installed %}<a href="{{ extension.install }}" data-toggle="tooltip" title="{{ button_install }}" class="btn btn-success"><i class="fa fa-plus-circle"></i></a> {% else %} <a href="{{ extension.uninstall }}" data-toggle="tooltip" title="{{ button_uninstall }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>{% endif %}</td>*/
/*       </tr>*/
/*       {% for module in extension.module %}*/
/*       <tr>*/
/*         <td class="text-left">&nbsp;&nbsp;&nbsp;<i class="fa fa-folder-open"></i>&nbsp;&nbsp;&nbsp;{{ module.name }}</td>*/
/*         <td class="text-left">{{ module.status }}</td>*/
/*         <td class="text-right"><a href="{{ module.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-info"><i class="fa fa-pencil"></i></a> <a href="{{ module.delete }}" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-warning"><i class="fa fa-trash-o"></i></a></td>*/
/*       </tr>*/
/*       {% endfor %}*/
/*       {% endfor %}*/
/*       {% else %}*/
/*       <tr>*/
/*         <td class="text-center" colspan="3">{{ text_no_results }}</td>*/
/*       </tr>*/
/*       {% endif %}*/
/*       </tbody>*/
/*       */
/*     </table>*/
/*   </div>*/
/* </fieldset>*/
/* */
