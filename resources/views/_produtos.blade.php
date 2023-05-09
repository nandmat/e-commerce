<div class="row">
@foreach ($data as $value )
<div class="col-3 mb-3 d-flex align-items-stretch">
    <div class="card">
        <img class="card-img-top" src="{{ asset($value->foto) }}" alt="">
        <div class="card-body">
            <h6 class="card-title">{{ $value->nome }} - R$ {{ $value->valor }}</h6>
            <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
        </div>
    </div>
</div>
@endforeach
</div>
