<x-layout.main>
    <x-slot:title>Profile Page</x-slot:title>
    <div class="my-info">
        <div class="portrait-photo">
            <img src="{{ asset('images/me.jpg') }}" alt="A close up picture of me" width=500px>
        </div>
        <h1 class="introduction"><em>Hello World!</em></h1>
        <h2><em>I'm Gabriela Panayotova, I'm currently 19 and an ICT student at HZ University of Applied Sciences.</em>
        </h2>
        <p class="profile-text">I'm from Varna, a beautiful coastal city on the Black Sea in northeastern Bulgaria and
            it's "Sea capital", known for its rich history and cultural significance. There I studied at Varna Trade High
            School "Georgi S. Rakovski" with a specialisation in Economics and Management.</p>
        <br>
        <br>
        <br>
        <br>
        <h2 class="introduction"><em>My characteristics</em></h2>
        <ul class="characteristics">
            <li>
                I am very stubborn and determined to achieve my goals!
            </li>
            <li>
                I am patient and I am always there for help and support!
            </li>
            <li>
                I am always open to new ideas and points of views!
            </li>
        </ul>

        <div id="me-as-a-child">
            <img src="{{ asset('images/gabi-laptop.jpg') }}" alt="Me as a child on my laptop" width=500px>
        </div>

        <h2 class="introduction"><em>My hobbies</em></h2>
        <div class="hobbies">
            <p>I always love trying out new ones whenever I can, but here are my main ones:</p>
            <ul>
                <li>
                    Playing video games
                </li>
                <p>The genres of video games I'm into the most are RPGs and Decision-based games. Some of my favourite games
                    are The Witcher 3, World of Warcraft, Warhammer 40k: Gladius, Skyrim, The Elder Scrolls Online, all of the
                    Dark Souls games + Bloodborne and Elden Ring, Dragon Age: Inquisition and so many more! I like playing
                    competitive games too but mostly for fun and if I'm with friends.</p>
                <img src="{{ asset('images/the-witcher.png') }}" alt="Screenshot of mine from The Witcher 3" id="screenshot" width=500px>
                <li>
                    Playing table top games
                </li>
                <p>I have been interested in TTRPGs since 8th grade and in 2024 I finally got to play the one I have always
                    wanted to - Dungeons & Dragons and it's been so much fun.</p>
                <li>
                    Crocheting
                </li>
                <p>I'm still a beginner at it but it's such a fun and relaxing hobby. I started it because I wanted to make
                    cute gifts for my loved ones and also to lessen my screentime, which has really worked so far! I like
                    multitasking so I always put on something to watch while I crochet.</p>
                <img src="{{ asset('images/froggy.jpg') }}" alt="The first plushie I ever crocheted" id="frog" width="350px">
                <li>
                    Reading
                </li>
                <p>My favourite book genres are, of course, medieval fantasy and also light classical novels, for example Jane
                    Austen's or the Bronte sisters'. </p>
                <li>
                    Drawing
                </li>
                <p>I used to draw more often as a little kid but now I mostly do cards if it's someone's birthday or a
                    holiday.</p>
                <li>
                    Watching Fantasy or Period drama movies & series
                </li>
                <p>Always rewatching LOTR, Hobbit, Bridgerton, Pride and Prejudice or Studio Ghibli movies.</p>
                <img src="{{ asset('images/lotr.jpg') }}" alt="The Fellowship of the Ring" id="lotr" width="500px">
                <li>
                    Taking photos of every single thing I find pretty
                </li>
            </ul>
        </div>
        <div class="spotify">
            <h2 class="introduction"><em>Playlists I like to listen to while coding</em></h2>
            <ul>
                <li><a href="https://open.spotify.com/playlist/3uj9u6I4KPxMBnhI6E10ck?si=41da6434d3bf417a"
                       target="_blank">Game soundtracks</a></li>
                <li><a href="https://www.youtube.com/playlist?list=PLdSUTU0oamrzflitm5wLvphEMVbsZwt7L" target="_blank">World
                        of Warcraft Music and Ambience</a></li>

            </ul>
        </div>
    </div>
    <br>
    <br>
    <br>
</x-layout.main>
