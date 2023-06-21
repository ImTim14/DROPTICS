@extends('templates.dashboard')

@section('title', trans('Upload fișier') )

@section('content')
    @parent
    <div class="ui segment white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <H3>Încadrează talonul conform exemplului de mai jos:</H3>
                            <img src="{{ asset('storage/images/' . 'CI_model.png') }}" class="ui image" style="border: 2px solid red;">
                            <form method="POST" action="{{ route('ocr') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group d-flex justify-content-center">
                                    <input type="file" name="file" id="file" class="form-control-file" style="display: none">
                                    <label for="file" class="ui labeled icon button primary mr-2">
                                        <i class="ion-ios-plus-outline icon"></i>
                                        Selectare fișier
                                    </label>
                                    <button type="submit" class="ui labeled icon button positive">
                                        <i class="ion-ios-checkmark-outline icon"></i>
                                        Upload
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

