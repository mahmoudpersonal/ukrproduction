@extends('cms.layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
@endpush
@section('content')
    @csrf
    <div class="container-fluid mt--6">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header" >
                        <h3 class="mb-0" style="float: left">{{ strtoupper($page_name) }}</h3>
                        <div style="float: right" ><a href="{{ route($page_name.'.create') }}"><i class="fa fa-plus"></i></a></div>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-buttons1">
                            <thead class="thead-light">
                            <tr>
                                @foreach($fields['table_header'] as $header)
                                    <th>{{ strtoupper($header) }}</th>
                                @endforeach
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fields['model'] as $model)
                                <tr>
                                    @foreach($fields['attributes'] as $attribute)
                                        @if(!isset($attribute['reference']))
                                            @if(!isset($attribute['array_of_field_key']))
                                                <td>{{ $model->{$attribute['field']} }}</td>
                                            @else
                                                <td>{{ $attribute['array_of_field_key'][$model->{$attribute['field']}] }}</td>
                                            @endif
                                        @else
                                            @foreach($attribute['reference'] as $reference)
                                                @php
                                                    if(!isset($temp))
                                                        $temp = $model->$reference;
                                                    else
                                                        $temp = $temp->$reference;
                                                @endphp
                                            @endforeach
                                            @if(!isset($attribute['array_of_field_key']))
                                                <td>{{ $temp }}</td>
                                            @else
                                                <td>{{ $attribute['array_of_field_key'][$temp] }}</td>
                                            @endif
                                            @php unset($temp) @endphp
                                        @endif
                                    @endforeach
                                    <td class="table-actions" style="width: 10%;">
                                        <a href="{{ route($page_name.'.edit',$model->id) }}" class="table-action"
                                           data-toggle="tooltip"
                                           data-original-title="Edit">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <a href="" data-route="{{ route($page_name.'.destroy', $model->id) }}"
                                           class="table-action table-action-delete" data-toggle="tooltip"
                                           data-original-title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
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
@push('js')
    <script src="{{ asset('vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
    <script>
        $(function () {
            DatatableButtons = function () {
                var e, a = $("#datatable-buttons1");
                a.length && (e = {
                    // lengthChange: !1,
                    // select: {style: "multi"},
                    dom: "lBfrtip",
                    lengthMenu: [10, 25, 50, 75, 100],
                    buttons: ["copy", "print"],
                    language: {
                        paginate: {
                            previous: "<i class='fas fa-angle-left'>",
                            next: "<i class='fas fa-angle-right'>"
                        }
                    }
                }, a.on("init.dt", function () {
                    $(".dt-buttons .btn").removeClass("btn-secondary").addClass("btn-sm btn-default")
                }).DataTable(e))
            }();

            $('.table-action-delete').on('click', function (e) {
                e.preventDefault();
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover again !",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (!willDelete) {
                        return false;
                    } else {
                        let row = $(this).parent().parent();
                        $.ajax({
                            url: $(this).data('route'),
                            type: 'post',
                            dataType: 'json',
                            data: {_method: 'DELETE', _token: $('input[name="_token"]').val()},
                            success: function () {
                                row.remove();
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
