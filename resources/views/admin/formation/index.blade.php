@extends("admin.dashboard")

@section("main")
    <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title d-inline">Formations</h4>
                <span class="float-right mb-3"><a href="{{route("admin.formation.create")}}" class="btn btn-primary">Ajouter une nouvelle</a></span>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table table-striped text-center">
                            <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Institution</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Date du début</th>
                                    <th scope="col">Date de fin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($formations as $item)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->institution}}</td>
                                        <td>{{$item->city}}</td>
                                        <td>{{$item->country}}</td>
                                        <td>{{$item->start_date}}</td>
                                        <td>{{$item->end_date}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
