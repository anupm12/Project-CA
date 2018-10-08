<section class="contact py-5">
    <div class="row no-row px-5">
        <div class="col-md-4 pr-0 no-col">
            <p class="services__heading d-inline align-top">Contact</p>
            <svg class="services__icon mt-4">
                <use xlink:href="Images/sprite.svg#icon-contact">
                </use>
            </svg>
            <p class="services__text">
                Lorem ipsum dolor, sit amet
                consectetur adipisicing elit.
                Voluptates, repudiandae? Ipsum
                esse quo ad. Architecto
                magni porro excepturi at
                maiores facere!
            </p>
            <a href="#">
                <svg class="hero-section__icon mr-2 mt-2">
                    <use xlink:href="Images/sprite.svg#icon-facebook">
                    </use>
                </svg>
            </a>
            <a href="#">
                <svg class="hero-section__icon mr-2 mt-2">
                    <use xlink:href="Images/sprite.svg#icon-instagram">
                    </use>
                </svg>
            </a>
            <a href="#">
                <svg class="hero-section__icon mr-2 mt-2">
                    <use xlink:href="Images/sprite.svg#icon-twitter">
                    </use>
                </svg>
            </a>
        </div>

        <div class="col-md-8 pl-0 py-4 no-col">
            <h3>Leave a Query!</h3>
        <form action="{{ route('message') }}" method="POST" class="contact__form">
                {{ csrf_field() }}
                <div class="input-group contact__form__input-group">
                    <input class="form-control contact__form__input-group__form-control " type="text" name="name"
                        placeholder="Your Name" />
                    <input class="form-control contact__form__input-group__form-control" type="text" name="phone"
                        placeholder="Your Contact Number" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control contact__form-control" name="email" placeholder="Your Email" />
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control contact__form-control" name="content" id="" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-custom btn-primary">Send Us</button>
            </form>
        </div>
    </div>
</section>
