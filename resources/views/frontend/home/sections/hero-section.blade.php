            <section id="home" class="hero-section">
                <div class="hero-grid-dots"></div>
                <div class="hero-section-blend"></div>
                <div class="container">
                    <div class="text-center mb-5">
                        <div class="profile-image-wrapper mb-4">
                            <img src="{{ asset($hero->image) }}" class="profile-image" alt="Profile">
                        </div>
                        <h1 class="hero-title fade-in">{!! textPeruser($hero->title) !!}</h1>
                        <p class="hero-subtitle fade-in">{!! textPeruser($hero->subtitle) !!}</p>
                        <a href="#contact" class="btn btn-primary-custom fade-in">Let's Talk</a>
                    </div>

                    <!-- Stats Section -->
                    <div class="row stats-section text-center">
                        <div class="col-md-3 col-6 mb-4">
                            <div class="stats-item fade-in">
                                <h3>{{ $hero->counter_one }}</h3>
                                <p>{!! textPeruser($hero->counter_title_one) !!}</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-4">
                            <div class="stats-item fade-in">
                                <h3>{{ $hero->counter_two }}</h3>
                                <p>{!! textPeruser($hero->counter_title_two) !!}</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-4">
                            <div class="stats-item fade-in">
                                <h3>{{ $hero->counter_three }}</h3>
                                <p>{!! textPeruser($hero->counter_title_three) !!}</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-4">
                            <div class="stats-item fade-in">
                                <h3>{{ $hero->counter_four }}</h3>
                                <p>{!! textPeruser($hero->counter_title_four) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
