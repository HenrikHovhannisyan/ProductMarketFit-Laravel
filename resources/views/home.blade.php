@extends('layouts.app')

@section('content')
    <div class="container-fluid">
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

                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <h3 class="mt-4">{{ __('Feedback') }}</h3>

                        <form method="GET" action="{{ route('feedback.index') }}" class="mb-4">
                            <div class="row">
                                <div class="col col-md-4">
                                    <select name="sport_type" class="form-control">
                                        <option value="">{{ __('Select Sport Type') }}</option>
                                        <option value="tennis" {{ request('sport_type') == 'tennis' ? 'selected' : '' }}>Tennis</option>
                                        <option value="football" {{ request('sport_type') == 'football' ? 'selected' : '' }}>Football</option>
                                        <option value="golf" {{ request('sport_type') == 'golf' ? 'selected' : '' }}>Golf</option>
                                    </select>
                                </div>
                                <div class="col col-md-4">
                                    <select name="user_type" class="form-control">
                                        <option value="">{{ __('Select User Type') }}</option>
                                        <option value="player" {{ request('user_type') == 'player' ? 'selected' : '' }}>Player</option>
                                        <option value="trainer" {{ request('user_type') == 'trainer' ? 'selected' : '' }}>Trainer</option>
                                    </select>
                                </div>
                                <div class="col col-md-4">
                                    <button type="submit" class="btn btn-outline-success">{{ __('Filter') }}</button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Sport type</th>
                                    <th>User type</th>
                                    <th>1. How would you feel if you could no longer use Serve Club?</th>
                                    <th>2. What type of people do you think would most benefit from Serve Club?</th>
                                    <th>3. What is the main benefit you receive from Serve club?</th>
                                    <th>4. How can we improve Serve Club for you?</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($feedbacks as $feedback)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $feedback->first_name }}</td>
                                        <td>{{ $feedback->last_name }}</td>
                                        <td>{{ $feedback->email }}</td>
                                        <td>{{ $feedback->sport_type }}</td>
                                        <td>{{ $feedback->user_type }}</td>
                                        <td>{{ $feedback->question_one }}</td>
                                        <td>{{ $feedback->question_two }}</td>
                                        <td>{{ $feedback->question_three }}</td>
                                        <td>{{ $feedback->question_four }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center">
                            {{ $feedbacks->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
