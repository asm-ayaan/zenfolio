            <section id="services" class="py-5">
                <div class="container">
                    <h2 class="text-center section-title mb-5 fade-in">Collaborate with brands and<br>agencies to create
                        <span class="text-gradient">impactful</span> results
                    </h2>
                    <div class="row g-4">
                        @foreach($services as $service)
                        <div class="col-md-6 col-lg-3">
                            <div class="service-card fade-in">
                                <div class="service-icon">
                                    <i class="{{ $service->icon }}"></i>
                                </div>
                                <h3>{{ $service->title }}</h3>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </section>