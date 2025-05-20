@extends("layouts.page")

@include("layouts.parts.nav",[
    "active" => "services"
])

@section("content")

    <!-- Page Header -->
    <section class="page-header text-white text-center py-5">
      <div class="container">
        <h1 class="display-4 fw-bold">Our Services</h1>
        <p class="lead">Comprehensive Digital Marketing Solutions</p>
      </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
      <div class="container">

        @include("layouts.parts.servicerow", [
            "order1" => "order-lg-1",
            "order2" => "order-lg-2",
            "title" => "Search Engine Optimization (SEO)",
            "text" => "Our SEO services help your business rank higher in search results and attract more organic traffic.",
            "list1" => "Keyword Research & Strategy",
            "list2" => "On-Page Optimization",
            "list3" => "Technical SEO Audits",
            "list4" => "Link Building Campaigns",
            "list5" => "Local SEO for Businesses",
            "list6" => "Monthly Reporting & Analytics"
            ])

        @include("layouts.parts.servicerow", [
            "order1" => "order-lg-2",
            "order2" => "order-lg-1",
            "title" => "Social Media Marketing",
            "text" => "Build your brand presence and engage with your audience across all major social platforms.",
            "list1" => "Social Media Strategy Development",
            "list2" => "Content Creation & Curation",
            "list3" => "Community Management",
            "list4" => "Paid Social Advertising",
            "list5" => "Influencer Marketing",
            "list6" => "Performance Analytics"
            ])

        @include("layouts.parts.servicerow", [
            "order1" => "order-lg-1",
            "order2" => "order-lg-2",
            "title" => "Pay-Per-Click (PPC) Advertising",
            "text" => "Maximize your ROI with targeted advertising campaigns that drive conversions.",
            "list1" => "Google Ads Management",
            "list2" => "Facebook & Instagram Ads",
            "list3" => "Display Advertising",
            "list4" => "Remarketing Campaigns",
            "list5" => "Landing Page Optimization",
            "list6" => "A/B Testing & Optimization"
            ])

        @include("layouts.parts.servicerow", [
            "order1" => "order-lg-2",
            "order2" => "order-lg-1",
            "title" => "Content Marketing",
            "text" => "Create compelling content that attracts, engages, and converts your target audience.",
            "list1" => "Content Strategy Development",
            "list2" => "Blog Writing & Management",
            "list3" => "Video Content Creation",
            "list4" => "Infographic Design",
            "list5" => "Email Marketing Campaigns",
            "list6" => "Content Distribution"
            ])

        </div>
    </section>

    @include("layouts.parts.ctasection", [
        "title" => "Ready to Boost Your Online Presence?",
        "text" => "Let's create a custom digital marketing strategy for your business.",
        "buttontext" => "Get a Free Consultation"])

@endsection