@extends('shop/main')
@section('content')
<div class="container">
    <div class="form-group">
        <div class="col-md-7 mb-5"  data-aos="fade">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Kategorijos</th>
                    <th scope="col">Veiksmai</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->title}}</td>
                        <td><a href="/delcat/{{$category->id}}" class="btn btn-primary py-2 px-4 text-white btn-danger center">Trinti</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row form-group">
                <div class="col-md-12">
                    <a href="/addcat" class="btn btn-primary py-2 px-4 text-white">Prideti</a>
                </div>
            </div>
            <br>
        </div>
        </div>
    </div>
</div>
@stop