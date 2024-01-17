@extends("admin.dashboard")

@section("main")
    <div class="col-12">
        <div class="card mt-5">
            <div class="card-body">
                <div class="row alert">
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="alert alert-danger">{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                </div>
                <h4 class="header-title">{{$user->name}}</h4>
                <form class="needs-validation" method="post" action="{{route("admin.profile.update")}}" novalidate="">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label class="required" for="Téléphone">Téléphone</label>
                            <input type="text" class="form-control" id="Téléphone" name="phone" placeholder="Téléphone" value="{{$user->phone}}" >
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="required" for="title">Titre</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{$user->title}}" >
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="required" for="mobility">Mobilité</label>
                            <input type="text" class="form-control" id="mobility" name="mobility" placeholder="mobility" value="{{$user->mobility}}" >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label class="required" for="address">Adresse</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="address" value="{{$user->address}}" >
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="required" for="city">Ville</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="city" value="{{$user->city}}" >
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="required" for="mobility">Pays</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="country" value="{{$user->country}}" >
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="required" for="mobility">Code postale</label>
                            <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="zip_code" value="{{$user->zip_code}}" >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label class="required" for="description">Description</label>
                            <textarea type="text" rows="5" class="form-control" id="description" name="description" placeholder="description" >{{$user->description}}</textarea>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
@endsection
