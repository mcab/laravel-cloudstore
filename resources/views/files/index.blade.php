@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Uploaded Files</div>
                <div class="panel-body">
                    @if (count($files))
                    <table class="table">
                        <thead>
                            <tr>
                                <th>File Name</th>
                                <th>File Description</th>
                                <th>Date Uploaded</th>
                                <th>Download</th>
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
