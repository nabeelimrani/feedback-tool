@extends('components.layouts.main')

@section('main-section')
    @push('title')
        <title>View Feedback - Feedback Tool</title>
    @endpush
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Feedback Show</h1>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex justify-content-between align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('feedback.show') }}">Feedback</a></li>
                            </ol>
                            <a href="{{ route('feedback') }}" class="btn btn-info">Add Feedback</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (isset($feedback))
                            @foreach ($feedback as $feedbackdata)
                                <div class="card mb-3">
                                    <div class="card-header">
                                        Feedback by {{ $feedbackdata->user_name }}
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $feedbackdata->title }}</h5>
                                        <p class="card-text">{{ $feedbackdata->description }}</p>
                                        <p class="card-text"><strong>Category:</strong> {{ $feedbackdata->category }}</p>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <button class="btn btn-secondary btn-sm" data-toggle="modal"
                                            data-target="#detailModal{{ $feedbackdata->id }}">Detail</button>
                                    </div>

                                    <!-- Comment Section -->
                                    <!-- Comments Section -->
                                    <ul class="list-group">
                                        @foreach ($feedbackdata->comments as $comment)
                                            <li class="list-group-item">
                                                {{ $comment->user->name }}:

                                                @if ($comment->mentioned_user_id)
                                                    <span
                                                        class="badge badge-info">{{ $comment->mentionedUser->name }}</span>
                                                @endif

                                                {{ $comment->body }}
                                            </li>
                                        @endforeach
                                    </ul>

                                    <!-- Comment Form -->
                                    <form method="post" action="{{ route('feedback.comment.store', $feedbackdata->id) }}"
                                        class="mt-3">
                                        @csrf
                                        <div class="form-group">
                                            <textarea name="body" class="form-control" rows="3" placeholder="Add a comment" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Comment</button>
                                    </form>

                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>

        @if (isset($feedback))
            <div class="float-right align-right mr-3 p-2">
                {{ $feedback->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("#alert").animate({
                    opacity: 0,
                    height: 0,
                    padding: 0
                }, 1000, function() {
                    $(this).hide();
                });
            }, 1000);
        });
    </script>
@endsection
