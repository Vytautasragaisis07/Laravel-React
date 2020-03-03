@extends('shop/main')
@section('content')
<div class="container">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/storecat">
        @csrf
        <div class="form-group">
                <div class="col-md-7 mb-5"  data-aos="fade">
                    <h3 class="page-title">Pridėkite kategoriją</h3>


                    <div class="row form-group">

                        <div class="col-md-12">

                            <span class="text-uppercase page-subtitle">Pavadinimas</span>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary py-2 px-4 text-white">Saugoti</button>
                        </div>
                    </div>
                </div>
            </div>

    </form>
</div>
@stop