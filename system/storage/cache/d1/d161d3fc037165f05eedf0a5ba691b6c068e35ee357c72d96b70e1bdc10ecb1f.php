<?php

/* catalog/category_form.twig */
class __TwigTemplate_d0e81b8b241278683c0c6d597840eb534c6cc097258dfc0f3f493f680f934d29 extends Twig_Template
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

\t\t\t";
        // line 7
        if ((isset($context["href_view"]) ? $context["href_view"] : null)) {
            // line 8
            echo "\t\t\t\t<a href=\"";
            echo (isset($context["href_view"]) ? $context["href_view"] : null);
            echo "\" class=\"btn btn-warning\" target=\"_blank\"><i class=\"fa fa-eye\"></i></a> 
\t\t\t";
        }
        // line 10
        echo "\t\t\t
        <button type=\"submit\" form=\"form-category\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 12
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 13
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
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
        // line 18
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 22
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-related\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_related"]) ? $context["tab_related"] : null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 44
            echo "                <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 49
            echo "                <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 51
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 53
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" id=\"input-name";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 54
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 55
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 57
            echo "                    </div>
                  </div>
\t\t\t\t  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-h1";
            // line 60
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_h1"]) ? $context["entry_meta_h1"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 62
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_h1]\" value=\"";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_h1", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_h1"]) ? $context["entry_meta_h1"] : null);
            echo "\" id=\"input-meta-h1";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                    </div>
\t\t\t\t  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 66
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 68
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" value=\"";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\" id=\"input-meta-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 72
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 74
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 78
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 80
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\" id=\"input-meta-keyword";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
\t\t\t\t  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 84
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 86
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["category_description"]) ? $context["category_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-parent\">";
        // line 95
        echo (isset($context["entry_parent"]) ? $context["entry_parent"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"path\" value=\"";
        // line 97
        echo (isset($context["path"]) ? $context["path"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_parent"]) ? $context["entry_parent"] : null);
        echo "\" id=\"input-parent\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"parent_id\" value=\"";
        // line 98
        echo (isset($context["parent_id"]) ? $context["parent_id"] : null);
        echo "\" />
                  ";
        // line 99
        if ((isset($context["error_parent"]) ? $context["error_parent"] : null)) {
            // line 100
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_parent"]) ? $context["error_parent"] : null);
            echo "</div>
                  ";
        }
        // line 102
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 105
        echo (isset($context["help_filter"]) ? $context["help_filter"] : null);
        echo "\">";
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 107
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "\" id=\"input-filter\" class=\"form-control\" />
                  <div id=\"category-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category_filters"]) ? $context["category_filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_filter"]) {
            // line 110
            echo "                    <div id=\"category-filter";
            echo $this->getAttribute($context["category_filter"], "filter_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["category_filter"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"category_filter[]\" value=\"";
            // line 111
            echo $this->getAttribute($context["category_filter"], "filter_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 118
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 122
            echo "                    <div class=\"checkbox\">
                      <label>
                        ";
            // line 124
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["category_store"]) ? $context["category_store"] : null))) {
                // line 125
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\" />
                        ";
                // line 126
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            } else {
                // line 128
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" />
                        ";
                // line 129
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            }
            // line 131
            echo "                      </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 138
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 139
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"image\" value=\"";
        // line 140
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-top\"><span data-toggle=\"tooltip\" title=\"";
        // line 144
        echo (isset($context["help_top"]) ? $context["help_top"] : null);
        echo "\">";
        echo (isset($context["entry_top"]) ? $context["entry_top"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 148
        if ((isset($context["top"]) ? $context["top"] : null)) {
            // line 149
            echo "                      <input type=\"checkbox\" name=\"top\" value=\"1\" checked=\"checked\" id=\"input-top\" />
                      ";
        } else {
            // line 151
            echo "                      <input type=\"checkbox\" name=\"top\" value=\"1\" id=\"input-top\" />
                      ";
        }
        // line 153
        echo "                      &nbsp; </label>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-column\"><span data-toggle=\"tooltip\" title=\"";
        // line 158
        echo (isset($context["help_column"]) ? $context["help_column"] : null);
        echo "\">";
        echo (isset($context["entry_column"]) ? $context["entry_column"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"column\" value=\"";
        // line 160
        echo (isset($context["column"]) ? $context["column"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_column"]) ? $context["entry_column"] : null);
        echo "\" id=\"input-column\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 164
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 166
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 170
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 173
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 174
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 175
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        } else {
            // line 177
            echo "                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 178
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        }
        // line 180
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 185
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 190
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 191
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 196
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 197
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                    <td class=\"text-left\">";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 199
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                        <input type=\"text\" name=\"category_seo_url[";
                // line 200
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute($this->getAttribute((isset($context["category_seo_url"]) ? $context["category_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["category_seo_url"]) ? $context["category_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\" />
                      </div>
                      ";
                // line 202
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 203
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                      ";
                }
                // line 205
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                  </tbody>
                  
                </table>
              </div>
\t\t\t<div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-noindex\">";
        // line 213
        echo (isset($context["entry_noindex"]) ? $context["entry_noindex"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"noindex\" id=\"input-noindex\" class=\"form-control\">
                    ";
        // line 216
        if ((isset($context["noindex"]) ? $context["noindex"] : null)) {
            // line 217
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 218
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        } else {
            // line 220
            echo "                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 221
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        }
        // line 223
        echo "                  </select>
                </div>
              </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-related\">
\t\t\t   <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-product-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 229
        echo (isset($context["help_related"]) ? $context["help_related"] : null);
        echo "\">";
        echo (isset($context["entry_related_wb"]) ? $context["entry_related_wb"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product_related_input\" value=\"\" placeholder=\"";
        // line 231
        echo (isset($context["entry_related_wb"]) ? $context["entry_related_wb"] : null);
        echo "\" id=\"input-product-related\" class=\"form-control\" />
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["product_related"]);
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 233
            echo "                    <div id=\"product-related";
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_related"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 234
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "</div>
                </div>
               </div>
\t\t\t   <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-article-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 240
        echo (isset($context["help_related"]) ? $context["help_related"] : null);
        echo "\">";
        echo (isset($context["entry_related_article"]) ? $context["entry_related_article"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"article_related_input\" value=\"\" placeholder=\"";
        // line 242
        echo (isset($context["entry_related_article"]) ? $context["entry_related_article"] : null);
        echo "\" id=\"input-article-related\" class=\"form-control\" />
                  <div id=\"article-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["article_related"]);
        foreach ($context['_seq'] as $context["_key"] => $context["article_related"]) {
            // line 244
            echo "                    <div id=\"article-related";
            echo $this->getAttribute($context["article_related"], "article_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["article_related"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"article_related[]\" value=\"";
            // line 245
            echo $this->getAttribute($context["article_related"], "article_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "</div>
                </div>
               </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 256
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 257
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 263
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 264
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                      <td class=\"text-left\"><select name=\"category_layout[";
            // line 265
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                          <option value=\"\"></option>
                          ";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 268
                echo "                          ";
                if (($this->getAttribute((isset($context["category_layout"]) ? $context["category_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") && ($this->getAttribute((isset($context["category_layout"]) ? $context["category_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                    // line 269
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                          ";
                } else {
                    // line 271
                    echo "                          <option value=\"";
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                          ";
                }
                // line 273
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            echo "                        </select></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  
  <script type=\"text/javascript\"><!--
\$('input[name=\\'path\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 301
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcategory_id: 0,
\t\t\t\t\tname: '";
        // line 306
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'path\\']').val(item['label']);
\t\t\$('input[name=\\'parent_id\\']').val(item['value']);
\t}
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 328
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['filter_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter\\']').val('');

\t\t\$('#category-filter' + item['value']).remove();

\t\t\$('#category-filter').append('<div id=\"category-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"category_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#category-filter').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'product_related_input\\']').autocomplete({
\tsource: function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 360
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\tselect: function(item) {
\t\t\$('input[name=\\'product\\']').val('');
\t\t
\t\t\$('#product-related' + item['value']).remove();
\t\t
\t\t\$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');\t
\t}
});
\t
\$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'article_related_input\\']').autocomplete({
\tsource: function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=blog/article/autocomplete&user_token=";
        // line 389
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['article_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\tselect: function(item) {
\t\t\$('input[name=\\'product\\']').val('');
\t\t
\t\t\$('#article-related' + item['value']).remove();
\t\t
\t\t\$('#article-related').append('<div id=\"article-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"article_related[]\" value=\"' + item['value'] + '\" /></div>');\t
\t}
});
\t
\$('#article-related').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
</div>
";
        // line 415
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/category_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  945 => 415,  916 => 389,  884 => 360,  849 => 328,  824 => 306,  816 => 301,  790 => 277,  782 => 274,  776 => 273,  768 => 271,  760 => 269,  757 => 268,  753 => 267,  748 => 265,  744 => 264,  741 => 263,  737 => 262,  729 => 257,  725 => 256,  714 => 247,  705 => 245,  698 => 244,  694 => 243,  690 => 242,  683 => 240,  677 => 236,  668 => 234,  661 => 233,  657 => 232,  653 => 231,  646 => 229,  638 => 223,  633 => 221,  628 => 220,  623 => 218,  618 => 217,  616 => 216,  610 => 213,  603 => 208,  590 => 205,  584 => 203,  582 => 202,  569 => 200,  560 => 199,  556 => 198,  552 => 197,  549 => 196,  545 => 195,  538 => 191,  534 => 190,  526 => 185,  519 => 180,  514 => 178,  509 => 177,  504 => 175,  499 => 174,  497 => 173,  491 => 170,  482 => 166,  477 => 164,  468 => 160,  461 => 158,  454 => 153,  450 => 151,  446 => 149,  444 => 148,  435 => 144,  428 => 140,  422 => 139,  418 => 138,  412 => 134,  404 => 131,  399 => 129,  394 => 128,  389 => 126,  384 => 125,  382 => 124,  378 => 122,  374 => 121,  368 => 118,  362 => 114,  353 => 111,  346 => 110,  342 => 109,  337 => 107,  330 => 105,  325 => 102,  319 => 100,  317 => 99,  313 => 98,  307 => 97,  302 => 95,  296 => 91,  277 => 86,  270 => 84,  257 => 80,  250 => 78,  237 => 74,  230 => 72,  217 => 68,  210 => 66,  197 => 62,  190 => 60,  185 => 57,  179 => 55,  177 => 54,  167 => 53,  160 => 51,  154 => 49,  150 => 48,  146 => 46,  129 => 44,  125 => 43,  117 => 38,  113 => 37,  109 => 36,  105 => 35,  101 => 34,  96 => 32,  90 => 29,  86 => 27,  78 => 23,  76 => 22,  70 => 18,  59 => 16,  55 => 15,  50 => 13,  44 => 12,  40 => 11,  37 => 10,  31 => 8,  29 => 7,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/* */
/* 			{% if href_view %}*/
/* 				<a href="{{ href_view }}" class="btn btn-warning" target="_blank"><i class="fa fa-eye"></i></a> */
/* 			{% endif %}*/
/* 			*/
/*         <button type="submit" form="form-category" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
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
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-category" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*             <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/* 			<li><a href="#tab-related" data-toggle="tab">{{ tab_related }}</a></li>*/
/*             <li><a href="#tab-design" data-toggle="tab">{{ tab_design }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <ul class="nav nav-tabs" id="language">*/
/*                 {% for language in languages %}*/
/*                 <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <div class="tab-content">*/
/*                 {% for language in languages %}*/
/*                 <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="category_description[{{ language.language_id }}][name]" value="{{ category_description[language.language_id] ? category_description[language.language_id].name }}" placeholder="{{ entry_name }}" id="input-name{{ language.language_id }}" class="form-control" />*/
/*                       {% if error_name[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/* 				  <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-h1{{ language.language_id }}">{{ entry_meta_h1 }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="category_description[{{ language.language_id }}][meta_h1]" value="{{ category_description[language.language_id] ? category_description[language.language_id].meta_h1 }}" placeholder="{{ entry_meta_h1 }}" id="input-meta-h1{{ language.language_id }}" class="form-control" />*/
/*                     </div>*/
/* 				  </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="category_description[{{ language.language_id }}][meta_title]" value="{{ category_description[language.language_id] ? category_description[language.language_id].meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title{{ language.language_id }}" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="category_description[{{ language.language_id }}][meta_description]" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description{{ language.language_id }}" class="form-control">{{ category_description[language.language_id] ? category_description[language.language_id].meta_description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="category_description[{{ language.language_id }}][meta_keyword]" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword{{ language.language_id }}" class="form-control">{{ category_description[language.language_id] ? category_description[language.language_id].meta_keyword }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/* 				  <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="category_description[{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{ language.language_id }}" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control">{{ category_description[language.language_id] ? category_description[language.language_id].description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-data">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-parent">{{ entry_parent }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="path" value="{{ path }}" placeholder="{{ entry_parent }}" id="input-parent" class="form-control" />*/
/*                   <input type="hidden" name="parent_id" value="{{ parent_id }}" />*/
/*                   {% if error_parent %}*/
/*                   <div class="text-danger">{{ error_parent }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-filter"><span data-toggle="tooltip" title="{{ help_filter }}">{{ entry_filter }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="filter" value="" placeholder="{{ entry_filter }}" id="input-filter" class="form-control" />*/
/*                   <div id="category-filter" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for category_filter in category_filters %}*/
/*                     <div id="category-filter{{ category_filter.filter_id }}"><i class="fa fa-minus-circle"></i> {{ category_filter.name }}*/
/*                       <input type="hidden" name="category_filter[]" value="{{ category_filter.filter_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_store }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                     {% for store in stores %}*/
/*                     <div class="checkbox">*/
/*                       <label>*/
/*                         {% if store.store_id in category_store %}*/
/*                         <input type="checkbox" name="category_store[]" value="{{ store.store_id }}" checked="checked" />*/
/*                         {{ store.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="category_store[]" value="{{ store.store_id }}" />*/
/*                         {{ store.name }}*/
/*                         {% endif %}*/
/*                       </label>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_image }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="image" value="{{ image }}" id="input-image" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-top"><span data-toggle="tooltip" title="{{ help_top }}">{{ entry_top }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if top %}*/
/*                       <input type="checkbox" name="top" value="1" checked="checked" id="input-top" />*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="top" value="1" id="input-top" />*/
/*                       {% endif %}*/
/*                       &nbsp; </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-column"><span data-toggle="tooltip" title="{{ help_column }}">{{ entry_column }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="column" value="{{ column }}" placeholder="{{ entry_column }}" id="input-column" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/*                     {% if status %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-seo">*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_keyword }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for store in stores %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ store.name }}</td>*/
/*                     <td class="text-left">{% for language in languages %}*/
/*                       <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                         <input type="text" name="category_seo_url[{{ store.store_id }}][{{ language.language_id }}]" value="{% if category_seo_url[store.store_id][language.language_id] %}{{ category_seo_url[store.store_id][language.language_id] }}{% endif %}" placeholder="{{ entry_keyword }}" class="form-control" />*/
/*                       </div>*/
/*                       {% if error_keyword[store.store_id][language.language_id] %}*/
/*                       <div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/*                       {% endif %}*/
/*                       {% endfor %}</td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/* 			<div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-noindex">{{ entry_noindex }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="noindex" id="input-noindex" class="form-control">*/
/*                     {% if noindex %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/* 			</div>*/
/* 			<div class="tab-pane" id="tab-related">*/
/* 			   <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-product-related"><span data-toggle="tooltip" title="{{ help_related }}">{{ entry_related_wb }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="product_related_input" value="" placeholder="{{ entry_related_wb }}" id="input-product-related" class="form-control" />*/
/*                   <div id="product-related" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_related in product_related %}*/
/*                     <div id="product-related{{ product_related.product_id }}"><i class="fa fa-minus-circle"></i> {{ product_related.name }}*/
/*                       <input type="hidden" name="product_related[]" value="{{ product_related.product_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*                </div>*/
/* 			   <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-article-related"><span data-toggle="tooltip" title="{{ help_related }}">{{ entry_related_article }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="article_related_input" value="" placeholder="{{ entry_related_article }}" id="input-article-related" class="form-control" />*/
/*                   <div id="article-related" class="well well-sm" style="height: 150px; overflow: auto;"> {% for article_related in article_related %}*/
/*                     <div id="article-related{{ article_related.article_id }}"><i class="fa fa-minus-circle"></i> {{ article_related.name }}*/
/*                       <input type="hidden" name="article_related[]" value="{{ article_related.article_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*                </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-design">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_layout }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% for store in stores %}*/
/*                     <tr>*/
/*                       <td class="text-left">{{ store.name }}</td>*/
/*                       <td class="text-left"><select name="category_layout[{{ store.store_id }}]" class="form-control">*/
/*                           <option value=""></option>*/
/*                           {% for layout in layouts %}*/
/*                           {% if category_layout[store.store_id] and category_layout[store.store_id] == layout.layout_id %}*/
/*                           <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                           {% else %}*/
/*                           <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                           {% endif %}*/
/*                           {% endfor %}*/
/*                         </select></td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />*/
/*   <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script> */
/*   */
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/*   */
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'path\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					category_id: 0,*/
/* 					name: '{{ text_none }}'*/
/* 				});*/
/* */
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['category_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'path\']').val(item['label']);*/
/* 		$('input[name=\'parent_id\']').val(item['value']);*/
/* 	}*/
/* });*/
/* //--></script>*/
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'filter\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/filter/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['filter_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter\']').val('');*/
/* */
/* 		$('#category-filter' + item['value']).remove();*/
/* */
/* 		$('#category-filter').append('<div id="category-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="category_filter[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#category-filter').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* //--></script>*/
/*   <script type="text/javascript"><!--*/
/* $('#language a:first').tab('show');*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('input[name=\'product_related_input\']').autocomplete({*/
/* 	source: function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	select: function(item) {*/
/* 		$('input[name=\'product\']').val('');*/
/* 		*/
/* 		$('#product-related' + item['value']).remove();*/
/* 		*/
/* 		$('#product-related').append('<div id="product-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_related[]" value="' + item['value'] + '" /></div>');	*/
/* 	}*/
/* });*/
/* 	*/
/* $('#product-related').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('input[name=\'article_related_input\']').autocomplete({*/
/* 	source: function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=blog/article/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['article_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	select: function(item) {*/
/* 		$('input[name=\'product\']').val('');*/
/* 		*/
/* 		$('#article-related' + item['value']).remove();*/
/* 		*/
/* 		$('#article-related').append('<div id="article-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="article_related[]" value="' + item['value'] + '" /></div>');	*/
/* 	}*/
/* });*/
/* 	*/
/* $('#article-related').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
/* */
