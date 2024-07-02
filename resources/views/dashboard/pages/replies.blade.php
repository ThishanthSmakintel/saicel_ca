@extends('dashboard.default')

@section('title', 'Message Replies')

@section('dashboardContent')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <p>Replies for Message from {{ $message->name }}</p>
                    <p><strong>Email:</strong> {{ $message->email }}</p>
                    <p><strong>Subject:</strong> {{ $message->subject }}</p>
                    <p><strong>Service:</strong> {{ $message->serviceName }}</p>
                    <p><strong>Message:</strong> {{ $message->message }}</p>
                    <p><strong>Sent At:</strong> {{ $message->created_at->format('d M Y, H:i:s') }}</p>

                    <h2>
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#repliesSection" aria-expanded="true" aria-controls="repliesSection">
                            Show/Hide Replies
                        </button>
                    </h2>

                    <div id="repliesSection" class="collapse show">
                        @if ($message->replies->isEmpty())
                            <div class="alert alert-info">
                                There are no replies for this message.
                            </div>
                        @else
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Reply Message</th>
                                        <th>Sent At</th>
                                        <th>Status</th>
                                        <th>Email Sent</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($message->replies as $reply)
                                        <tr>
                                            <td>{!! $reply->message !!}</td>
                                            <td>{{ $reply->created_at->format('d M Y, H:i:s') }}</td>
                                            <td>
                                                <span class="badge badge-primary">{{ ucfirst($reply->status) }}</span>
                                            </td>
                                            <td>
                                                @if ($reply->email_sent)
                                                    <span class="badge badge-success">Sent</span>
                                                @else
                                                    <span class="badge badge-secondary">Not Sent</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>

                    <!-- Reply Form -->
                    <div class="mt-4">
                        <form id="reply-form" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Reply Message:</label>
                                <textarea class="form-control mt-3" id="message-text" name="reply_message" rows="4"></textarea>
                            </div>
                            <div class="form-group" style="margin-top: 15px;">
                                <label for="status-select" class="col-form-label">Change Status:</label>
                                <select class="form-control mt-3" id="status-select" name="status">
                                    <option value="processing">Processing</option>
                                    <option value="answered">Answered</option>
                                    <option value="pending">Pending</option>
                                    <option value="completed">Completed</option>
                                    <option value="closed">Closed</option>
                                </select>
                            </div>
                            <input type="hidden" name="message_id" id="message-id" value="{{ $message->id }}">
                            <button type="button" id="send-reply" class="btn btn-primary">Send Reply</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
