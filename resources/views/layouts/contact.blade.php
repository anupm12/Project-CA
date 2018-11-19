<section class="contact py-5">
    <div class="row no-row px-5">
        <div class="col-md-4 pr-0 no-col">
            <h3 class="services__heading d-inline align-top dark-text-color ">Contact</h3>
            <svg class="services__icon mt-4">
                <use xlink:href="{{ asset('Images/sprite.svg#icon-contact') }}">
                </use>
            </svg>
            <p class="services__text para gery-color-text pt-3 px-2">
                Lorem ipsum dolor, sit amet
                consectetur adipisicing elit.
                Voluptates, repudiandae? Ipsum
                esse quo ad. Architecto
                magni porro excepturi at
                maiores facere!
            </p>
            {{-- @foreach($social as $data)
                @if($data -> check)
                <a class="social-icon" href="#">
                    <svg class="hero-section__icon mr-2 mt-2">
                    <use xlink:href="Images/Social/social.svg#{{ $data -> icon }}">
                        </use>
                    </svg>
                </a>
            @endif
            @endforeach --}}
        </div>

        <div class="col-md-8 pl-0 py-4 no-col">
            <p class="dark-text-color" style="font-weight:600;">Leave a Query!</p>
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
                <button type="submit" class="btn btn-custom" style="background:#1e90ff;font-weight:500;"><i class="fas fa-envelope pr-1"></i>Send Us</button>
            </form>
        </div>
    </div>
</section>
