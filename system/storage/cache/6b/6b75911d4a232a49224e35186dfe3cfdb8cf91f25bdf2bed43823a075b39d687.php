<?php

/* default/template/extension/module/filter.twig */
class __TwigTemplate_ab5629a48c789f5e3524eb6a93e96a0a18be76568ca7ec0371903ce9702bea7e extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <div class=\"list-group\"> ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filter_groups"]) ? $context["filter_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            echo " <a class=\"list-group-item\">";
            echo $this->getAttribute($context["filter_group"], "name", array());
            echo "</a>
    <div class=\"list-group-item\">
      <div id=\"filter-group";
            // line 5
            echo $this->getAttribute($context["filter_group"], "filter_group_id", array());
            echo "\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["filter_group"], "filter", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 6
                echo "        <div class=\"checkbox\">
          <label>";
                // line 7
                if (twig_in_filter($this->getAttribute($context["filter"], "filter_id", array()), (isset($context["filter_category"]) ? $context["filter_category"] : null))) {
                    // line 8
                    echo "            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo $this->getAttribute($context["filter"], "filter_id", array());
                    echo "\" checked=\"checked\" />
            ";
                    // line 9
                    echo $this->getAttribute($context["filter"], "name", array());
                    echo "
            ";
                } else {
                    // line 11
                    echo "            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo $this->getAttribute($context["filter"], "filter_id", array());
                    echo "\" />
            ";
                    // line 12
                    echo $this->getAttribute($context["filter"], "name", array());
                    echo "
            ";
                }
                // line 13
                echo "</label>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "</div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
  <div class=\"panel-footer text-right\">
    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">";
        // line 19
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tfilter = [];

\t\$('input[name^=\\'filter\\']:checked').each(function(element) {
\t\tfilter.push(this.value);
\t});

\tlocation = '";
        // line 30
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "&filter=' + filter.join(',');
});
//--></script> 
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  86 => 19,  82 => 17,  74 => 15,  66 => 13,  61 => 12,  56 => 11,  51 => 9,  46 => 8,  44 => 7,  41 => 6,  35 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">{{ heading_title }}</div>*/
/*   <div class="list-group"> {% for filter_group in filter_groups %} <a class="list-group-item">{{ filter_group.name }}</a>*/
/*     <div class="list-group-item">*/
/*       <div id="filter-group{{ filter_group.filter_group_id }}">{% for filter in filter_group.filter %}*/
/*         <div class="checkbox">*/
/*           <label>{% if filter.filter_id in filter_category %}*/
/*             <input type="checkbox" name="filter[]" value="{{ filter.filter_id }}" checked="checked" />*/
/*             {{ filter.name }}*/
/*             {% else %}*/
/*             <input type="checkbox" name="filter[]" value="{{ filter.filter_id }}" />*/
/*             {{ filter.name }}*/
/*             {% endif %}</label>*/
/*         </div>*/
/*         {% endfor %}</div>*/
/*     </div>*/
/*     {% endfor %}</div>*/
/*   <div class="panel-footer text-right">*/
/*     <button type="button" id="button-filter" class="btn btn-primary">{{ button_filter }}</button>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	filter = [];*/
/* */
/* 	$('input[name^=\'filter\']:checked').each(function(element) {*/
/* 		filter.push(this.value);*/
/* 	});*/
/* */
/* 	location = '{{ action }}&filter=' + filter.join(',');*/
/* });*/
/* //--></script> */
/* */
