@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-1">
                        <i class="pe-7s-users"></i>
                    </div>

                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-text"><span class="count">00</span></div>
                            <div class="stat-heading">Users</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-2">
                        <i class="pe-7s-cart"></i>
                    </div>
                    @php
                        $totalBan=App\Models\Banner::where('ban_status',0)->count();
                    @endphp
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-text"><span class="count">{{$totalBan}}</span></div>
                            <div class="stat-heading">Banner</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-4">
                        <i class="pe-7s-users"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-text"><span class="count">2986</span></div>
                            <div class="stat-heading">Test</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body"><a href="{{url('admin/recycle/contact')}}">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-3">
                        <i class="pe-7s-browser"></i>
                    </div>
                    @php
                        $totalCM=App\Models\Contactus::where('conus_status',0)->count();
                    @endphp
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-text"><span class="count">{{$totalCM}}</span></div>
                            <div class="stat-heading">Contact Message</div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 home_page_content">

    </div>
</div>
@endsection
