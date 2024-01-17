@extends("admin.dashboard")
@section("main")
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="media mb-5">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <img class="img-thumbnail" src="{{asset("assets/hamid_.jpg")}}" alt="image">
                            </div>
                            <div class="col-md-12 col-lg-6 mt-3">
                                <div class="media-body">
                                    <h4 class="mb-3">{{$user->title}}</h4>
                                    {{$user->description}}
                                    <br>
                                    <hr>

                                    <div class="row">
                                        <div class="col-3">Nom : </div>
                                        <div class="col-9">{{$user->name}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Téléphone : </div>
                                        <div class="col-9">{{$user->phone}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Email : </div>
                                        <div class="col-9">{{$user->email}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Adresse : </div>
                                        <div class="col-9">{{$user->address}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Ville : </div>
                                        <div class="col-9">{{$user->city}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Pays : </div>
                                        <div class="col-9">{{$user->country}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Code postale : </div>
                                        <div class="col-9">{{$user->zip_code}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Mobilité : </div>
                                        <div class="col-9">{{$user->mobility}}</div>
                                    </div>
                                    <div class="row mt-5 justify-content-center">
                                        <a href="{{route("admin.profile.edit")}}" class="btn btn-primary" >Modifier</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
