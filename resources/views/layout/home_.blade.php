@extends('partials.index')
@section('container')


<bodyhome1>
    <div class="containerhome1">
        <span class="next">&#10095;</span>
        <span class="prev">&#10094;</span>
        <!-- <a href="" style="--clr:#1e9bff">
            <spanb>Find More !</spanb><i></i>
        </a>
        <a href="" style="--clr:#6eff3e">
            <spanb>lorem</spanb><i></i>
        </a> -->
        <section class="slides-row">
            <div class="slide" id="lastImageDuplicate">
                <img src="img/4.png" alt="">
            </div>
            <div class="slide">
                <img src="img/3.png" alt="">
            </div>
            <div class="slide">
                <img src="img/2.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="img/4.png" alt="">
            </div>
            <div class="slide" id="firstImageDuplicate">
                <img src="img/3.png" alt="">
            </div>
        </section>
    </div>

    <script type="text/javascript">
    // access html elements
    const carouseRow = document.querySelector('.slides-row');
    const carouseSlides = document.getElementsByClassName('slide');
    const dots = document.getElementsByClassName('dot');
    const nextBtn = document.querySelector('.next');
    const prevBtn = document.querySelector('.prev');

    // declare variable

    let index = 1;
    var width;


    function slideWidth() {
        width = carouseSlides[0].clientWidth;
    }
    slideWidth();
    window.addEventListener('resize', slideWidth);
    carouseRow.style.transform = 'translateX(' + (-width * index) + 'px)';


    // goto next slide

    nextBtn.addEventListener('click', nextSlide);

    function nextSlide() {
        if (index >= carouseSlides.length - 1) {
            return
        };
        carouseRow.style.transition = 'transform 1s ease-out'
        index++;
        carouseRow.style.transform = 'translateX(' + (-width * index) + 'px)';
        dotsLabel();
    }

    // goto prev slide
    prevBtn.addEventListener('click', prevSlide);

    function prevSlide() {
        if (index <= 0) {
            return
        };
        carouseRow.style.transition = 'transform 1s ease-out'
        index--;
        carouseRow.style.transform = 'translateX(' + (-width * index) + 'px)';
        dotsLabel();
    }

    // return first and last image

    carouseRow.addEventListener('transitionend', function() {
        if (carouseSlides[index].id === 'firstImageDuplicate') {
            carouseRow.style.transition = 'none';
            index = carouseSlides.length - index;
            carouseRow.style.transform = 'translateX(' + (-width * index) + 'px)';
            dotsLabel();
        }
        if (carouseSlides[index].id === 'lastImageDuplicate') {
            carouseRow.style.transition = 'none';
            index = carouseSlides.length - 2;
            carouseRow.style.transform = 'translateX(' + (-width * index) + 'px)';
            dotsLabel();
        }
    })


    // auto slider

    function autoslide() {
        deleteInterval = setInterval(timer, 2000);

        function timer() {
            nextSlide();
        }
    }
    autoslide();

    // stop slider when mouse over

    const mainContainerhome = document.querySelector('.containerhome');
    mainContainerhome.addEventListener('mouseover', function() {
        clearInterval(deleteInterval);
    })

    // resume sliding   

    mainContainerhome.addEventListener('mouseout', autoslide);

    // function  dotsLabel(){
    //     for(i = 0; i < dots.length; i++){
    //         dots[i].className = dots[i].className.replace('active', '');
    //     }
    //     dots[index - 1].className += 'active';
    // }
    </script>
</bodyhome1>

<bodyhome2>
    <div class="contenthome2">
        <h1 class="home2-title">Special Lorem Ipsum</h1>
        <p class="home2-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quos sit
            consectetur, ipsa voluptatem vitae necessitatibus dicta veniam, optio, possimus assumenda laudantium.
            Temporibus, quis cum.</p>
    </div>
    <div class="card-produk">
        <div class="circle" style="--clr:#f40103">
            <img src="img/1.jpg" class="logo">
        </div>
        <div class="content-produk">
            <h5>XYZ</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et aut sit nisi eos nemo culpa temporibus,
                inventore praesentium velit fugit. Praesentium</p>
            <a href="">More</a>
        </div>
        <img src="img/team1.png" class="img-produk">
    </div>
    <div class="card-produk">
        <div class="circle" style="--clr:#11b9e8">
            <img src="img/1.jpg" class="logo">
        </div>
        <div class="content-produk">
            <h5>XYZ</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et aut sit nisi eos nemo culpa temporibus,
                inventore praesentium velit fugit. Praesentium</p>
            <a href="">More</a>
        </div>
        <img src="img/8.jpeg " class="img-produk">
    </div>
    <!-- <div class="card-produk">
        <div class="circle" style="--clr:#eaa001">
            <img src="img/1.jpg" class="logo">
        </div>
        <div class="content-produk">
            <h5>XYZ</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et aut sit nisi eos nemo culpa temporibus,
                inventore praesentium velit fugit. Praesentium</p>
            <a href="">More</a>
        </div>
        <img src="img/8.jpeg " class="img-produk">
    </div> -->
</bodyhome2>

<bodyhome3>
    <section class="home3-contact">
        <div class="content">
            <h1 class="home2-title">Kontak Kami</h1>
            <p class="home2-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quos sit
                consectetur, ipsa voluptatem vitae necessitatibus dicta veniam, optio, possimus assumenda laudantium.
                Temporibus, quis cum.</p>
        </div>
        <div class="contact-box">
            <div class="contact form">
                <h3>Send a Message</h3>
                <form action="https://formspree.io/f/xzbqqoaa" method="POST">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>Name Lengkap</span>
                                <input type="text" placeholder="John" id="name" name="name">
                            </div>
                            <!-- <div class="inputBox">
                                <span>last Name</span>
                                <input type="text" placeholder="Albert">
                            </div> -->
                        </div>
                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" placeholder="john@email.com" id="email" name="email">
                            </div>
                            <div class="inputBox">
                                <span>Phone</span>
                                <input type="text" placeholder="+6281123456789" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <span>Pesan</span>
                                <textarea type="text" placeholder="Write your message . . ." id="message" name="message"></textarea>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <input id="btn" type="submit" value="send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="contact info">
                <h3>Kontak Kami</h3>
                <div class="infoBox">
                    <div>
                        <span>
                            <ion-icon name="location-outline"></ion-icon>
                        </span>
                        <p>Wonosobo, Jawa Tengah <br>Indonesia</p>
                    </div>
                    <div>
                        <span>
                            <ion-icon name="mail-open-outline"></ion-icon>
                        </span>
                        <a href="mailto:lorem@email.com">lorem@email.com</a>
                    </div>
                    <div>
                        <span>
                            <ion-icon name="call-outline"></ion-icon>
                        </span>
                        <a href="tel:+628123456789">+628123456789</a>
                    </div>
                    <ul class="sci">
                        <li><a href="">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a></li>
                        <li><a href="">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a></li>
                        <li><a href="">
                                <ion-icon name="logo-google"></ion-icon>
                            </a></li>
                        <li><a href="">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="contact map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.904287481344!2d109.92023037486534!3d-7.36462489264453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa1979e4a7a5f%3A0x7c75602f6f9cf748!2sPT.%20Niaga%20Wasilah%20Alkhoir!5e0!3m2!1sid!2sid!4v1685073236605!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</bodyhome3>





@endsection