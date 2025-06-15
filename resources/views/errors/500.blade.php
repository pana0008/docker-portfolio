<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>505 | Internal Server Error</title>

    {{-- Compiled assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


<!-- Header with image -->
<div class="header">
    <div class="container">
        <p class="error-header">Internal Server Error</p>
        <h2>5 0 0</h2>
        <p class="map-text">
            The forest tangled our path.<br>
            <span class="map-subtext">But fear not, every journey has a way back.</span>
        </p>
    </div>
</div>

<div class="border"></div>

<!-- Content Section -->
<div class="content">
    <p>This detour is on us — something went wrong on our side, and the trail ahead is blocked.
        <br>We’re working to clear the forest so your journey can continue soon.</p>

    <div>
        <p>Try coming to this path again later.</p>
    </div>

    <p>Let’s get you back to the main path:</p>
    <div class="home-button"><a href="/" class="button">Home Page</a></div>

    <p class="note">
        We’re patching things up. If you’re still stuck later,
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
