<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>404 | Page Not Found</title>

    {{-- Compiled assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


<!-- Header with image -->
<div class="header">
    <div class="container">
        <p class="error-header">Page Not Found</p>
        <h2>4 0 4</h2>
        <p class="map-text">
            The map ends here.<br>
            <span class="map-subtext">But fear not, every journey has a way back.</span>
        </p>
    </div>
</div>

<div class="border"></div>

<!-- Content Section -->
<div class="content">
    <p>The page you’re looking for may have been moved,<br>renamed, or never existed.</p>

    <div>
        <p><strong>Why does the map show nothing here:</strong></p>
        <p>You may have followed an old link, mistyped the path, or<br>arrived at a page that has been lost to time.</p>
    </div>

    <p>Let’s get you back to the main path:</p>
    <div class="home-button"><a href="/" class="button">Home Page</a></div>

    <p class="note">
        If you believe this page belongs on the map,
        <a href="#" id="openModal">send us a note.</a>
    </p>
</div>


<div id="modal" class="modal hidden">
    <div class="modal-content">
        <span class="close-button" id="closeModal">&times;</span>
        <h2>Report an issue</h2>
        <form>
            <label for="message">Your message:</label><br>
            <textarea id="message" rows="5" cols="40"></textarea><br>
            <div style="display: flex; justify-content: center; gap: 1rem;">
                <button type="button" id="cancelModal" class="cancel-button">Cancel</button>
                <button type="submit" >Submit</button>
            </div>

        </form>
    </div>
</div>

<script>
    document.getElementById("openModal").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("modal").classList.remove("hidden");
    });

    document.getElementById("closeModal").addEventListener("click", function() {
        document.getElementById("modal").classList.add("hidden");
    });

    document.getElementById("cancelModal").addEventListener("click", function() {
        document.getElementById("modal").classList.add("hidden");
    });

    window.addEventListener("click", function(event) {
        const modal = document.getElementById("modal");
        if (event.target === modal) {
            modal.classList.add("hidden");
        }
    });
</script>

</body>

</html>
