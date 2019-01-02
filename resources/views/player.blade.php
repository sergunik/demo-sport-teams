@extends('base')

@section('body')
    <div class="flex-center" style="display: block">
        <div class="text-center">
            @if($data)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->first_name }}</td>
                    <td>{{ $row->last_name }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td>{{ $row->updated_at }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
@endsection