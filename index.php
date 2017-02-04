<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Menu Maker - Lic. Daniel E. Rivera Ayala</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://use.fontawesome.com/d9308c50ab.js"></script>
        <script>
            var itemCount = 0;
            $(document).ready(function () {
                function insertCode() {
                    $("#preview > nav").attr("id", $("#idMenu").val());
                    $(".navbar-brand").text($("#brand").val());
                    $(".navbar-brand").attr("href", $("#brandURL").val());
                    $("#insertCode").text($("#preview").html());
                }
                setInterval(insertCode, 100);

            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1>Bootstrap Menu Maker</h1>
            </div>

            <!--            VISTA PREVIA-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-eye" aria-hidden="true"></i> <b>VISTA PREVIA</b>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div id="alertInfo1" class="alert hide alert-warning" style="text-align: center;">
                                <b><i class="fa fa-2x fa-long-arrow-up" aria-hidden="true"></i> 
                                    EL MENU SE HA FIJADO EN LA PARTE SUPERIOR DE LA PÁGINA 
                                    <i class="fa fa-2x fa-long-arrow-up" aria-hidden="true"></i></b>
                                <hr>
                                <p>ADVERTENCIA</p>
                                <p>Debido a los estilos aplicados, 
                                    la barra de navegación fija puede tapar los 
                                    contenidos que se encuentran en la parte superior 
                                    de la página. Para evitarlo, 
                                    añade un padding en la parte superior 
                                    del elemento <code>body</code>. 
                                    Como por defecto la barra de navegación tiene una 
                                    altura de 50px, este es el estilo recomendado por defecto:</p>
                                <p><code>body { padding-top: 70px; }</code></p>
                                <p>No olvides incluir este estilo <b>después</b> de todos los estilos de Bootstrap 3.</p>
                            </div>
                            <div id="alertInfo2" class="alert hide alert-warning" style="text-align: center">
                                <b><i class="fa fa-2x fa-long-arrow-down" aria-hidden="true"></i> 
                                    EL MENU SE HA FIJADO EN LA PARTE INFERIOR DE LA PÁGINA 
                                    <i class="fa fa-2x fa-long-arrow-down" aria-hidden="true"></i></b>
                                <hr>
                                <p>ADVERTENCIA</p>
                                <p>Debido a los estilos aplicados, la barra de navegación fija puede tapar los contenidos que se encuentran en la parte inferior de la página. Para evitarlo, añade un padding en la parte inferior del elemento <code>body</code>. Como por defecto la barra de navegación tiene una altura de 50px, este es el estilo recomendado por defecto:</p>
                                <p><code>body { padding-bottom: 70px; }</code></p>
                                <p>No olvides incluir este estilo <b>después</b> de todos los estilos de Bootstrap 3.</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-12" id="preview">
                                    <nav class="navbar navbar-default" role="navigation">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                    data-target=".navbar-ex1-collapse">
                                                <span class="sr-only">Desplegar navegación</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#" target="_blank">BRAND</a>
                                        </div>
                                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                                            <ul class="nav navbar-nav" id="itemMenuAdd">
                                                <li class="active"><a href="#">Enlace #1</a></li>
                                                <li><a href="#">Enlace #2</a></li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        Menú #1 <b class="caret"></b>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Acción #1</a></li>
                                                        <li><a href="#">Acción #2</a></li>
                                                        <li><a href="#">Acción #3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Acción #4</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Acción #5</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--ELEMENTOS-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-sliders" aria-hidden="true"></i> <b>HERRAMIENTAS DE CREACIÓN</b></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="well">
                                        <div class="input-group">
                                            <span class="input-group-addon">ID: </span>
                                            <input id="idMenu" type="text" class="form-control" placeholder="" value="mi_menu">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="well">
                                        <b>ESTILO DEL MENU:</b>
                                        <select class="form-control" onchange="
                                                $('#preview > nav')
                                                        .removeClass('navbar-fixed-top navbar-fixed-bottom navbar-static-top')
                                                        .addClass($(this).val());
                                                $('#preview > nav')
                                                        .effect('highlight', 500)
                                                        .effect('highlight', 500)
                                                if ($(this).val() === 'navbar-fixed-top') {
                                                    $('body').css({'padding-top': '70px', 'padding-bottom': '0px'});
                                                    $('#alertInfo1').removeClass('hide');
                                                    $('#alertInfo2').addClass('hide');
                                                } else if ($(this).val() === 'navbar-fixed-bottom') {
                                                    $('body').css({'padding-top': '0px', 'padding-bottom': '70px'});
                                                    $('#alertInfo2').removeClass('hide');
                                                    $('#alertInfo1').addClass('hide');
                                                } else if ($(this).val() === 'navbar-static-top' || $(this).val() === '') {
                                                    $('body').css({'padding-top': '0px', 'padding-bottom': '0px'});
                                                    $('#alertInfo1').addClass('hide');
                                                    $('#alertInfo2').addClass('hide');
                                                }
                                                ">
                                            <option value="">[default]</option>
                                            <option value="navbar-fixed-top">FIJA EN LA PARTE SUPERIOR DE LA PÁGINA</option>
                                            <option value="navbar-fixed-bottom">FIJA EN LA PARTE INFERIOR DE LA PÁGINA</option>
                                            <option value="navbar-static-top">ESTATICA EN LA PARTE SUPERIOR DE LA PÁGINA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="well">
                                        <div class="input-group">
                                            <span class="input-group-addon">BRAND URL: </span>
                                            <input id="brandURL" type="text" class="form-control" placeholder="" value="#">
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input checked="" onchange="
                                                            if ($(this).prop('checked')) {
                                                                $('.navbar-brand').attr('target', '_blank');
                                                            } else {
                                                                $('.navbar-brand').attr('target', '');
                                                                $('#alertBrand').modal();
                                                            }
                                                           " type="checkbox"> ¿Abrir en nueva ventana?
                                                    <div id="alertBrand" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                                        <div class="modal-dialog modal-sm" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div class="alert alert-warning">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        <h4 class="modal-title" id="gridSystemModalLabel">PRECAUCIÓN</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="alert alert-warning">Al deshabilitar esta funcion el link del BRAND abrira el enlace en esta misma pÁgina</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="well">
                                        <div class="input-group">
                                            <span class="input-group-addon">BRAND: </span>
                                            <input id="brand" type="text" class="form-control" placeholder="" value="BRAND">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="well">
                                        <b>TEMA OSCURO:</b>
                                        <div class="btn-group">
                                            <button onclick="$('#preview > nav').toggleClass('navbar-inverse'), $(this).toggleClass('active')" id="" type="button" class="btn btn-default"><i class="fa fa-paint-brush" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="well">

                                        <button onclick="
                                                window.open('movil.php', 'movilView', 'width=380,height=480,resizable=no,menubar=no,directories=no,status=no,titlebar=no,toolbar=no');
                                                "
                                                id="smartphoneView" type="button" class="btn btn-default btn-block"><i class="fa fa-mobile" aria-hidden="true" title="VISTA MOVIL"></i> <b>Vista Responsive</b></button>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="well">
                                        <b>ALINEACIÓN: </b>
                                        <select class="form-control" onchange="
                                                $('#itemMenuAdd').removeClass('navbar-right');
                                                if ($(this).val() === 'navbar-right') {
                                                    $('#itemMenuAdd').addClass($(this).val());
                                                }

                                                ">
                                            <option>IZQUIERDA</option>
                                            <option value="navbar-right">DERECHA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-cubes" aria-hidden="true"></i> ELEMENTOS</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-12 center-block" >
                                                    <div class="btn-group btn-group-lg">
                                                        <button type="button" class="addItem btn btn-success" data-toggle="modal" data-target=".addBtn"><i class="fa fa-plus-circle" aria-hidden="true"></i> BOTON</button>
                                                        <button type="button" class="addItem btn btn-success" data-toggle="modal" data-target=".addLink"><i class="fa fa-plus-circle" aria-hidden="true"></i> ENLACE</button>
                                                        <button type="button" class="addItem btn btn-success" data-toggle="modal" data-target=".addBtn"><i class="fa fa-plus-circle" aria-hidden="true"></i> MENU</button>
                                                        <button type="button" class="addItem btn btn-success" data-toggle="modal" data-target=".addBtn"><i class="fa fa-plus-circle" aria-hidden="true"></i> FORMULARIO</button>
                                                        <button type="button" class="addItem btn btn-success" data-toggle="modal" data-target=".addText"><i class="fa fa-plus-circle" aria-hidden="true"></i> TEXTO</button>
                                                        <button type="button" class="addItem btn btn-success" data-toggle="modal" data-target=".addBtn"><i class="fa fa-plus-circle" aria-hidden="true"></i> LINK</button>
                                                    </div>
                                                    <div class="modal fade addBtn" tabindex="-1" role="dialog" aria-labelledby="">
                                                        <div class="modal-dialog modal-sm" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="text-align: center">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        AGREGAR BOTÓN
                                                                    </h4>
                                                                    <div class="modal-body">
                                                                        <form class="form-horizontal" role="form">
                                                                            <div class="form-group">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">*Etiqueta: </span>
                                                                                    <input type="text" id="labelBtnAdd" class="form-control" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">*ID: </span>
                                                                                    <input id="idBtnAdd" type="text" class="form-control" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban" aria-hidden="true"></i> Cancelar</button>
                                                                        <button type="button" class="btn btn-primary" onclick="
                                                                                if ($('#labelBtnAdd').val() !== '' && $('#idBtnAdd').val() !== '') {
                                                                                    itemCount++;
                                                                                    var newItem = $('<li>').addClass('list-group-item').attr('id', 'item' + itemCount);
                                                                                    $(newItem)
                                                                                            .append($('<h4>')
                                                                                                    .addClass('list-group-item-heading')
                                                                                                    .append($('<b>')
                                                                                                            .text('BOTÓN')))
                                                                                            .append('<hr>')
                                                                                            .append($('<p>')
                                                                                                    .addClass('list-group-item-text')
                                                                                                    .append($('<b>')
                                                                                                            .text('ETIQUETA: '))
                                                                                                    .append($('<input>')
                                                                                                            .attr('value', $('#labelBtnAdd')
                                                                                                                    .val())))
                                                                                            .append($('<p>')
                                                                                                    .addClass('list-group-item-text')
                                                                                                    .append($('<b>')
                                                                                                            .text('ID: '))
                                                                                                    .append($('<input>')
                                                                                                            .attr('value', $('#idBtnAdd')
                                                                                                                    .val()))
                                                                                                    );
                                                                                    $('#items')
                                                                                            .append(newItem);
                                                                                    $('#itemMenuAdd')
                                                                                            .append($('<button>')
                                                                                                    .addClass('btn btn-default navbar-btn')
                                                                                                    .text($('#labelBtnAdd')
                                                                                                            .val())
                                                                                                    .attr('id', $('#idBtnAdd')
                                                                                                            .val()));
                                                                                    $('.addBtn')
                                                                                            .modal('hide');
                                                                                }
                                                                                "><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade addLink" tabindex="-1" role="dialog" aria-labelledby="">
                                                        <div class="modal-dialog modal-sm" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="text-align: center">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        AGREGAR ENLACE
                                                                    </h4>
                                                                    <div class="modal-body">
                                                                        <form class="form-horizontal" role="form">
                                                                            <div class="form-group">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">Etiqueta</span>
                                                                                    <input type="text" class="form-control" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">Link</span>
                                                                                    <input type="text" class="form-control" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="checkbox">
                                                                                    <label>
                                                                                        <input type="checkbox"> ¿Abrir en nueva ventana?
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban" aria-hidden="true"></i> Cancelar</button>
                                                                        <button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade addText" tabindex="-1" role="dialog" aria-labelledby="">
                                                        <div class="modal-dialog modal-sm" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="text-align: center">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        AGREGAR TEXTO
                                                                    </h4>
                                                                    <div class="modal-body">
                                                                        <form class="form-horizontal" role="form">
                                                                            <div class="form-group">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">Texto</span>
                                                                                    <input type="text" class="form-control" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban" aria-hidden="true"></i> Cancelar</button>
                                                                        <button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <ul class="list-group" id="items">
                                                        <li class="list-group-item">
                                                            <h4 class="list-group-item-heading"><b>TITULO:</b> <input type="text" value="ENLACE #1" onkeypress="$(this).prev('a').text('asd')" /></h4>
                                                            <p class="list-group-item-text"><b>LINK:</b> <input type="text" value="#" /></p>
                                                            <hr>
                                                            <button type="button" class="btn btn-danger"><i class="fa fa-minus-circle" aria-hidden="true"></i> ELIMINAR</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-code" aria-hidden="true"></i> <b>CODIGO HTML</b></h3>
                        </div>
                        <div class="panel-body">
                            <div class="well">
                                <button type="button" class="btn btn-success btn-lg btn-block"><i class="fa fa-code" aria-hidden="true"></i> <b class="">GENERAR/ACTUALIZAR CODIGO HTML</b> <i class="fa fa-code" aria-hidden="true"></i></button>
                                <pre id="insertCode"></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
