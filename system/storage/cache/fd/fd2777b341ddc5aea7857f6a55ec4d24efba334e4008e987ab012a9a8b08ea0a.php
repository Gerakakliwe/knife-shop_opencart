<?php

/* extension/module/cookiepolicy.twig */
class __TwigTemplate_3e36eb8e680cc9428857d1cd52fbcc7329adc16aed8d34e2462a601e50e3b9b0 extends Twig_Template
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
                <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-check\"></i></button>
                <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
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
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo " <span>";
        echo (isset($context["cookiepolicy_version"]) ? $context["cookiepolicy_version"] : null);
        echo "</span></h3>
            </div>
            <div class=\"panel-body\">
              <form action=\"";
        // line 32
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 34
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"module_cookiepolicy_status\" id=\"input-status\" class=\"form-control\">
                                ";
        // line 37
        if (((isset($context["module_cookiepolicy_status"]) ? $context["module_cookiepolicy_status"] : null) == "1")) {
            // line 38
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 39
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 41
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 42
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        }
        // line 44
        echo "                            </select>
                        </div>
                    </div>
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"active\"><a href=\"#tab_cookietext\" role=\"tab\" data-toggle=\"tab\">";
        // line 48
        echo (isset($context["tab_cookietext"]) ? $context["tab_cookietext"] : null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab_settings\" role=\"tab\" data-toggle=\"tab\">";
        // line 49
        echo (isset($context["tab_settings"]) ? $context["tab_settings"] : null);
        echo "</a></li>
                    </ul>
                    
                    <div class=\"tab-content\">
\t\t\t<div class=\"tab-pane active\" id=\"tab_cookietext\">

\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 56
        echo (isset($context["help_cookietext"]) ? $context["help_cookietext"] : null);
        echo "\">";
        echo (isset($context["entry_cookietext"]) ? $context["entry_cookietext"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 59
            echo "\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\">
\t\t\t\t\t\t<img src=\"language/";
            // line 60
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"  alt=\"\"/></span>
\t\t\t\t\t\t\t<label for=\"cookietext_";
            // line 61
            echo $this->getAttribute($context["language"], "code", array());
            echo "\"></label><input name=\"module_cookiepolicy_cookietext[text][";
            echo $this->getAttribute($context["language"], "code", array());
            echo "]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_cookiepolicy_cookietext"]) ? $context["module_cookiepolicy_cookietext"] : null), "text", array()), $this->getAttribute($context["language"], "code", array()));
            echo "\" placeholder=\"";
            echo (isset($context["text_cookietext"]) ? $context["text_cookietext"] : null);
            echo "\" id=\"cookietext_";
            echo $this->getAttribute($context["language"], "code", array());
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t\t</div>
\t\t\t</div> 
\t                <div class=\"form-group\">
\t                  <label class=\"col-sm-2 control-label\" for=\"input-cookiepolicy-infopage\">";
        // line 67
        echo (isset($context["entry_infopage"]) ? $context["entry_infopage"] : null);
        echo "<span data-toggle=\"tooltip\" title=\"";
        echo (isset($context["help_infopage"]) ? $context["help_infopage"] : null);
        echo ">\"></span></label>
\t                  <div class=\"col-sm-10\">
\t                    <select name=\"module_cookiepolicy_infopage\" id=\"input-cookiepolicy-infopage\" class=\"form-control\">
\t                      <option value=\"0\">";
        // line 70
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>

                              ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 73
            echo "\t                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["module_cookiepolicy_infopage"]) ? $context["module_cookiepolicy_infopage"] : null))) {
                // line 74
                echo "
\t                      <option value=\"";
                // line 75
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>

\t                      ";
            } else {
                // line 78
                echo "
\t                      <option value=\"";
                // line 79
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>

\t                      ";
            }
            // line 82
            echo "\t                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
\t                    </select>
\t                  </div>
\t                </div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 89
        echo (isset($context["entry_or_random"]) ? $context["entry_or_random"] : null);
        echo "<span data-toggle=\"tooltip\" title=\"";
        echo (isset($context["help_or_random"]) ? $context["help_or_random"] : null);
        echo "\"></span></label>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-random-url\">
\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 94
        echo (isset($context["help_url"]) ? $context["help_url"] : null);
        echo "\">";
        echo (isset($context["entry_url"]) ? $context["entry_url"] : null);
        echo "</span>
\t\t\t</label>
\t\t\t<div class=\"col-sm-2\">

\t\t\t\t<select ";
        // line 98
        if (((isset($context["module_cookiepolicy_infopage"]) ? $context["module_cookiepolicy_infopage"] : null) != "0")) {
            echo "disabled";
        }
        echo " name=\"module_cookiepolicy_random_url\" id=\"input-random-url\" class=\"form-control\"  onChange=\"SelectedRandomUrl(this)\">
\t\t\t\t\t";
        // line 99
        if ((isset($context["module_cookiepolicy_random_url"]) ? $context["module_cookiepolicy_random_url"] : null)) {
            // line 100
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 101
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                        ";
        } else {
            // line 103
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 104
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 106
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\" id=\"random-url-text\" ";
        // line 109
        if (((isset($context["module_cookiepolicy_random_url"]) ? $context["module_cookiepolicy_random_url"] : null) == "0")) {
            echo "style=\"display: none;\"";
        }
        echo ">
\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 110
        echo (isset($context["help_random_url"]) ? $context["help_random_url"] : null);
        echo "\">";
        echo (isset($context["url_caption"]) ? $context["url_caption"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\">&nbsp<i class=\"fa fa-link\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<input name=\"module_cookiepolicy_url\" value=\"";
        // line 113
        echo (isset($context["module_cookiepolicy_url"]) ? $context["module_cookiepolicy_url"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_url"]) ? $context["text_url"] : null);
        echo "\" class=\"form-control\"></input>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
                         <div class=\"form-group\"></div>
\t\t\t\t<label class=\"col-sm-2 control-label\">
\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 118
        echo (isset($context["help_random_url_text"]) ? $context["help_random_url_text"] : null);
        echo "\">";
        echo (isset($context["entry_urltext"]) ? $context["entry_urltext"] : null);
        echo "</span>
\t\t\t\t</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 122
            echo "\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\">
\t\t\t\t\t<img src=\"language/";
            // line 123
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
\t\t\t\t\t\t<label for=\"urltext_";
            // line 124
            echo $this->getAttribute($context["language"], "code", array());
            echo "\"></label><input name=\"module_cookiepolicy_urltext[text][";
            echo $this->getAttribute($context["language"], "code", array());
            echo "]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_cookiepolicy_urltext"]) ? $context["module_cookiepolicy_urltext"] : null), "text", array()), $this->getAttribute($context["language"], "code", array()));
            echo "\" placeholder=\"";
            echo (isset($context["text_urltext"]) ? $context["text_urltext"] : null);
            echo "\" id=\"urltext_";
            echo $this->getAttribute($context["language"], "code", array());
            echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 131
        echo (isset($context["help_cookietext_after"]) ? $context["help_cookietext_after"] : null);
        echo "\">";
        echo (isset($context["entry_cookietext_after"]) ? $context["entry_cookietext_after"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 134
            echo "\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\">
\t\t\t\t\t<img src=\"language/";
            // line 135
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
\t\t\t\t\t\t<label for=\"cookietext_after_";
            // line 136
            echo $this->getAttribute($context["language"], "code", array());
            echo "\"></label><input name=\"module_cookiepolicy_cookietext_after[text][";
            echo $this->getAttribute($context["language"], "code", array());
            echo "]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_cookiepolicy_cookietext_after"]) ? $context["module_cookiepolicy_cookietext_after"] : null), "text", array()), $this->getAttribute($context["language"], "code", array()));
            echo "\" placeholder=\"";
            echo (isset($context["text_cookietext_after"]) ? $context["text_cookietext_after"] : null);
            echo "\" id=\"cookietext_after_";
            echo $this->getAttribute($context["language"], "code", array());
            echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "\t\t\t\t</div>
\t\t\t</div> 

\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 143
        echo (isset($context["help_buttontext"]) ? $context["help_buttontext"] : null);
        echo "\">";
        echo (isset($context["entry_buttontext"]) ? $context["entry_buttontext"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 146
            echo "\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\">
\t\t\t\t\t<img src=\"language/";
            // line 147
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
\t\t\t\t\t\t<label for=\"buttontext_";
            // line 148
            echo $this->getAttribute($context["language"], "code", array());
            echo "\"></label><input name=\"module_cookiepolicy_buttontext[text][";
            echo $this->getAttribute($context["language"], "code", array());
            echo "]\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["module_cookiepolicy_buttontext"]) ? $context["module_cookiepolicy_buttontext"] : null), "text", array()), $this->getAttribute($context["language"], "code", array()));
            echo "\" placeholder=\"";
            echo (isset($context["text_buttontext"]) ? $context["text_buttontext"] : null);
            echo "\" id=\"buttontext_";
            echo $this->getAttribute($context["language"], "code", array());
            echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "\t\t\t\t</div>
\t\t\t</div> 

\t\t\t</div>
                      <div class=\"tab-pane\" id=\"tab_settings\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"cookie-position\">";
        // line 157
        echo (isset($context["entry_position"]) ? $context["entry_position"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">    
                                <select name=\"module_cookiepolicy_position\" id=\"cookie-position\" class=\"form-control\">
                                    ";
        // line 160
        if (((isset($context["module_cookiepolicy_position"]) ? $context["module_cookiepolicy_position"] : null) == "1")) {
            echo " 
                                        <option value=\"1\" selected=\"selected\">";
            // line 161
            echo (isset($context["text_bottom"]) ? $context["text_bottom"] : null);
            echo "</option>
                                        <option value=\"2\">";
            // line 162
            echo (isset($context["text_top"]) ? $context["text_top"] : null);
            echo "</option>
                                        <option value=\"3\">";
            // line 163
            echo (isset($context["text_fullscreen"]) ? $context["text_fullscreen"] : null);
            echo "</option>
                                    ";
        } elseif ((        // line 164
(isset($context["module_cookiepolicy_position"]) ? $context["module_cookiepolicy_position"] : null) == "2")) {
            // line 165
            echo "                                        <option value=\"1\">";
            echo (isset($context["text_bottom"]) ? $context["text_bottom"] : null);
            echo "</option>
                                        <option value=\"2\" selected=\"selected\">";
            // line 166
            echo (isset($context["text_top"]) ? $context["text_top"] : null);
            echo "</option>
                                        <option value=\"3\">";
            // line 167
            echo (isset($context["text_fullscreen"]) ? $context["text_fullscreen"] : null);
            echo "</option>
                                    ";
        } elseif ((        // line 168
(isset($context["module_cookiepolicy_position"]) ? $context["module_cookiepolicy_position"] : null) == "3")) {
            // line 169
            echo "                                        <option value=\"1\">";
            echo (isset($context["text_bottom"]) ? $context["text_bottom"] : null);
            echo "</option>
                                        <option value=\"2\">";
            // line 170
            echo (isset($context["text_top"]) ? $context["text_top"] : null);
            echo "</option>
                                        <option value=\"3\" selected=\"selected\">";
            // line 171
            echo (isset($context["text_fullscreen"]) ? $context["text_fullscreen"] : null);
            echo "</option>
                                    ";
        } else {
            // line 173
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_bottom"]) ? $context["text_bottom"] : null);
            echo "</option>
                                        <option value=\"2\">";
            // line 174
            echo (isset($context["text_top"]) ? $context["text_top"] : null);
            echo "</option>
                                        <option value=\"3\">";
            // line 175
            echo (isset($context["text_fullscreen"]) ? $context["text_fullscreen"] : null);
            echo "</option>
                                    ";
        }
        // line 177
        echo "                                </select>
                            </div>
                        </div>

\t                <div class=\"form-group\">
\t                  <label class=\"col-sm-2 control-label\" for=\"input-cookie-expires\"><span data-toggle=\"tooltip\" title=\"";
        // line 182
        echo (isset($context["help_cookie_expires"]) ? $context["help_cookie_expires"] : null);
        echo "\">";
        echo (isset($context["entry_cookie_expires"]) ? $context["entry_cookie_expires"] : null);
        echo "</span></label>
\t                  <div class=\"col-sm-10\">
\t                    <input type=\"text\" name=\"module_cookiepolicy_cookie_expires\" value=\"";
        // line 184
        echo (isset($context["module_cookiepolicy_cookie_expires"]) ? $context["module_cookiepolicy_cookie_expires"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_cookie_expires"]) ? $context["text_cookie_expires"] : null);
        echo "\" id=\"input-cookie-expires\" class=\"form-control\" />
\t                  </div>
\t                </div>

\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">";
        // line 190
        echo (isset($context["text_text_view"]) ? $context["text_text_view"] : null);
        echo "</span></h3>
\t\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-text-colour\"><span data-toggle=\"tooltip\" title=\"";
        // line 194
        echo (isset($context["help_text_colour"]) ? $context["help_text_colour"] : null);
        echo "\">";
        echo (isset($context["entry_text_colour"]) ? $context["entry_text_colour"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"module_cookiepolicy_text_colour\" value=\"";
        // line 196
        echo (isset($context["module_cookiepolicy_text_colour"]) ? $context["module_cookiepolicy_text_colour"] : null);
        echo "\" id=\"input-text-colour\" class=\"jscolor {required:false,hash:true} form-control\" />
\t\t\t\t</div>
\t\t\t\t</div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"text-align\"><span data-toggle=\"tooltip\" title=\"";
        // line 201
        echo (isset($context["help_text_align"]) ? $context["help_text_align"] : null);
        echo "\">";
        echo (isset($context["entry_text_align"]) ? $context["entry_text_align"] : null);
        echo "</span></label>
                            <div class=\"col-sm-10\">    
                                <select name=\"module_cookiepolicy_text_align\" id=\"text-align\" class=\"form-control\">
                                    ";
        // line 204
        if (((isset($context["module_cookiepolicy_text_align"]) ? $context["module_cookiepolicy_text_align"] : null) == "left")) {
            // line 205
            echo "                                        <option value=\"left\" selected=\"selected\">";
            echo (isset($context["text_text_left"]) ? $context["text_text_left"] : null);
            echo "</option>
                                        <option value=\"center\">";
            // line 206
            echo (isset($context["text_text_center"]) ? $context["text_text_center"] : null);
            echo "</option>
                                        <option value=\"right\">";
            // line 207
            echo (isset($context["text_text_right"]) ? $context["text_text_right"] : null);
            echo "</option>
                                    ";
        } elseif ((        // line 208
(isset($context["module_cookiepolicy_text_align"]) ? $context["module_cookiepolicy_text_align"] : null) == "center")) {
            // line 209
            echo "                                        <option value=\"left\">";
            echo (isset($context["text_text_left"]) ? $context["text_text_left"] : null);
            echo "</option>
                                        <option value=\"center\" selected=\"selected\">";
            // line 210
            echo (isset($context["text_text_center"]) ? $context["text_text_center"] : null);
            echo "</option>
                                        <option value=\"right\">";
            // line 211
            echo (isset($context["text_text_right"]) ? $context["text_text_right"] : null);
            echo "</option>
                                    ";
        } elseif ((        // line 212
(isset($context["module_cookiepolicy_text_align"]) ? $context["module_cookiepolicy_text_align"] : null) == "right")) {
            // line 213
            echo "                                        <option value=\"left\">";
            echo (isset($context["text_text_left"]) ? $context["text_text_left"] : null);
            echo "</option>
                                        <option value=\"center\">";
            // line 214
            echo (isset($context["text_text_center"]) ? $context["text_text_center"] : null);
            echo "</option>
                                        <option value=\"right\" selected=\"selected\">";
            // line 215
            echo (isset($context["text_text_right"]) ? $context["text_text_right"] : null);
            echo "</option>
                                    ";
        } else {
            // line 217
            echo "                                        <option value=\"left\" selected=\"selected\">";
            echo (isset($context["text_text_left"]) ? $context["text_text_left"] : null);
            echo "</option>
                                        <option value=\"center\">";
            // line 218
            echo (isset($context["text_text_center"]) ? $context["text_text_center"] : null);
            echo "</option>
                                        <option value=\"right\">";
            // line 219
            echo (isset($context["text_text_right"]) ? $context["text_text_right"] : null);
            echo "</option>
                                    ";
        }
        // line 221
        echo "                                </select>
                            </div>
                        </div>

\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">";
        // line 231
        echo (isset($context["text_background_view"]) ? $context["text_background_view"] : null);
        echo "</span></h3>
\t\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-background-colour\"><span data-toggle=\"tooltip\" title=\"";
        // line 235
        echo (isset($context["help_background_colour"]) ? $context["help_background_colour"] : null);
        echo "\">";
        echo (isset($context["entry_background_colour"]) ? $context["entry_background_colour"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"module_cookiepolicy_background_colour\" value=\"";
        // line 237
        echo (isset($context["module_cookiepolicy_background_colour"]) ? $context["module_cookiepolicy_background_colour"] : null);
        echo "\" id=\"input-background-colour\" class=\"jscolor {required:false,hash:true} form-control\" />
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">

\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"cookie_opacity\"><span data-toggle=\"tooltip\" title=\"";
        // line 242
        echo (isset($context["help_opacity"]) ? $context["help_opacity"] : null);
        echo "\">";
        echo (isset($context["entry_opacity"]) ? $context["entry_opacity"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select name=\"module_cookiepolicy_opacity\" id=\"cookie_opacity\" class=\"form-control\">
\t\t\t\t";
        // line 245
        $context["opacity"] = array("0.1" => "0.1", "0.2" => "0.2", "0.3" => "0.3", "0.4" => "0.4", "0.5" => "0.5", "0.6" => "0.6", "0.7" => "0.7", "0.8" => "0.8", "0.9" => "0.9", "1" => "1");
        // line 246
        echo "
\t\t\t\t";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opacity"]) ? $context["opacity"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            echo " 
\t\t\t\t\t<option value=\"";
            // line 248
            echo $context["key"];
            echo "\" ";
            echo (((array_key_exists("module_cookiepolicy_opacity", $context) && ((isset($context["module_cookiepolicy_opacity"]) ? $context["module_cookiepolicy_opacity"] : null) == $context["key"]))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["name"];
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo " 
\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\"><span data-toggle=\"tooltip\" title=\"";
        // line 258
        echo (isset($context["help_accept_button"]) ? $context["help_accept_button"] : null);
        echo "\">";
        echo (isset($context["text_accept_button_view"]) ? $context["text_accept_button_view"] : null);
        echo "</span></h3>
\t\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-accept-text-colour\"><span data-toggle=\"tooltip\" title=\"";
        // line 262
        echo (isset($context["help_accept_text_colour"]) ? $context["help_accept_text_colour"] : null);
        echo "\">";
        echo (isset($context["entry_accept_text_colour"]) ? $context["entry_accept_text_colour"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"module_cookiepolicy_accept_text_colour\" value=\"";
        // line 264
        echo (isset($context["module_cookiepolicy_accept_text_colour"]) ? $context["module_cookiepolicy_accept_text_colour"] : null);
        echo "\" id=\"input-accept-text-colour\" class=\"jscolor {required:false,hash:true} form-control\"  />
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-accept-text-hover\"><span data-toggle=\"tooltip\" title=\"";
        // line 268
        echo (isset($context["help_accept_text_hover"]) ? $context["help_accept_text_hover"] : null);
        echo "\">";
        echo (isset($context["entry_accept_text_hover"]) ? $context["entry_accept_text_hover"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"module_cookiepolicy_accept_text_hover\" value=\"";
        // line 270
        echo (isset($context["module_cookiepolicy_accept_text_hover"]) ? $context["module_cookiepolicy_accept_text_hover"] : null);
        echo "\" id=\"input-accept-text-hover\" class=\"jscolor {required:false,hash:true} form-control\" />
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-accept-button-colour\"><span data-toggle=\"tooltip\" title=\"";
        // line 274
        echo (isset($context["help_accept_button_colour"]) ? $context["help_accept_button_colour"] : null);
        echo "\">";
        echo (isset($context["entry_accept_text_hover"]) ? $context["entry_accept_text_hover"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"module_cookiepolicy_accept_button_colour\" value=\"";
        // line 276
        echo (isset($context["module_cookiepolicy_accept_button_colour"]) ? $context["module_cookiepolicy_accept_button_colour"] : null);
        echo "\" id=\"input-accept-button-colour\" class=\"jscolor {required:false,hash:true} form-control\" />
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-accept-button-hover\"><span data-toggle=\"tooltip\" title=\"";
        // line 280
        echo (isset($context["help_accept_button_hover"]) ? $context["help_accept_button_hover"] : null);
        echo "\">";
        echo (isset($context["entry_accept_text_hover"]) ? $context["entry_accept_text_hover"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"module_cookiepolicy_accept_button_hover\" value=\"";
        // line 282
        echo (isset($context["module_cookiepolicy_accept_button_hover"]) ? $context["module_cookiepolicy_accept_button_hover"] : null);
        echo "\" id=\"input-accept-button-hover\" class=\"jscolor {required:false,hash:true} form-control\" />
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-rounded-corners\">";
        // line 286
        echo (isset($context["entry_rounded_corners"]) ? $context["entry_rounded_corners"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"checkbox\" id=\"input-rounded-corners\" name=\"module_cookiepolicy_rounded_corners\"";
        // line 288
        if ((isset($context["module_cookiepolicy_rounded_corners"]) ? $context["module_cookiepolicy_rounded_corners"] : null)) {
            echo " ";
            echo "checked=\"checked\"";
            echo " ";
        }
        echo ">
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>


                      </div>

                      </div>
\t\t\t  </form>
                    </div>
\t\t</div>
        </div>
    </div>
<script>
\tfunction SelectedRandomUrl(a) {
\t\tvar label = a.value;
\t\tif (label === \"0\") {
\t\t\tdocument.getElementById(\"random-url-text\").style.display='none'; 
\t\t} else {
\t\t\tdocument.getElementById(\"random-url-text\").style.display='block';   
\t\t}
\t}
</script>
";
        // line 313
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
    <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\"/>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>

    <script type=\"text/javascript\"><!--
        \$('#language a:first').tab('show');
        //--></script>
    <script type=\"text/javascript\"><!--
\t";
        // line 322
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 323
            echo "\t\$('#cookietext-";
            echo $this->getAttribute($context["language"], "code", array());
            echo "').summernote({height: 100});
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "\t//--></script>
    <script type=\"text/javascript\" src=\"view/javascript/jscolor/jscolor.js\"></script> ";
    }

    public function getTemplateName()
    {
        return "extension/module/cookiepolicy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  846 => 325,  837 => 323,  833 => 322,  821 => 313,  789 => 288,  784 => 286,  777 => 282,  770 => 280,  763 => 276,  756 => 274,  749 => 270,  742 => 268,  735 => 264,  728 => 262,  719 => 258,  708 => 249,  696 => 248,  690 => 247,  687 => 246,  685 => 245,  677 => 242,  669 => 237,  662 => 235,  655 => 231,  643 => 221,  638 => 219,  634 => 218,  629 => 217,  624 => 215,  620 => 214,  615 => 213,  613 => 212,  609 => 211,  605 => 210,  600 => 209,  598 => 208,  594 => 207,  590 => 206,  585 => 205,  583 => 204,  575 => 201,  567 => 196,  560 => 194,  553 => 190,  542 => 184,  535 => 182,  528 => 177,  523 => 175,  519 => 174,  514 => 173,  509 => 171,  505 => 170,  500 => 169,  498 => 168,  494 => 167,  490 => 166,  485 => 165,  483 => 164,  479 => 163,  475 => 162,  471 => 161,  467 => 160,  461 => 157,  453 => 151,  436 => 148,  428 => 147,  425 => 146,  421 => 145,  414 => 143,  408 => 139,  391 => 136,  383 => 135,  380 => 134,  376 => 133,  369 => 131,  363 => 127,  346 => 124,  338 => 123,  335 => 122,  331 => 121,  323 => 118,  313 => 113,  305 => 110,  299 => 109,  294 => 106,  289 => 104,  284 => 103,  279 => 101,  274 => 100,  272 => 99,  266 => 98,  257 => 94,  247 => 89,  239 => 83,  233 => 82,  225 => 79,  222 => 78,  214 => 75,  211 => 74,  208 => 73,  204 => 72,  199 => 70,  191 => 67,  186 => 64,  169 => 61,  161 => 60,  158 => 59,  154 => 58,  147 => 56,  137 => 49,  133 => 48,  127 => 44,  122 => 42,  117 => 41,  112 => 39,  107 => 38,  105 => 37,  99 => 34,  94 => 32,  86 => 29,  82 => 27,  74 => 23,  71 => 22,  63 => 18,  61 => 17,  55 => 13,  44 => 11,  40 => 10,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-module" data-toggle="tooltip" title="{{ button_apply }}" class="btn btn-primary"><i class="fa fa-check"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*             </div>*/
/*             <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }} <span>{{ cookiepolicy_version }}</span></h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*               <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select name="module_cookiepolicy_status" id="input-status" class="form-control">*/
/*                                 {% if module_cookiepolicy_status == "1" %}*/
/*                                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                     <option value="0">{{ text_disabled }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="1">{{ text_enabled }}</option>*/
/*                                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                 {% endif %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <ul class="nav nav-tabs" role="tablist">*/
/*                         <li class="active"><a href="#tab_cookietext" role="tab" data-toggle="tab">{{ tab_cookietext }}</a></li>*/
/* 			<li><a href="#tab_settings" role="tab" data-toggle="tab">{{ tab_settings }}</a></li>*/
/*                     </ul>*/
/*                     */
/*                     <div class="tab-content">*/
/* 			<div class="tab-pane active" id="tab_cookietext">*/
/* */
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_cookietext }}">{{ entry_cookietext }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 					{% for language in languages %}*/
/* 						<div class="input-group"><span class="input-group-addon">*/
/* 						<img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"  alt=""/></span>*/
/* 							<label for="cookietext_{{ language.code }}"></label><input name="module_cookiepolicy_cookietext[text][{{ language.code }}]" value="{{ attribute(module_cookiepolicy_cookietext.text, language.code) }}" placeholder="{{ text_cookietext }}" id="cookietext_{{ language.code }}" class="form-control" />*/
/* 						</div>*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			</div> */
/* 	                <div class="form-group">*/
/* 	                  <label class="col-sm-2 control-label" for="input-cookiepolicy-infopage">{{ entry_infopage }}<span data-toggle="tooltip" title="{{ help_infopage }}>"></span></label>*/
/* 	                  <div class="col-sm-10">*/
/* 	                    <select name="module_cookiepolicy_infopage" id="input-cookiepolicy-infopage" class="form-control">*/
/* 	                      <option value="0">{{ text_none }}</option>*/
/* */
/*                               {% for information in informations %}*/
/* 	                      {% if information.information_id == module_cookiepolicy_infopage %}*/
/* */
/* 	                      <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/* */
/* 	                      {% else %}*/
/* */
/* 	                      <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/* */
/* 	                      {% endif %}*/
/* 	                      {% endfor %}*/
/* */
/* 	                    </select>*/
/* 	                  </div>*/
/* 	                </div>*/
/* */
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label">{{ entry_or_random }}<span data-toggle="tooltip" title="{{ help_or_random }}"></span></label>*/
/* 			</div>*/
/* */
/* 			<div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="input-random-url">*/
/* 				<span data-toggle="tooltip" title="{{ help_url }}">{{ entry_url }}</span>*/
/* 			</label>*/
/* 			<div class="col-sm-2">*/
/* */
/* 				<select {% if module_cookiepolicy_infopage != "0" %}disabled{% endif %} name="module_cookiepolicy_random_url" id="input-random-url" class="form-control"  onChange="SelectedRandomUrl(this)">*/
/* 					{% if module_cookiepolicy_random_url %}*/
/*                                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                     <option value="0">{{ text_disabled }}</option>*/
/*                                         {% else %}*/
/*                                     <option value="1">{{ text_enabled }}</option>*/
/*                                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 					{% endif %}*/
/* 				</select>*/
/* 			</div>*/
/* 			</div>*/
/* 			<div class="form-group" id="random-url-text" {% if module_cookiepolicy_random_url == "0" %}style="display: none;"{% endif %}>*/
/* 				<label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_random_url }}">{{ url_caption }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 						<div class="input-group"><span class="input-group-addon">&nbsp<i class="fa fa-link" aria-hidden="true"></i></span>*/
/* 							<input name="module_cookiepolicy_url" value="{{ module_cookiepolicy_url }}" placeholder="{{ text_url }}" class="form-control"></input>*/
/* 						</div>*/
/* 				</div>*/
/*                          <div class="form-group"></div>*/
/* 				<label class="col-sm-2 control-label">*/
/* 					<span data-toggle="tooltip" title="{{ help_random_url_text }}">{{ entry_urltext }}</span>*/
/* 				</label>*/
/* 			<div class="col-sm-10">*/
/* 				{% for language in languages %}*/
/* 					<div class="input-group"><span class="input-group-addon">*/
/* 					<img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 						<label for="urltext_{{ language.code }}"></label><input name="module_cookiepolicy_urltext[text][{{ language.code }}]" value="{{ attribute(module_cookiepolicy_urltext.text, language.code) }}" placeholder="{{ text_urltext }}" id="urltext_{{ language.code }}" class="form-control" />*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 			</div>*/
/* */
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_cookietext_after }}">{{ entry_cookietext_after }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 				{% for language in languages %}*/
/* 					<div class="input-group"><span class="input-group-addon">*/
/* 					<img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 						<label for="cookietext_after_{{ language.code }}"></label><input name="module_cookiepolicy_cookietext_after[text][{{ language.code }}]" value="{{ attribute(module_cookiepolicy_cookietext_after.text, language.code) }}" placeholder="{{ text_cookietext_after }}" id="cookietext_after_{{ language.code }}" class="form-control" />*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 				</div>*/
/* 			</div> */
/* */
/* 			<div class="form-group">*/
/* 				<label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_buttontext }}">{{ entry_buttontext }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 				{% for language in languages %}*/
/* 					<div class="input-group"><span class="input-group-addon">*/
/* 					<img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 						<label for="buttontext_{{ language.code }}"></label><input name="module_cookiepolicy_buttontext[text][{{ language.code }}]" value="{{ attribute(module_cookiepolicy_buttontext.text, language.code) }}" placeholder="{{ text_buttontext }}" id="buttontext_{{ language.code }}" class="form-control" />*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 				</div>*/
/* 			</div> */
/* */
/* 			</div>*/
/*                       <div class="tab-pane" id="tab_settings">*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="cookie-position">{{ entry_position }}</label>*/
/*                             <div class="col-sm-10">    */
/*                                 <select name="module_cookiepolicy_position" id="cookie-position" class="form-control">*/
/*                                     {% if module_cookiepolicy_position == "1" %} */
/*                                         <option value="1" selected="selected">{{ text_bottom }}</option>*/
/*                                         <option value="2">{{ text_top }}</option>*/
/*                                         <option value="3">{{ text_fullscreen }}</option>*/
/*                                     {% elseif module_cookiepolicy_position == "2" %}*/
/*                                         <option value="1">{{ text_bottom }}</option>*/
/*                                         <option value="2" selected="selected">{{ text_top }}</option>*/
/*                                         <option value="3">{{ text_fullscreen }}</option>*/
/*                                     {% elseif module_cookiepolicy_position == "3" %}*/
/*                                         <option value="1">{{ text_bottom }}</option>*/
/*                                         <option value="2">{{ text_top }}</option>*/
/*                                         <option value="3" selected="selected">{{ text_fullscreen }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="1" selected="selected">{{ text_bottom }}</option>*/
/*                                         <option value="2">{{ text_top }}</option>*/
/*                                         <option value="3">{{ text_fullscreen }}</option>*/
/*                                     {% endif %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/* */
/* 	                <div class="form-group">*/
/* 	                  <label class="col-sm-2 control-label" for="input-cookie-expires"><span data-toggle="tooltip" title="{{ help_cookie_expires }}">{{ entry_cookie_expires }}</span></label>*/
/* 	                  <div class="col-sm-10">*/
/* 	                    <input type="text" name="module_cookiepolicy_cookie_expires" value="{{ module_cookiepolicy_cookie_expires }}" placeholder="{{ text_cookie_expires }}" id="input-cookie-expires" class="form-control" />*/
/* 	                  </div>*/
/* 	                </div>*/
/* */
/* 			<div class="panel panel-default">*/
/* 				<div class="panel-heading">*/
/* 					<h3 class="panel-title">{{ text_text_view }}</span></h3>*/
/* 				</div>*/
/* 			<div class="panel-body">*/
/* 				<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-text-colour"><span data-toggle="tooltip" title="{{ help_text_colour }}">{{ entry_text_colour }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 				<input type="text" name="module_cookiepolicy_text_colour" value="{{ module_cookiepolicy_text_colour }}" id="input-text-colour" class="jscolor {required:false,hash:true} form-control" />*/
/* 				</div>*/
/* 				</div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="text-align"><span data-toggle="tooltip" title="{{ help_text_align }}">{{ entry_text_align }}</span></label>*/
/*                             <div class="col-sm-10">    */
/*                                 <select name="module_cookiepolicy_text_align" id="text-align" class="form-control">*/
/*                                     {% if module_cookiepolicy_text_align == "left" %}*/
/*                                         <option value="left" selected="selected">{{ text_text_left }}</option>*/
/*                                         <option value="center">{{ text_text_center }}</option>*/
/*                                         <option value="right">{{ text_text_right }}</option>*/
/*                                     {% elseif module_cookiepolicy_text_align == "center" %}*/
/*                                         <option value="left">{{ text_text_left }}</option>*/
/*                                         <option value="center" selected="selected">{{ text_text_center }}</option>*/
/*                                         <option value="right">{{ text_text_right }}</option>*/
/*                                     {% elseif module_cookiepolicy_text_align == "right" %}*/
/*                                         <option value="left">{{ text_text_left }}</option>*/
/*                                         <option value="center">{{ text_text_center }}</option>*/
/*                                         <option value="right" selected="selected">{{ text_text_right }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="left" selected="selected">{{ text_text_left }}</option>*/
/*                                         <option value="center">{{ text_text_center }}</option>*/
/*                                         <option value="right">{{ text_text_right }}</option>*/
/*                                     {% endif %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/* */
/* 			</div>*/
/* */
/* 			</div>*/
/* */
/* 			<div class="panel panel-default">*/
/* 				<div class="panel-heading">*/
/* 					<h3 class="panel-title">{{ text_background_view }}</span></h3>*/
/* 				</div>*/
/* 			<div class="panel-body">*/
/* 				<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-background-colour"><span data-toggle="tooltip" title="{{ help_background_colour }}">{{ entry_background_colour }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 				<input type="text" name="module_cookiepolicy_background_colour" value="{{ module_cookiepolicy_background_colour }}" id="input-background-colour" class="jscolor {required:false,hash:true} form-control" />*/
/* 				</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* */
/* 				<label class="col-sm-2 control-label" for="cookie_opacity"><span data-toggle="tooltip" title="{{ help_opacity }}">{{ entry_opacity }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 				<select name="module_cookiepolicy_opacity" id="cookie_opacity" class="form-control">*/
/* 				{% set opacity = { "0.1" : "0.1", "0.2" : "0.2", "0.3" : "0.3", "0.4" : "0.4", "0.5" : "0.5", "0.6" : "0.6", "0.7" : "0.7", "0.8" : "0.8", "0.9" : "0.9", "1" : "1" } %}*/
/* */
/* 				{% for key,name in opacity %} */
/* 					<option value="{{ key }}" {{ module_cookiepolicy_opacity is defined and module_cookiepolicy_opacity == key ? 'selected="selected"' : '' }}>{{ name }}</option>*/
/* 				{% endfor %} */
/* 				</select>*/
/* 				</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			</div>*/
/* */
/* 			<div class="panel panel-default">*/
/* 				<div class="panel-heading">*/
/* 					<h3 class="panel-title"><span data-toggle="tooltip" title="{{ help_accept_button }}">{{ text_accept_button_view }}</span></h3>*/
/* 				</div>*/
/* 			<div class="panel-body">*/
/* 				<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-accept-text-colour"><span data-toggle="tooltip" title="{{ help_accept_text_colour }}">{{ entry_accept_text_colour }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 				<input type="text" name="module_cookiepolicy_accept_text_colour" value="{{ module_cookiepolicy_accept_text_colour }}" id="input-accept-text-colour" class="jscolor {required:false,hash:true} form-control"  />*/
/* 				</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-accept-text-hover"><span data-toggle="tooltip" title="{{ help_accept_text_hover }}">{{ entry_accept_text_hover }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 				<input type="text" name="module_cookiepolicy_accept_text_hover" value="{{ module_cookiepolicy_accept_text_hover }}" id="input-accept-text-hover" class="jscolor {required:false,hash:true} form-control" />*/
/* 				</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-accept-button-colour"><span data-toggle="tooltip" title="{{ help_accept_button_colour }}">{{ entry_accept_text_hover }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 				<input type="text" name="module_cookiepolicy_accept_button_colour" value="{{ module_cookiepolicy_accept_button_colour }}" id="input-accept-button-colour" class="jscolor {required:false,hash:true} form-control" />*/
/* 				</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-accept-button-hover"><span data-toggle="tooltip" title="{{ help_accept_button_hover }}">{{ entry_accept_text_hover }}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 				<input type="text" name="module_cookiepolicy_accept_button_hover" value="{{ module_cookiepolicy_accept_button_hover }}" id="input-accept-button-hover" class="jscolor {required:false,hash:true} form-control" />*/
/* 				</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-rounded-corners">{{ entry_rounded_corners }}</label>*/
/* 				<div class="col-sm-10">*/
/* 				<input type="checkbox" id="input-rounded-corners" name="module_cookiepolicy_rounded_corners"{% if module_cookiepolicy_rounded_corners %} {{ 'checked="checked"' }} {% endif %}>*/
/* 				</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			</div>*/
/* */
/* */
/*                       </div>*/
/* */
/*                       </div>*/
/* 			  </form>*/
/*                     </div>*/
/* 		</div>*/
/*         </div>*/
/*     </div>*/
/* <script>*/
/* 	function SelectedRandomUrl(a) {*/
/* 		var label = a.value;*/
/* 		if (label === "0") {*/
/* 			document.getElementById("random-url-text").style.display='none'; */
/* 		} else {*/
/* 			document.getElementById("random-url-text").style.display='block';   */
/* 		}*/
/* 	}*/
/* </script>*/
/* {{ footer }}*/
/*     <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*     <link href="view/javascript/summernote/summernote.css" rel="stylesheet"/>*/
/*     <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/* */
/*     <script type="text/javascript"><!--*/
/*         $('#language a:first').tab('show');*/
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/* 	{% for language in languages %}*/
/* 	$('#cookietext-{{ language.code }}').summernote({height: 100});*/
/* 	{% endfor %}*/
/* 	//--></script>*/
/*     <script type="text/javascript" src="view/javascript/jscolor/jscolor.js"></script> */
