@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">قائمة الفواتير</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    @foreach ($invoices as $invoices)
                        تفاصيل الفاتورة رقم : {{ $invoices->invoice_number }}
                </span>
                @endforeach

            </div>
        </div>

    </div>
    <!-- breadcrumb -->
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">

        <!--div-->
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap"
                            data-page-length='50'style="text-align: center">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">رقم الفاتورة</th>
                                    <th class="border-bottom-0">المنتج</th>
                                    <th class="border-bottom-0">القسم</th>
                                    <th class="border-bottom-0">الحالة</th>
                                    <th class="border-bottom-0">ملاحظات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $invoices->invoice_number }}</td>
                                    <td>{{ $invoices->product }}</td>
                                    <td>{{ $invoices->section->section_name }}</td>
                                    <td>

                                        @if ($invoices->Value_Status == 1)
                                            <span class="badge badge-pill badge-success">{{ $invoices->Status }}</span>
                                        @elseif($invoices->Value_Status == 2)
                                            <span class="badge badge-pill badge-danger">{{ $invoices->Status }}</span>
                                        @else
                                            <span class="badge badge-pill badge-warning">{{ $invoices->Status }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $invoices->note }}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->



    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
@endsection
