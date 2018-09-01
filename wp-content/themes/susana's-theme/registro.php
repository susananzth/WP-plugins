
<?php
/*
template name: registro-accinista
*/

    include('wc-location.php');
    include('wclocation1.php');


    get_header(); 
    $fivesdrafts = $wpdb->get_results("SELECT * FROM wpdq_tiposaccionistas;");
 
  
    $pd = WC_Geolocation::geolocate_ip();
    global $WOOCS;
    if (isset($pd['country']) AND ! empty($pd['country'])) {
        //do smth here if user is from Spain, for example change currency to EUR
        echo $pd['country'];
    }
    
    
    $conpaises = $wpdb->get_results("SELECT * FROM `Paises`;");
    
    $conpais = $wpdb->get_row("SELECT * FROM `Paises` where Codigo = '".$pd['country']."';");

    $cod3Pais = $wpdb->get_row("SELECT iso3_pais FROM `paises_codigo` where iso2_pais = '".$conpais->Codigo."'");
    
    $conciudades = $wpdb->get_results("SELECT * FROM `Ciudad` WHERE PaisCodigo = '".$cod3Pais."'");
 
 ?>
     <div class="container clearfix">
        <div class="inner-container clearfix">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <article id="post-7" class="post-7 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="woocommerce">
                                <form name="registro-accionista" method="post" class="checkout woocommerce-checkout" action="https://winistoshare.com/wp-content/themes/twentyseventeen/template-parts/registro.php" enctype="multipart/form-data">
                                    <div class="col2-set" id="customer_details">
                                        <div class="col-1">
                                            <div class="woocommerce-billing-fields">
                                                <h3>REGISTRO DE ACCIONISTAS</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                    <p class="form-row form-row-first" id="billing_first_name_field" data-priority=""><label for="billing_first_name" class="">Nombres&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder=""  value="" autocomplete="Nombres" required="required" /></span></p>



            <p class="form-row form-row-last" id="billing_last_name_field" data-priority="1"><label for="billing_last_name" class="">Apellidos&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder=""  value="" autocomplete="Apellido" required="required" /></span></p>

            <p class="form-row form-row-wide" id="billing_fechaing" data-priority="2"><label for="billing_fechaing" class="">Fecha&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="date" class="input-text " name="billing_fechaing" id="billing_fechaing" placeholder=""  value="" autocomplete="fecha ingreso" required="required"  /></span></p>



            <p class="form-row form-row-wide" id="billing_company_field" data-priority="2"><label for="billing_company" class="">Cedula de Identificacion&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder=""  value="" autocomplete="identificacion" required="required"/></span></p>




            <p class="form-row form-row-wide" id="billing_country_field" data-priority="3"><label for="billing_country" class="">Country&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper">
                <select name="billing_country" id="billing_country" class="input-text" autocomplete="country" style="width: 100% !important; ">
                            <option value="<?php echo $conpais->Codigo ?>"><?php echo $conpais->Pais ?></option>
                            <?php
                            foreach ($conpaises as $conpaise) 
                            {
                            ?>
                            <option value="<?php echo $conpaise->Codigo; ?>" > <?php echo $conpaise->Pais ?> </option>
                            <?php
                            }
                            ?>


           </select></span></p>



            <p class="form-row form-row-wide" id="billing_state_field" data-priority="7"><label for="billing_state" class="">State / County&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper">
                <select name="billing_state" id="billing_state" class="state_select " autocomplete="address-level1" data-placeholder="" style="width: 100% !important; ">

                            <option value="">Select a state&hellip;</option>
                            <?php
                            foreach ($conciudades as $conciudad) 
                            {
                            ?>
                            <option value="<?php echo $conciudad->idCiudades; ?>" > <?php echo $conciudad->Ciudad ?> </option>
                            <?php
                            }
                            ?>
                            </select></span></p>

            <p class="form-row form-row-wide address-field" id="billing_city_field" data-priority="6"><label for="billing_city" class="">Town / City&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_city" id="billing_city" placeholder=""  value="" autocomplete="address-level2" required="required"/></span></p>



            <p class="form-row form-row-wide address-field" id="billing_address_1_field" data-priority="4"><label for="billing_address_1" class="">Street address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="House number and street name" autocomplete="" required="required" /></span></p>










                            <p class="form-row form-row-wide address-field" id="billing_postcode_field" data-priority="8"><label for="billing_celular" class="">Celular&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_celular" id="billing_celular" placeholder=""  value="" autocomplete="postal-code" required="required" /></span> <a><div  >validar</div></a></p>



                            <p class="form-row form-row-wide" id="billing_email_field" data-priority=""><label for="billing_email" class="">Email&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_email" id="billing_email" placeholder="Email" required="required"/></span></p>	


                            <p class="form-row form-row-wide address-field" id="billing_invita" data-priority="8"><label for="billing_invita" class="">Usuario Invita&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_invita" id="billing_invita" autocomplete="Sponsor" required="required" /></span></p>

                            <p class="form-row form-row-wide address-field" id="billing_accion" data-priority="7"><label for="billing_accion" class="">Accion&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><select name="billing_accion" id="billing_accion" class="state_select " autocomplete="" data-placeholder="" style="width: 100% !important; "><option value="">Select tipo de accion&hellip;</option>

                            <?php
                            foreach ( $fivesdrafts as $fivesdraft ) 
                            {
                            ?>
                            <option value="<?php echo $fivesdraft->id_tiposaccionistas; ?>" > <?php echo $fivesdraft->nom_tiposaccionistas; ?> </option>

                            <?php
                            }
                            ?>
                            </select></span></p>


                            <p class="form-row form-row-wide address-field" id="img_up" data-priority="8"><label for="img_up" class="">Voucher&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="file" class="input-text " name="img_up" id="img_up" required="required" /></span></p>





                            </div>

        </div>


                </div>
            </div>




        <div class="woocommerce-checkout-review-order">
            <div class="woocommerce-checkout-payment">
                    <div class="form-row place-order">
                    <center><button type="submit" class="button alt" style="float: none !important;" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Registrar</button></center>
                </div>
            </div>
        </div>


    </form>

    </div>	
    </article>
    </main>
    </div>
    </div>
    </div>

<?php get_footer();