<div class="temporary position-absolute" style="width:800px;">
    <div class="card h-100" style="width: 100%;z-index:2000 !important;">
        <div class="card-body">
            <h1>Venda</h1>
            <select name="cliente" id="" class="form-control w-100">
                @foreach($clientes as $cliente)
                <option value="{{ $cliente->id  }}">{{ $cliente->name }}</option>
                @endforeach
            </select>

            <div class="d-flex justify-content-between">
                <button class="btn btn-danger venda close">Venda</button>
            </div>

            <div class="d-flex justify-content-between">
                <button class="btn btn-danger close">Fechar</button>
            </div>
        </div>
    </div>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.remover-carro').on('click', function(){
            $.ajax({
                url:"{{ route('remover.carro') }}",
                type: "POST",
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': $(this).attr('id')
                },
                dataType: "html",
                success: function(response){
                    $('#alerta').show();
                }
            })
        });
    </script>
    
    <script>
        $('.close').on('click', function(){
            $('.temporary').remove();
            $('.container').show();
        })
        

        $('.remover-carro').on('click', function(){
            $(this).closest('tr').remove();
        })
    </script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready( function () {
            $('#carros').DataTable(settings1);
        });
    </script>
</div>