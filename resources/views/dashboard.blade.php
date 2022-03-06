@extends('layouts.admin')
@section('web-heading')
<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Dashboard</h1>
</div>
@endsection

@section("main-content")
<div class="container mt-5">
    <form action="" method="post">
        <div class="row">
        @csrf
        <div class="col-auto">
            <input type='text' class="form-control datetimepicker" placeholder="Start Date" name="start_date" id="datepicker" value="{{ old('start_date') }}"/>

            @error('start_date')
                <p class="error-message">
                    {{$message}}
                </p>
            @enderror
        </div>
        <div class="col-auto">
            <input type='text' class="form-control datetimepicker" placeholder="End Date" name="end_date" value="{{ old('end_date') }}"/>
            @error('end_date')
                <p class="error-message">
                    {{$message}}
                </p>
            @enderror
        </div>
        <div class="col-auto">
            <input type="submit" class="btn btn-primary" name="submit">
        </div>
        <div class="col-auto">
            <a class="btn btn-primary" href="{{url('admin/dashboard')}}" onclick='document.getElementById("resetForm").submit();'>Reset</a>
        </div>
        </div>

    </form>
    <div class="row">
        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Partner Name</th>
                    <th>Api Request</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($partners) && count($partners)>0)
                    @foreach ($partners as $key => $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ @$item->name ? $item->name : $item->userInfo->name }}</td>
                            <td>{{ $item->api_request }}</td>
                        </tr>  
                    @endforeach
                @else
                        <tr>
                            <td colspan="100%" style="text-align: center">No Data Found</td>
                        </tr>
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <th>Total Request:-</th>
                    <td></td>
                    <td colspan="100%"><b>{{$total_request}}</b></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection

@section("custom-script")
    <script type="text/javascript">
        // $( function() {
        //     $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
        // } );
        $('.datetimepicker').datetimepicker({
        format: 'Y-m-d H:m:s',
        // inline: true
    });
    </script>
@endsection