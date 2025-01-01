{{-- resources/views/licenses/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Licenses</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>License Key</th>
                                <th>User</th>
                                <th>Status</th>
                                <th>Expires At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($licenses as $license)
                                <tr>
                                    <td>{{ $license->license_key }}</td>
                                    <td>{{ $license->user_id }}</td>
                                    <td>{{ $license->status }}</td>
                                    <td>{{ $license->expires_at->format('Y-m-d') }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $licenses->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection