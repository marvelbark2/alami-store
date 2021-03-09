@extends('layouts.app')
@section('title', __( 'report.tax_report' ))

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>@lang( 'report.tax_report' )
        <small>@lang( 'report.tax_report_msg' )</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-3 col-md-offset-7 col-xs-6">
            <div class="input-group">
                <span class="input-group-addon bg-light-blue"><i class="fa fa-map-marker"></i></span>
                 <select class="form-control select2" id="tax_report_location_filter">
                    @foreach($business_locations as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-2 col-xs-6">
            <div class="form-group">
                <div class="input-group pull-right">
                  <button type="button" class="btn btn-primary" id="tax_report_date_filter">
                    <span>
                      <i class="fa fa-calendar"></i> {{ __('messages.filter_by_date') }}
                    </span>
                    <i class="fa fa-caret-down"></i>
                  </button>
                </div>
              </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ __('report.input_tax') }} @show_tooltip(__('tooltip.input_tax'))</h3>
                </div>

                <div class="box-body">
                    <div class="input_tax">
                        <i class="fa fa-refresh fa-spin fa-fw"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ __('report.output_tax') }} @show_tooltip(__('tooltip.output_tax'))</h3>
                </div>

                <div class="box-body">
                    <div class="output_tax">
                        <i class="fa fa-refresh fa-spin fa-fw"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ __('report.tax_overall') }} @show_tooltip(__('tooltip.tax_overall'))</h3>
                </div>

                <div class="box-body">

                    <h3 class="text-muted">
                        {{ __('lang_v1.output_tax_minus_input_tax') }}: 
                        <span class="tax_diff">
                            <i class="fa fa-refresh fa-spin fa-fw"></i>
                        </span>
                    </h3>

                </div>
            </div>
        </div>
    </div>
	

</section>
<!-- /.content -->
@stop
@section('javascript')
<script src="{{ asset('js/report.js?v=' . $asset_v) }}"></script>

@endsection