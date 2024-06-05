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
                                    @csrf
                                    <div class="error-container"></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input class="form-control" name="name" id="name" type="text"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" name="email" id="email" type="email"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="subject">Subject</label>
                                                <input class="form-control" name="subject" id="subject" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" name="message" id="message" rows="10" required></textarea>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-primary" id="btnContactUs">Send Message</button>
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



@endsection
