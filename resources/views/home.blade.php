<x-layout.main>
    <x-slot:title>Welcome to my website!</x-slot:title>
{{-- Content --}}
<!-- Who am I section -->
<h2 class="who-am-i"><em>Who am I?</em></h2>
<div class="about-me">
    <p>
        My name is Gabriela and I have recently began my first year at <a href="https://hz.nl/" target="_blank" rel="noopener noreferrer" class="link">HZ University of Applied Sciences</a> as an ICT student.
    </p>
    <ul>
        <li>
            <em><b>Why the Netherlands?</b></em>
        </li>
        <p>The reason decided to study in the Netherlands is because the education system is recognized across Europe as
            one of the most prestigious and advancing in terms of innovation, programs offered and quality of education.</p>
        <li>
            <em><b>Why HZ?</b></em>
        </li>
        <p>
            HZ University of Applied Sciences stood out to me because of its excellent reputation for its Information and
            Communication Technology programme and its commitment to practical learning, which I believe is the most
            efficient way to gain a deep understanding of a certain subject. The opportunity to work in small groups with
            other students on projects for real customers and companies is something I have been always eager to experience.
        </p>
    </ul>
    <br>
    <p>And the most important question...</p>
</div>
<br>
<br>
<h2 class="why-ict"><em>Why ICT?</em></h2>
<div class="about-me">
    <p>
        I think I am suited for the HBO-ICT programme and the ICT field in general, because it combines my passion for
        technology as well as creativity. I love solving complex problems, coding, and critical thinking, which are essential skills in
        this field of work. I'm drawn to the collaborative nature of ICT, where I can work with diverse teams to bring
        innovative ideas to life. One of the reasons I want to begin a career in IT is because technology keeps on
        evolving and there is always something new to learn and to get better at and I find that really exciting. Another
        reason I enrolled in this programme is because it's wide range of objects will allow me to explore various
        positions and set a foundation of valuable knowledge for my dream field of work - <b><em>game
                development</em></b>.
    </p>
    <p>
        Ever since the age of three I've been sat on the computer, playing video games. A few years ago my love for video
        games sparked a desire to create them. I have always had a deep appreciation for the way game development teams
        tell their stories, build whole new worlds and make memorable experiences for players. I want to leave such an
        impact on people too, offer them an escape from their busy everyday life, teach them a valuable lesson and send
        out a positive message through something's creation I have been a part of. Even though it sounds like a silly
        dream, I am keen on making it come true! :)
    </p>
</div>

<!--Photos-->
<div class="photo-of-me">
    <img src="{{ asset('images/pictureofme.jpg') }}" width=400 height=600 alt="A photo of me.">
</div>
<div class="me-with-two-laptops">
    <img src="{{ asset('images/two-laptops.jpg') }}" width="550" alt="A photo of me playing on two laptops">
</div>

<br>
<br>
<br>

</x-layout.main>
