@extends('default')

@section('title', 'Contact Us')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">

                            <div class="text-center">
                                <h2 class="section-title">Reaching our Offices</h2>
                                <h3 class="section-sub-title">Find Our Locations</h3>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="ts-service-box-bg text-center h-100">
                                        <span class="ts-service-icon icon-round">
                                            <i class="fas fa-map-marker-alt mr-0"></i>
                                        </span>
                                        <div class="ts-service-box-content">
                                            <h4>Visit Our Canada Office</h4>
                                            <p>15 Purbrook Court<br>North York, Ontario<br>Canada M2R2B6</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gap-60"></div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="column-title">We'd Love to Hear From You</h3>
                                    <div class="error-container"></div>
                                    <form id="contactForm">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input class="form-control" name="name" id="name" type="text"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" name="email" id="email" type="email"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input class="form-control" name="subject" id="subject" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="service">Service</label>
                                            <select class="form-control" name="service" id="service" required>
                                                <option value="">Select a service</option>
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}">{{ $service->service_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" name="message" id="message" rows="10" required></textarea>
                                        </div>
                                        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary" id="btnContactUs">Send
                                                Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btnContactUs').click(function() {
                console.log('#btnContactUs');
                var formData = {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    subject: $('#subject').val(),
                    service: $('#service').val(),
                    message: $('#message').val(),
                    _token: $('#csrf-token').val()
                };

                $.ajax({
                    type: "POST",
                    url: "{{ route('contact-us.submit') }}",
                    data: formData,
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
