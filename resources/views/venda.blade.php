<div class="temporary position-absolute" style="width:800px;">
    <div class="card h-100" style="width: 100%;z-index:2000 !important;">
        <div class="card-body">
            <h1>Venda</h1>
            <form action="{{  route('remover.carro') }}" method="POST">
                {{ csrf_field() }}
            <select name="cliente" id="cliente" class="form-control w-100">
                @foreach($clientes as $cliente)
                <option value="{{ $cliente->id  }}">{{ $cliente->name }}</option>
                @endforeach
            </select>

            <div class="m-2 p-2">
                <div class="d-flex w-100">
                    <p><strong>Marca:</strong></p><p class="ml-1 mb-1">{{ $carro_sala->Carro->Nome }}</p>
                </div>
                <div class="d-flex w-100">
                    <p><strong>Modelo:</strong></p><p class="ml-1 mb-1">{{ $carro_sala->Carro->Modelo }}</p>
                </div>
                <div class="d-flex">
                    <p><strong>Valor:</strong></p><p class="ml-1 mb-1">{{ $carro_sala->Carro->Valor }}</p>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                    
                    <input type="text" name="id" value="{{ $carro_sala->id }}" hidden>
                    <button class="btn btn-danger" type="submit">Venda</button>
                </form>
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