@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creation Nouveau questionnaire</div>

                <div class="card-body">

                    <form action="/questionnaires" method="post">
                        @csrf
                        <div class="form-group">
                            <label for=title">Titre</label>
                            <input name="title" type="text" class="form-control" id=title" aria-describedby="titleHelp" placeholder="Entrer un Titre">
                            <small id="titleHelp" class="form-text text-muted">Donnez à votre questionnaire un titre qui attire l'attention.</small>
                          </div>

                          <div class="form-group">
                            <label for=purpose">L'objet</label>
                            <input name="purpose" type="text" class="form-control" id=purpose" aria-describedby="purposeHelp" placeholder="Entrer un objet">
                            <small id="purposeHelp" class="form-text text-muted">donner un l'objet a la question.</small>
                          </div>
                          <button type="submit" class="btn btn-primary">Creation Question</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
