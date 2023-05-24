<div class="temporary position-absolute">
    <div class="card h-100" style="width: 100%;z-index:2000 !important;">
        <div class="card-body">
            <h5 class="card-title">Carros Disponíveis</h5>
            <table id="carros" class="display" style="width:100%;">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th></th>
                    </tr>
                </thead>
                @foreach($carros as $carro)
                <tr>
                    <td>{{ $carro->Carro->Nome }}</td>
                    <td>{{ $carro->Carro->Valor }}</td>
                    <td><button class="btn btn-danger">Remover Carro</button></td>
                </tr>
                @endforeach
        </table>
            <div class="d-flex justify-content-between">
                <button class="btn btn-success">Adicionar Carro</button>
                <button class="btn btn-danger close">Fechar</button>
            </div>
        </div>
    </div>
    
    <script>
    $('.close').on('click', function(){
        $('.temporary').remove();
        $('.container').show();
    })
    </script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready( function () {
            $('#carros').DataTable(settings1);
        });
    </script>
</div>