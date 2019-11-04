<?php

/* catalog/information_list.twig */
class __TwigTemplate_75ce36eafde4fc9283ea539ed4850294dcad1b54e7a1d2231ea753aceab6ff5b extends Twig_Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-information\" formaction=\"";
        // line 6
        echo (isset($context["enabled"]) ? $context["enabled"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-play\"></i></button>
\t\t<button type=\"submit\" form=\"form-information\" formaction=\"";
        // line 7
        echo (isset($context["disabled"]) ? $context["disabled"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-pause\"></i></button>
\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-information').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 25
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 31
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 34
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 40
        if (((isset($context["sort"]) ? $context["sort"] : null) == "id.title")) {
            // line 41
            echo "                    <a href=\"";
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo "</a>
                    ";
        } else {
            // line 43
            echo "                    <a href=\"";
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo "</a>
                    ";
        }
        // line 44
        echo "</td>
                  <td class=\"text-right\">";
        // line 45
        if (((isset($context["sort"]) ? $context["sort"] : null) == "i.sort_order")) {
            // line 46
            echo "                    <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                    ";
        } else {
            // line 48
            echo "                    <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                    ";
        }
        // line 49
        echo "</td>
\t\t\t\t  <td class=\"text-right\">";
        // line 50
        if (((isset($context["sort"]) ? $context["sort"] : null) == "i.noindex")) {
            // line 51
            echo "                    <a href=\"";
            echo (isset($context["sort_noindex"]) ? $context["sort_noindex"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_noindex"]) ? $context["column_noindex"] : null);
            echo "</a>
                    ";
        } else {
            // line 53
            echo "                    <a href=\"";
            echo (isset($context["sort_noindex"]) ? $context["sort_noindex"] : null);
            echo "\">";
            echo (isset($context["column_noindex"]) ? $context["column_noindex"] : null);
            echo "</a>
\t\t\t\t\t";
        }
        // line 54
        echo "</td>
                  <td class=\"text-right\">";
        // line 55
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 59
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 60
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 61
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 62
                if (twig_in_filter($this->getAttribute($context["information"], "information_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 63
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["information"], "information_id", array());
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 65
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["information"], "information_id", array());
                    echo "\" />
                    ";
                }
                // line 66
                echo "</td>
                  <td class=\"text-left\">";
                // line 67
                echo $this->getAttribute($context["information"], "title", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 68
                echo $this->getAttribute($context["information"], "sort_order", array());
                echo "</td>
\t\t\t\t  <td class=\"text-right\">";
                // line 69
                echo $this->getAttribute($context["information"], "noindex", array());
                echo "</td>
                  <td class=\"text-right\">
\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 71
                echo $this->getAttribute($context["information"], "href_shop", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_shop"]) ? $context["button_shop"] : null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t\t<a href=\"";
                // line 72
                echo $this->getAttribute($context["information"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                ";
        } else {
            // line 77
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 78
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 81
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 86
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 87
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 93
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/information_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 93,  275 => 87,  271 => 86,  264 => 81,  258 => 78,  255 => 77,  252 => 76,  240 => 72,  234 => 71,  229 => 69,  225 => 68,  221 => 67,  218 => 66,  212 => 65,  206 => 63,  204 => 62,  201 => 61,  196 => 60,  194 => 59,  187 => 55,  184 => 54,  176 => 53,  166 => 51,  164 => 50,  161 => 49,  153 => 48,  143 => 46,  141 => 45,  138 => 44,  130 => 43,  120 => 41,  118 => 40,  109 => 34,  103 => 31,  99 => 29,  91 => 25,  88 => 24,  80 => 20,  78 => 19,  72 => 15,  61 => 13,  57 => 12,  52 => 10,  45 => 8,  39 => 7,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="submit" form="form-information" formaction="{{ enabled }}" data-toggle="tooltip" title="{{ button_enable }}" class="btn btn-default"><i class="fa fa-play"></i></button>*/
/* 		<button type="submit" form="form-information" formaction="{{ disabled }}" data-toggle="tooltip" title="{{ button_disable }}" class="btn btn-default"><i class="fa fa-pause"></i></button>*/
/* 		<button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-information').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-information">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if sort == 'id.title' %}*/
/*                     <a href="{{ sort_title }}" class="{{ order|lower }}">{{ column_title }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_title }}">{{ column_title }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{% if sort == 'i.sort_order' %}*/
/*                     <a href="{{ sort_sort_order }}" class="{{ order|lower }}">{{ column_sort_order }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_sort_order }}">{{ column_sort_order }}</a>*/
/*                     {% endif %}</td>*/
/* 				  <td class="text-right">{% if sort == 'i.noindex' %}*/
/*                     <a href="{{ sort_noindex }}" class="{{ order|lower }}">{{ column_noindex }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_noindex }}">{{ column_noindex }}</a>*/
/* 					{% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if informations %}*/
/*                 {% for information in informations %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if information.information_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ information.information_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ information.information_id }}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ information.title }}</td>*/
/*                   <td class="text-right">{{ information.sort_order }}</td>*/
/* 				  <td class="text-right">{{ information.noindex }}</td>*/
/*                   <td class="text-right">*/
/* 					<a target="_blank" href="{{ information.href_shop }}" data-toggle="tooltip" title="{{ button_shop }}" class="btn btn-success"><i class="fa fa-eye"></i></a>*/
/* 					<a href="{{ information.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/* 				  </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
