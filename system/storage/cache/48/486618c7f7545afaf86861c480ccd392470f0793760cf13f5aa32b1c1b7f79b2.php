<?php

/* setting/setting.twig */
class __TwigTemplate_3f2b6c6e7c171036fc103847353e643de1dccc994fdfa26920b88206bb472ec8 extends Twig_Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_store"]) ? $context["tab_store"] : null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_local"]) ? $context["tab_local"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_mail"]) ? $context["tab_mail"] : null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_server"]) ? $context["tab_server"] : null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-seopro\" data-toggle=\"tab\">";
        // line 40
        echo (isset($context["tab_seopro"]) ? $context["tab_seopro"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 45
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 47
        echo (isset($context["config_meta_title"]) ? $context["config_meta_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 48
        if ((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null)) {
            // line 49
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_meta_title"]) ? $context["error_meta_title"] : null);
            echo "</div>
                  ";
        }
        // line 50
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 53
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 55
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo (isset($context["config_meta_description"]) ? $context["config_meta_description"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 59
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 61
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo (isset($context["config_meta_keyword"]) ? $context["config_meta_keyword"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 65
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 70
            echo "                    ";
            if (($this->getAttribute($context["theme"], "value", array()) == (isset($context["config_theme"]) ? $context["config_theme"] : null))) {
                // line 71
                echo "                    
                    <option value=\"";
                // line 72
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>
                    
                    ";
            } else {
                // line 75
                echo "                    
                    <option value=\"";
                // line 76
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>
                    
                    ";
            }
            // line 79
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 86
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 91
            echo "                    ";
            if (($this->getAttribute($context["layout"], "layout_id", array()) == (isset($context["config_layout_id"]) ? $context["config_layout_id"] : null))) {
                // line 92
                echo "                    
                    <option value=\"";
                // line 93
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                    
                    ";
            } else {
                // line 96
                echo "                    
                    <option value=\"";
                // line 97
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                    
                    ";
            }
            // line 100
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 108
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 110
        echo (isset($context["config_name"]) ? $context["config_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 111
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 112
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                  ";
        }
        // line 113
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 116
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 118
        echo (isset($context["config_owner"]) ? $context["config_owner"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 119
        if ((isset($context["error_owner"]) ? $context["error_owner"] : null)) {
            // line 120
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_owner"]) ? $context["error_owner"] : null);
            echo "</div>
                  ";
        }
        // line 121
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 124
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 126
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo (isset($context["config_address"]) ? $context["config_address"] : null);
        echo "</textarea>
                  ";
        // line 127
        if ((isset($context["error_address"]) ? $context["error_address"] : null)) {
            // line 128
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_address"]) ? $context["error_address"] : null);
            echo "</div>
                  ";
        }
        // line 129
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 132
        echo (isset($context["help_geocode"]) ? $context["help_geocode"] : null);
        echo "\">";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 134
        echo (isset($context["config_geocode"]) ? $context["config_geocode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 138
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 140
        echo (isset($context["config_email"]) ? $context["config_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 141
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 142
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                  ";
        }
        // line 143
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 146
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 148
        echo (isset($context["config_telephone"]) ? $context["config_telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 149
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 150
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                  ";
        }
        // line 151
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 154
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 156
        echo (isset($context["config_fax"]) ? $context["config_fax"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 160
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 161
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 162
        echo (isset($context["config_image"]) ? $context["config_image"] : null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 166
        echo (isset($context["help_open"]) ? $context["help_open"] : null);
        echo "\">";
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 168
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo (isset($context["config_open"]) ? $context["config_open"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 172
        echo (isset($context["help_comment"]) ? $context["help_comment"] : null);
        echo "\">";
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 174
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo (isset($context["config_comment"]) ? $context["config_comment"] : null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 177
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 178
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 179
            echo (isset($context["help_location"]) ? $context["help_location"] : null);
            echo "\">";
            echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 181
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 182
                if (twig_in_filter($this->getAttribute($context["location"], "location_id", array()), (isset($context["config_location"]) ? $context["config_location"] : null))) {
                    // line 183
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" checked=\"checked\" />
                      ";
                    // line 184
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                      ";
                } else {
                    // line 186
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" />
                      ";
                    // line 187
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                      ";
                }
                // line 188
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo " </div>
              </div>
              ";
        }
        // line 192
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 195
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    
                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 200
            echo "                    ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["config_country_id"]) ? $context["config_country_id"] : null))) {
                // line 201
                echo "                    
                    <option value=\"";
                // line 202
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    
                    ";
            } else {
                // line 205
                echo "                    
                    <option value=\"";
                // line 206
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    
                    ";
            }
            // line 209
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 215
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 222
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    
                    ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 227
            echo "                    ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_language"]) ? $context["config_language"] : null))) {
                // line 228
                echo "                    
                    <option value=\"";
                // line 229
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    
                    ";
            } else {
                // line 232
                echo "                    
                    <option value=\"";
                // line 233
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    
                    ";
            }
            // line 236
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 242
        echo (isset($context["entry_admin_language"]) ? $context["entry_admin_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    
                    ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 247
            echo "                    ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_admin_language"]) ? $context["config_admin_language"] : null))) {
                // line 248
                echo "                    
                    <option value=\"";
                // line 249
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    
                    ";
            } else {
                // line 252
                echo "                    
                    <option value=\"";
                // line 253
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    
                    ";
            }
            // line 256
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 262
        echo (isset($context["help_currency"]) ? $context["help_currency"] : null);
        echo "\">";
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    
                    ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 267
            echo "                    ";
            if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["config_currency"]) ? $context["config_currency"] : null))) {
                // line 268
                echo "                    
                    <option value=\"";
                // line 269
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                    
                    ";
            } else {
                // line 272
                echo "                    
                    <option value=\"";
                // line 273
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                    
                    ";
            }
            // line 276
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 282
        echo (isset($context["help_currency_auto"]) ? $context["help_currency_auto"] : null);
        echo "\">";
        echo (isset($context["entry_currency_auto"]) ? $context["entry_currency_auto"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 284
        if ((isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 285
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 286
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        } else {
            // line 288
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 289
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        }
        // line 290
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 291
        if ( !(isset($context["config_currency_auto"]) ? $context["config_currency_auto"] : null)) {
            // line 292
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 293
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        } else {
            // line 295
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 296
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        }
        // line 297
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 301
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    
                    ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 306
            echo "                    ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["config_length_class_id"]) ? $context["config_length_class_id"] : null))) {
                // line 307
                echo "                    
                    <option value=\"";
                // line 308
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    
                    ";
            } else {
                // line 311
                echo "                    
                    <option value=\"";
                // line 312
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    
                    ";
            }
            // line 315
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 321
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    
                    ";
        // line 325
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 326
            echo "                    ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["config_weight_class_id"]) ? $context["config_weight_class_id"] : null))) {
                // line 327
                echo "                    
                    <option value=\"";
                // line 328
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    
                    ";
            } else {
                // line 331
                echo "                    
                    <option value=\"";
                // line 332
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    
                    ";
            }
            // line 335
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 343
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 345
        echo (isset($context["help_product_count"]) ? $context["help_product_count"] : null);
        echo "\">";
        echo (isset($context["entry_product_count"]) ? $context["entry_product_count"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 347
        if ((isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 348
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 349
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 351
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 352
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 353
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 354
        if ( !(isset($context["config_product_count"]) ? $context["config_product_count"] : null)) {
            // line 355
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 356
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 358
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 359
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 360
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 364
        echo (isset($context["help_limit_admin"]) ? $context["help_limit_admin"] : null);
        echo "\">";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 366
        echo (isset($context["config_limit_admin"]) ? $context["config_limit_admin"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 367
        if ((isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null)) {
            // line 368
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null);
            echo "</div>
                    ";
        }
        // line 369
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 373
        echo (isset($context["text_review"]) ? $context["text_review"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 375
        echo (isset($context["help_review"]) ? $context["help_review"] : null);
        echo "\">";
        echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 377
        if ((isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 378
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 379
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 381
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 382
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 383
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 384
        if ( !(isset($context["config_review_status"]) ? $context["config_review_status"] : null)) {
            // line 385
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 386
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 388
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 389
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 390
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 394
        echo (isset($context["help_review_guest"]) ? $context["help_review_guest"] : null);
        echo "\">";
        echo (isset($context["entry_review_guest"]) ? $context["entry_review_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 396
        if ((isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 397
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 398
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 400
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 401
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 402
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 403
        if ( !(isset($context["config_review_guest"]) ? $context["config_review_guest"] : null)) {
            // line 404
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 405
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 407
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 408
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 409
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 414
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 416
        echo (isset($context["help_voucher_min"]) ? $context["help_voucher_min"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 418
        echo (isset($context["config_voucher_min"]) ? $context["config_voucher_min"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_min"]) ? $context["entry_voucher_min"] : null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 419
        if ((isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null)) {
            // line 420
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_voucher_min"]) ? $context["error_voucher_min"] : null);
            echo "</div>
                    ";
        }
        // line 421
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 424
        echo (isset($context["help_voucher_max"]) ? $context["help_voucher_max"] : null);
        echo "\">";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 426
        echo (isset($context["config_voucher_max"]) ? $context["config_voucher_max"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher_max"]) ? $context["entry_voucher_max"] : null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 427
        if ((isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null)) {
            // line 428
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_voucher_max"]) ? $context["error_voucher_max"] : null);
            echo "</div>
                    ";
        }
        // line 429
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 433
        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 435
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 437
        if ((isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 438
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 439
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 441
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 442
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 443
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 444
        if ( !(isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 445
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 446
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 448
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 449
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 450
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 454
        echo (isset($context["help_tax_default"]) ? $context["help_tax_default"] : null);
        echo "\">";
        echo (isset($context["entry_tax_default"]) ? $context["entry_tax_default"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 457
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 459
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "shipping")) {
            // line 460
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 461
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 464
            echo "                      
                      <option value=\"shipping\">";
            // line 465
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      
                      ";
        }
        // line 468
        echo "                      ";
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "payment")) {
            // line 469
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 470
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 473
            echo "                      
                      <option value=\"payment\">";
            // line 474
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      
                      ";
        }
        // line 477
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 482
        echo (isset($context["help_tax_customer"]) ? $context["help_tax_customer"] : null);
        echo "\">";
        echo (isset($context["entry_tax_customer"]) ? $context["entry_tax_customer"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 485
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 487
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "shipping")) {
            // line 488
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 489
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 492
            echo "                      
                      <option value=\"shipping\">";
            // line 493
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      
                      ";
        }
        // line 496
        echo "                      ";
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "payment")) {
            // line 497
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 498
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 501
            echo "                      
                      <option value=\"payment\">";
            // line 502
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      
                      ";
        }
        // line 505
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 511
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 513
        echo (isset($context["help_customer_online"]) ? $context["help_customer_online"] : null);
        echo "\">";
        echo (isset($context["entry_customer_online"]) ? $context["entry_customer_online"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 515
        if ((isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 516
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 517
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 519
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 520
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 521
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 522
        if ( !(isset($context["config_customer_online"]) ? $context["config_customer_online"] : null)) {
            // line 523
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 524
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 526
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 527
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 528
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 532
        echo (isset($context["help_customer_activity"]) ? $context["help_customer_activity"] : null);
        echo "\">";
        echo (isset($context["entry_customer_activity"]) ? $context["entry_customer_activity"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 534
        if ((isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 535
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 536
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 538
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 539
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 540
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 541
        if ( !(isset($context["config_customer_activity"]) ? $context["config_customer_activity"] : null)) {
            // line 542
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 543
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 545
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 546
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 547
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 551
        echo (isset($context["entry_customer_search"]) ? $context["entry_customer_search"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 553
        if ((isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 554
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 555
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 557
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 558
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 559
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 560
        if ( !(isset($context["config_customer_search"]) ? $context["config_customer_search"] : null)) {
            // line 561
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 562
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 564
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 565
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 566
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 570
        echo (isset($context["help_customer_group"]) ? $context["help_customer_group"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      
                      ";
        // line 574
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 575
            echo "                      ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_customer_group_id"]) ? $context["config_customer_group_id"] : null))) {
                // line 576
                echo "                      
                      <option value=\"";
                // line 577
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 580
                echo "                      
                      <option value=\"";
                // line 581
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 584
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 585
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 590
        echo (isset($context["help_customer_group_display"]) ? $context["help_customer_group_display"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group_display"]) ? $context["entry_customer_group_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 591
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 592
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 593
            if (twig_in_filter($this->getAttribute($context["customer_group"], "customer_group_id", array()), (isset($context["config_customer_group_display"]) ? $context["config_customer_group_display"] : null))) {
                // line 594
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />
                        ";
                // line 595
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                        ";
            } else {
                // line 597
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />
                        ";
                // line 598
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                        ";
            }
            // line 599
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 602
        echo "                    ";
        if ((isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null)) {
            // line 603
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null);
            echo "</div>
                    ";
        }
        // line 604
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 607
        echo (isset($context["help_customer_price"]) ? $context["help_customer_price"] : null);
        echo "\">";
        echo (isset($context["entry_customer_price"]) ? $context["entry_customer_price"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 609
        if ((isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 610
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 611
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 613
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 614
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 615
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 616
        if ( !(isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 617
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 618
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 620
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 621
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 622
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 626
        echo (isset($context["help_login_attempts"]) ? $context["help_login_attempts"] : null);
        echo "\">";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 628
        echo (isset($context["config_login_attempts"]) ? $context["config_login_attempts"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_login_attempts"]) ? $context["entry_login_attempts"] : null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 629
        if ((isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null)) {
            // line 630
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_login_attempts"]) ? $context["error_login_attempts"] : null);
            echo "</div>
                    ";
        }
        // line 631
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 634
        echo (isset($context["help_account"]) ? $context["help_account"] : null);
        echo "\">";
        echo (isset($context["entry_account"]) ? $context["entry_account"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 637
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 639
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 640
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_account_id"]) ? $context["config_account_id"] : null))) {
                // line 641
                echo "                      
                      <option value=\"";
                // line 642
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            } else {
                // line 645
                echo "                      
                      <option value=\"";
                // line 646
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            }
            // line 649
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 650
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 656
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 658
        echo (isset($context["help_invoice_prefix"]) ? $context["help_invoice_prefix"] : null);
        echo "\">";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 660
        echo (isset($context["config_invoice_prefix"]) ? $context["config_invoice_prefix"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_invoice_prefix"]) ? $context["entry_invoice_prefix"] : null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 664
        echo (isset($context["help_cart_weight"]) ? $context["help_cart_weight"] : null);
        echo "\">";
        echo (isset($context["entry_cart_weight"]) ? $context["entry_cart_weight"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 666
        if ((isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 667
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 668
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 670
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 671
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 672
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 673
        if ( !(isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 674
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 675
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 677
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 678
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 679
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 683
        echo (isset($context["help_checkout_guest"]) ? $context["help_checkout_guest"] : null);
        echo "\">";
        echo (isset($context["entry_checkout_guest"]) ? $context["entry_checkout_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 685
        if ((isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 686
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 687
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 689
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 690
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 691
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 692
        if ( !(isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 693
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 694
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 696
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 697
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 698
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 702
        echo (isset($context["help_checkout"]) ? $context["help_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_checkout"]) ? $context["entry_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 705
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 707
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 708
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_checkout_id"]) ? $context["config_checkout_id"] : null))) {
                // line 709
                echo "                      
                      <option value=\"";
                // line 710
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            } else {
                // line 713
                echo "                      
                      <option value=\"";
                // line 714
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            }
            // line 717
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 718
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 723
        echo (isset($context["help_order_status"]) ? $context["help_order_status"] : null);
        echo "\">";
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      ";
        // line 727
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 728
            echo "                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_order_status_id"]) ? $context["config_order_status_id"] : null))) {
                // line 729
                echo "                      
                      <option value=\"";
                // line 730
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 733
                echo "                      
                      <option value=\"";
                // line 734
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 737
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 738
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 743
        echo (isset($context["help_processing_status"]) ? $context["help_processing_status"] : null);
        echo "\">";
        echo (isset($context["entry_processing_status"]) ? $context["entry_processing_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 745
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 746
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 747
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_processing_status"]) ? $context["config_processing_status"] : null))) {
                // line 748
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 749
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            } else {
                // line 751
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />
                          ";
                // line 752
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            }
            // line 753
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 755
        echo " </div>
                    ";
        // line 756
        if ((isset($context["error_processing_status"]) ? $context["error_processing_status"] : null)) {
            // line 757
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_processing_status"]) ? $context["error_processing_status"] : null);
            echo "</div>
                    ";
        }
        // line 758
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 761
        echo (isset($context["help_complete_status"]) ? $context["help_complete_status"] : null);
        echo "\">";
        echo (isset($context["entry_complete_status"]) ? $context["entry_complete_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 763
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 764
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 765
            if (twig_in_filter($this->getAttribute($context["order_status"], "order_status_id", array()), (isset($context["config_complete_status"]) ? $context["config_complete_status"] : null))) {
                // line 766
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 767
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            } else {
                // line 769
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" />
                          ";
                // line 770
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "
                          ";
            }
            // line 771
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 773
        echo " </div>
                    ";
        // line 774
        if ((isset($context["error_complete_status"]) ? $context["error_complete_status"] : null)) {
            // line 775
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_complete_status"]) ? $context["error_complete_status"] : null);
            echo "</div>
                    ";
        }
        // line 776
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 779
        echo (isset($context["help_fraud_status"]) ? $context["help_fraud_status"] : null);
        echo "\">";
        echo (isset($context["entry_fraud_status"]) ? $context["entry_fraud_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      
                      ";
        // line 783
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 784
            echo "                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_fraud_status_id"]) ? $context["config_fraud_status_id"] : null))) {
                // line 785
                echo "                      
                      <option value=\"";
                // line 786
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 789
                echo "                      
                      <option value=\"";
                // line 790
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 793
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 794
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 799
        echo (isset($context["help_api"]) ? $context["help_api"] : null);
        echo "\">";
        echo (isset($context["entry_api"]) ? $context["entry_api"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 802
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 804
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apis"]) ? $context["apis"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 805
            echo "                      ";
            if (($this->getAttribute($context["api"], "api_id", array()) == (isset($context["config_api_id"]) ? $context["config_api_id"] : null))) {
                // line 806
                echo "                      
                      <option value=\"";
                // line 807
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>
                      
                      ";
            } else {
                // line 810
                echo "                      
                      <option value=\"";
                // line 811
                echo $this->getAttribute($context["api"], "api_id", array());
                echo "\">";
                echo $this->getAttribute($context["api"], "username", array());
                echo "</option>
                      
                      ";
            }
            // line 814
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 815
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 821
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 823
        echo (isset($context["help_stock_display"]) ? $context["help_stock_display"] : null);
        echo "\">";
        echo (isset($context["entry_stock_display"]) ? $context["entry_stock_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 825
        if ((isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 826
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 827
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 829
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 830
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 831
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 832
        if ( !(isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 833
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 834
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 836
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 837
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 838
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 842
        echo (isset($context["help_stock_warning"]) ? $context["help_stock_warning"] : null);
        echo "\">";
        echo (isset($context["entry_stock_warning"]) ? $context["entry_stock_warning"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 844
        if ((isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 845
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 846
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 848
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 849
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 850
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 851
        if ( !(isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null)) {
            // line 852
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 853
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 855
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 856
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 857
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 861
        echo (isset($context["help_stock_checkout"]) ? $context["help_stock_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_stock_checkout"]) ? $context["entry_stock_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 863
        if ((isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 864
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 865
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 867
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 868
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 869
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 870
        if ( !(isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 871
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 872
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 874
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 875
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 876
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 881
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 883
        echo (isset($context["entry_affiliate_group"]) ? $context["entry_affiliate_group"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      
                      ";
        // line 887
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 888
            echo "                      ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_affiliate_group_id"]) ? $context["config_affiliate_group_id"] : null))) {
                // line 889
                echo "                      
                      <option value=\"";
                // line 890
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 893
                echo "                      
                      <option value=\"";
                // line 894
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 897
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 898
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 903
        echo (isset($context["help_affiliate_approval"]) ? $context["help_affiliate_approval"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_approval"]) ? $context["entry_affiliate_approval"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 905
        if ((isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 906
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 907
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 909
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 910
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 911
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 912
        if ( !(isset($context["config_affiliate_approval"]) ? $context["config_affiliate_approval"] : null)) {
            // line 913
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 914
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 916
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 917
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 918
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 922
        echo (isset($context["help_affiliate_auto"]) ? $context["help_affiliate_auto"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_auto"]) ? $context["entry_affiliate_auto"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 924
        if ((isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 925
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 926
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 928
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 929
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 930
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 931
        if ( !(isset($context["config_affiliate_auto"]) ? $context["config_affiliate_auto"] : null)) {
            // line 932
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 933
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 935
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 936
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 937
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 941
        echo (isset($context["help_affiliate_commission"]) ? $context["help_affiliate_commission"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 943
        echo (isset($context["config_affiliate_commission"]) ? $context["config_affiliate_commission"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_affiliate_commission"]) ? $context["entry_affiliate_commission"] : null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 947
        echo (isset($context["help_affiliate"]) ? $context["help_affiliate"] : null);
        echo "\">";
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 950
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 952
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 953
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_affiliate_id"]) ? $context["config_affiliate_id"] : null))) {
                // line 954
                echo "                      
                      <option value=\"";
                // line 955
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            } else {
                // line 958
                echo "                      
                      <option value=\"";
                // line 959
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            }
            // line 962
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 963
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 969
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 971
        echo (isset($context["help_return"]) ? $context["help_return"] : null);
        echo "\">";
        echo (isset($context["entry_return"]) ? $context["entry_return"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 974
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 976
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 977
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_return_id"]) ? $context["config_return_id"] : null))) {
                // line 978
                echo "                      
                      <option value=\"";
                // line 979
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            } else {
                // line 982
                echo "                      
                      <option value=\"";
                // line 983
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      
                      ";
            }
            // line 986
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 987
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 992
        echo (isset($context["help_return_status"]) ? $context["help_return_status"] : null);
        echo "\">";
        echo (isset($context["entry_return_status"]) ? $context["entry_return_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      
                      ";
        // line 996
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_statuses"]) ? $context["return_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 997
            echo "                      ";
            if (($this->getAttribute($context["return_status"], "return_status_id", array()) == (isset($context["config_return_status_id"]) ? $context["config_return_status_id"] : null))) {
                // line 998
                echo "                      
                      <option value=\"";
                // line 999
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>
                      
                      ";
            } else {
                // line 1002
                echo "                      
                      <option value=\"";
                // line 1003
                echo $this->getAttribute($context["return_status"], "return_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["return_status"], "name", array());
                echo "</option>
                      
                      ";
            }
            // line 1006
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1007
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1013
        echo (isset($context["text_captcha"]) ? $context["text_captcha"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1015
        echo (isset($context["help_captcha"]) ? $context["help_captcha"] : null);
        echo "\">";
        echo (isset($context["entry_captcha"]) ? $context["entry_captcha"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1018
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      
                      ";
        // line 1020
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captchas"]) ? $context["captchas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1021
            echo "                      ";
            if (($this->getAttribute($context["captcha"], "value", array()) == (isset($context["config_captcha"]) ? $context["config_captcha"] : null))) {
                // line 1022
                echo "                      
                      <option value=\"";
                // line 1023
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>
                      
                      ";
            } else {
                // line 1026
                echo "                      
                      <option value=\"";
                // line 1027
                echo $this->getAttribute($context["captcha"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["captcha"], "text", array());
                echo "</option>
                      
                      ";
            }
            // line 1030
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1031
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1036
        echo (isset($context["entry_captcha_page"]) ? $context["entry_captcha_page"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1038
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["captcha_pages"]) ? $context["captcha_pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1039
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1040
            if (twig_in_filter($this->getAttribute($context["captcha_page"], "value", array()), (isset($context["config_captcha_page"]) ? $context["config_captcha_page"] : null))) {
                // line 1041
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 1042
                echo $this->getAttribute($context["captcha_page"], "text", array());
                echo "
                          ";
            } else {
                // line 1044
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo $this->getAttribute($context["captcha_page"], "value", array());
                echo "\" />
                          ";
                // line 1045
                echo $this->getAttribute($context["captcha_page"], "text", array());
                echo "
                          ";
            }
            // line 1046
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1048
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1055
        echo (isset($context["entry_logo"]) ? $context["entry_logo"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1056
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1057
        echo (isset($context["config_logo"]) ? $context["config_logo"] : null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1061
        echo (isset($context["help_icon"]) ? $context["help_icon"] : null);
        echo "\">";
        echo (isset($context["entry_icon"]) ? $context["entry_icon"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1062
        echo (isset($context["icon"]) ? $context["icon"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1063
        echo (isset($context["config_icon"]) ? $context["config_icon"] : null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1069
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1071
        echo (isset($context["help_mail_engine"]) ? $context["help_mail_engine"] : null);
        echo "\">";
        echo (isset($context["entry_mail_engine"]) ? $context["entry_mail_engine"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      
                      ";
        // line 1075
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "mail")) {
            // line 1076
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1077
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 1080
            echo "                      
                      <option value=\"mail\">";
            // line 1081
            echo (isset($context["text_mail"]) ? $context["text_mail"] : null);
            echo "</option>
                      
                      ";
        }
        // line 1084
        echo "                      ";
        if (((isset($context["config_mail_engine"]) ? $context["config_mail_engine"] : null) == "smtp")) {
            // line 1085
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1086
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>
                      
                      ";
        } else {
            // line 1089
            echo "                      
                      <option value=\"smtp\">";
            // line 1090
            echo (isset($context["text_smtp"]) ? $context["text_smtp"] : null);
            echo "</option>
                      
                      ";
        }
        // line 1093
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1098
        echo (isset($context["help_mail_parameter"]) ? $context["help_mail_parameter"] : null);
        echo "\">";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1100
        echo (isset($context["config_mail_parameter"]) ? $context["config_mail_parameter"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_parameter"]) ? $context["entry_mail_parameter"] : null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1104
        echo (isset($context["help_mail_smtp_hostname"]) ? $context["help_mail_smtp_hostname"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1106
        echo (isset($context["config_mail_smtp_hostname"]) ? $context["config_mail_smtp_hostname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_hostname"]) ? $context["entry_mail_smtp_hostname"] : null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1110
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1112
        echo (isset($context["config_mail_smtp_username"]) ? $context["config_mail_smtp_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_username"]) ? $context["entry_mail_smtp_username"] : null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1116
        echo (isset($context["help_mail_smtp_password"]) ? $context["help_mail_smtp_password"] : null);
        echo "\">";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1118
        echo (isset($context["config_mail_smtp_password"]) ? $context["config_mail_smtp_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_password"]) ? $context["entry_mail_smtp_password"] : null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1122
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1124
        echo (isset($context["config_mail_smtp_port"]) ? $context["config_mail_smtp_port"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_port"]) ? $context["entry_mail_smtp_port"] : null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1128
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1130
        echo (isset($context["config_mail_smtp_timeout"]) ? $context["config_mail_smtp_timeout"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mail_smtp_timeout"]) ? $context["entry_mail_smtp_timeout"] : null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1135
        echo (isset($context["text_mail_alert"]) ? $context["text_mail_alert"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1137
        echo (isset($context["help_mail_alert"]) ? $context["help_mail_alert"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert"]) ? $context["entry_mail_alert"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mail_alerts"]) ? $context["mail_alerts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1140
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1141
            if (twig_in_filter($this->getAttribute($context["mail_alert"], "value", array()), (isset($context["config_mail_alert"]) ? $context["config_mail_alert"] : null))) {
                // line 1142
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 1143
                echo $this->getAttribute($context["mail_alert"], "text", array());
                echo "
                          ";
            } else {
                // line 1145
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo $this->getAttribute($context["mail_alert"], "value", array());
                echo "\" />
                          ";
                // line 1146
                echo $this->getAttribute($context["mail_alert"], "text", array());
                echo "
                          ";
            }
            // line 1147
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1149
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1153
        echo (isset($context["help_mail_alert_email"]) ? $context["help_mail_alert_email"] : null);
        echo "\">";
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1155
        echo (isset($context["entry_mail_alert_email"]) ? $context["entry_mail_alert_email"] : null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo (isset($context["config_mail_alert_email"]) ? $context["config_mail_alert_email"] : null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1162
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1164
        echo (isset($context["help_maintenance"]) ? $context["help_maintenance"] : null);
        echo "\">";
        echo (isset($context["entry_maintenance"]) ? $context["entry_maintenance"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1166
        if ((isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1167
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1168
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1170
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1171
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1172
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1173
        if ( !(isset($context["config_maintenance"]) ? $context["config_maintenance"] : null)) {
            // line 1174
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1175
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1177
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1178
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1179
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1183
        echo (isset($context["help_seo_url"]) ? $context["help_seo_url"] : null);
        echo "\">";
        echo (isset($context["entry_seo_url"]) ? $context["entry_seo_url"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1185
        if ((isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1186
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1187
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1189
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1190
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1191
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1192
        if ( !(isset($context["config_seo_url"]) ? $context["config_seo_url"] : null)) {
            // line 1193
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1194
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1196
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1197
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1198
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1202
        echo (isset($context["help_robots"]) ? $context["help_robots"] : null);
        echo "\">";
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1204
        echo (isset($context["entry_robots"]) ? $context["entry_robots"] : null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo (isset($context["config_robots"]) ? $context["config_robots"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1208
        echo (isset($context["help_compression"]) ? $context["help_compression"] : null);
        echo "\">";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1210
        echo (isset($context["config_compression"]) ? $context["config_compression"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_compression"]) ? $context["entry_compression"] : null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1215
        echo (isset($context["text_security"]) ? $context["text_security"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1217
        echo (isset($context["help_secure"]) ? $context["help_secure"] : null);
        echo "\">";
        echo (isset($context["entry_secure"]) ? $context["entry_secure"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1219
        if ((isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1220
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1221
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1223
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1224
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1225
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1226
        if ( !(isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 1227
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1228
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1230
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1231
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1232
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1236
        echo (isset($context["help_password"]) ? $context["help_password"] : null);
        echo "\">";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1238
        if ((isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1239
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1240
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1242
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1243
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1244
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1245
        if ( !(isset($context["config_password"]) ? $context["config_password"] : null)) {
            // line 1246
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1247
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1249
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1250
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1251
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1255
        echo (isset($context["help_shared"]) ? $context["help_shared"] : null);
        echo "\">";
        echo (isset($context["entry_shared"]) ? $context["entry_shared"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1257
        if ((isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1258
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1259
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1261
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1262
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1263
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1264
        if ( !(isset($context["config_shared"]) ? $context["config_shared"] : null)) {
            // line 1265
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1266
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1268
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1269
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1270
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1274
        echo (isset($context["help_encryption"]) ? $context["help_encryption"] : null);
        echo "\">";
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1276
        echo (isset($context["entry_encryption"]) ? $context["entry_encryption"] : null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo (isset($context["config_encryption"]) ? $context["config_encryption"] : null);
        echo "</textarea>
                    ";
        // line 1277
        if ((isset($context["error_encryption"]) ? $context["error_encryption"] : null)) {
            // line 1278
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_encryption"]) ? $context["error_encryption"] : null);
            echo "</div>
                    ";
        }
        // line 1279
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1283
        echo (isset($context["text_upload"]) ? $context["text_upload"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1285
        echo (isset($context["help_file_max_size"]) ? $context["help_file_max_size"] : null);
        echo "\">";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1287
        echo (isset($context["config_file_max_size"]) ? $context["config_file_max_size"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_file_max_size"]) ? $context["entry_file_max_size"] : null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1291
        echo (isset($context["help_file_ext_allowed"]) ? $context["help_file_ext_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1293
        echo (isset($context["entry_file_ext_allowed"]) ? $context["entry_file_ext_allowed"] : null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_ext_allowed"]) ? $context["config_file_ext_allowed"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1297
        echo (isset($context["help_file_mime_allowed"]) ? $context["help_file_mime_allowed"] : null);
        echo "\">";
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1299
        echo (isset($context["entry_file_mime_allowed"]) ? $context["entry_file_mime_allowed"] : null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo (isset($context["config_file_mime_allowed"]) ? $context["config_file_mime_allowed"] : null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1304
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1306
        echo (isset($context["entry_error_display"]) ? $context["entry_error_display"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1308
        if ((isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1309
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1310
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1312
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1313
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1314
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1315
        if ( !(isset($context["config_error_display"]) ? $context["config_error_display"] : null)) {
            // line 1316
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1317
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1319
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1320
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1321
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1325
        echo (isset($context["entry_error_log"]) ? $context["entry_error_log"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1327
        if ((isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1328
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1329
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 1331
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1332
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 1333
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1334
        if ( !(isset($context["config_error_log"]) ? $context["config_error_log"] : null)) {
            // line 1335
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1336
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 1338
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1339
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 1340
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1344
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1346
        echo (isset($context["config_error_filename"]) ? $context["config_error_filename"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_error_filename"]) ? $context["entry_error_filename"] : null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1347
        if ((isset($context["error_log"]) ? $context["error_log"] : null)) {
            // line 1348
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_log"]) ? $context["error_log"] : null);
            echo "</div>
                    ";
        }
        // line 1349
        echo " </div>
                </div>
              </fieldset>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"tab-seopro\">
\t\t\t<fieldset>
\t\t\t<legend>";
        // line 1357
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</legend>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1359
        echo (isset($context["help_seo_pro"]) ? $context["help_seo_pro"] : null);
        echo "\">";
        echo (isset($context["entry_seo_pro"]) ? $context["entry_seo_pro"] : null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1361
        if ((isset($context["config_seo_pro"]) ? $context["config_seo_pro"] : null)) {
            // line 1362
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1363
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1365
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" />
\t\t\t\t  ";
            // line 1366
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t  ";
        }
        // line 1367
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1368
        if ( !(isset($context["config_seo_pro"]) ? $context["config_seo_pro"] : null)) {
            // line 1369
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1370
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1372
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" />
\t\t\t\t  ";
            // line 1373
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t  ";
        }
        // line 1374
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1378
        echo (isset($context["help_config_seo_url_include_path"]) ? $context["help_config_seo_url_include_path"] : null);
        echo "\">";
        echo (isset($context["entry_config_seo_url_include_path"]) ? $context["entry_config_seo_url_include_path"] : null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1380
        if ((isset($context["config_seo_url_include_path"]) ? $context["config_seo_url_include_path"] : null)) {
            // line 1381
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1382
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1384
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" />
\t\t\t\t  ";
            // line 1385
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t  ";
        }
        // line 1386
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1387
        if ( !(isset($context["config_seo_url_include_path"]) ? $context["config_seo_url_include_path"] : null)) {
            // line 1388
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1389
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1391
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" />
\t\t\t\t  ";
            // line 1392
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t  ";
        }
        // line 1393
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1397
        echo (isset($context["entry_config_seo_url_cache"]) ? $context["entry_config_seo_url_cache"] : null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1399
        if ((isset($context["config_seo_url_cache"]) ? $context["config_seo_url_cache"] : null)) {
            // line 1400
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1401
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1403
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" />
\t\t\t\t  ";
            // line 1404
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t  ";
        }
        // line 1405
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1406
        if ( !(isset($context["config_seo_url_cache"]) ? $context["config_seo_url_cache"] : null)) {
            // line 1407
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1408
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1410
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" />
\t\t\t\t  ";
            // line 1411
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t  ";
        }
        // line 1412
        echo " </label>
\t\t\t  </div>
\t\t\t</div>\t\t
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1416
        echo (isset($context["entry_seopro_addslash"]) ? $context["entry_seopro_addslash"] : null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1418
        if ((isset($context["config_seopro_addslash"]) ? $context["config_seopro_addslash"] : null)) {
            // line 1419
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1420
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1422
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" />
\t\t\t\t  ";
            // line 1423
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t  ";
        }
        // line 1424
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1425
        if ( !(isset($context["config_seopro_addslash"]) ? $context["config_seopro_addslash"] : null)) {
            // line 1426
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1427
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1429
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" />
\t\t\t\t  ";
            // line 1430
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t  ";
        }
        // line 1431
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1435
        echo (isset($context["entry_seopro_lowercase"]) ? $context["entry_seopro_lowercase"] : null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1437
        if ((isset($context["config_seopro_lowercase"]) ? $context["config_seopro_lowercase"] : null)) {
            // line 1438
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1439
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1441
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" />
\t\t\t\t  ";
            // line 1442
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t  ";
        }
        // line 1443
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1444
        if ( !(isset($context["config_seopro_lowercase"]) ? $context["config_seopro_lowercase"] : null)) {
            // line 1445
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1446
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1448
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" />
\t\t\t\t  ";
            // line 1449
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t  ";
        }
        // line 1450
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-page-postfix\">";
        // line 1454
        echo (isset($context["entry_page_postfix"]) ? $context["entry_page_postfix"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"config_page_postfix\" value=\"";
        // line 1456
        echo (isset($context["config_page_postfix"]) ? $context["config_page_postfix"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_page_postfix"]) ? $context["entry_page_postfix"] : null);
        echo "\" id=\"input-page-postfix\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1460
        echo (isset($context["help_config_valide_param_flag"]) ? $context["help_config_valide_param_flag"] : null);
        echo "\">";
        echo (isset($context["entry_config_valide_param_flag"]) ? $context["entry_config_valide_param_flag"] : null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1462
        if ((isset($context["config_valide_param_flag"]) ? $context["config_valide_param_flag"] : null)) {
            // line 1463
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1464
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1466
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" />
\t\t\t\t  ";
            // line 1467
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t  ";
        }
        // line 1468
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1469
        if ( !(isset($context["config_valide_param_flag"]) ? $context["config_valide_param_flag"] : null)) {
            // line 1470
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1471
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1473
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" />
\t\t\t\t  ";
            // line 1474
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t  ";
        }
        // line 1475
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-valide-params\"><span data-toggle=\"tooltip\" title=\"";
        // line 1479
        echo (isset($context["help_valide_params"]) ? $context["help_valide_params"] : null);
        echo "\">";
        echo (isset($context["entry_valide_params"]) ? $context["entry_valide_params"] : null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<textarea name=\"config_valide_params\" rows=10\" placeholder=\"";
        // line 1481
        echo (isset($context["entry_valide_params"]) ? $context["entry_valide_params"] : null);
        echo "\" id=\"input-valide-params\" class=\"form-control\">";
        echo (isset($context["config_valide_params"]) ? $context["config_valide_params"] : null);
        echo "</textarea>
\t\t\t  </div>
\t\t\t</div>
\t\t\t

\t\t  </fieldset>
\t\t</div>
\t\t\t
\t\t\t
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1498
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1520
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1529
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1535
        echo (isset($context["config_zone_id"]) ? $context["config_zone_id"] : null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1542
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1557
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4019 => 1557,  4001 => 1542,  3991 => 1535,  3982 => 1529,  3970 => 1520,  3945 => 1498,  3923 => 1481,  3916 => 1479,  3910 => 1475,  3905 => 1474,  3902 => 1473,  3897 => 1471,  3894 => 1470,  3892 => 1469,  3889 => 1468,  3884 => 1467,  3881 => 1466,  3876 => 1464,  3873 => 1463,  3871 => 1462,  3864 => 1460,  3855 => 1456,  3850 => 1454,  3844 => 1450,  3839 => 1449,  3836 => 1448,  3831 => 1446,  3828 => 1445,  3826 => 1444,  3823 => 1443,  3818 => 1442,  3815 => 1441,  3810 => 1439,  3807 => 1438,  3805 => 1437,  3800 => 1435,  3794 => 1431,  3789 => 1430,  3786 => 1429,  3781 => 1427,  3778 => 1426,  3776 => 1425,  3773 => 1424,  3768 => 1423,  3765 => 1422,  3760 => 1420,  3757 => 1419,  3755 => 1418,  3750 => 1416,  3744 => 1412,  3739 => 1411,  3736 => 1410,  3731 => 1408,  3728 => 1407,  3726 => 1406,  3723 => 1405,  3718 => 1404,  3715 => 1403,  3710 => 1401,  3707 => 1400,  3705 => 1399,  3700 => 1397,  3694 => 1393,  3689 => 1392,  3686 => 1391,  3681 => 1389,  3678 => 1388,  3676 => 1387,  3673 => 1386,  3668 => 1385,  3665 => 1384,  3660 => 1382,  3657 => 1381,  3655 => 1380,  3648 => 1378,  3642 => 1374,  3637 => 1373,  3634 => 1372,  3629 => 1370,  3626 => 1369,  3624 => 1368,  3621 => 1367,  3616 => 1366,  3613 => 1365,  3608 => 1363,  3605 => 1362,  3603 => 1361,  3596 => 1359,  3591 => 1357,  3581 => 1349,  3575 => 1348,  3573 => 1347,  3567 => 1346,  3562 => 1344,  3556 => 1340,  3551 => 1339,  3548 => 1338,  3543 => 1336,  3540 => 1335,  3538 => 1334,  3535 => 1333,  3530 => 1332,  3527 => 1331,  3522 => 1329,  3519 => 1328,  3517 => 1327,  3512 => 1325,  3506 => 1321,  3501 => 1320,  3498 => 1319,  3493 => 1317,  3490 => 1316,  3488 => 1315,  3485 => 1314,  3480 => 1313,  3477 => 1312,  3472 => 1310,  3469 => 1309,  3467 => 1308,  3462 => 1306,  3457 => 1304,  3447 => 1299,  3440 => 1297,  3431 => 1293,  3424 => 1291,  3415 => 1287,  3408 => 1285,  3403 => 1283,  3397 => 1279,  3391 => 1278,  3389 => 1277,  3383 => 1276,  3376 => 1274,  3370 => 1270,  3365 => 1269,  3362 => 1268,  3357 => 1266,  3354 => 1265,  3352 => 1264,  3349 => 1263,  3344 => 1262,  3341 => 1261,  3336 => 1259,  3333 => 1258,  3331 => 1257,  3324 => 1255,  3318 => 1251,  3313 => 1250,  3310 => 1249,  3305 => 1247,  3302 => 1246,  3300 => 1245,  3297 => 1244,  3292 => 1243,  3289 => 1242,  3284 => 1240,  3281 => 1239,  3279 => 1238,  3272 => 1236,  3266 => 1232,  3261 => 1231,  3258 => 1230,  3253 => 1228,  3250 => 1227,  3248 => 1226,  3245 => 1225,  3240 => 1224,  3237 => 1223,  3232 => 1221,  3229 => 1220,  3227 => 1219,  3220 => 1217,  3215 => 1215,  3205 => 1210,  3198 => 1208,  3189 => 1204,  3182 => 1202,  3176 => 1198,  3171 => 1197,  3168 => 1196,  3163 => 1194,  3160 => 1193,  3158 => 1192,  3155 => 1191,  3150 => 1190,  3147 => 1189,  3142 => 1187,  3139 => 1186,  3137 => 1185,  3130 => 1183,  3124 => 1179,  3119 => 1178,  3116 => 1177,  3111 => 1175,  3108 => 1174,  3106 => 1173,  3103 => 1172,  3098 => 1171,  3095 => 1170,  3090 => 1168,  3087 => 1167,  3085 => 1166,  3078 => 1164,  3073 => 1162,  3061 => 1155,  3054 => 1153,  3048 => 1149,  3040 => 1147,  3035 => 1146,  3030 => 1145,  3025 => 1143,  3020 => 1142,  3018 => 1141,  3015 => 1140,  3011 => 1139,  3004 => 1137,  2999 => 1135,  2989 => 1130,  2984 => 1128,  2975 => 1124,  2970 => 1122,  2961 => 1118,  2954 => 1116,  2945 => 1112,  2940 => 1110,  2931 => 1106,  2924 => 1104,  2915 => 1100,  2908 => 1098,  2901 => 1093,  2895 => 1090,  2892 => 1089,  2886 => 1086,  2883 => 1085,  2880 => 1084,  2874 => 1081,  2871 => 1080,  2865 => 1077,  2862 => 1076,  2860 => 1075,  2851 => 1071,  2846 => 1069,  2837 => 1063,  2831 => 1062,  2825 => 1061,  2818 => 1057,  2812 => 1056,  2808 => 1055,  2799 => 1048,  2791 => 1046,  2786 => 1045,  2781 => 1044,  2776 => 1042,  2771 => 1041,  2769 => 1040,  2766 => 1039,  2762 => 1038,  2757 => 1036,  2750 => 1031,  2744 => 1030,  2736 => 1027,  2733 => 1026,  2725 => 1023,  2722 => 1022,  2719 => 1021,  2715 => 1020,  2710 => 1018,  2702 => 1015,  2697 => 1013,  2689 => 1007,  2683 => 1006,  2675 => 1003,  2672 => 1002,  2664 => 999,  2661 => 998,  2658 => 997,  2654 => 996,  2645 => 992,  2638 => 987,  2632 => 986,  2624 => 983,  2621 => 982,  2613 => 979,  2610 => 978,  2607 => 977,  2603 => 976,  2598 => 974,  2590 => 971,  2585 => 969,  2577 => 963,  2571 => 962,  2563 => 959,  2560 => 958,  2552 => 955,  2549 => 954,  2546 => 953,  2542 => 952,  2537 => 950,  2529 => 947,  2520 => 943,  2513 => 941,  2507 => 937,  2502 => 936,  2499 => 935,  2494 => 933,  2491 => 932,  2489 => 931,  2486 => 930,  2481 => 929,  2478 => 928,  2473 => 926,  2470 => 925,  2468 => 924,  2461 => 922,  2455 => 918,  2450 => 917,  2447 => 916,  2442 => 914,  2439 => 913,  2437 => 912,  2434 => 911,  2429 => 910,  2426 => 909,  2421 => 907,  2418 => 906,  2416 => 905,  2409 => 903,  2402 => 898,  2396 => 897,  2388 => 894,  2385 => 893,  2377 => 890,  2374 => 889,  2371 => 888,  2367 => 887,  2360 => 883,  2355 => 881,  2348 => 876,  2343 => 875,  2340 => 874,  2335 => 872,  2332 => 871,  2330 => 870,  2327 => 869,  2322 => 868,  2319 => 867,  2314 => 865,  2311 => 864,  2309 => 863,  2302 => 861,  2296 => 857,  2291 => 856,  2288 => 855,  2283 => 853,  2280 => 852,  2278 => 851,  2275 => 850,  2270 => 849,  2267 => 848,  2262 => 846,  2259 => 845,  2257 => 844,  2250 => 842,  2244 => 838,  2239 => 837,  2236 => 836,  2231 => 834,  2228 => 833,  2226 => 832,  2223 => 831,  2218 => 830,  2215 => 829,  2210 => 827,  2207 => 826,  2205 => 825,  2198 => 823,  2193 => 821,  2185 => 815,  2179 => 814,  2171 => 811,  2168 => 810,  2160 => 807,  2157 => 806,  2154 => 805,  2150 => 804,  2145 => 802,  2137 => 799,  2130 => 794,  2124 => 793,  2116 => 790,  2113 => 789,  2105 => 786,  2102 => 785,  2099 => 784,  2095 => 783,  2086 => 779,  2081 => 776,  2075 => 775,  2073 => 774,  2070 => 773,  2062 => 771,  2057 => 770,  2052 => 769,  2047 => 767,  2042 => 766,  2040 => 765,  2037 => 764,  2033 => 763,  2026 => 761,  2021 => 758,  2015 => 757,  2013 => 756,  2010 => 755,  2002 => 753,  1997 => 752,  1992 => 751,  1987 => 749,  1982 => 748,  1980 => 747,  1977 => 746,  1973 => 745,  1966 => 743,  1959 => 738,  1953 => 737,  1945 => 734,  1942 => 733,  1934 => 730,  1931 => 729,  1928 => 728,  1924 => 727,  1915 => 723,  1908 => 718,  1902 => 717,  1894 => 714,  1891 => 713,  1883 => 710,  1880 => 709,  1877 => 708,  1873 => 707,  1868 => 705,  1860 => 702,  1854 => 698,  1849 => 697,  1846 => 696,  1841 => 694,  1838 => 693,  1836 => 692,  1833 => 691,  1828 => 690,  1825 => 689,  1820 => 687,  1817 => 686,  1815 => 685,  1808 => 683,  1802 => 679,  1797 => 678,  1794 => 677,  1789 => 675,  1786 => 674,  1784 => 673,  1781 => 672,  1776 => 671,  1773 => 670,  1768 => 668,  1765 => 667,  1763 => 666,  1756 => 664,  1747 => 660,  1740 => 658,  1735 => 656,  1727 => 650,  1721 => 649,  1713 => 646,  1710 => 645,  1702 => 642,  1699 => 641,  1696 => 640,  1692 => 639,  1687 => 637,  1679 => 634,  1674 => 631,  1668 => 630,  1666 => 629,  1660 => 628,  1653 => 626,  1647 => 622,  1642 => 621,  1639 => 620,  1634 => 618,  1631 => 617,  1629 => 616,  1626 => 615,  1621 => 614,  1618 => 613,  1613 => 611,  1610 => 610,  1608 => 609,  1601 => 607,  1596 => 604,  1590 => 603,  1587 => 602,  1579 => 599,  1574 => 598,  1569 => 597,  1564 => 595,  1559 => 594,  1557 => 593,  1554 => 592,  1550 => 591,  1544 => 590,  1537 => 585,  1531 => 584,  1523 => 581,  1520 => 580,  1512 => 577,  1509 => 576,  1506 => 575,  1502 => 574,  1493 => 570,  1487 => 566,  1482 => 565,  1479 => 564,  1474 => 562,  1471 => 561,  1469 => 560,  1466 => 559,  1461 => 558,  1458 => 557,  1453 => 555,  1450 => 554,  1448 => 553,  1443 => 551,  1437 => 547,  1432 => 546,  1429 => 545,  1424 => 543,  1421 => 542,  1419 => 541,  1416 => 540,  1411 => 539,  1408 => 538,  1403 => 536,  1400 => 535,  1398 => 534,  1391 => 532,  1385 => 528,  1380 => 527,  1377 => 526,  1372 => 524,  1369 => 523,  1367 => 522,  1364 => 521,  1359 => 520,  1356 => 519,  1351 => 517,  1348 => 516,  1346 => 515,  1339 => 513,  1334 => 511,  1326 => 505,  1320 => 502,  1317 => 501,  1311 => 498,  1308 => 497,  1305 => 496,  1299 => 493,  1296 => 492,  1290 => 489,  1287 => 488,  1285 => 487,  1280 => 485,  1272 => 482,  1265 => 477,  1259 => 474,  1256 => 473,  1250 => 470,  1247 => 469,  1244 => 468,  1238 => 465,  1235 => 464,  1229 => 461,  1226 => 460,  1224 => 459,  1219 => 457,  1211 => 454,  1205 => 450,  1200 => 449,  1197 => 448,  1192 => 446,  1189 => 445,  1187 => 444,  1184 => 443,  1179 => 442,  1176 => 441,  1171 => 439,  1168 => 438,  1166 => 437,  1161 => 435,  1156 => 433,  1150 => 429,  1144 => 428,  1142 => 427,  1136 => 426,  1129 => 424,  1124 => 421,  1118 => 420,  1116 => 419,  1110 => 418,  1103 => 416,  1098 => 414,  1091 => 409,  1086 => 408,  1083 => 407,  1078 => 405,  1075 => 404,  1073 => 403,  1070 => 402,  1065 => 401,  1062 => 400,  1057 => 398,  1054 => 397,  1052 => 396,  1045 => 394,  1039 => 390,  1034 => 389,  1031 => 388,  1026 => 386,  1023 => 385,  1021 => 384,  1018 => 383,  1013 => 382,  1010 => 381,  1005 => 379,  1002 => 378,  1000 => 377,  993 => 375,  988 => 373,  982 => 369,  976 => 368,  974 => 367,  968 => 366,  961 => 364,  955 => 360,  950 => 359,  947 => 358,  942 => 356,  939 => 355,  937 => 354,  934 => 353,  929 => 352,  926 => 351,  921 => 349,  918 => 348,  916 => 347,  909 => 345,  904 => 343,  895 => 336,  889 => 335,  881 => 332,  878 => 331,  870 => 328,  867 => 327,  864 => 326,  860 => 325,  853 => 321,  846 => 316,  840 => 315,  832 => 312,  829 => 311,  821 => 308,  818 => 307,  815 => 306,  811 => 305,  804 => 301,  798 => 297,  793 => 296,  790 => 295,  785 => 293,  782 => 292,  780 => 291,  777 => 290,  772 => 289,  769 => 288,  764 => 286,  761 => 285,  759 => 284,  752 => 282,  745 => 277,  739 => 276,  731 => 273,  728 => 272,  720 => 269,  717 => 268,  714 => 267,  710 => 266,  701 => 262,  694 => 257,  688 => 256,  680 => 253,  677 => 252,  669 => 249,  666 => 248,  663 => 247,  659 => 246,  652 => 242,  645 => 237,  639 => 236,  631 => 233,  628 => 232,  620 => 229,  617 => 228,  614 => 227,  610 => 226,  603 => 222,  593 => 215,  586 => 210,  580 => 209,  572 => 206,  569 => 205,  561 => 202,  558 => 201,  555 => 200,  551 => 199,  544 => 195,  539 => 192,  534 => 190,  526 => 188,  521 => 187,  516 => 186,  511 => 184,  506 => 183,  504 => 182,  501 => 181,  497 => 180,  491 => 179,  488 => 178,  486 => 177,  478 => 174,  471 => 172,  462 => 168,  455 => 166,  448 => 162,  442 => 161,  438 => 160,  429 => 156,  424 => 154,  419 => 151,  413 => 150,  411 => 149,  405 => 148,  400 => 146,  395 => 143,  389 => 142,  387 => 141,  381 => 140,  376 => 138,  367 => 134,  360 => 132,  355 => 129,  349 => 128,  347 => 127,  341 => 126,  336 => 124,  331 => 121,  325 => 120,  323 => 119,  317 => 118,  312 => 116,  307 => 113,  301 => 112,  299 => 111,  293 => 110,  288 => 108,  279 => 101,  273 => 100,  265 => 97,  262 => 96,  254 => 93,  251 => 92,  248 => 91,  244 => 90,  237 => 86,  229 => 80,  223 => 79,  215 => 76,  212 => 75,  204 => 72,  201 => 71,  198 => 70,  194 => 69,  187 => 65,  178 => 61,  173 => 59,  164 => 55,  159 => 53,  154 => 50,  148 => 49,  146 => 48,  140 => 47,  135 => 45,  127 => 40,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  94 => 31,  88 => 28,  84 => 26,  76 => 22,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" id="button-save" form="form-setting" data-toggle="tooltip" title="{{ button_save }}" disabled="disabled" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
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
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-setting" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-store" data-toggle="tab">{{ tab_store }}</a></li>*/
/*             <li><a href="#tab-local" data-toggle="tab">{{ tab_local }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-mail" data-toggle="tab">{{ tab_mail }}</a></li>*/
/*             <li><a href="#tab-server" data-toggle="tab">{{ tab_server }}</a></li>*/
/* 			<li><a href="#tab-seopro" data-toggle="tab">{{ tab_seopro }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_meta_title }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_meta_title" value="{{ config_meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title" class="form-control" />*/
/*                   {% if error_meta_title %}*/
/*                   <div class="text-danger">{{ error_meta_title }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-description">{{ entry_meta_description }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_description" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description" class="form-control">{{ config_meta_description }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-keyword">{{ entry_meta_keyword }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_keyword" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword" class="form-control">{{ config_meta_keyword }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-theme">{{ entry_theme }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_theme" id="input-theme" class="form-control">*/
/*                     */
/*                     {% for theme in themes %}*/
/*                     {% if theme.value == config_theme %}*/
/*                     */
/*                     <option value="{{ theme.value }}" selected="selected">{{ theme.text }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ theme.value }}">{{ theme.text }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                   <br />*/
/*                   <img src="" alt="" id="theme" class="img-thumbnail" /></div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-layout">{{ entry_layout }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_layout_id" id="input-layout" class="form-control">*/
/*                     */
/*                     {% for layout in layouts %}*/
/*                     {% if layout.layout_id == config_layout_id %}*/
/*                     */
/*                     <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-store">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_name" value="{{ config_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                   {% if error_name %}*/
/*                   <div class="text-danger">{{ error_name }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-owner">{{ entry_owner }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_owner" value="{{ config_owner }}" placeholder="{{ entry_owner }}" id="input-owner" class="form-control" />*/
/*                   {% if error_owner %}*/
/*                   <div class="text-danger">{{ error_owner }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-address">{{ entry_address }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_address" placeholder="{{ entry_address }}" rows="5" id="input-address" class="form-control">{{ config_address }}</textarea>*/
/*                   {% if error_address %}*/
/*                   <div class="text-danger">{{ error_address }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-geocode"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_geocode }}">{{ entry_geocode }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_geocode" value="{{ config_geocode }}" placeholder="{{ entry_geocode }}" id="input-geocode" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_email" value="{{ config_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                   {% if error_email %}*/
/*                   <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_telephone" value="{{ config_telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                   {% if error_telephone %}*/
/*                   <div class="text-danger">{{ error_telephone }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-fax">{{ entry_fax }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_fax" value="{{ config_fax }}" placeholder="{{ entry_fax }}" id="input-fax" class="form-control" />*/
/*                 </div>*/
/*               </div>              */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-image">{{ entry_image }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_image" value="{{ config_image }}" id="input-image" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-open"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_open }}">{{ entry_open }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_open" rows="5" placeholder="{{ entry_open }}" id="input-open" class="form-control">{{ config_open }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-comment"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_comment }}">{{ entry_comment }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_comment" rows="5" placeholder="{{ entry_comment }}" id="input-comment" class="form-control">{{ config_comment }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               {% if locations %}*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_location }}">{{ entry_location }}</span></label>*/
/*                 <div class="col-sm-10"> {% for location in locations %}*/
/*                   <div class="checkbox">*/
/*                     <label> {% if location.location_id in config_location %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" checked="checked" />*/
/*                       {{ location.name }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" />*/
/*                       {{ location.name }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                   {% endfor %} </div>*/
/*               </div>*/
/*               {% endif %} </div>*/
/*             <div class="tab-pane" id="tab-local">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-country">{{ entry_country }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_country_id" id="input-country" class="form-control">*/
/*                     */
/*                     {% for country in countries %}*/
/*                     {% if country.country_id == config_country_id %}*/
/*                     */
/*                     <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-zone">{{ entry_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_zone_id" id="input-zone" class="form-control">*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-language">{{ entry_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_language" id="input-language" class="form-control">*/
/*                     */
/*                     {% for language in languages %}*/
/*                     {% if language.code == config_language %}*/
/*                     */
/*                     <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-admin-language">{{ entry_admin_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_admin_language" id="input-admin-language" class="form-control">*/
/*                     */
/*                     {% for language in languages %}*/
/*                     {% if language.code == config_admin_language %}*/
/*                     */
/*                     <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-currency"><span data-toggle="tooltip" title="{{ help_currency }}">{{ entry_currency }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_currency" id="input-currency" class="form-control">*/
/*                     */
/*                     {% for currency in currencies %}*/
/*                     {% if currency.code == config_currency %}*/
/*                     */
/*                     <option value="{{ currency.code }}" selected="selected">{{ currency.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ currency.code }}">{{ currency.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_currency_auto }}">{{ entry_currency_auto }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline"> {% if config_currency_auto %}*/
/*                     <input type="radio" name="config_currency_auto" value="1" checked="checked" />*/
/*                     {{ text_yes }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_currency_auto" value="1" />*/
/*                     {{ text_yes }}*/
/*                     {% endif %} </label>*/
/*                   <label class="radio-inline"> {% if not config_currency_auto %}*/
/*                     <input type="radio" name="config_currency_auto" value="0" checked="checked" />*/
/*                     {{ text_no }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_currency_auto" value="0" />*/
/*                     {{ text_no }}*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_length_class_id" id="input-length-class" class="form-control">*/
/*                     */
/*                     {% for length_class in length_classes %}*/
/*                     {% if length_class.length_class_id == config_length_class_id %}*/
/*                     */
/*                     <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_weight_class_id" id="input-weight-class" class="form-control">*/
/*                     */
/*                     {% for weight_class in weight_classes %}*/
/*                     {% if weight_class.weight_class_id == config_weight_class_id %}*/
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <fieldset>*/
/*                 <legend>{{ text_product }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_product_count }}">{{ entry_product_count }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_product_count %}*/
/*                       <input type="radio" name="config_product_count" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_product_count" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_product_count %}*/
/*                       <input type="radio" name="config_product_count" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_product_count" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-admin-limit"><span data-toggle="tooltip" title="{{ help_limit_admin }}">{{ entry_limit_admin }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_limit_admin" value="{{ config_limit_admin }}" placeholder="{{ entry_limit_admin }}" id="input-admin-limit" class="form-control" />*/
/*                     {% if error_limit_admin %}*/
/*                     <div class="text-danger">{{ error_limit_admin }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_review }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review }}">{{ entry_review }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_review_status %}*/
/*                       <input type="radio" name="config_review_status" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_status" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_review_status %}*/
/*                       <input type="radio" name="config_review_status" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_status" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review_guest }}">{{ entry_review_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_review_guest %}*/
/*                       <input type="radio" name="config_review_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_review_guest %}*/
/*                       <input type="radio" name="config_review_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_review_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_voucher }}</legend>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-min"><span data-toggle="tooltip" title="{{ help_voucher_min }}">{{ entry_voucher_min }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_min" value="{{ config_voucher_min }}" placeholder="{{ entry_voucher_min }}" id="input-voucher-min" class="form-control" />*/
/*                     {% if error_voucher_min %}*/
/*                     <div class="text-danger">{{ error_voucher_min }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-voucher-max"><span data-toggle="tooltip" title="{{ help_voucher_max }}">{{ entry_voucher_max }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_voucher_max" value="{{ config_voucher_max }}" placeholder="{{ entry_voucher_max }}" id="input-voucher-max" class="form-control" />*/
/*                     {% if error_voucher_max %}*/
/*                     <div class="text-danger">{{ error_voucher_max }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_tax }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_tax }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_tax %}*/
/*                       <input type="radio" name="config_tax" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_tax %}*/
/*                       <input type="radio" name="config_tax" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-default"><span data-toggle="tooltip" title="{{ help_tax_default }}">{{ entry_tax_default }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_default" id="input-tax-default" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% if config_tax_default == 'shipping' %}*/
/*                       */
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_tax_default == 'payment' %}*/
/*                       */
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-customer"><span data-toggle="tooltip" title="{{ help_tax_customer }}">{{ entry_tax_customer }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_customer" id="input-tax-customer" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% if config_tax_customer == 'shipping' %}*/
/*                       */
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_tax_customer == 'payment' %}*/
/*                       */
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_account }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_online }}">{{ entry_customer_online }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_online %}*/
/*                       <input type="radio" name="config_customer_online" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_online" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_online %}*/
/*                       <input type="radio" name="config_customer_online" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_online" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_activity }}">{{ entry_customer_activity }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_activity %}*/
/*                       <input type="radio" name="config_customer_activity" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_activity" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_activity %}*/
/*                       <input type="radio" name="config_customer_activity" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_activity" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_customer_search }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_search %}*/
/*                       <input type="radio" name="config_customer_search" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_search" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_search %}*/
/*                       <input type="radio" name="config_customer_search" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_search" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-customer-group"><span data-toggle="tooltip" title="{{ help_customer_group }}">{{ entry_customer_group }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_customer_group_id" id="input-customer-group" class="form-control">*/
/*                       */
/*                       {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == config_customer_group_id %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_group_display }}">{{ entry_customer_group_display }}</span></label>*/
/*                   <div class="col-sm-10"> {% for customer_group in customer_groups %}*/
/*                     <div class="checkbox">*/
/*                       <label> {% if customer_group.customer_group_id in config_customer_group_display %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*                         {{ customer_group.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" />*/
/*                         {{ customer_group.name }}*/
/*                         {% endif %} </label>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     {% if error_customer_group_display %}*/
/*                     <div class="text-danger">{{ error_customer_group_display }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_price }}">{{ entry_customer_price }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-login-attempts"><span data-toggle="tooltip" title="{{ help_login_attempts }}">{{ entry_login_attempts }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_login_attempts" value="{{ config_login_attempts }}" placeholder="{{ entry_login_attempts }}" id="input-login-attempts" class="form-control" />*/
/*                     {% if error_login_attempts %}*/
/*                     <div class="text-danger">{{ error_login_attempts }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-account"><span data-toggle="tooltip" title="{{ help_account }}">{{ entry_account }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_account_id" id="input-account" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_account_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_checkout }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-invoice-prefix"><span data-toggle="tooltip" title="{{ help_invoice_prefix }}">{{ entry_invoice_prefix }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_invoice_prefix" value="{{ config_invoice_prefix }}" placeholder="{{ entry_invoice_prefix }}" id="input-invoice-prefix" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_cart_weight }}">{{ entry_cart_weight }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_checkout_guest }}">{{ entry_checkout_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-checkout"><span data-toggle="tooltip" title="{{ help_checkout }}">{{ entry_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_checkout_id" id="input-checkout" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_checkout_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-order-status"><span data-toggle="tooltip" title="{{ help_order_status }}">{{ entry_order_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_order_status_id" id="input-order-status" class="form-control">*/
/*                       */
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == config_order_status_id %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-process-status"><span data-toggle="tooltip" title="{{ help_processing_status }}">{{ entry_processing_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if order_status.order_status_id in config_processing_status %}*/
/*                           <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/*                           {{ order_status.name }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_processing_status[]" value="{{ order_status.order_status_id }}" />*/
/*                           {{ order_status.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_processing_status %}*/
/*                     <div class="text-danger">{{ error_processing_status }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-complete-status"><span data-toggle="tooltip" title="{{ help_complete_status }}">{{ entry_complete_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for order_status in order_statuses %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if order_status.order_status_id in config_complete_status %}*/
/*                           <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" checked="checked" />*/
/*                           {{ order_status.name }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_complete_status[]" value="{{ order_status.order_status_id }}" />*/
/*                           {{ order_status.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_complete_status %}*/
/*                     <div class="text-danger">{{ error_complete_status }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-fraud-status"><span data-toggle="tooltip" title="{{ help_fraud_status }}">{{ entry_fraud_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_fraud_status_id" id="input-fraud-status" class="form-control">*/
/*                       */
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == config_fraud_status_id %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-api"><span data-toggle="tooltip" title="{{ help_api }}">{{ entry_api }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_api_id" id="input-api" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for api in apis %}*/
/*                       {% if api.api_id == config_api_id %}*/
/*                       */
/*                       <option value="{{ api.api_id }}" selected="selected">{{ api.username }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ api.api_id }}">{{ api.username }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_stock }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_display }}">{{ entry_stock_display }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_warning }}">{{ entry_stock_warning }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_warning %}*/
/*                       <input type="radio" name="config_stock_warning" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_warning" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_warning %}*/
/*                       <input type="radio" name="config_stock_warning" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_warning" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_checkout }}">{{ entry_stock_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_affiliate }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-group">{{ entry_affiliate_group }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_group_id" id="input-affiliate-group" class="form-control">*/
/*                       */
/*                       {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == config_affiliate_group_id %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_approval }}">{{ entry_affiliate_approval }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_affiliate_approval %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_affiliate_approval %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_approval" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_affiliate_auto }}">{{ entry_affiliate_auto }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_affiliate_auto %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_affiliate_auto %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_affiliate_auto" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate-commission"><span data-toggle="tooltip" title="{{ help_affiliate_commission }}">{{ entry_affiliate_commission }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_affiliate_commission" value="{{ config_affiliate_commission }}" placeholder="{{ entry_affiliate_commission }}" id="input-affiliate-commission" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate"><span data-toggle="tooltip" title="{{ help_affiliate }}">{{ entry_affiliate }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_affiliate_id" id="input-affiliate" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_affiliate_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_return }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return"><span data-toggle="tooltip" title="{{ help_return }}">{{ entry_return }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_id" id="input-return" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       */
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_return_id %}*/
/*                       */
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-return-status"><span data-toggle="tooltip" title="{{ help_return_status }}">{{ entry_return_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_return_status_id" id="input-return-status" class="form-control">*/
/*                       */
/*                       {% for return_status in return_statuses %}*/
/*                       {% if return_status.return_status_id == config_return_status_id %}*/
/*                       */
/*                       <option value="{{ return_status.return_status_id }}" selected="selected">{{ return_status.name }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ return_status.return_status_id }}">{{ return_status.name }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_captcha }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_captcha }}">{{ entry_captcha }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_captcha" id="input-captcha" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       */
/*                       {% for captcha in captchas %}*/
/*                       {% if captcha.value == config_captcha %}*/
/*                       */
/*                       <option value="{{ captcha.value }}" selected="selected">{{ captcha.text }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="{{ captcha.value }}">{{ captcha.text }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_captcha_page }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for captcha_page in captcha_pages %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if captcha_page.value in config_captcha_page %}*/
/*                           <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" checked="checked" />*/
/*                           {{ captcha_page.text }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_captcha_page[]" value="{{ captcha_page.value }}" />*/
/*                           {{ captcha_page.text }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-logo">{{ entry_logo }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-logo" data-toggle="image" class="img-thumbnail"><img src="{{ logo }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_logo" value="{{ config_logo }}" id="input-logo" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-icon"><span data-toggle="tooltip" title="{{ help_icon }}">{{ entry_icon }}</span></label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-icon" data-toggle="image" class="img-thumbnail"><img src="{{ icon }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_icon" value="{{ config_icon }}" id="input-icon" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-mail">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-engine"><span data-toggle="tooltip" title="{{ help_mail_engine }}">{{ entry_mail_engine }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_mail_engine" id="input-mail-engine" class="form-control">*/
/*                       */
/*                       {% if config_mail_engine == 'mail' %}*/
/*                       */
/*                       <option value="mail" selected="selected">{{ text_mail }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="mail">{{ text_mail }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                       {% if config_mail_engine == 'smtp' %}*/
/*                       */
/*                       <option value="smtp" selected="selected">{{ text_smtp }}</option>*/
/*                       */
/*                       {% else %}*/
/*                       */
/*                       <option value="smtp">{{ text_smtp }}</option>*/
/*                       */
/*                       {% endif %}*/
/*                     */
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-parameter"><span data-toggle="tooltip" title="{{ help_mail_parameter }}">{{ entry_mail_parameter }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_parameter" value="{{ config_mail_parameter }}" placeholder="{{ entry_mail_parameter }}" id="input-mail-parameter" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-hostname"><span data-toggle="tooltip" title="{{ help_mail_smtp_hostname }}">{{ entry_mail_smtp_hostname }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_hostname" value="{{ config_mail_smtp_hostname }}" placeholder="{{ entry_mail_smtp_hostname }}" id="input-mail-smtp-hostname" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-username">{{ entry_mail_smtp_username }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_username" value="{{ config_mail_smtp_username }}" placeholder="{{ entry_mail_smtp_username }}" id="input-mail-smtp-username" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-password"><span data-toggle="tooltip" title="{{ help_mail_smtp_password }}">{{ entry_mail_smtp_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_password" value="{{ config_mail_smtp_password }}" placeholder="{{ entry_mail_smtp_password }}" id="input-mail-smtp-password" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-port">{{ entry_mail_smtp_port }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_port" value="{{ config_mail_smtp_port }}" placeholder="{{ entry_mail_smtp_port }}" id="input-mail-smtp-port" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-smtp-timeout">{{ entry_mail_smtp_timeout }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_mail_smtp_timeout" value="{{ config_mail_smtp_timeout }}" placeholder="{{ entry_mail_smtp_timeout }}" id="input-mail-smtp-timeout" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_mail_alert }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_mail_alert }}">{{ entry_mail_alert }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for mail_alert in mail_alerts %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if mail_alert.value in config_mail_alert %}*/
/*                           <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" checked="checked" />*/
/*                           {{ mail_alert.text }}*/
/*                           {% else %}*/
/*                           <input type="checkbox" name="config_mail_alert[]" value="{{ mail_alert.value }}" />*/
/*                           {{ mail_alert.text }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-mail-alert-email"><span data-toggle="tooltip" title="{{ help_mail_alert_email }}">{{ entry_mail_alert_email }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_mail_alert_email" rows="5" placeholder="{{ entry_mail_alert_email }}" id="input-alert-email" class="form-control">{{ config_mail_alert_email }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-server">*/
/*               <fieldset>*/
/*                 <legend>{{ text_general }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_maintenance }}">{{ entry_maintenance }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_maintenance %}*/
/*                       <input type="radio" name="config_maintenance" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_maintenance" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_maintenance %}*/
/*                       <input type="radio" name="config_maintenance" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_maintenance" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_seo_url }}">{{ entry_seo_url }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_seo_url %}*/
/*                       <input type="radio" name="config_seo_url" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_seo_url" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_seo_url %}*/
/*                       <input type="radio" name="config_seo_url" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_seo_url" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-robots"><span data-toggle="tooltip" title="{{ help_robots }}">{{ entry_robots }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_robots" rows="5" placeholder="{{ entry_robots }}" id="input-robots" class="form-control">{{ config_robots }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-compression"><span data-toggle="tooltip" title="{{ help_compression }}">{{ entry_compression }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_compression" value="{{ config_compression }}" placeholder="{{ entry_compression }}" id="input-compression" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_security }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_secure }}">{{ entry_secure }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_secure %}*/
/*                       <input type="radio" name="config_secure" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_secure" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_secure %}*/
/*                       <input type="radio" name="config_secure" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_secure" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_password }}">{{ entry_password }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_password %}*/
/*                       <input type="radio" name="config_password" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_password" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_password %}*/
/*                       <input type="radio" name="config_password" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_password" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_shared }}">{{ entry_shared }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_shared %}*/
/*                       <input type="radio" name="config_shared" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_shared" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_shared %}*/
/*                       <input type="radio" name="config_shared" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_shared" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-encryption"><span data-toggle="tooltip" title="{{ help_encryption }}">{{ entry_encryption }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_encryption" rows="5" placeholder="{{ entry_encryption }}" id="input-encryption" class="form-control">{{ config_encryption }}</textarea>*/
/*                     {% if error_encryption %}*/
/*                     <div class="text-danger">{{ error_encryption }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_upload }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-max-size"><span data-toggle="tooltip" title="{{ help_file_max_size }}">{{ entry_file_max_size }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_file_max_size" value="{{ config_file_max_size }}" placeholder="{{ entry_file_max_size }}" id="input-file-max-size" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-ext-allowed"><span data-toggle="tooltip" title="{{ help_file_ext_allowed }}">{{ entry_file_ext_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_ext_allowed" rows="5" placeholder="{{ entry_file_ext_allowed }}" id="input-file-ext-allowed" class="form-control">{{ config_file_ext_allowed }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-file-mime-allowed"><span data-toggle="tooltip" title="{{ help_file_mime_allowed }}">{{ entry_file_mime_allowed }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="config_file_mime_allowed" rows="5" placeholder="{{ entry_file_mime_allowed }}" id="input-file-mime-allowed" class="form-control">{{ config_file_mime_allowed }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_error }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_display }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_error_display %}*/
/*                       <input type="radio" name="config_error_display" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_display" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_error_display %}*/
/*                       <input type="radio" name="config_error_display" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_display" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %} </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_error_log }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline"> {% if config_error_log %}*/
/*                       <input type="radio" name="config_error_log" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_log" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %} </label>*/
/*                     <label class="radio-inline"> {% if not config_error_log %}*/
/*                       <input type="radio" name="config_error_log" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_error_log" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}</label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-error-filename">{{ entry_error_filename }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="config_error_filename" value="{{ config_error_filename }}" placeholder="{{ entry_error_filename }}" id="input-error-filename" class="form-control" />*/
/*                     {% if error_log %}*/
/*                     <div class="text-danger">{{ error_log }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/* 			*/
/* 			*/
/* 			<div class="tab-pane" id="tab-seopro">*/
/* 			<fieldset>*/
/* 			<legend>{{ text_general }}</legend>*/
/* 			<div class="form-group">*/
/* 			  <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_seo_pro }}">{{ entry_seo_pro }}</span></label>*/
/* 			  <div class="col-sm-10">*/
/* 				<label class="radio-inline"> {% if config_seo_pro %}*/
/* 				  <input type="radio" name="config_seo_pro" value="1" checked="checked" />*/
/* 				  {{ text_yes }}*/
/* 				  {% else %}*/
/* 				  <input type="radio" name="config_seo_pro" value="1" />*/
/* 				  {{ text_yes }}*/
/* 				  {% endif %} </label>*/
/* 				<label class="radio-inline"> {% if not config_seo_pro %}*/
/* 				  <input type="radio" name="config_seo_pro" value="0" checked="checked" />*/
/* 				  {{ text_no }}*/
/* 				  {% else %}*/
/* 				  <input type="radio" name="config_seo_pro" value="0" />*/
/* 				  {{ text_no }}*/
/* 				  {% endif %} </label>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 			  <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_config_seo_url_include_path }}">{{ entry_config_seo_url_include_path }}</span></label>*/
/* 			  <div class="col-sm-10">*/
/* 				<label class="radio-inline"> {% if config_seo_url_include_path %}*/
/* 				  <input type="radio" name="config_seo_url_include_path" value="1" checked="checked" />*/
/* 				  {{ text_yes }}*/
/* 				  {% else %}*/
/* 				  <input type="radio" name="config_seo_url_include_path" value="1" />*/
/* 				  {{ text_yes }}*/
/* 				  {% endif %} </label>*/
/* 				<label class="radio-inline"> {% if not config_seo_url_include_path %}*/
/* 				  <input type="radio" name="config_seo_url_include_path" value="0" checked="checked" />*/
/* 				  {{ text_no }}*/
/* 				  {% else %}*/
/* 				  <input type="radio" name="config_seo_url_include_path" value="0" />*/
/* 				  {{ text_no }}*/
/* 				  {% endif %} </label>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 			  <label class="col-sm-2 control-label">{{ entry_config_seo_url_cache }}</label>*/
/* 			  <div class="col-sm-10">*/
/* 				<label class="radio-inline"> {% if config_seo_url_cache %}*/
/* 				  <input type="radio" name="config_seo_url_cache" value="1" checked="checked" />*/
/* 				  {{ text_yes }}*/
/* 				  {% else %}*/
/* 				  <input type="radio" name="config_seo_url_cache" value="1" />*/
/* 				  {{ text_yes }}*/
/* 				  {% endif %} </label>*/
/* 				<label class="radio-inline"> {% if not config_seo_url_cache %}*/
/* 				  <input type="radio" name="config_seo_url_cache" value="0" checked="checked" />*/
/* 				  {{ text_no }}*/
/* 				  {% else %}*/
/* 				  <input type="radio" name="config_seo_url_cache" value="0" />*/
/* 				  {{ text_no }}*/
/* 				  {% endif %} </label>*/
/* 			  </div>*/
/* 			</div>		*/
/* 			<div class="form-group">*/
/* 			  <label class="col-sm-2 control-label">{{ entry_seopro_addslash }}</label>*/
/* 			  <div class="col-sm-10">*/
/* 				<label class="radio-inline"> {% if config_seopro_addslash %}*/
/* 				  <input type="radio" name="config_seopro_addslash" value="1" checked="checked" />*/
/* 				  {{ text_yes }}*/
/* 				  {% else %}*/
/* 				  <input type="radio" name="config_seopro_addslash" value="1" />*/
/* 				  {{ text_yes }}*/
/* 				  {% endif %} </label>*/
/* 				<label class="radio-inline"> {% if not config_seopro_addslash %}*/
/* 				  <input type="radio" name="config_seopro_addslash" value="0" checked="checked" />*/
/* 				  {{ text_no }}*/
/* 				  {% else %}*/
/* 				  <input type="radio" name="config_seopro_addslash" value="0" />*/
/* 				  {{ text_no }}*/
/* 				  {% endif %} </label>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 			  <label class="col-sm-2 control-label">{{ entry_seopro_lowercase }}</label>*/
/* 			  <div class="col-sm-10">*/
/* 				<label class="radio-inline"> {% if config_seopro_lowercase %}*/
/* 				  <input type="radio" name="config_seopro_lowercase" value="1" checked="checked" />*/
/* 				  {{ text_yes }}*/
/* 				  {% else %}*/
/* 				  <input type="radio" name="config_seopro_lowercase" value="1" />*/
/* 				  {{ text_yes }}*/
/* 				  {% endif %} </label>*/
/* 				<label class="radio-inline"> {% if not config_seopro_lowercase %}*/
/* 				  <input type="radio" name="config_seopro_lowercase" value="0" checked="checked" />*/
/* 				  {{ text_no }}*/
/* 				  {% else %}*/
/* 				  <input type="radio" name="config_seopro_lowercase" value="0" />*/
/* 				  {{ text_no }}*/
/* 				  {% endif %} </label>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-page-postfix">{{ entry_page_postfix }}</label>*/
/* 				<div class="col-sm-10">*/
/* 				<input type="text" name="config_page_postfix" value="{{ config_page_postfix }}" placeholder="{{ entry_page_postfix }}" id="input-page-postfix" class="form-control" />*/
/* 				</div>*/
/* 			</div>			*/
/* 			<div class="form-group">*/
/* 			  <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_config_valide_param_flag }}">{{ entry_config_valide_param_flag }}</span></label>*/
/* 			  <div class="col-sm-10">*/
/* 				<label class="radio-inline"> {% if config_valide_param_flag %}*/
/* 				  <input type="radio" name="config_valide_param_flag" value="1" checked="checked" />*/
/* 				  {{ text_yes }}*/
/* 				  {% else %}*/
/* 				  <input type="radio" name="config_valide_param_flag" value="1" />*/
/* 				  {{ text_yes }}*/
/* 				  {% endif %} </label>*/
/* 				<label class="radio-inline"> {% if not config_valide_param_flag %}*/
/* 				  <input type="radio" name="config_valide_param_flag" value="0" checked="checked" />*/
/* 				  {{ text_no }}*/
/* 				  {% else %}*/
/* 				  <input type="radio" name="config_valide_param_flag" value="0" />*/
/* 				  {{ text_no }}*/
/* 				  {% endif %} </label>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 			  <label class="col-sm-2 control-label" for="input-valide-params"><span data-toggle="tooltip" title="{{ help_valide_params }}">{{ entry_valide_params }}</span></label>*/
/* 			  <div class="col-sm-10">*/
/* 				<textarea name="config_valide_params" rows=10" placeholder="{{ entry_valide_params }}" id="input-valide-params" class="form-control">{{ config_valide_params }}</textarea>*/
/* 			  </div>*/
/* 			</div>*/
/* 			*/
/* */
/* 		  </fieldset>*/
/* 		</div>*/
/* 			*/
/* 			*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'config_theme\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=setting/setting/theme&user_token={{ user_token }}&theme=' + this.value,*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('#theme').attr('src', html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_theme\']').trigger('change');*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'config_country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/*           			html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {*/
/*             			html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'config_zone_id\']').html(html);*/
/* 			*/
/* 			$('#button-save').prop('disabled', false);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_country_id\']').trigger('change');*/
/* //--></script></div>*/
/* {{ footer }} */
