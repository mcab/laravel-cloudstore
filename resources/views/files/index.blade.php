@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Uploaded Files</div>
                <div class="panel-body">
                    @if (count($files))
                    <table class="table table-hover table-nowrap">
                        <thead>
                            <tr>
                                <th class="col-sm-3">File Name</th>
                                <th class="col-sm-6">File Description</th>
                                <th class="col-sm-2">Uploaded</th>
                                <th class="col-sm-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                                @include ('files.file')
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p>You have not uploaded any files just yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
