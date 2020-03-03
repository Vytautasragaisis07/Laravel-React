@extends('shop/main')
@section('content')
    <div class="container">


        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/storeproduct" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5"  data-aos="fade">

                    <h2 class="mb-5 text-black">Pridėkite skelbimą</h2>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="title">Pavadinimas</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="title">Kategorija</label>
                            <select class="form-control" name="catid">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>

                        </div>

                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-area" for="subject">Aprašymas</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Kiekis</label>
                            <input type="number" id="quantity" name="quantity" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Kaina</label>
                            <input type="number" id="price" name="price" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Pridėti paveikslėlį</label>
                            <input type="file" id="img" name="img" class="form-control">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Pridėti" class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>




@stop
