<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Vender-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Concessionária</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Datatable css -->
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css"/>
</head>
<body>
    <div class="alert alert-success alert-dismissible fade show position-absolute" style="top:20px;left:15px;z-index:2001;" id="alerta" role="alert">
        <strong>Carro Removido!</strong> O carro foi removido da sala com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="d-flex justify-content-center align-items-center ml" style="width: 100vw; height: 100vh;">
    <div class="d-flex justify-content-center align-items-center" style="width: 100vw; height: 100vh;">
        <div class="container justify-content-center" style="width:790px;">
            <?php $i=0; ?>
            @foreach($carros as $carro)
            <div id="{{$i}}" style="background-color:rgb(0,0,255);" class="Sala{{$i}} div-pai"><strong id="num" style="font-size:20px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color:white;">{{ $carro }}</strong></div>
            <?php $i=$i+1; ?>
            @endforeach
        </div>
    </div>

    

    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

    <script>
        $('#alerta').hide();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.div-pai').on('click', function(){
            $.ajax({
                url:"{{ route('salas.carros') }}",
                type: "GET",
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'sala': $(this).attr('id')
                },
                dataType: "html",
                success: function(response){
                    $('.ml').append(response);
                    $('.container').hide();
                }
            })
        });
    </script>

    <!-- Datatable js -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.colVis.min.js"></script>

<script>
    var settings1 = 
    {
    
        lengthMenu: [
            [5, 5, 5, -1],
            [5, 5, 5, 'All'],
        ] ,
        scrollX: true,
        select: {
            style: 'single',
        },
        language: {
            sEmptyTable: "Nenhum registro encontrado",
            sInfo: "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            sInfoEmpty: "Mostrando 0 até 0 de 0 registros",
            sInfoFiltered: "(Filtrados de _MAX_ registros)",
            sInfoPostFix: "",
            sInfoThousands: ".",
            sLengthMenu: "_MENU_ resultados por página",
            sLoadingRecords: "Carregando...",
            sProcessing: "Processando...",
            sSearch: "Pesquisar",
            sZeroRecords: "Nenhum registro encontrado",
            oPaginate: {
                sNext: "Próximo",
                sPrevious: "Anterior",
                sFirst: "Primeiro",
                sLast: "Último"
            },
            oAria: {
                sSortAscending: ": Ordenar colunas de forma ascendente",
                sSortDescending: ": Ordenar colunas de forma descendente"
            },
            select: {
                rows: {
                    _: "%d linhas selecionadas",
                    0: "Nenhuma linha selecionada",
                    1: "1 linha selecionada"
                }
            },
            buttons: {
                copy: "Copiar",
                colvis: "Colunas",
                collection: "Coleção",
                info: "Info",
                print: "Imprimir",
                pdf: "PDF",
                excel: "Excel"
            }
        },
        dom: 'Bfrtip',
        buttons: [{
            extend: 'pdfHtml5',
            exportOptions: {
                columns: ':visible'
            },
            customize: function(doc) {
                doc.pageMargins = [ 10, 10, 10, 10 ]
                doc.defaultStyle.alignment = 'center';
            }
        },
        {
            extend: 'excel',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'copy',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'print',
            exportOptions: {
                columns: ':visible'
            }
        }]
    } 
    
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>