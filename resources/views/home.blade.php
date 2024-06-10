@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h3 class="mt-4">{{ __('Feedback') }}</h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Question 1</th>
                                    <th>Question 2</th>
                                    <th>Question 3</th>
                                    <th>Question 4</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($feedbacks as $feedback)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $feedback->question_one }}</td>
                                        <td>{{ $feedback->question_two }}</td>
                                        <td>{{ $feedback->question_three }}</td>
                                        <td>{{ $feedback->question_four }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
