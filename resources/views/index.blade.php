@extends("layouts.page")

@section("content")

    <!-- Hero Section -->
    <section class="hero-section text-white text-center py-5">
      <div class="container">
        <div class="row align-items-center min-vh-100">
          <div class="col-lg-12">
            <h1 class="display-3 fw-bold mb-4">Welcome to MarketPro Agency</h1>
            <p class="lead mb-5">Your Partner in Digital Growth and Success</p>
            <a href="services.html" class="btn btn-primary btn-lg me-3"
              >Our Services</a
            >
            <a href="contact.html" class="btn btn-outline-light btn-lg"
              >Get Started</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Services Overview -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <div class="card-body text-center">
                <div class="services-icon">
                  <i class="bi bi-search"></i>
                </div>
                <h4>SEO Optimization</h4>
                <p>
                  Boost your search rankings and drive organic traffic with our
                  expert SEO strategies.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <div class="card-body text-center">
                <div class="services-icon">
                  <i class="bi bi-share"></i>
                </div>
                <h4>Social Media Marketing</h4>
                <p>
                  Engage your audience and build brand awareness across all
                  social platforms.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <div class="card-body text-center">
                <div class="services-icon">
                  <i class="bi bi-graph-up"></i>
                </div>
                <h4>PPC Advertising</h4>
                <p>
                  Maximize ROI with targeted pay-per-click campaigns that
                  convert.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include("layouts.parts.ctasection", [
        "title" => "Ready to Grow Your Business?",
        "text" => "Let's discuss how we can help you achieve your marketing goals.",
        "buttontext" => "Contact Us Today"])

@endsection