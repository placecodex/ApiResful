<?php

/* /twig/product_form.twig */
class __TwigTemplate_7b361adceb4f76ceedc28459d1d9ed8376e5ae83d4f21f0bc31f6dc10900b42d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang=\"en\">
<head>



 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">


  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>







    
\t<meta charset=\"utf-8\">
\t<title>Stripe Gateway Integration | Codeigniter</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<link rel=\"stylesheet\" href=\"<?php echo base_url(); ?>/assets/css/bootstrap.min.css\" />

    <link rel=\"stylesheet\" href=\"<?php echo base_url(); ?>/assets/css/stylestripe.css\" />    

    <!-- jQuery is used only for this example; it isn't required to use Stripe -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

\t<link rel=\"stylesheet\" href=\"<?php echo base_url(); ?>/assets/js/bootstrap.min.js\" />

    <!-- Stripe JavaScript library -->
    <script type=\"text/javascript\" src=\"https://js.stripe.com/v2/\"></script>    
    
    <script type=\"text/javascript\">
        //set your publishable key
        Stripe.setPublishableKey('pk_test_YRHkNOC9JY8tBaGa6XjGR1Nu');
        
        //callback to handle the response from stripe
        function stripeResponseHandler(status, response) {
            if (response.error) {
                //enable the submit button
                \$('#payBtn').removeAttr(\"disabled\");
                //display the errors on the form
                // \$('#payment-errors').attr('hidden', 'false');
                \$('#payment-errors').addClass('alert alert-danger');
                \$(\"#payment-errors\").html(response.error.message);
            } else {
                var form\$ = \$(\"#paymentFrm\");
                //get token id
                var token = response['id'];
                //insert the token into the form
                form\$.append(\"<input type='hidden' name='stripeToken' value='\" + token + \"' />\");
                //submit form to the server
                form\$.get(0).submit();
            }
        }
        \$(document).ready(function() {
            //on form submit
            \$(\"#paymentFrm\").submit(function(event) {
                //disable the submit button to prevent repeated clicks
                \$('#payBtn').attr(\"disabled\", \"disabled\");
                
                //create single-use token to charge the user
                Stripe.createToken({
                    number: \$('#card_num').val(),
                    cvc: \$('#card-cvc').val(),
                    exp_month: \$('#card-expiry-month').val(),
                    exp_year: \$('#card-expiry-year').val()
                }, stripeResponseHandler);
                
                //submit from callback
                return false;
            });
        });
    </script>


\t
</head>
<body>

<!-- Bootstrap 4 Navbar  -->
<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
\t<a href=\"#\" class=\"navbar-brand\">Stripe Gateway</a>

\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">

\t\t<ul class=\"navbar-nav ml-auto\">

\t\t\t<li class=\"nav-item \">
\t\t\t\t<a href=\"https://facebook.com/anburocky3\" class=\"nav-link\" target=\"_blank\">#Developer</a>
\t\t\t</li>

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"<?php echo base_url(); ?>Welcome/help\" class=\"nav-link\">Help Article</a>
\t\t\t</li>

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"https://facebook.com/cdudenetworks\" class=\"nav-link\" target=\"_blank\">Support</a>
\t\t\t</li>

\t\t</ul>

\t</div>
\t
</nav>
<!-- End Bootstrap 4 Navbar -->

\t
<div class=\"container-fluid\">
    <div class=\"row\">
\t\t<!-- Main jumbotron for a primary marketing message or call to action -->
\t    <div class=\"jumbotron\">
\t      <div class=\"container-fluid\">
\t        <h1 class=\"display-5\">Hello, Developers!</h1>
\t        <p>This project will guide you to integrate International Payment Gateway \"Stripe\" in Codeigniter <span class=\"badge bg-primary badge-pill\"><?php echo CI_VERSION; ?></span> with Bootstrap 4. Understand how Stripe Gateway works and implement to your web/app accordingly. if you need any minor help <a href=\"<?php echo base_url(); ?>welcome/help\">contact us</a> here. You can also use Learn more button below</p>
\t        <p><a class=\"btn btn-primary btn-lg\" href=\" ";
        // line 127
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo " ?>Welcome/help\" role=\"button\">Learn more &raquo;</a></p>
\t      </div>
\t    </div>
    </div>
</div>

<div class=\"container\">
\t<div class=\"row\">\t

        <div class=\"col-md-4\">
            
            <div class=\"card\">
                <div class=\"card-header bg-success text-white\">Product Information</div>
                <div class=\"card-body bg-light\">
                    <?php if (validation_errors()): ?>
                        <div class=\"alert alert-danger\" role=\"alert\">
                            <strong>Oops!</strong>
                            <?= validation_errors() ;?> 
                        </div>  
                    <?php endif ?>
                    <div id=\"payment-errors\"></div>  
                     <form method=\"post\" id=\"paymentFrm\" enctype=\"multipart/form-data\" action=\"<?php echo base_url(); ?>Welcome/check\">
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Name\" value=\"";
        // line 150
        echo set_value("name");
        echo " ?>\" required>
                        </div>  

                        <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"email@you.com\" value=\" ";
        // line 154
        echo set_value("email");
        echo " \" required />
                        </div>

                         <div class=\"form-group\">
                            <input type=\"number\" name=\"card_num\" id=\"card_num\" class=\"form-control\" placeholder=\"Card Number\" autocomplete=\"off\" value=\" ";
        // line 158
        echo set_value("card_num");
        echo "\" required>
                        </div>
                       
                        
                        <div class=\"row\">

                            <div class=\"col-sm-8\">
                                 <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" name=\"exp_month\" maxlength=\"2\" class=\"form-control\" id=\"card-expiry-month\" placeholder=\"MM\" value=\"<?php echo set_value('exp_month'); ?>\" required>
                                        </div>
                                    </div>

                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" name=\"exp_year\" class=\"form-control\" maxlength=\"4\" id=\"card-expiry-year\" placeholder=\"YYYY\" required=\"\" value=\"";
        // line 174
        echo set_value("exp_year");
        echo "\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"cvc\" id=\"card-cvc\" maxlength=\"3\" class=\"form-control\" autocomplete=\"off\" placeholder=\"CVC\" value=\"<?php echo set_value('cvc'); ?>\" required>
                                </div>
                            </div>
                        </div>
                        

                       

                        <div class=\"form-group text-right\">
                          <button class=\"btn btn-secondary\" type=\"reset\">Reset</button>
                          <button type=\"submit\" id=\"payBtn\" class=\"btn btn-success\">Submit Payment</button>
                        </div>
                    </form>     
                </div>
            </div>
                 
        </div>

        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-header bg-info text-white\">
                    Test credentials
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-bordered\">
                        <thead>
                            <tr>
                                <th>Card </th>
                                <th>Brand</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class=\"card-number\"> 4242 4242 4242 4242 </td>
                                <td>Visa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>

        <div class=\"col-md-4\">
        \t<div class=\"card\">
        \t\t<h6 class=\"card-header bg-primary text-white\">
        \t\t\tSome Help?
        \t\t</h6>
        \t\t<div class=\"card-body\">
        \t\t\t<p>Get some real help by browsing these guide from offical source.</p>
        \t\t\t<ol>
        \t\t\t\t<li> <a href=\"https://stripe.com/docs\" target=\"_blank\">Stripe Docs</a> </li>
        \t\t\t\t<li> <a href=\"https://stripe.com/docs/checkout\" target=\"_blank\">Stripe Checkout</a></li>

        \t\t\t</ol>
        \t\t</div>
        \t</div>
        </div>

    </div>
</div> 

   

<!-- Footer -->
<!-- <footer class=\"footer\">
  <div class=\"container\">
    Copyright &copy; <?php //echo date('Y'); ?>  
        <span class=\"float-right\">Coded with Love &hearts;  : <a href=\"https://facebook.com/anburocky3\" target=\"_blank\">Anbuselvan Rocky</a></span>
  </div>
</footer> -->

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/twig/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 174,  191 => 158,  184 => 154,  177 => 150,  151 => 127,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang=\"en\">
<head>



 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">


  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>







    
\t<meta charset=\"utf-8\">
\t<title>Stripe Gateway Integration | Codeigniter</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<link rel=\"stylesheet\" href=\"<?php echo base_url(); ?>/assets/css/bootstrap.min.css\" />

    <link rel=\"stylesheet\" href=\"<?php echo base_url(); ?>/assets/css/stylestripe.css\" />    

    <!-- jQuery is used only for this example; it isn't required to use Stripe -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

\t<link rel=\"stylesheet\" href=\"<?php echo base_url(); ?>/assets/js/bootstrap.min.js\" />

    <!-- Stripe JavaScript library -->
    <script type=\"text/javascript\" src=\"https://js.stripe.com/v2/\"></script>    
    
    <script type=\"text/javascript\">
        //set your publishable key
        Stripe.setPublishableKey('pk_test_YRHkNOC9JY8tBaGa6XjGR1Nu');
        
        //callback to handle the response from stripe
        function stripeResponseHandler(status, response) {
            if (response.error) {
                //enable the submit button
                \$('#payBtn').removeAttr(\"disabled\");
                //display the errors on the form
                // \$('#payment-errors').attr('hidden', 'false');
                \$('#payment-errors').addClass('alert alert-danger');
                \$(\"#payment-errors\").html(response.error.message);
            } else {
                var form\$ = \$(\"#paymentFrm\");
                //get token id
                var token = response['id'];
                //insert the token into the form
                form\$.append(\"<input type='hidden' name='stripeToken' value='\" + token + \"' />\");
                //submit form to the server
                form\$.get(0).submit();
            }
        }
        \$(document).ready(function() {
            //on form submit
            \$(\"#paymentFrm\").submit(function(event) {
                //disable the submit button to prevent repeated clicks
                \$('#payBtn').attr(\"disabled\", \"disabled\");
                
                //create single-use token to charge the user
                Stripe.createToken({
                    number: \$('#card_num').val(),
                    cvc: \$('#card-cvc').val(),
                    exp_month: \$('#card-expiry-month').val(),
                    exp_year: \$('#card-expiry-year').val()
                }, stripeResponseHandler);
                
                //submit from callback
                return false;
            });
        });
    </script>


\t
</head>
<body>

<!-- Bootstrap 4 Navbar  -->
<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
\t<a href=\"#\" class=\"navbar-brand\">Stripe Gateway</a>

\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">

\t\t<ul class=\"navbar-nav ml-auto\">

\t\t\t<li class=\"nav-item \">
\t\t\t\t<a href=\"https://facebook.com/anburocky3\" class=\"nav-link\" target=\"_blank\">#Developer</a>
\t\t\t</li>

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"<?php echo base_url(); ?>Welcome/help\" class=\"nav-link\">Help Article</a>
\t\t\t</li>

\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"https://facebook.com/cdudenetworks\" class=\"nav-link\" target=\"_blank\">Support</a>
\t\t\t</li>

\t\t</ul>

\t</div>
\t
</nav>
<!-- End Bootstrap 4 Navbar -->

\t
<div class=\"container-fluid\">
    <div class=\"row\">
\t\t<!-- Main jumbotron for a primary marketing message or call to action -->
\t    <div class=\"jumbotron\">
\t      <div class=\"container-fluid\">
\t        <h1 class=\"display-5\">Hello, Developers!</h1>
\t        <p>This project will guide you to integrate International Payment Gateway \"Stripe\" in Codeigniter <span class=\"badge bg-primary badge-pill\"><?php echo CI_VERSION; ?></span> with Bootstrap 4. Understand how Stripe Gateway works and implement to your web/app accordingly. if you need any minor help <a href=\"<?php echo base_url(); ?>welcome/help\">contact us</a> here. You can also use Learn more button below</p>
\t        <p><a class=\"btn btn-primary btn-lg\" href=\" {{base_url()}} ?>Welcome/help\" role=\"button\">Learn more &raquo;</a></p>
\t      </div>
\t    </div>
    </div>
</div>

<div class=\"container\">
\t<div class=\"row\">\t

        <div class=\"col-md-4\">
            
            <div class=\"card\">
                <div class=\"card-header bg-success text-white\">Product Information</div>
                <div class=\"card-body bg-light\">
                    <?php if (validation_errors()): ?>
                        <div class=\"alert alert-danger\" role=\"alert\">
                            <strong>Oops!</strong>
                            <?= validation_errors() ;?> 
                        </div>  
                    <?php endif ?>
                    <div id=\"payment-errors\"></div>  
                     <form method=\"post\" id=\"paymentFrm\" enctype=\"multipart/form-data\" action=\"<?php echo base_url(); ?>Welcome/check\">
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Name\" value=\"{{set_value('name')}} ?>\" required>
                        </div>  

                        <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"email@you.com\" value=\" {{set_value('email')}} \" required />
                        </div>

                         <div class=\"form-group\">
                            <input type=\"number\" name=\"card_num\" id=\"card_num\" class=\"form-control\" placeholder=\"Card Number\" autocomplete=\"off\" value=\" {{set_value('card_num')}}\" required>
                        </div>
                       
                        
                        <div class=\"row\">

                            <div class=\"col-sm-8\">
                                 <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" name=\"exp_month\" maxlength=\"2\" class=\"form-control\" id=\"card-expiry-month\" placeholder=\"MM\" value=\"<?php echo set_value('exp_month'); ?>\" required>
                                        </div>
                                    </div>

                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" name=\"exp_year\" class=\"form-control\" maxlength=\"4\" id=\"card-expiry-year\" placeholder=\"YYYY\" required=\"\" value=\"{{ set_value('exp_year')}}\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"cvc\" id=\"card-cvc\" maxlength=\"3\" class=\"form-control\" autocomplete=\"off\" placeholder=\"CVC\" value=\"<?php echo set_value('cvc'); ?>\" required>
                                </div>
                            </div>
                        </div>
                        

                       

                        <div class=\"form-group text-right\">
                          <button class=\"btn btn-secondary\" type=\"reset\">Reset</button>
                          <button type=\"submit\" id=\"payBtn\" class=\"btn btn-success\">Submit Payment</button>
                        </div>
                    </form>     
                </div>
            </div>
                 
        </div>

        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-header bg-info text-white\">
                    Test credentials
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-bordered\">
                        <thead>
                            <tr>
                                <th>Card </th>
                                <th>Brand</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class=\"card-number\"> 4242 4242 4242 4242 </td>
                                <td>Visa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>

        <div class=\"col-md-4\">
        \t<div class=\"card\">
        \t\t<h6 class=\"card-header bg-primary text-white\">
        \t\t\tSome Help?
        \t\t</h6>
        \t\t<div class=\"card-body\">
        \t\t\t<p>Get some real help by browsing these guide from offical source.</p>
        \t\t\t<ol>
        \t\t\t\t<li> <a href=\"https://stripe.com/docs\" target=\"_blank\">Stripe Docs</a> </li>
        \t\t\t\t<li> <a href=\"https://stripe.com/docs/checkout\" target=\"_blank\">Stripe Checkout</a></li>

        \t\t\t</ol>
        \t\t</div>
        \t</div>
        </div>

    </div>
</div> 

   

<!-- Footer -->
<!-- <footer class=\"footer\">
  <div class=\"container\">
    Copyright &copy; <?php //echo date('Y'); ?>  
        <span class=\"float-right\">Coded with Love &hearts;  : <a href=\"https://facebook.com/anburocky3\" target=\"_blank\">Anbuselvan Rocky</a></span>
  </div>
</footer> -->

</body>
</html>", "/twig/product_form.twig", "C:\\xampp\\htdocs\\3pago\\application\\views\\twig\\product_form.twig");
    }
}
