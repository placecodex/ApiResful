<?php

/* /twig/myaccount/home.twig */
class __TwigTemplate_9aad6b150af1a16f40b6d8918cdcc1f48c2f164f19485f001df3ac32178ad81c extends Twig_Template
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
        echo "<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


<style type=\"text/css\">


table {
  width: 100%;
  height: 8%; }

/*table*/
table.table-expandable > tbody > tr:nth-child(odd) {
    cursor: pointer;
/**   width: 100%;*/
     background-color: white;
}

/*table- child */
table.table-expandable.table-hover > tbody > tr:nth-child(even)   td {
  /**color: white;**/
 /*  background-color: #F5F5F5;*/
}
body{ background: #fcfcfc;  font-family: 'Varela Round', sans-serif;  font-size: 13px;  }

.blue{ background: #039BE5; } .blue h1{ color: white; }


.blue { border-radius: 3px; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
border: 0px;  }


.white {
border-radius: 7px;
box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
background: white;
border: 0px;  }

</style>


<div class=\"container side-collapse-container \"> 

<!--resolution center mesenge-->

<!--<div class=\"row\">
<div class=\"col-md-10 well white\">
<h4> Usted tiene  (2) casos sin resolver, para mas informacion vaya al centro de resoluciones. <br><?#= anchor('myaccount\\Resolution_center','Ir al centro de resoluciones');?> </h4>
</div>
</div>-->



<script type=\"text/javascript\">
\t
\tsetTimeout(function() {
    \$('#mydiv').fadeOut('fast');
}, 4000); // <-- time in milliseconds
</script>



<!--FlashData-->





<!--=========== start show mesager to user===========-->

<!--<div class=\"page-header\"><h1>Admin Page</h1> </div>-->
<!--<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"well  blue \">

 <h1> Please Verify your account  </h1>

</div>
</div>
</div>-->
<!-- ===========./End ===========-->







<div class=\"row\">
<div class=\"col-md-4\">


<!--Start Data user-->
<div class=\"well white\"> 


";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["datauser"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 97
            echo "
<h3>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "last_name", array()), "html", null, true);
            echo "</h3>
<br>
<p><strong> Email: </strong></p>  <p>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
            echo " </p>
<p> <strong> Numero:</strong></p> <p>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "

<hr>
<p><i class=\"glyphicon glyphicon-chevron-left\"></i>
";
        // line 108
        echo call_user_func_array($this->env->getFunction('anchor')->getCallable(), array("/myaccount/profile/", "Mi Perfil"));
        echo "</p>
</div>


<!--./End -->









<!--Start Show money user-->
<div class=\"well white\">  



<?php foreach (\$wallet as \$c): ?> 

<?php if (\$c->peso <=-1){ ?> 

<p> Peso Dominicano</p>

<h3 class=\"text-danger\"> <?=number_format(\$c->peso,2) ;?>  \$RD </h3> <?php } else  { ?>

<p> Peso Dominicano</p>

<h3 class=\"text-primary\"> <?=number_format(\$c->peso,2) ;?> \$RD   </h3> <?php } ?>


<?php if (\$c->dollar <= 1){ }else{?>

<hr> <p> Dolar Americano</p>

<h4 class=\"text-primary\"> 

 <?= number_format(\$c->dollar,2) ;?> \$USD </h4>

 <?php  }?>

<?php if (\$c->euro <=1){} else  { ?>

 <hr><p> Euro </p>

<h4 class=\"text-success\"> <?= number_format(\$c->euro,2) ;?> \$EUR </h4>

 <?php  }?>

<?php endforeach; ?>

</div>  <!-- ./End-->







<!--Start Show frozen money user-->

<?php foreach (\$wallet as \$f): ?> 


<?php if (\$f->frozen_peso > 0 ) {?>

<div class=\"well white\">  

<p> balance retenido</p>

<hr>

 <?php if (\$f->frozen_peso  > 0) {?>
  
<h4 class=\"text-danger\"> <?= number_format(\$f->frozen_peso,2) ;?>  \$RD</h4> <?php }?>

<?php if (\$f->frozen_dollar  > 0) {?>
  
<h4 class=\"text-danger\">  <?= number_format(\$f->frozen_dollar,2) ;?>  \$USD </h4><?php }?>

<?php if (\$f->frozen_euro  > 0) {?>
<h4 class=\"text-danger\">  <?= number_format(\$f->frozen_euro,2) ;?> \$EUR</h4><?php }?>




</div>  <!-- ./End-->
<?php }elseif( \$f->frozen_dollar  >  0 ) {?>


<hr>



 <?php if (\$f->frozen_peso  > 0) {?>
  
<h4 class=\"text-danger\"> <?= number_format(\$f->frozen_peso,2) ;?>  \$RD</h4> <?php }?>

<?php if (\$f->frozen_dollar  > 0) {?>
  
<h4 class=\"text-danger\">  <?= number_format(\$f->frozen_dollar,2) ;?>  \$USD </h4><?php }?>

<?php if (\$f->frozen_euro  > 0) {?>
<h4 class=\"text-danger\">  <?= number_format(\$f->frozen_euro,2) ;?> \$EUR</h4><?php }?>



<?php }elseif(\$f->frozen_euro > 0){ ?>

<hr>

 <?php if (\$f->frozen_peso  > 0) {?>
  
<h4 class=\"text-danger\"> <?= number_format(\$f->frozen_peso,2) ;?>  \$RD</h4> <?php }?>

<?php if (\$f->frozen_dollar  > 0) {?>
  
<h4 class=\"text-danger\">  <?= number_format(\$f->frozen_dollar,2) ;?>  \$USD </h4><?php }?>

<?php if (\$f->frozen_euro  > 0) {?>
<h4 class=\"text-danger\">  <?= number_format(\$f->frozen_euro,2) ;?> \$EUR</h4><?php }?>


<?php }else{} ?>


<?php endforeach; ?>









<!-- Start  Show Bank Account -->
<div class=\"well white\">  

<p> <i class=\"fa fa-bank\"></i> Cuentas bancarias y Tarjetas</p>

<hr> <!--LINE HERE-->

<?php  if(empty(\$card_list) ) {  ?>

<!--HTML5 HERE-->



<p><i class=\"fa fa-plus-circle\"> </i> 
<?= anchor('/myaccount/wallet', 'Vincular tarjeta o cuenta bancaria'); ?> </p>

<?php }else {?>


<?php foreach (\$card_list as \$r): ?> 


<img  height=\"30\" width=\"50\" id='image1' src='<?= card_img_helper(\$r->card_type); ?>'/> -



<?= truncate_card_home(\$this->encrypt->decode(\$r->card_number)); ?>




<hr> <!--LINE HERE-->
<?php endforeach; ?>





<p><i class=\"glyphicon glyphicon-chevron-left\"> </i> 
<?= anchor('/myaccount/wallet', 'Administrar mis tarjetas'); ?> </p>


<?php } ?>


</div>  
<!-- ./End -->





 <!--Start Show button pay-->
<div class=\"well white\">  
<p><i class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></i> Botones de pago</p>
<hr>
<p><i class=\"glyphicon glyphicon-chevron-left\"> </i> <?= anchor('/myaccount/paybutton', 'Administrar mis pasarelas'); ?> </p>

</div> 
<!-- ./End -->


</div> <!--end column-->




 <!--  Start Show history user-->
<div class=\"container\">
<div class=\"col-md-6 well white \">
<h3> Ultimos Movimientos</h3>
<table class=\"table table-hover table-expandable table-striped   \">
<tbody>
<?php if(empty(\$history) ) { ?>

<!--HTML5 code here-->

<hr>
<h4>No se han encontrado transaciones </h4>
<p>para reavisar transaciones</p>

<?php } else { ?>

<?php foreach (\$history as \$row): ?>

<?php if (\$row->id_to == \$id_me){ ?>

<!--PAYMENT RECEIVED-->
<tr>
<td>
<h5><strong><?=date(\" d\", strtotime(\$row->date)); ?></strong></h5>
<h5><strong><?=date(\"M\", strtotime(\$row->date)); ?></strong></h5>
</td>
<td>        
<h4><?= user_helper(\$row->id_from); ?></h4> 
<h4><?php #echo \$row['name_to'] ?></h4> 





 <?php if (\$row->dispute==1) { ?>


<h4 class=\"text-danger\">   <?=number_format(\$row->moneyreceived,2) ; ?>  <?=currency_helper(\$row->id_currency);?> </h4>
</td>
<td> 

 <h5>Recibido <br> (Pago Retenido)</h5>

 <?php }else{ ?>



<h4 class=\"text-success\"> <?=number_format(\$row->moneyreceived,2) ; ?>  <?=currency_helper(\$row->id_currency);?>
</h4>
</td>
<td> 

     <h5>Recibido</h5>

<?php }?>


        </td>       
        </tr>

<td colspan=\"5\"><h4>Informacion Adicional</h4>
  
<ul>       
<li><p><strong>Id Transaccion:</strong> <?=\$row->id_track ;?></p></li>

<li><p><strong>estado:</strong> <?= state_helper(\$row->state) ;?>   </p></li>

<li><p><strong>Hora:</strong><?=date(\" h:i a\", strtotime(\$row->date));?></p></li>

<li><p><strong>Fecha:</strong><?=date(\" d/m/Y\", strtotime(\$row->date));?></p></li>
      
<li><p><strong>Metodo de pago:</strong><?= method_helper(\$row->id_paymethod);?>   </p></li>
          
<li><u><strong>pago comicion:</strong><?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->comit,2);?></u></li>

<li><p><strong>Monto total:</strong><?=currency_helper(\$row->id_currency);?>
 <?=number_format(\$row->moneysend,2);?></p></li>

<li><a href=\"<?=site_url(\"myaccount/payment/report\");?>/<?=\$row->id;?>\">Reembolsar esta transaccion</a></li>


</ul>
</td>  

<!--/.PAY RECEIVED-->


<?php }elseif(\$row->id_action == 2 ) { ?>




<!--PAY IN PROCCES-->
<tr>
<td>

 
<h5><strong><?=date(\" d\", strtotime(\$row->date)); ?></strong></h5>
<h5> <strong><?=date(\"M\", strtotime(\$row->date)); ?></strong></h5>
</td>
<td> 
<h4><?= \$row->name; ?>   <?php echo \$row->last_name; ?> </h4> 
<h4><?php #echo \$row['name_to'] ?></h4> 
<h4>   <?=number_format(\$row->moneyreceived,2) ; ?>  <?=currency_helper(\$row->id_currency);?></h4>
</td>
<td> 

   <h5>Procesando</h5>

<!--<p>   <?php# echo anchor('/myaccount/details/', 'Mas detalles'); ?> <i class=\"glyphicon glyphicon-chevron-right\"> </i></p>-->
        </td>       
        </tr>

<td colspan=\"5\"><h4>Informacion Adicional</h4>
<ul>       
<li><p><strong>Id Transaccion:</strong> <?=\$row->id_track;?></p></li>

<li><p><strong>estado:</strong> <?= state_helper(\$row->state) ;?>   </p></li>

<li><p><strong>Hora:</strong> <?=date(\" h:i a \",strtotime(\$row->date)); ?></p></li>

<li><p><strong>Fecha:</strong> <?=date(\" d/m/Y  \", strtotime(\$row->date)); ?></p></li>
       
<li><p><strong>Metodo de pago:</strong> <?=method_helper(\$row->id_paymethod) ;?> </p></li>
          
<li><p><strong>pago comicion:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?>  </p></li>

<li><p><strong>Monto total:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?></p></li>

<li><li><a href=\"<?=site_url(\"myaccount/payment/report\");?>/<?=\$row->id ;?>/<?=\$row->id_user ;?>\">
Reportar esta transaccion</a></li> </p></li>
</ul>
</td>  

<!--./PAY IN PROCCES-->



<!--Retiro -->

<?php }elseif(\$row->id_action == 3 ) { ?>



<tr>
<td>

 
<h5><strong><?=date(\" d\", strtotime(\$row->date)); ?></strong></h5>
<h5> <strong><?=date(\"M\", strtotime(\$row->date)); ?></strong></h5>
</td>
<td> 
<h4><?= \$row->name; ?>   <?php echo \$row->last_name; ?> </h4> 
<h4><?php #echo \$row['name_to'] ?></h4> 
<h4>   <?=number_format(\$row->moneyreceived,2) ; ?>  <?=currency_helper(\$row->id_currency);?></h4>
</td>
<td> 

   <h5>Retiro</h5>

<!--<p>   <?php# echo anchor('/myaccount/details/', 'Mas detalles'); ?> <i class=\"glyphicon glyphicon-chevron-right\"> </i></p>-->
        </td>       
        </tr>

<td colspan=\"5\"><h4>Informacion Adicional</h4>
<ul>       
<li><p><strong>Id Transaccion:</strong> <?=\$row->id_track;?></p></li>

<li><p><strong>estado:</strong> <?= state_helper(\$row->state) ;?>   </p></li>

<li><p><strong>Hora:</strong> <?=date(\" h:i a \",strtotime(\$row->date)); ?></p></li>

<li><p><strong>Fecha:</strong> <?=date(\" d/m/Y  \", strtotime(\$row->date)); ?></p></li>
       
<li><p><strong>Metodo de pago:</strong> <?=method_helper(\$row->id_paymethod) ;?> </p></li>
          
<li><p><strong>pago comicion:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?>  </p></li>

<li><p><strong>Monto total:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?></p></li>

<li><?=anchor('/myaccount/history', 'Mas detalles'); ?> </p></li>
</ul>
</td>  




<!--./Retiro ->



<!-Recarga -->


<?php }elseif(\$row->id_action == 4 ) { ?>





<tr>
<td>

 
<h5><strong><?=date(\" d\", strtotime(\$row->date)); ?></strong></h5>
<h5> <strong><?=date(\"M\", strtotime(\$row->date)); ?></strong></h5>
</td>
<td> 
<h4><?= \$row->name; ?>   <?php echo \$row->last_name; ?> </h4> 
<h4><?php #echo \$row['name_to'] ?></h4> 
<h4>  <?=number_format(\$row->moneyreceived,2) ; ?>  <?=currency_helper(\$row->id_currency);?></h4>
</td>
<td> 

   <h5>Retiro</h5>

<!--<p>   <?php# echo anchor('/myaccount/details/', 'Mas detalles'); ?> <i class=\"glyphicon glyphicon-chevron-right\"> </i></p>-->
        </td>       
        </tr>

<td colspan=\"5\"><h4>Informacion Adicional</h4>
<ul>       
<li><p><strong>Id Transaccion:</strong> <?=\$row->id_track;?></p></li>

<li><p><strong>estado:</strong> <?= state_helper(\$row->state) ;?>   </p></li>

<li><p><strong>Hora:</strong> <?=date(\" h:i a \",strtotime(\$row->date)); ?></p></li>

<li><p><strong>Fecha:</strong> <?=date(\" d/m/Y  \", strtotime(\$row->date)); ?></p></li>
       
<li><p><strong>Metodo de pago:</strong> <?=method_helper(\$row->id_paymethod) ;?> </p></li>
          
<li><p><strong>pago comicion:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?>  </p></li>

<li><p><strong>Monto total:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?></p></li>

<li><?=anchor('/myaccount/history', 'Reportar esta transaccion'); ?> </p></li>
</ul>
</td>  






<!--./Recarga -->





<!--FACTURA -->


<?php }elseif(\$row->id_action == 5 ) { ?>





<tr>
<td>

 
<h5><strong><?=date(\" d\", strtotime(\$row->date)); ?></strong></h5>
<h5> <strong><?=date(\"M\", strtotime(\$row->date)); ?></strong></h5>
</td>
<td> 
<h4><?= \$row->name; ?>   <?php echo \$row->last_name; ?> </h4> 
<h4><?php #echo \$row['name_to'] ?></h4> 
<h4>   <?=number_format(\$row->moneyreceived,2) ; ?>  <?=currency_helper(\$row->id_currency);?></h4>
</td>
<td> 

   <h5>Comprobante</h5>

<!--<p>   <?php# echo anchor('/myaccount/details/', 'Mas detalles'); ?> <i class=\"glyphicon glyphicon-chevron-right\"> </i></p>-->
        </td>       
        </tr>

<td colspan=\"5\"><h4>Informacion Adicional</h4>
<ul>       
<li><p><strong>Id Transaccion:</strong> <?=\$row->id_track;?></p></li>

<li><p><strong>Hora:</strong> <?=date(\" h:i a \",strtotime(\$row->date)); ?></p></li>

<li><p><strong>Fecha:</strong> <?=date(\" d/m/Y  \", strtotime(\$row->date)); ?></p></li>
       
<li><p><strong>Metodo de pago:</strong> <?=method_helper(\$row->id_paymethod) ;?> </p></li>
          
<li><p><strong>pago comicion:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?>  </p></li>

<li><p><strong>Monto total:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?></p></li>

<li><?=anchor('/myaccount/history', 'Reportar esta transaccion'); ?> </p></li>
</ul>
</td>  

<!--./FACTURA -->





<!--./PAY IN PROCCES-->

<?php } else { ?>


<!--MONEY SENDED-->

<tr>
<td>

 
<h5><strong><?=date(\" d\", strtotime(\$row->date)); ?></strong></h5>
<h5> <strong><?=date(\"M\", strtotime(\$row->date)); ?></strong></h5>
</td>
<td> 
<h4><?=user_helper(\$row->id_to); ?></h4> 
    
      <!-- IF DISPUTE -->
 <?php if (\$row->dispute==1) { ?>
   

<h4 class=\"text-danger\">   <?=number_format(\$row->moneysend,2) ; ?>  <?=currency_helper(\$row->id_currency);?> </h4>
</td>
<td> 
 <h5>Enviado <br> ( Pago Retenido)</h5>

 <?php }else{ ?>
       <!--ELSE-->
<h4> <?=number_format(\$row->moneysend,2) ; ?>  <?=currency_helper(\$row->id_currency);?></h4>
</td>
<td> 
<h5>Enviado</h5>

<?php }?>






        </td>       
        </tr>

<td colspan=\"5\"><h4>Informacion Adicional</h4>
<ul>       
<li><p><strong>Id Transaccion:</strong> <?=\$row->id_track ;?></p></li>
<li><p><strong>estado:</strong> <?= state_helper(\$row->state) ;?>   </p></li>

<li><p><strong>Hora:</strong> <?=date(\" h:i a \", strtotime(\$row->date)); ?></p></li>

<li><p><strong>Fecha:</strong> <?=date(\" d/m/Y  \", strtotime(\$row->date)); ?></p></li>
       
<li><p><strong>Metodo de pago:</strong> <?=method_helper(\$row->id_paymethod) ;?>   </p></li>
          

<li><p><strong>Monto total:</strong> <?=currency_helper(\$row->id_currency);?> 
<?=number_format(\$row->moneysend,2) ; ?></p></li>

<li><li><a href=\"<?=site_url(\"myaccount/payment/report\");?>/<?=\$row->id ;?>\">
Reportar este pago</a></li> </p></li>
</ul>
</td>


<!--/.MONEY SENDED-->


<?php } ?>


<?php endforeach; ?>


<?php } ?>

</tbody>
</table>

<p><i class=\"glyphicon glyphicon-chevron-left\"></i><?=anchor('/myaccount/history','Ver Todo'); ?></p>

</div>
 


 <?php if (\$this->config->item('show_history_login_in_home', 'login_security')) {?>

<!--=========== End Show history user===========-->

   <div class=\"col-md-12 well white\">


   <h3>Historial de acceso</h3>

  <table class=\"table\">

    <thead>
      <tr>
        <th>Date</th>
      <!--  <th>Event</th>-->
        <th>Browser</th>
         <th>Ip address</th>
         <th>Location</th>

      </tr>
    </thead>
    <tbody>
    <?php foreach (\$activity as \$r): ?> 
      <tr>
        <td>
          <?=date(\" h:ia\", strtotime(\$row->date)); ?>
          <br>
          <?=date(\" d/m/Y  \", strtotime(\$row->date)); ?>
          
        </td>
        <td>Logueado</td>

        <td>Chrome</td>

         <td> 
         182.256.12.1

        </td>

        <td>
         Republica
          <br>
          Dominicana
        </td>
      </tr>

       <?php endforeach; ?>
    </tbody>

   
    
  </table>
  
  <hr> <!--LINE HERE-->
<p><i class=\"glyphicon glyphicon-chevron-left\"> </i> 
<?= anchor('/myaccount/Activity_record/', 'Ver Todo'); ?> </p>

    </div>
  <?php } ?>







</div>
</div>
</div>


<?php 
/* Fin del archivo home.php */
/* Ubicación: ./application/view/myaccount/home.php*/
?>


";
    }

    public function getTemplateName()
    {
        return "/twig/myaccount/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 108,  147 => 104,  138 => 101,  134 => 100,  127 => 98,  124 => 97,  120 => 96,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


<style type=\"text/css\">


table {
  width: 100%;
  height: 8%; }

/*table*/
table.table-expandable > tbody > tr:nth-child(odd) {
    cursor: pointer;
/**   width: 100%;*/
     background-color: white;
}

/*table- child */
table.table-expandable.table-hover > tbody > tr:nth-child(even)   td {
  /**color: white;**/
 /*  background-color: #F5F5F5;*/
}
body{ background: #fcfcfc;  font-family: 'Varela Round', sans-serif;  font-size: 13px;  }

.blue{ background: #039BE5; } .blue h1{ color: white; }


.blue { border-radius: 3px; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
border: 0px;  }


.white {
border-radius: 7px;
box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
background: white;
border: 0px;  }

</style>


<div class=\"container side-collapse-container \"> 

<!--resolution center mesenge-->

<!--<div class=\"row\">
<div class=\"col-md-10 well white\">
<h4> Usted tiene  (2) casos sin resolver, para mas informacion vaya al centro de resoluciones. <br><?#= anchor('myaccount\\Resolution_center','Ir al centro de resoluciones');?> </h4>
</div>
</div>-->



<script type=\"text/javascript\">
\t
\tsetTimeout(function() {
    \$('#mydiv').fadeOut('fast');
}, 4000); // <-- time in milliseconds
</script>



<!--FlashData-->





<!--=========== start show mesager to user===========-->

<!--<div class=\"page-header\"><h1>Admin Page</h1> </div>-->
<!--<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"well  blue \">

 <h1> Please Verify your account  </h1>

</div>
</div>
</div>-->
<!-- ===========./End ===========-->







<div class=\"row\">
<div class=\"col-md-4\">


<!--Start Data user-->
<div class=\"well white\"> 


{% for user in datauser %}

<h3>{{ user.name }} {{ user.last_name }}</h3>
<br>
<p><strong> Email: </strong></p>  <p>{{ user.email }} </p>
<p> <strong> Numero:</strong></p> <p>{{ user.username }}</p>

{% endfor %}


<hr>
<p><i class=\"glyphicon glyphicon-chevron-left\"></i>
{{ anchor('/myaccount/profile/','Mi Perfil')}}</p>
</div>


<!--./End -->









<!--Start Show money user-->
<div class=\"well white\">  



<?php foreach (\$wallet as \$c): ?> 

<?php if (\$c->peso <=-1){ ?> 

<p> Peso Dominicano</p>

<h3 class=\"text-danger\"> <?=number_format(\$c->peso,2) ;?>  \$RD </h3> <?php } else  { ?>

<p> Peso Dominicano</p>

<h3 class=\"text-primary\"> <?=number_format(\$c->peso,2) ;?> \$RD   </h3> <?php } ?>


<?php if (\$c->dollar <= 1){ }else{?>

<hr> <p> Dolar Americano</p>

<h4 class=\"text-primary\"> 

 <?= number_format(\$c->dollar,2) ;?> \$USD </h4>

 <?php  }?>

<?php if (\$c->euro <=1){} else  { ?>

 <hr><p> Euro </p>

<h4 class=\"text-success\"> <?= number_format(\$c->euro,2) ;?> \$EUR </h4>

 <?php  }?>

<?php endforeach; ?>

</div>  <!-- ./End-->







<!--Start Show frozen money user-->

<?php foreach (\$wallet as \$f): ?> 


<?php if (\$f->frozen_peso > 0 ) {?>

<div class=\"well white\">  

<p> balance retenido</p>

<hr>

 <?php if (\$f->frozen_peso  > 0) {?>
  
<h4 class=\"text-danger\"> <?= number_format(\$f->frozen_peso,2) ;?>  \$RD</h4> <?php }?>

<?php if (\$f->frozen_dollar  > 0) {?>
  
<h4 class=\"text-danger\">  <?= number_format(\$f->frozen_dollar,2) ;?>  \$USD </h4><?php }?>

<?php if (\$f->frozen_euro  > 0) {?>
<h4 class=\"text-danger\">  <?= number_format(\$f->frozen_euro,2) ;?> \$EUR</h4><?php }?>




</div>  <!-- ./End-->
<?php }elseif( \$f->frozen_dollar  >  0 ) {?>


<hr>



 <?php if (\$f->frozen_peso  > 0) {?>
  
<h4 class=\"text-danger\"> <?= number_format(\$f->frozen_peso,2) ;?>  \$RD</h4> <?php }?>

<?php if (\$f->frozen_dollar  > 0) {?>
  
<h4 class=\"text-danger\">  <?= number_format(\$f->frozen_dollar,2) ;?>  \$USD </h4><?php }?>

<?php if (\$f->frozen_euro  > 0) {?>
<h4 class=\"text-danger\">  <?= number_format(\$f->frozen_euro,2) ;?> \$EUR</h4><?php }?>



<?php }elseif(\$f->frozen_euro > 0){ ?>

<hr>

 <?php if (\$f->frozen_peso  > 0) {?>
  
<h4 class=\"text-danger\"> <?= number_format(\$f->frozen_peso,2) ;?>  \$RD</h4> <?php }?>

<?php if (\$f->frozen_dollar  > 0) {?>
  
<h4 class=\"text-danger\">  <?= number_format(\$f->frozen_dollar,2) ;?>  \$USD </h4><?php }?>

<?php if (\$f->frozen_euro  > 0) {?>
<h4 class=\"text-danger\">  <?= number_format(\$f->frozen_euro,2) ;?> \$EUR</h4><?php }?>


<?php }else{} ?>


<?php endforeach; ?>









<!-- Start  Show Bank Account -->
<div class=\"well white\">  

<p> <i class=\"fa fa-bank\"></i> Cuentas bancarias y Tarjetas</p>

<hr> <!--LINE HERE-->

<?php  if(empty(\$card_list) ) {  ?>

<!--HTML5 HERE-->



<p><i class=\"fa fa-plus-circle\"> </i> 
<?= anchor('/myaccount/wallet', 'Vincular tarjeta o cuenta bancaria'); ?> </p>

<?php }else {?>


<?php foreach (\$card_list as \$r): ?> 


<img  height=\"30\" width=\"50\" id='image1' src='<?= card_img_helper(\$r->card_type); ?>'/> -



<?= truncate_card_home(\$this->encrypt->decode(\$r->card_number)); ?>




<hr> <!--LINE HERE-->
<?php endforeach; ?>





<p><i class=\"glyphicon glyphicon-chevron-left\"> </i> 
<?= anchor('/myaccount/wallet', 'Administrar mis tarjetas'); ?> </p>


<?php } ?>


</div>  
<!-- ./End -->





 <!--Start Show button pay-->
<div class=\"well white\">  
<p><i class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></i> Botones de pago</p>
<hr>
<p><i class=\"glyphicon glyphicon-chevron-left\"> </i> <?= anchor('/myaccount/paybutton', 'Administrar mis pasarelas'); ?> </p>

</div> 
<!-- ./End -->


</div> <!--end column-->




 <!--  Start Show history user-->
<div class=\"container\">
<div class=\"col-md-6 well white \">
<h3> Ultimos Movimientos</h3>
<table class=\"table table-hover table-expandable table-striped   \">
<tbody>
<?php if(empty(\$history) ) { ?>

<!--HTML5 code here-->

<hr>
<h4>No se han encontrado transaciones </h4>
<p>para reavisar transaciones</p>

<?php } else { ?>

<?php foreach (\$history as \$row): ?>

<?php if (\$row->id_to == \$id_me){ ?>

<!--PAYMENT RECEIVED-->
<tr>
<td>
<h5><strong><?=date(\" d\", strtotime(\$row->date)); ?></strong></h5>
<h5><strong><?=date(\"M\", strtotime(\$row->date)); ?></strong></h5>
</td>
<td>        
<h4><?= user_helper(\$row->id_from); ?></h4> 
<h4><?php #echo \$row['name_to'] ?></h4> 





 <?php if (\$row->dispute==1) { ?>


<h4 class=\"text-danger\">   <?=number_format(\$row->moneyreceived,2) ; ?>  <?=currency_helper(\$row->id_currency);?> </h4>
</td>
<td> 

 <h5>Recibido <br> (Pago Retenido)</h5>

 <?php }else{ ?>



<h4 class=\"text-success\"> <?=number_format(\$row->moneyreceived,2) ; ?>  <?=currency_helper(\$row->id_currency);?>
</h4>
</td>
<td> 

     <h5>Recibido</h5>

<?php }?>


        </td>       
        </tr>

<td colspan=\"5\"><h4>Informacion Adicional</h4>
  
<ul>       
<li><p><strong>Id Transaccion:</strong> <?=\$row->id_track ;?></p></li>

<li><p><strong>estado:</strong> <?= state_helper(\$row->state) ;?>   </p></li>

<li><p><strong>Hora:</strong><?=date(\" h:i a\", strtotime(\$row->date));?></p></li>

<li><p><strong>Fecha:</strong><?=date(\" d/m/Y\", strtotime(\$row->date));?></p></li>
      
<li><p><strong>Metodo de pago:</strong><?= method_helper(\$row->id_paymethod);?>   </p></li>
          
<li><u><strong>pago comicion:</strong><?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->comit,2);?></u></li>

<li><p><strong>Monto total:</strong><?=currency_helper(\$row->id_currency);?>
 <?=number_format(\$row->moneysend,2);?></p></li>

<li><a href=\"<?=site_url(\"myaccount/payment/report\");?>/<?=\$row->id;?>\">Reembolsar esta transaccion</a></li>


</ul>
</td>  

<!--/.PAY RECEIVED-->


<?php }elseif(\$row->id_action == 2 ) { ?>




<!--PAY IN PROCCES-->
<tr>
<td>

 
<h5><strong><?=date(\" d\", strtotime(\$row->date)); ?></strong></h5>
<h5> <strong><?=date(\"M\", strtotime(\$row->date)); ?></strong></h5>
</td>
<td> 
<h4><?= \$row->name; ?>   <?php echo \$row->last_name; ?> </h4> 
<h4><?php #echo \$row['name_to'] ?></h4> 
<h4>   <?=number_format(\$row->moneyreceived,2) ; ?>  <?=currency_helper(\$row->id_currency);?></h4>
</td>
<td> 

   <h5>Procesando</h5>

<!--<p>   <?php# echo anchor('/myaccount/details/', 'Mas detalles'); ?> <i class=\"glyphicon glyphicon-chevron-right\"> </i></p>-->
        </td>       
        </tr>

<td colspan=\"5\"><h4>Informacion Adicional</h4>
<ul>       
<li><p><strong>Id Transaccion:</strong> <?=\$row->id_track;?></p></li>

<li><p><strong>estado:</strong> <?= state_helper(\$row->state) ;?>   </p></li>

<li><p><strong>Hora:</strong> <?=date(\" h:i a \",strtotime(\$row->date)); ?></p></li>

<li><p><strong>Fecha:</strong> <?=date(\" d/m/Y  \", strtotime(\$row->date)); ?></p></li>
       
<li><p><strong>Metodo de pago:</strong> <?=method_helper(\$row->id_paymethod) ;?> </p></li>
          
<li><p><strong>pago comicion:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?>  </p></li>

<li><p><strong>Monto total:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?></p></li>

<li><li><a href=\"<?=site_url(\"myaccount/payment/report\");?>/<?=\$row->id ;?>/<?=\$row->id_user ;?>\">
Reportar esta transaccion</a></li> </p></li>
</ul>
</td>  

<!--./PAY IN PROCCES-->



<!--Retiro -->

<?php }elseif(\$row->id_action == 3 ) { ?>



<tr>
<td>

 
<h5><strong><?=date(\" d\", strtotime(\$row->date)); ?></strong></h5>
<h5> <strong><?=date(\"M\", strtotime(\$row->date)); ?></strong></h5>
</td>
<td> 
<h4><?= \$row->name; ?>   <?php echo \$row->last_name; ?> </h4> 
<h4><?php #echo \$row['name_to'] ?></h4> 
<h4>   <?=number_format(\$row->moneyreceived,2) ; ?>  <?=currency_helper(\$row->id_currency);?></h4>
</td>
<td> 

   <h5>Retiro</h5>

<!--<p>   <?php# echo anchor('/myaccount/details/', 'Mas detalles'); ?> <i class=\"glyphicon glyphicon-chevron-right\"> </i></p>-->
        </td>       
        </tr>

<td colspan=\"5\"><h4>Informacion Adicional</h4>
<ul>       
<li><p><strong>Id Transaccion:</strong> <?=\$row->id_track;?></p></li>

<li><p><strong>estado:</strong> <?= state_helper(\$row->state) ;?>   </p></li>

<li><p><strong>Hora:</strong> <?=date(\" h:i a \",strtotime(\$row->date)); ?></p></li>

<li><p><strong>Fecha:</strong> <?=date(\" d/m/Y  \", strtotime(\$row->date)); ?></p></li>
       
<li><p><strong>Metodo de pago:</strong> <?=method_helper(\$row->id_paymethod) ;?> </p></li>
          
<li><p><strong>pago comicion:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?>  </p></li>

<li><p><strong>Monto total:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?></p></li>

<li><?=anchor('/myaccount/history', 'Mas detalles'); ?> </p></li>
</ul>
</td>  




<!--./Retiro ->



<!-Recarga -->


<?php }elseif(\$row->id_action == 4 ) { ?>





<tr>
<td>

 
<h5><strong><?=date(\" d\", strtotime(\$row->date)); ?></strong></h5>
<h5> <strong><?=date(\"M\", strtotime(\$row->date)); ?></strong></h5>
</td>
<td> 
<h4><?= \$row->name; ?>   <?php echo \$row->last_name; ?> </h4> 
<h4><?php #echo \$row['name_to'] ?></h4> 
<h4>  <?=number_format(\$row->moneyreceived,2) ; ?>  <?=currency_helper(\$row->id_currency);?></h4>
</td>
<td> 

   <h5>Retiro</h5>

<!--<p>   <?php# echo anchor('/myaccount/details/', 'Mas detalles'); ?> <i class=\"glyphicon glyphicon-chevron-right\"> </i></p>-->
        </td>       
        </tr>

<td colspan=\"5\"><h4>Informacion Adicional</h4>
<ul>       
<li><p><strong>Id Transaccion:</strong> <?=\$row->id_track;?></p></li>

<li><p><strong>estado:</strong> <?= state_helper(\$row->state) ;?>   </p></li>

<li><p><strong>Hora:</strong> <?=date(\" h:i a \",strtotime(\$row->date)); ?></p></li>

<li><p><strong>Fecha:</strong> <?=date(\" d/m/Y  \", strtotime(\$row->date)); ?></p></li>
       
<li><p><strong>Metodo de pago:</strong> <?=method_helper(\$row->id_paymethod) ;?> </p></li>
          
<li><p><strong>pago comicion:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?>  </p></li>

<li><p><strong>Monto total:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?></p></li>

<li><?=anchor('/myaccount/history', 'Reportar esta transaccion'); ?> </p></li>
</ul>
</td>  






<!--./Recarga -->





<!--FACTURA -->


<?php }elseif(\$row->id_action == 5 ) { ?>





<tr>
<td>

 
<h5><strong><?=date(\" d\", strtotime(\$row->date)); ?></strong></h5>
<h5> <strong><?=date(\"M\", strtotime(\$row->date)); ?></strong></h5>
</td>
<td> 
<h4><?= \$row->name; ?>   <?php echo \$row->last_name; ?> </h4> 
<h4><?php #echo \$row['name_to'] ?></h4> 
<h4>   <?=number_format(\$row->moneyreceived,2) ; ?>  <?=currency_helper(\$row->id_currency);?></h4>
</td>
<td> 

   <h5>Comprobante</h5>

<!--<p>   <?php# echo anchor('/myaccount/details/', 'Mas detalles'); ?> <i class=\"glyphicon glyphicon-chevron-right\"> </i></p>-->
        </td>       
        </tr>

<td colspan=\"5\"><h4>Informacion Adicional</h4>
<ul>       
<li><p><strong>Id Transaccion:</strong> <?=\$row->id_track;?></p></li>

<li><p><strong>Hora:</strong> <?=date(\" h:i a \",strtotime(\$row->date)); ?></p></li>

<li><p><strong>Fecha:</strong> <?=date(\" d/m/Y  \", strtotime(\$row->date)); ?></p></li>
       
<li><p><strong>Metodo de pago:</strong> <?=method_helper(\$row->id_paymethod) ;?> </p></li>
          
<li><p><strong>pago comicion:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?>  </p></li>

<li><p><strong>Monto total:</strong> <?=currency_helper(\$row->id_currency);?>
<?=number_format(\$row->quantity,2) ; ?></p></li>

<li><?=anchor('/myaccount/history', 'Reportar esta transaccion'); ?> </p></li>
</ul>
</td>  

<!--./FACTURA -->





<!--./PAY IN PROCCES-->

<?php } else { ?>


<!--MONEY SENDED-->

<tr>
<td>

 
<h5><strong><?=date(\" d\", strtotime(\$row->date)); ?></strong></h5>
<h5> <strong><?=date(\"M\", strtotime(\$row->date)); ?></strong></h5>
</td>
<td> 
<h4><?=user_helper(\$row->id_to); ?></h4> 
    
      <!-- IF DISPUTE -->
 <?php if (\$row->dispute==1) { ?>
   

<h4 class=\"text-danger\">   <?=number_format(\$row->moneysend,2) ; ?>  <?=currency_helper(\$row->id_currency);?> </h4>
</td>
<td> 
 <h5>Enviado <br> ( Pago Retenido)</h5>

 <?php }else{ ?>
       <!--ELSE-->
<h4> <?=number_format(\$row->moneysend,2) ; ?>  <?=currency_helper(\$row->id_currency);?></h4>
</td>
<td> 
<h5>Enviado</h5>

<?php }?>






        </td>       
        </tr>

<td colspan=\"5\"><h4>Informacion Adicional</h4>
<ul>       
<li><p><strong>Id Transaccion:</strong> <?=\$row->id_track ;?></p></li>
<li><p><strong>estado:</strong> <?= state_helper(\$row->state) ;?>   </p></li>

<li><p><strong>Hora:</strong> <?=date(\" h:i a \", strtotime(\$row->date)); ?></p></li>

<li><p><strong>Fecha:</strong> <?=date(\" d/m/Y  \", strtotime(\$row->date)); ?></p></li>
       
<li><p><strong>Metodo de pago:</strong> <?=method_helper(\$row->id_paymethod) ;?>   </p></li>
          

<li><p><strong>Monto total:</strong> <?=currency_helper(\$row->id_currency);?> 
<?=number_format(\$row->moneysend,2) ; ?></p></li>

<li><li><a href=\"<?=site_url(\"myaccount/payment/report\");?>/<?=\$row->id ;?>\">
Reportar este pago</a></li> </p></li>
</ul>
</td>


<!--/.MONEY SENDED-->


<?php } ?>


<?php endforeach; ?>


<?php } ?>

</tbody>
</table>

<p><i class=\"glyphicon glyphicon-chevron-left\"></i><?=anchor('/myaccount/history','Ver Todo'); ?></p>

</div>
 


 <?php if (\$this->config->item('show_history_login_in_home', 'login_security')) {?>

<!--=========== End Show history user===========-->

   <div class=\"col-md-12 well white\">


   <h3>Historial de acceso</h3>

  <table class=\"table\">

    <thead>
      <tr>
        <th>Date</th>
      <!--  <th>Event</th>-->
        <th>Browser</th>
         <th>Ip address</th>
         <th>Location</th>

      </tr>
    </thead>
    <tbody>
    <?php foreach (\$activity as \$r): ?> 
      <tr>
        <td>
          <?=date(\" h:ia\", strtotime(\$row->date)); ?>
          <br>
          <?=date(\" d/m/Y  \", strtotime(\$row->date)); ?>
          
        </td>
        <td>Logueado</td>

        <td>Chrome</td>

         <td> 
         182.256.12.1

        </td>

        <td>
         Republica
          <br>
          Dominicana
        </td>
      </tr>

       <?php endforeach; ?>
    </tbody>

   
    
  </table>
  
  <hr> <!--LINE HERE-->
<p><i class=\"glyphicon glyphicon-chevron-left\"> </i> 
<?= anchor('/myaccount/Activity_record/', 'Ver Todo'); ?> </p>

    </div>
  <?php } ?>







</div>
</div>
</div>


<?php 
/* Fin del archivo home.php */
/* Ubicación: ./application/view/myaccount/home.php*/
?>


", "/twig/myaccount/home.twig", "C:\\xampp\\htdocs\\3pago\\application\\views\\twig\\myaccount\\home.twig");
    }
}
