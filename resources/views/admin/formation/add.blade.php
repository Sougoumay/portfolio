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
                <h4 class="header-title">Ajouter une formation</h4>
                <form class="needs-validation" method="post" action="{{route("admin.formation.store")}}" novalidate="">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 col-lg-6 mb-3">
                            <label class="required" for="title">Titre</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="title" value="" >
                        </div>
                        <div class="col-md-12 col-lg-6 mb-3">
                            <label class="required" for="institution">Institution</label>
                            <input type="text" class="form-control" id="institution" name="institution" placeholder="institution" value="" >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 col-lg-3 mb-3">
                            <label class="required" for="city">Ville</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="city" value="" >
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3">
                            <label class="required" for="country">Pays</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="country" value="" >
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3">
                            <label for="start_date" class="col-form-label">Date du début</label>
                            <input class="form-control" type="text" value="" name="start_date" id="start_date" placeholder="start date">
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3">
                            <label for="end_date" class="col-form-label">Month</label>
                            <input class="form-control" type="text" value="" name="end_date" id="end_date" placeholder="end date">
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
