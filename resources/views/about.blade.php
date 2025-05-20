@extends("layouts.page")

@include("layouts.parts.nav",[
    "active" => "about"
])

@section("content")

    <!-- Page Header -->
    <section class="page-header text-white text-center py-5">
      <div class="container">
        <h1 class="display-4 fw-bold">About Us</h1>
        <p class="lead">Meet the Team Behind MarketPro Agency</p>
      </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6">
            <h2 class="mb-4">Our Story</h2>
            <p>
              Founded in 2015, MarketPro Agency has been at the forefront of
              digital marketing innovation. We started with a simple mission: to
              help businesses thrive in the digital age.
            </p>
            <p>
              Over the years, we've grown from a small team of passionate
              marketers to a full-service agency serving clients worldwide. Our
              success is built on our commitment to delivering results, staying
              ahead of industry trends, and treating each client's business as
              our own.
            </p>
            <p>
              Today, we're proud to have helped over 500 businesses transform
              their online presence and achieve sustainable growth.
            </p>
          </div>
          <div class="col-lg-6">
            <img
              src="https://placehold.co/600x400"
              class="img-fluid rounded shadow"
              alt="Our Story"
            />
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6 order-lg-2">
            <h2 class="mb-4">Our Mission</h2>
            <p>
              To empower businesses with innovative digital marketing strategies
              that drive real results.
            </p>
            <h3 class="mb-3">Our Values</h3>
            <ul>
              <li>
                <strong>Innovation:</strong> We stay ahead of digital trends
              </li>
              <li>
                <strong>Transparency:</strong> Clear communication and honest
                reporting
              </li>
              <li>
                <strong>Results-Driven:</strong> Your success is our success
              </li>
              <li>
                <strong>Collaboration:</strong> We work as an extension of your
                team
              </li>
              <li>
                <strong>Excellence:</strong> We deliver quality in everything we
                do
              </li>
            </ul>
          </div>
          <div class="col-lg-6 order-lg-1">
            <img
              src="https://placehold.co/600x400"
              class="img-fluid rounded shadow"
              alt="Our Mission"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Meet Our Team</h2>
        <div class="row g-4">

          @include("layouts.parts.team", [
            "name" => "Sarah Johnson",
            "role" => "CEO & Founder"
            ])

          @include("layouts.parts.team", [
            "name" => "Mike Wilson",
            "role" => "Creative Director"
            ])

          @include("layouts.parts.team", [
            "name" => "Emily Chen",
            "role" => "Head of SEO"
            ])

          @include("layouts.parts.team", [
            "name" => "David Brown",
            "role" => "PPC Specialist"
            ])

        </div>
      </div>
    </section>

    <!-- Achievements Section -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center mb-5">Our Achievements</h2>
        <div class="row text-center">
          
          @include("layouts.parts.achievement", [
            "icon" => "bi-trophy",
            "number" => "500+",
            "text" => "Happy Clients"
            ])
            
          @include("layouts.parts.achievement", [
            "icon" => "bi-graph-up",
            "number" => "150%",
            "text" => "Average ROI"
            ])

          @include("layouts.parts.achievement", [
            "icon" => "bi-award",
            "number" => "25+",
            "text" => "Industry Awards"
            ])

          @include("layouts.parts.achievement", [
            "icon" => "bi-people",
            "number" => "50+",
            "text" => "Team Members"
            ])

        </div>
      </div>
    </section>

@endsection