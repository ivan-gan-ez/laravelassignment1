@extends("layouts.page")

@include("layouts.parts.nav",[
    "active" => "home"
])

@section("content")

    <!-- Hero Section -->
    <section class="hero-section text-white text-center py-5">
      <div class="container">
        <div class="row align-items-center min-vh-100">
          <div class="col-lg-12">
            <h1 class="display-3 fw-bold mb-4">Welcome to MarketPro Agency</h1>
            <p class="lead mb-5">Your Partner in Digital Growth and Success</p>
            <a href="/services" class="btn btn-primary btn-lg me-3"
              >Our Services</a
            >
            <a href="/contact" class="btn btn-outline-light btn-lg"
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

          @include("layouts.parts.indexservice", [
            "icon" => "bi-search",
            "title" => "SEO Optimization",
            "desc" => "Boost your search rankings and drive organic traffic with our expert SEO strategies."
            ])

          @include("layouts.parts.indexservice", [
            "icon" => "bi-share",
            "title" => "Social Media Marketing",
            "desc" => "Engage your audience and build brand awareness across all social platforms."
            ])

          @include("layouts.parts.indexservice", [
            "icon" => "bi-graph-up",
            "title" => "PPC Advertising",
            "desc" => "Maximize ROI with targeted pay-per-click campaigns that convert."
            ])

        </div>
      </div>
    </section>

    @include("layouts.parts.ctasection", [
        "title" => "Ready to Grow Your Business?",
        "text" => "Let's discuss how we can help you achieve your marketing goals.",
        "buttontext" => "Contact Us Today"])

@endsection