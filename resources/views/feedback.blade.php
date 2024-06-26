<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>8186 - Product Market Fit</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}">

    <!-- Scripts -->
    <script src="{{ asset("/js/app.js") }}"></script>
</head>
<body class="antialiased">
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="modal">
    <h2 class="modal_title">Tennis Enthusiast Survey</h2>
    <form action="{{ route('feedback.store') }}" method="POST">
        @csrf
        <div class="input_box">
            <div class="form_section">
                <h3>First Name</h3>
                <input name="first_name" placeholder="Type..." required>
            </div>
            <div class="form_section">
                <h3>Last Name</h3>
                <input name="last_name" placeholder="Type..." required>
            </div>
            <div class="form_section">
                <h3>Email</h3>
                <input name="email" placeholder="Type..." required>
            </div>
        </div>
        <div class="input_box_1">
            <div class="form_section">
                <h3>Sport type</h3>
                <select name="sport_type">
                    <option value="tennis">Tennis</option>
                    <option value="football">Football</option>
                    <option value="golf">Golf</option>
                </select>
            </div>
            <div class="form_section">
                <h3>Type</h3>
                <div style="margin-bottom: 10px">
                    <input type="radio" id="player" name="user_type" value="player" required>
                    <label for="player">Player</label>
                </div>
                <div style="margin-bottom: 10px">
                    <input type="radio" id="trainer" name="user_type" value="trainer" required>
                    <label for="trainer">Trainer</label>
                </div>
            </div>
        </div>
        <div class="form_section">
            <h3><span>1.</span> How would you feel if you could no longer use Serve Club?</h3>
            <div style="margin-bottom: 10px">
                <input type="radio" id="daily" name="question_one" value="very-disappointed" required>
                <label for="daily">Very disappointed</label>
            </div>
            <div style="margin-bottom: 10px">
                <input type="radio" id="3-4" name="question_one" value="somewhat-disappointed" required>
                <label for="3-4">Somewhat disappointed</label>
            </div>
            <div style="margin-bottom: 10px">
                <input type="radio" id="1-2" name="question_one" value="not-disappointed" required>
                <label for="1-2">Not disappointed</label>
            </div>
            <input type="radio" id="week" name="question_one" value="no-longer-use" required>
            <label for="week">No longer use</label>
        </div>
        <div class="form_section">
            <h3><span>2.</span> What type of people do you think would most benefit from Serve Club?</h3>
            <textarea name="question_two" placeholder="Type..." required></textarea>
        </div>
        <div class="form_section">
            <h3><span>3.</span> What is the main benefit you receive from Serve club?</h3>
            <textarea name="question_three" placeholder="Type..." required></textarea>
        </div>
        <div class="form_section">
            <h3><span>4.</span> How can we improve Serve Club for you?</h3>
            <textarea name="question_four" placeholder="Type..." required></textarea>
        </div>
        <div class="form_section" style="text-align: right">
            <button type="submit" class="modal_btn" disabled>Submit</button>
        </div>
    </form>
</div>
</body>
</html>
