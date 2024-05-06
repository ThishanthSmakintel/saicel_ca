@extends('default')

@section('title', 'Saicel Home Insulation Service')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <!-- Left Page Content -->
                <div class="col-lg-6">
                    <h3 class="column-title"><strong>Cavity Wall Insulation</strong></h3>
                    <p>Generally, homes built between 1930 and 1995 have empty cavity walls. Cavity wall insulation simply
                        involves filling the cavity with an insulating material, usually by drilling small holes in the wall
                        and injecting the insulating material until the cavity is filled. Depending on the size of your home
                        this process usually takes around 2-3 hours.</p>
                    <p>Costs can be as low as £149 (or free if you qualify) and you can save you up to £270 on your energy
                        bills.</p>
                </div><!-- Left Page Content End -->

                <!-- Right Page Content -->
                <div class="col-lg-6">
                    <h3 class="column-title"><strong>Loft Insulation</strong></h3>
                    <p>Loft insulation is an effective way to save energy and money on your energy bills and can cost as
                        little as £149 (or free if you qualify). The current recommended level of loft insulation is 270mm
                        (10.5"). If you have less than this or if you have no loft insulation at all you can benefit by
                        losing less heat through your roof.</p>
                    <p>Insulating your loft, simply involves laying rolls of mineral wool fibre (or some other insulating
                        material) between and across the joists in your roof space and the work usually takes around 1-2
                        hours depending on the size of your property.</p>
                </div><!-- Right Page Content End -->
            </div><!-- Content row end -->
            <div class="call-to-action classic">
                <div class="row align-items-center">
                    <div class="col-md-8 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">Need driveway cleaning or sealing?</h3>
                        </div>
                    </div><!-- Col end -->
                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                        <div class="call-to-action-btn">
                            <a class="btn btn-primary" href="#">Hire Us</a>
                        </div>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- Action end -->
            <!-- Apply for Home Insulation -->
            <div class="row mt-4">
                <div class="col-lg-12">
                    <h3>Apply for Home Insulation</h3>
                    <p>All of the big domestic energy suppliers provide solutions for reducing energy consumption as
                        part of the Carbon Emissions Reduction Target (CERT). Please use the apply links in the
                        comparison table to apply online, where no apply button is available you will need to contact
                        the supplier directly.</p>
                    <p><strong>(1)</strong> Prices are based on an average sized three-bedroom semi-detached home.
                        Eligible only for measures recommended by the appointed surveyor. Prices may vary and are
                        subject to change and exclude any scaffolding and specialist equipment if required. Discount on
                        standard prices as at August 2010 on both loft and cavity wall insulation. This offer cannot be
                        used in conjunction with any other British Gas insulation offer.</p>
                    <p><strong>(2)</strong> This offer is available for all heating fuel types. These prices and the
                        free insulation offer apply to standard properties with up to 4 bedrooms. Additional costs will
                        apply to large /non standard properties. You will be advised of any extra costs for additional
                        areas at the time of survey which should be based on a standard rate of £5.00 per m2 inc. VAT.
                        All boarded walkways in lofts are charged extra. If you receive income or disability related
                        benefits, or are aged 70 or over, you may qualify for work to be carried out free of charge.
                        Offer is subject to a site survey. All information is correct at time of going to print, but
                        subject to change</p>
                    <p>*£390 savings a year figure is for 1940's 3 bed semi detached home with a ten year old gas boiler
                        and a gas price of 3.73p/kWh, when cavity wall insulation and loft insulation are installed.
                        More modern homes save less. Individual savings depend on a large number of factors and the £390
                        quoted should be treated as a guide;</p>
                </div>
            </div><!-- Apply for Home Insulation End -->

            <!-- Image Row -->
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="{{ asset('images/services/service1.jpg') }}" alt="Cavity Wall Insulation"
                            class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="{{ asset('images/services/service1.jpg') }}" alt="Loft Insulation"
                            class="img-fluid rounded">
                    </div>
                </div>
            </div><!-- Image Row end -->
        </div><!-- Container end -->
    </section><!-- Main container end -->

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <!-- Contact form or contact information can be added here -->
        </div>
    </section><!-- Contact Section End -->
@endsection
