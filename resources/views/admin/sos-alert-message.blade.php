@extends('layouts.admin.admin')
@section('title',"Sos Alert Message")

@section('content')
<div class="pagetitle">
    <h1>Sos Alert Message</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route("dashboard") }}">Home</a></li>
            <li class="breadcrumb-item active">Sos Alert Message</li>
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
                                <th scope="col">User Name</th>
                                <th scope="col">User Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Is Readed?</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($sosAlertMessage))
                                @forelse ($sosAlertMessage as $index => $message)
                                    <tr class="alert-row-{{ $message->id }}">
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $message?->user?->name }}</td>
                                        <td>{{ $message?->user?->email }}</td>
                                        <td>{{ $message?->message??"N/A" }}</td>
                                        <td>{{ $message?->is_readed?"Yes":"No" }}</td>
                                        <td>{{ date("Y-m-d h:i A",strtotime($message?->created_at)) }}</td>
                                        <td>
                                            @if (!$message?->is_readed)
                                                <a href="{{ route("sos-alert-message-read",['id'=>$message?->id]) }}" class="btn btn-sm btn-primary">Mark as Read</a>
                                            @else
                                                <a href="{{ route("sos-alert-message-unread",['id'=>$message?->id]) }}" class="btn btn-sm btn-warning">Mark as UnRead</a>
                                            @endif
                                        </td>
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

@section('scripts')

    <script>
        let alertIds = [];
        function findNewAlerts(){
            $.ajax("{{ route('sos-alert-message') }}",{
                type:"GET"
            })
            .done(res=>{
                if(res?.length > 0){
                    showAlerts(res)
                }
            })
        }
        setInterval(() => {
           findNewAlerts()
        }, 2000);
        function showAlerts(alerts){
            if(typeof alerts !== "undefined"){
                if($.isArray(alerts) && alerts.length > 0){
                    $.each(alerts,function(index,alert){
                        if(alert.is_readed == 0 && !alertIds.includes(alert.id)){
                            const options = {
                                body: alert.message,
                                icon:"/assets/images/redlight-logo.png",
                                data:{
                                    id:alert.id
                                }
                            }
                            alertIds.push(alert.id);
                            const notification = new Notification("SOS Alert From: "+ (alert?.user?.name??"N/A"),options);
                            notification.onclick = (event) => {
                                event.preventDefault(); // prevent the browser from focusing the Notification's tab
                                const id = event?.target?.data?.id;
                                $(".highlight-alert").removeClass("highlight-alert");
                                if(id){
                                    $(`tr.alert-row-${id}`).addClass("highlight-alert");
                                }
                            };
                        }
                    })
                }
            }
        }
        function notifyMe() {
            if (!("Notification" in window)) {
                // Check if the browser supports notifications
                alert("This browser does not support desktop notification");
            } else if (Notification.permission === "granted") {
                // Check whether notification permissions have already been granted;
                // if so, create a notification
                showAlerts();
                // …
            } else if (Notification.permission !== "denied") {
                // We need to ask the user for permission
                Notification.requestPermission().then((permission) => {
                    // If the user accepts, let's create a notification
                    if (permission === "granted") {
                        showAlerts();
                    }
                });
            }
            // At last, if the user has denied notifications, and you
            // want to be respectful there is no need to bother them anymore.
        }
        notifyMe();
    </script>
@endsection
