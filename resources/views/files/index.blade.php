@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Files</div>

                <div class="panel-body">
                    @if (count($files))
                        @foreach ($files as $file)
                            @include ('files.file')
                        @endforeach
                    @else
                        <p>You have not uploaded any files just yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
