@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Basic Forms</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-round-controls">Edit Method Shipping</h4>
                            </div>
                            @include('dashboard.includes.alerts.success')
                            @include('dashboard.includes.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form"
                                          action="{{ route('update.shipping.methods' , ['id' => $shippingMethod->id]) }}"
                                          method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="complaintinput1">Name</label>
                                                <input type="text" id="complaintinput1" class="form-control round"
                                                       value="{{ $shippingMethod->value }}"
                                                       name="value">
                                                @error('value')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="complaintinput4">Method Cost</label>
                                                <input type="number" id="complaintinput4" class="form-control round"
                                                       value="{{ $shippingMethod->plain_value }}"
                                                       name="plain_value">
                                                @error('plain_value')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            {{--                                            <div class="form-group">--}}
                                            {{--                                                <fieldset class="checkboxsas">--}}
                                            {{--                                                    <label>--}}
                                            {{--                                                        <input type="checkbox" value=""> I am unchecked Checkbox--}}
                                            {{--                                                    </label>--}}
                                            {{--                                                </fieldset>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
