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
    <div class="modal">
    <h2 class="modal_title">Tennis Enthusiast Survey</h2>
    <form action="">
        <div class="form_section">
            <h3>
                <span>1.</span> How often do you play tennis in a typical week?
            </h3>

            <div style="margin-bottom: 10px">
                <input type="radio" id="daily" name="one" value="daily" required/>
                <label for="daily">Daily</label>
            </div>

            <div style="margin-bottom: 10px">
                <input type="radio" id="3-4" name="one" value="3-4" required/>
                <label for="3-4">3-4 times a week</label>
            </div>

            <div style="margin-bottom: 10px">
                <input type="radio" id="1-2" name="one" value="1-2" required/>
                <label for="1-2">1-2 times a week</label>
            </div>

            <input
                type="radio"
                id="week"
                name="one"
                value="Less than once a week"
                required
            />
            <label for="week">Less than once a week</label>
        </div>
        <div class="form_section">
            <h3><span>2.</span> Tell about your motivation for Playing Tennis</h3>
            <textarea name="two" placeholder="Type... " required></textarea>
        </div>
        <div class="form_section">
            <h3><span>3.</span> What is your favorite Tennis Brand and why?</h3>
            <textarea name="three" placeholder="Type... " required></textarea>
        </div>
        <div class="form_section">
            <h3>
                <span>4.</span> If you participate in Tournaments, please tell about
                experience.
            </h3>
            <textarea name="four" placeholder="Type... " required></textarea>
        </div>
        <div class="form_section" style="text-align: right">
            <button type="submit" class="modal_btn" disabled>Submit</button>
        </div>
    </form>
</div>
</body>
</html>
