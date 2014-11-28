<?php include_once('topo.php'); ?>
<!-- headerbar -->

<div class="pageheader">
    <h2><i class="fa fa-edit"></i> Usuários  </h2>

    <!--
<div class="breadcrumb-wrapper">
<span class="label">You are here:</span>
<ol class="breadcrumb">
<li><a href="index.html">Bracket</a></li>
<li><a href="general-forms.html">Forms</a></li>
<li class="active">General Forms</li>
</ol>
</div>
-->
</div>


<div class="contentpanel">

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-btns">
                <a href="#" class="panel-close">&times;</a>
                <a href="#" class="minimize">&minus;</a>
            </div>
            <h4 class="panel-title">Usuários</h4>
            <!-- <p>B <code>.form-control</code> are set to width: 100%; by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>-->
        </div>
        <div class="panel-body panel-body-nopadding">

            <form class="form-horizontal form-bordered">
                
              
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nome</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="Digite o nome" title="Digite o nome" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" />
                    </div>
                </div>
                
                 <div class="form-group">
                    <label class="col-sm-3 control-label">E-mail</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="Digite seu e-mail" title="Digite seu e-mail" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" />
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">Senha</label>
                    <div class="col-sm-6">
                        <input type="password" placeholder="Digite sua senha" title="Digite sua senha" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Acesso</label>
                    <div class="col-sm-5">
                        <select class="form-control chosen-select" data-placeholder="Selecione a categoria pai...">
                            <option value=""></option>                         
                            <option value="Botswana">Admin</option>                         
                            <option value="Brazil">Funcionario</option>                 
                        </select>
                    </div>
                </div>



            </form>

        </div><!-- panel-body -->

        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <button class="btn btn-primary">Cadastrar</button>&nbsp;
                    <button class="btn btn-default">Cancelar</button>
                </div>
            </div>
        </div><!-- panel-footer -->

    </div><!-- panel -->



    </section>




<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui-1.10.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script src="js/jquery.autogrow-textarea.js"></script>
<script src="js/bootstrap-fileupload.min.js"></script>
<script src="js/bootstrap-timepicker.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/jquery.tagsinput.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/chosen.jquery.min.js"></script>
<script src="js/dropzone.min.js"></script>
<script src="js/colorpicker.js"></script>


<script src="js/custom.js"></script>

<script>
    jQuery(document).ready(function(){

        // Chosen Select
        jQuery(".chosen-select").chosen({'width':'100%','white-space':'nowrap'});

        // Tags Input
        jQuery('#tags').tagsInput({width:'auto'});

        // Textarea Autogrow
        jQuery('#autoResizeTA').autogrow();



        // Date Picker
        jQuery('#datepicker').datepicker();

        jQuery('#datepicker-inline').datepicker();

        jQuery('#datepicker-multiple').datepicker({
            numberOfMonths: 3,
            showButtonPanel: true
        });

        // Spinner
        var spinner = jQuery('#spinner').spinner();
        spinner.spinner('value', 0);

        // Input Masks
        jQuery("#date").mask("99/99/9999");
        jQuery("#phone").mask("(999) 999-9999");
        jQuery("#ssn").mask("999-99-9999");

        // Time Picker
        jQuery('#timepicker').timepicker({defaultTIme: false});
        jQuery('#timepicker2').timepicker({showMeridian: false});
        jQuery('#timepicker3').timepicker({minuteStep: 15});


    });
</script>


</body>
</html>
