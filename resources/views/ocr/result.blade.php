@extends('templates.dashboard')

@section('title', trans('Rezultat Scanare'))

@section('content')
    @parent
    <div class="ui segment white">
        <form action="{{ route('ocrstore') }}" method="POST">
            @csrf
            <table class="ui celled striped table center aligned" style="table-layout: fixed;">
                <thead>
                <tr>
                    <th>Pagina 1</th>
                    <th>Rezultatul scanării</th>
                    <th>Pagina 2</th>
                    <th>Rezultatul scanării</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>Nr. înmatriculare:</th>
                    <td><label>
                            <input name="nr_inmat" type="text" value="{!! $licensePlateNumber !!}">
                        </label></td>
                    <th>Data primei înmatriculări:</th>
                    <td><label>
                            <input name="first_reg" type="text" value="{!! $firstRegistration !!}">
                        </label></td>
                </tr>
                <tr>
                    <th>Tip vehicul:</th>
                    <td><label>
                            <input name="vehType" type="text" value="{!! $vehicleType !!}">
                        </label></td>
                    <th>Masă maximă autorizată:</th>
                    <td><label>
                            <input name="max_mass" type="text" value="{!! $maximumMass !!}">
                        </label></td>
                </tr>
                <tr>
                    <th>Marca auto:</th>
                    <td><label>
                            <input name="vehMake" type="text" value="{!! $vehicleMake !!}">
                        </label></td>
                    <th>Capacitate cilindrică:</th>
                    <td><label>
                            <input name="cc" type="text" value="{!! $cylinderCapacity !!}">
                        </label></td>
                </tr>
                <tr>
                    <th>Model:</th>
                    <td><label>
                            <input name="vehModel" type="text" value="{!! $vehicleModel !!}">
                        </label></td>
                    <th>Kw:</th>
                    <td><label>
                            <input name="kw" type="text" value="{!! $kilowatts !!}">
                        </label></td>
                </tr>
                <tr>
                    <th>Serie Șasiu:</th>
                    <td><label>
                            <input name="ss" type="text" value="{!! $vinSeries !!}">
                        </label></td>
                    <th>Combustibil:</th>
                    <td><label>
                            <input name="combust_type" type="text" value="{!! $combustible !!}">
                        </label></td>
                </tr>
                <tr>
                    <th>Nume:</th>
                    <td><label>
                            <input name="lastN" type="text" value="{!! $lastName !!}">
                        </label></td>
                    <th>Număr de locuri:</th>
                    <td><label>
                            <input name="seats" type="text" value="{!! $numberSeats !!}">
                        </label></td>
                </tr>
                <tr>
                    <th>Prenume:</th>
                    <td><label>
                            <input name="firstN" type="text" value="{!! $firstName !!}">
                        </label></td>
                    <th>Serie CIV:</th>
                    <td><label>
                            <input name="reg_series" type="text" value="{!! $registrationSeries !!}">
                        </label></td>
                </tr>
                <tr>
                    <th>Adresă:</th>
                    <td><label>
                            <input name="ownerAdd" type="text" value="{!! $ownerAddress !!}">
                        </label>
                    <td rowspan="4" colspan="2"><H3>{{ trans('ocr.input.label.civscan') }}</H3></td>
                </tr>
                <tr>
                    <th>Nume:</th>
                    <td><label>
                            <input name="lastN2" type="text" value="{!! $lastName2 !!}">
                        </label>
                    </td>
                </tr>
                <tr>
                    <th>Prenume:</th>
                    <td><label>
                            <input name="firstN2" type="text" value="{!! $firstName2 !!}">
                        </label></td>
                </tr>
                <tr>
                    <th>Adresă:</th>
                    <td><label>
                            <input name="ownerAdd2" type="text" value="{!! $ownerAddress2 !!}">
                        </label></td>
                </tr>
            </table>
            <br>
            <button type="submit" class="ui right floated labeled icon button positive">
                <i class="ion-ios-checkmark-outline icon"></i>
                Salvează
            </button>
            <button type="button" id="showScannedData" class="ui labeled icon button primary mr-2">Arată datele scanate
                <i class="ion-ios-plus-outline icon"></i>
            </button>
            <table id="ocrDataTable" class="ui celled striped table center aligned" style="display: none;">
                <thead>
                <tr>
                    <th>OCR data pagina 1</th>
                    <th>OCR data pagina 2</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{!! $OCR_Data !!}</td>
                    <td>{!! $OCR_Data2 !!}</td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection

@section('page_scripts')
    <script type="text/javascript">
        (function($insura, $) {
            $(document).ready(function() {
                $insura.helpers.initModal('div.modal', true);
                $insura.helpers.initDropdown('div.dropdown, select.dropdown');
                $insura.helpers.listenForChats();
                $insura.helpers.requireDropdownFields('form div.required select');
                $("#showScannedData").click(function(){
                    $("#ocrDataTable").toggle();
                });
            });
        })(window.insura, window.jQuery);
    </script>
@endsection