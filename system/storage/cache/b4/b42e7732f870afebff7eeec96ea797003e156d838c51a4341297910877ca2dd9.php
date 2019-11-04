<?php

/* default/template/extension/module/feedback.twig */
class __TwigTemplate_d44adf2ae4ca7a677d6e1bb6e87575bf6c85dc25a958e7a8dcd8181476d31a83 extends Twig_Template
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
        echo "<div class=\"block_with_feedback\" style=\"padding: 15px; margin-bottom:20px; border: 1px solid #ddd; background-color: #f5f5f5; border-radius: 3px;\">
  ";
        // line 2
        if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
            // line 3
            echo "  <h3 style=\"margin-top: 0\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h3>
  ";
        }
        // line 5
        echo "  ";
        if ((isset($context["text_main"]) ? $context["text_main"] : null)) {
            // line 6
            echo "  <p>";
            echo (isset($context["text_main"]) ? $context["text_main"] : null);
            echo "</p>
  ";
        }
        // line 8
        echo "  <button type=\"button\"  id=\"button_feedback\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modalFeedback\">";
        echo (isset($context["text_button"]) ? $context["text_button"] : null);
        echo "</button>
</div>
<div class=\"modal fade\" id=\"modalFeedback\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalFeedbackLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        <div style=\"display:inline-block; width: 100%; text-align:right;\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <form class=\"form-horizontal\" id=\"form-feedback\">
          <div class=\"form-group required\">
            <div class=\"col-sm-12\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 22
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <input type=\"text\" name=\"name\" value=\"";
        // line 23
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"col-sm-12\">
              <label class=\"control-label\" for=\"input-phone\">";
        // line 26
        echo (isset($context["entry_phone"]) ? $context["entry_phone"] : null);
        echo "</label>
              <input type=\"text\" name=\"phone\" value=\"";
        // line 27
        echo (isset($context["phone"]) ? $context["phone"] : null);
        echo "\" id=\"input-phone\" class=\"form-control\" />
            </div>
            ";
        // line 29
        if (((isset($context["email_active"]) ? $context["email_active"] : null) == 1)) {
            // line 30
            echo "            <div class=\"col-sm-12\">
              <label class=\"control-label\" for=\"input-email\">";
            // line 31
            echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
            echo "</label>
              <input type=\"text\" name=\"email\" value=\"";
            // line 32
            echo (isset($context["email"]) ? $context["email"] : null);
            echo "\" id=\"input-email\" class=\"form-control\" />
            </div>
            ";
        }
        // line 35
        echo "            <div class=\"col-sm-12\">
              <label class=\"control-label\" for=\"input-enquiry\">";
        // line 36
        echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
        echo "</label>
              <textarea name=\"enquiry\" rows=\"5\" id=\"input-enquiry\" class=\"form-control\">";
        // line 37
        echo (isset($context["enquiry"]) ? $context["enquiry"] : null);
        echo "</textarea>
            </div>
          </div>
          ";
        // line 40
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
        </form>
        <button type=\"button\" id=\"button_send_feedback\" data-loading-text=\"";
        // line 42
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"  class=\"btn btn-primary\">";
        echo (isset($context["text_send"]) ? $context["text_send"] : null);
        echo "</button>
      </div>
    </div>
  </div>
</div>
<script>
  \$('#button_send_feedback').on('click', function () {
    \$.ajax({
      url: 'index.php?route=extension/module/feedback/write',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-feedback\").serialize(),
      beforeSend: function () {
        \$('#button_send_feedback').button('loading');
      },
      complete: function () {
        \$('#button_send_feedback').button('reset');
      },
      success: function (json) {
        \$('.alert-success, .alert-danger').remove();
        if (json['error']) {
          \$('#form-feedback').after('<div class=\"alert alert-danger\" style=\"margin:20px 0;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }
        if (json['success']) {
          \$('#form-feedback').after('<div class=\"alert alert-success\" style=\"margin:20px 0;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
          \$('input[name=\\'name\\']').val('');
          \$('input[name=\\'phone\\']').val('');
          \$('input[name=\\'email\\']').val('');
          \$('textarea[name=\\'enquiry\\']').val('');
        }
      }
    });
  });
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/feedback.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 42,  104 => 40,  98 => 37,  94 => 36,  91 => 35,  85 => 32,  81 => 31,  78 => 30,  76 => 29,  71 => 27,  67 => 26,  61 => 23,  57 => 22,  39 => 8,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="block_with_feedback" style="padding: 15px; margin-bottom:20px; border: 1px solid #ddd; background-color: #f5f5f5; border-radius: 3px;">*/
/*   {% if heading_title %}*/
/*   <h3 style="margin-top: 0">{{ heading_title }}</h3>*/
/*   {% endif %}*/
/*   {% if text_main %}*/
/*   <p>{{ text_main }}</p>*/
/*   {% endif %}*/
/*   <button type="button"  id="button_feedback" class="btn btn-primary" data-toggle="modal" data-target="#modalFeedback">{{ text_button }}</button>*/
/* </div>*/
/* <div class="modal fade" id="modalFeedback" tabindex="-1" role="dialog" aria-labelledby="modalFeedbackLabel" aria-hidden="true">*/
/*   <div class="modal-dialog" role="document">*/
/*     <div class="modal-content">*/
/*       <div class="modal-body">*/
/*         <div style="display:inline-block; width: 100%; text-align:right;">*/
/*           <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*             <span aria-hidden="true">&times;</span>*/
/*           </button>*/
/*         </div>*/
/*         <form class="form-horizontal" id="form-feedback">*/
/*           <div class="form-group required">*/
/*             <div class="col-sm-12">*/
/*               <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*               <input type="text" name="name" value="{{ name }}" id="input-name" class="form-control" />*/
/*             </div>*/
/*             <div class="col-sm-12">*/
/*               <label class="control-label" for="input-phone">{{ entry_phone }}</label>*/
/*               <input type="text" name="phone" value="{{ phone }}" id="input-phone" class="form-control" />*/
/*             </div>*/
/*             {% if email_active == 1 %}*/
/*             <div class="col-sm-12">*/
/*               <label class="control-label" for="input-email">{{ entry_email }}</label>*/
/*               <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="col-sm-12">*/
/*               <label class="control-label" for="input-enquiry">{{ entry_enquiry }}</label>*/
/*               <textarea name="enquiry" rows="5" id="input-enquiry" class="form-control">{{ enquiry }}</textarea>*/
/*             </div>*/
/*           </div>*/
/*           {{ captcha }}*/
/*         </form>*/
/*         <button type="button" id="button_send_feedback" data-loading-text="{{ text_loading }}"  class="btn btn-primary">{{ text_send }}</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script>*/
/*   $('#button_send_feedback').on('click', function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/module/feedback/write',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: $("#form-feedback").serialize(),*/
/*       beforeSend: function () {*/
/*         $('#button_send_feedback').button('loading');*/
/*       },*/
/*       complete: function () {*/
/*         $('#button_send_feedback').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         $('.alert-success, .alert-danger').remove();*/
/*         if (json['error']) {*/
/*           $('#form-feedback').after('<div class="alert alert-danger" style="margin:20px 0;"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*         }*/
/*         if (json['success']) {*/
/*           $('#form-feedback').after('<div class="alert alert-success" style="margin:20px 0;"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/*           $('input[name=\'name\']').val('');*/
/*           $('input[name=\'phone\']').val('');*/
/*           $('input[name=\'email\']').val('');*/
/*           $('textarea[name=\'enquiry\']').val('');*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* </script>*/
