@extends('layouts.admin')

@section('content')

    <div class="col-12">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <form method="POST" action="{{ route('admin.dishes.store') }}" enctype="multipart/form-data">
            @csrf

            {{-- * NOME PIATTO --}}
            <div class="form-group my-2">
                <label class="fs-3 fw-semibold" for="name">Nome Piatto</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Inserire Nome Piatto">
            </div>

            {{-- * PREZZO PIATTO --}}
            <div class="form-group my-2">
                <label class="fs-3 fw-semibold" for="name">Prezzo Piatto</label>
                <input type="number" step=".01" class="form-control" name="price" id="price"
                    placeholder="Inserire Prezzo Piatto">
            </div>

            {{-- * INGREDIENTI --}}
            <div class="form-group my-2">
                <label class="fs-3 fw-semibold" for="name">Ingredienti</label>
                <textarea class="form-control" name="ingredients" id="ingredients" placeholder="Inserire Ingredienti"></textarea>
            </div>

            <div class="form-group my-2">
                <label class="fs-3 fw-semibold" for="name">Descrizione</label>
                <textarea class="form-control" name="description" id="description" placeholder="Inserire Descrizione"></textarea>
            </div>

            {{-- * VISIBILITA' --}}
            <div class="col-5">
                <label class="fs-3 control-label my-2 fw-semibold">Visibile</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="visible" id="visible">
                    <label class="form-check-label" for="visible">
                      Si
                    </label>
                  </div>
            </div>

            {{-- * VEGANO' --}}
            <div class="col-5">
                <label class="fs-3 control-label my-2 fw-semibold">Vegetariano</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="vegetarian" id="vegetarian">
                    <label class="form-check-label" for="vegetarian">
                      Si
                    </label>
                  </div>
            </div>

            {{-- * VEGETARIANO' --}}
            <div class="col-5">
                <label class="fs-3 control-label my-2 fw-semibold">Vegano</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="vegan" id="vegan">
                    <label class="form-check-label" for="vegan">
                      Si
                    </label>
                  </div>
            </div>
            {{-- * IMMAGINE --}}

            <div class="mb-3">
                <label for="image_path" class="form-label my-2 fw-bold">Immagine del piatto</label>
                <input class="form-control" type="file" id="image_path" name="image_path">
            </div>

            <button type="submit" class="btn btn-success">Salva</button>
        </form>
    </div>

    <!-- Javascript Requirements -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\StoreDishRequest') !!}
@endsection
