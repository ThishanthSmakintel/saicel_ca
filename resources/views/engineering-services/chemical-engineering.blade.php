@extends('default')

@section('title', 'Saicel Chemical engineering Service')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar sidebar-left">
                        <div class="widget">
                            <div class="quote-item quote-border">
                                <div class="quote-text-border">
                                    <h4 style="font-size: 14px;">Why Choose Us?</h4>
                                    <ul style="font-size: 13px;">
                                        <li>Maximize Efficiency</li>
                                        <li>Aspen Suite Expertise</li>
                                        <li>Balancing Energy and Materials</li>
                                        <li>Optimizing Processes</li>
                                        <li>Distillation Column Design Specialist</li>
                                        <li>Meticulous Design Tools</li>
                                    </ul>
                                </div>
                            </div><!-- Quote item end -->
                        </div><!-- Widget end -->
                    </div><!-- Sidebar end -->
                </div><!-- Sidebar Col end -->

                <div class="col-xl-9 col-lg-8">
                    <div class="content-inner-page">

                        <div class="row">
                            <div class="col-md-6 bg-light" style="padding: 20px;">
                                <h2 class="column-title">Expert Chemical Engineering Services</h2>

                                <p>Seeking exceptional chemical engineering solutions? Look no further!</p>

                                <p>Our expertise spans process engineering, Aspen HYSYS simulations, PFD (Process Flow
                                    Diagram), PID (Piping and Instrumentation Diagram), and more.</p>

                                <h4>Services:</h4>

                                <ul>
                                    <li><a href="https://en.wikipedia.org/wiki/Report_writing">Reports writing, simulation
                                            and design projects</a></li>
                                    <li><a href="https://en.wikipedia.org/wiki/Aspen_Plus">Aspen Plus, Aspen Hysys, Chemcad,
                                            and similar software</a></li>
                                    <li><a href="https://en.wikipedia.org/wiki/Thermodynamics">Thermodynamics, Heat & Mass
                                            Transfer</a></li>
                                    <li><a href="https://en.wikipedia.org/wiki/Environmental_engineering">Environmental
                                            Engineering, Instrumentation and Control</a></li>
                                    <li><a href="https://en.wikipedia.org/wiki/Fluid_dynamics">Fluid Dynamics & Fluid
                                            Mechanics</a></li>
                                    <li><a href="https://en.wikipedia.org/wiki/Process_analysis">Process Analysis and
                                            Optimization</a></li>
                                    <li><a href="https://en.wikipedia.org/wiki/Power_plant">Power Plant Simulation & Design
                                            software (PPSD)</a></li>
                                </ul>
                            </div>

                            <div class="col-md-6 bg-light" style="padding: 20px;">
                                <h2 class="column-title">Chemical Engineering Online Tutor</h2>

                                <p>Need assistance with chemical engineering projects?</p>

                                <ul>
                                    <li>Chemical engineering thermodynamics, Process control</li>
                                    <li>Heat transfer, Mass transfer, Fluid dynamics</li>
                                    <li>Process modeling and control, Technical report writing</li>
                                    <li>Material and energy balance, Designing of equipment</li>
                                    <li>PFD & PID design, Safety, Desalination process</li>
                                    <li>Chemistry works</li>
                                </ul>

                                <p>Software we use:</p>

                                <ul style=" padding-left: 0;">
                                    <li><a href="https://www.polymath-software.com/">Polymath</a></li>
                                    <li><a href="https://www.aspentech.com/en/products/engineering/aspen-plus">Aspen
                                            Plus</a></li>
                                    <li><a href="https://www.aspentech.com/en/products/engineering/aspen-hysys">Aspen
                                            Hysys</a></li>
                                    <li><a href="https://www.mathworks.com/products/matlab.html">MATLAB</a></li>
                                    <li><a href="https://www.microsoft.com/en-us/microsoft-365/excel">Excel</a></li>
                                    <li><a href="https://www.microsoft.com/en-us/microsoft-365/visio">MS Visio</a></li>
                                    <li><a href="https://www.microsoft.com/en-us/microsoft-365/office">MS Office</a></li>
                                </ul>
                            </div>
                        </div><!-- Row end -->

                        <!-- Images Section -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <img src="{{ asset('images/services/service1.jpg') }}" alt="Chemical Engineering Assistant"
                                    style="width: 100%;">
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('images/services/service1.jpg') }}"
                                    alt="Piping and Instrumentation Diagram" style="width: 100%;">
                            </div>
                        </div>
                        <div class="gap-40"></div>

                        <div class="call-to-action classic">
                            <div class="row align-items-center">
                                <div class="col-md-8 text-center text-md-left">
                                    <div class="call-to-action-text">
                                        <h3 class="action-title">Interested in this service?</h3>
                                    </div>
                                </div><!-- Col end -->
                                <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                                    <div class="call-to-action-btn">
                                        <a class="btn btn-primary" href="#">Get a Quote</a>
                                    </div>
                                </div><!-- col end -->
                            </div><!-- row end -->
                        </div><!-- Action end -->

                    </div><!-- Content inner end -->
                </div><!-- Content Col end -->


            </div><!-- Main row end -->
        </div><!-- Container end -->
    </section><!-- Main container end -->

@endsection
