<div class="container">

    <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
    </div>

    <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
            <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>My Address</h3>
                <p>Bandung, Indonesia 40379</p>
            </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
            <div class="info-box">
                <i class="bx bx-share-alt"></i>
                <h3>Social Profiles</h3>
                <div class="social-links">
                    <a href="https://www.facebook.com/riki.subagja.71653318/" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/rikifriazka1409/" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/riki-subagja-9b494a133/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    <a href="skype:<riki43733>?<action>" class="skype"><i class="bi bi-skype"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
            <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>Email Me</h3>
                <p>riki43733@gmail.com</p>
            </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
            <div class="info-box">
                <i class="bx bx-phone-call"></i>
                <h3>Call Me</h3>
                <p>+62 821 1785 4565</p>
            </div>
        </div>
    </div>

    <form action="{{ route('contact_me.store') }}" method="POST" role="form" class="php-email-form mt-4">
        @csrf
        <div class="row">
            <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Your Email" required>
            </div>
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="message" value="{{ old('message') }}" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
    </form>

</div>
