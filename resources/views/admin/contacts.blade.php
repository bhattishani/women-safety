@extends('layouts.admin.admin')
@section('title',"Contacts")

@section('content')
<div class="pagetitle">
    <h1>Contacts</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route("dashboard") }}">Home</a></li>
            <li class="breadcrumb-item active">Contacts</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- Table with hoverable rows -->
                    <table class="table table-hover my-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">subject</th>
                                <th scope="col">message</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($contacts))
                                @forelse ($contacts as $index => $contact)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $contact?->name }}</td>
                                        <td>{{ $contact?->email }}</td>
                                        <td>{{ $contact?->subject }}</td>
                                        <td>{{ $contact?->message }}</td>
                                        <td>{{ date("Y-m-d h:i A",strtotime($contact?->created_at)) }}</td>
                                    </tr>
                                @empty

                                @endforelse
                            @endif
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->

                </div>
            </div>

        </div>
    </div>
</section>


@endsection
