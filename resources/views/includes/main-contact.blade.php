<section id="contact">
    <div class="container px-lg-0">
        <div class="row no-gutters">
            <div class="col-lg-6 order-sm-2">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form method="POST" action="{{route('contact.store')}}" class="contact-form">
                    {{csrf_field()}}
                    <div class="form-group mt-0 my-4">
                        <textarea name="message" id="" rows="6" class="form-control mb-0 @error('email') is-invalid @enderror" placeholder="Write a message..."></textarea>
                        @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mt-0 my-4">
                        <input name="name" type="text" class="form-control mb-0 @error('name') is-invalid @enderror" placeholder="Your Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mt-0 my-4">
                        <input name="email" type="email" class="form-control mb-0 @error('email') is-invalid @enderror" placeholder="Your Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="btn-border">
                        <button type="submit" class="he-btn he-btn-simple">
                            <span class="he-btn-repeating-linear"></span>
                            <span class="he-btn-text">Send</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 order-sm-1">
                <div class="contact-content mt-0 mb-5 px-0">
                    <div class="section-header">
                        <h2 class="section-header--title">GET IN TOUCH</h2>
                        <div class="section-header--line"></div>
                        <p>To know about the products more and for specific enquiries, please contact us.
                            We'll be more than happy to assist you.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <div>
                                <h5>EU & N.AMERICA</h5>
                                <p><a href="mailto:ea.sales@hapton-elect.uk">ea.sales@hapton-elect.uk</a></p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div>
                                <h5>M.EAST & AFRICA</h5>
                                <p><a href="mailto:mea.sales@hapton-elect.uk">mea.sales@hapton-elect.uk</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
