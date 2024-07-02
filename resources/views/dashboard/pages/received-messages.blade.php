@extends('dashboard.default')

@section('title', 'Saicel Dashboard')

@section('dashboardContent')
<div class="content">
    <div class="container-fluid">
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Received Messages</h1>

            <!-- Include DataTables CSS -->
            <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

            <style>
                .card {
                    margin-top: 20px; /* Adjust margin top as needed */
                }
            </style>

            <table id="messagesTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Service</th>
                        <th>Message</th>
                        <th>Sent At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->subject }}</td>
                            <td>{{ $message->serviceName }}</td>
                            <td>{{ $message->message }}</td>
                            <td>{{ $message->created_at->format('d M Y, H:i:s') }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('message.replies', $message->id) }}">
                                    Reply
                                </a>
                                <button type="button" class="btn btn-outline-secondary btn-sm">Block User</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Delete User</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#messagesTable').DataTable();
    });
</script>
@endsection
