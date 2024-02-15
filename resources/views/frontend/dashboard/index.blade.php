@extends('frontend.dashboard.master')
@section('content')

<div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
    <div class="media media-card align-items-center">
        <div class="media-img media--img media-img-md rounded-full">
            <img class="rounded-full" src="{{ Auth::user()->photo ? asset('uploads/images/user/' . Auth::user()->photo) : asset('uploads/images/user/no_image.png') }}" alt="Student thumbnail image">
        </div>
        <div class="media-body">
            <h2 class="section__title fs-30">Hello, {{ Auth::user()->name }}</h2>
            <div class="rating-wrap d-flex align-items-center pt-2">
                <div class="review-stars">
                    <span class="rating-number">4.4</span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star-o"></span>
                </div>
                <span class="rating-total pl-1">(20,230)</span>
            </div><!-- end rating-wrap -->
        </div><!-- end media-body -->
    </div><!-- end media -->
</div><!-- end breadcrumb-content -->
<div class="section-block mb-5"></div>
<div class="dashboard-heading mb-5">
    <h3 class="fs-22 font-weight-semi-bold">Dashboard</h3>
</div>
<div class="row">
    <div class="col-lg-4 responsive-column-half">
        <div class="card card-item dashboard-info-card">
            <div class="card-body d-flex align-items-center">
                <div class="icon-element flex-shrink-0 bg-1 text-white">
                    <svg class="svg-icon-color-white" width="40" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <path d="M507.606,422.754l-86.508-86.508l42.427-42.426c3.676-3.676,5.187-8.993,3.992-14.053s-4.923-9.14-9.855-10.784   L203.104,184.13c-5.389-1.797-11.333-0.394-15.35,3.624c-4.018,4.018-5.421,9.96-3.624,15.35l84.853,254.559   c1.645,4.932,5.725,8.661,10.784,9.855c5.059,1.197,10.377-0.315,14.053-3.992l42.427-42.426l86.508,86.507   c2.929,2.929,6.768,4.394,10.606,4.394s7.678-1.464,10.606-4.394l63.64-63.64C513.465,438.109,513.465,428.612,507.606,422.754z    M433.36,475.787l-86.508-86.507c-5.857-5.858-15.356-5.858-21.213,0l-35.871,35.871l-67.691-203.073l203.073,67.691   l-35.871,35.871c-5.853,5.852-5.858,15.356,0,21.213l86.508,86.508L433.36,475.787z"/>
                            <path d="M195,120c8.284,0,15-6.716,15-15V15c0-8.284-6.716-15-15-15s-15,6.716-15,15v90C180,113.284,186.716,120,195,120z"/>
                            <path d="M78.327,57.114c-5.857-5.858-15.355-5.858-21.213,0c-5.858,5.858-5.858,15.355,0,21.213l63.64,63.64   c5.857,5.858,15.356,5.858,21.213,0c5.858-5.858,5.858-15.355,0-21.213L78.327,57.114z"/>
                            <path d="M120.754,248.033l-63.64,63.64c-5.858,5.858-5.858,15.355,0,21.213c5.857,5.858,15.356,5.858,21.213,0l63.64-63.64   c5.858-5.858,5.858-15.355,0-21.213C136.109,242.175,126.611,242.175,120.754,248.033z"/>
                            <path d="M269.246,141.967l63.64-63.64c5.858-5.858,5.858-15.355,0-21.213c-5.857-5.858-15.355-5.858-21.213,0l-63.64,63.64   c-5.858,5.858-5.858,15.355,0,21.213C253.89,147.825,263.389,147.825,269.246,141.967z"/>
                            <path d="M120,195c0-8.284-6.716-15-15-15H15c-8.284,0-15,6.716-15,15s6.716,15,15,15h90C113.284,210,120,203.284,120,195z"/>
                        </g>
                    </svg>
                </div>
                <div class="pl-4">
                    <p class="card-text fs-18">Enrolled Courses</p>
                    <h5 class="card-title pt-2 fs-26">11</h5>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col-lg-4 -->
    <div class="col-lg-4 responsive-column-half">
        <div class="card card-item dashboard-info-card">
            <div class="card-body d-flex align-items-center">
                <div class="icon-element flex-shrink-0 bg-2 text-white">
                    <svg class="svg-icon-color-white" width="40" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path d="M405.333,42.667h-44.632c-4.418-12.389-16.147-21.333-30.035-21.333h-32.229C288.417,8.042,272.667,0,256,0
                                            s-32.417,8.042-42.438,21.333h-32.229c-13.888,0-25.617,8.944-30.035,21.333h-44.631C83.146,42.667,64,61.802,64,85.333v384
                                            C64,492.865,83.146,512,106.667,512h298.667C428.854,512,448,492.865,448,469.333v-384C448,61.802,428.854,42.667,405.333,42.667
                                            z M170.667,53.333c0-5.885,4.792-10.667,10.667-10.667h37.917c3.792,0,7.313-2.021,9.208-5.302
                                            c5.854-10.042,16.146-16.031,27.542-16.031s21.688,5.99,27.542,16.031c1.896,3.281,5.417,5.302,9.208,5.302h37.917
                                            c5.875,0,10.667,4.781,10.667,10.667V64c0,11.76-9.563,21.333-21.333,21.333H192c-11.771,0-21.333-9.573-21.333-21.333V53.333z
                                             M426.667,469.333c0,11.76-9.563,21.333-21.333,21.333H106.667c-11.771,0-21.333-9.573-21.333-21.333v-384
                                            c0-11.76,9.563-21.333,21.333-21.333h42.667c0,23.531,19.146,42.667,42.667,42.667h128c23.521,0,42.667-19.135,42.667-42.667
                                            h42.667c11.771,0,21.333,9.573,21.333,21.333V469.333z"/>
                                        <path d="M160,170.667c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                            C192,185.021,177.646,170.667,160,170.667z M160,213.333c-5.875,0-10.667-4.781-10.667-10.667
                                            c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667C170.667,208.552,165.875,213.333,160,213.333z"/>
                                        <path d="M160,277.333c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                            C192,291.688,177.646,277.333,160,277.333z M160,320c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667
                                            s10.667,4.781,10.667,10.667C170.667,315.219,165.875,320,160,320z"/>
                                        <path d="M160,384c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32C192,398.354,177.646,384,160,384z
                                             M160,426.667c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667
                                            C170.667,421.885,165.875,426.667,160,426.667z"/>
                                        <path d="M373.333,192h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                            c5.896,0,10.667-4.771,10.667-10.667C384,196.771,379.229,192,373.333,192z"/>
                                        <path d="M373.333,298.667h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                            c5.896,0,10.667-4.771,10.667-10.667C384,303.438,379.229,298.667,373.333,298.667z"/>
                                        <path d="M373.333,405.333h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                            c5.896,0,10.667-4.771,10.667-10.667C384,410.104,379.229,405.333,373.333,405.333z"/>
                                    </g>
                                </g>
                            </g>
                    </svg>
                </div>
                <div class="pl-4">
                    <p class="card-text fs-18">Active Courses</p>
                    <h5 class="card-title pt-2 fs-26">5</h5>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col-lg-4 -->
    <div class="col-lg-4 responsive-column-half">
        <div class="card card-item dashboard-info-card">
            <div class="card-body d-flex align-items-center">
                <div class="icon-element flex-shrink-0 bg-3 text-white">
                    <svg class="svg-icon-color-white" width="40" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path d="M405.333,42.667h-44.632c-4.418-12.389-16.147-21.333-30.035-21.333h-32.229C288.417,8.042,272.667,0,256,0
                                            s-32.417,8.042-42.438,21.333h-32.229c-13.888,0-25.617,8.944-30.035,21.333h-44.631C83.146,42.667,64,61.802,64,85.333v384
                                            C64,492.865,83.146,512,106.667,512h298.667C428.854,512,448,492.865,448,469.333v-384C448,61.802,428.854,42.667,405.333,42.667
                                            z M170.667,53.333c0-5.885,4.792-10.667,10.667-10.667h37.917c3.792,0,7.313-2.021,9.208-5.302
                                            c5.854-10.042,16.146-16.031,27.542-16.031s21.688,5.99,27.542,16.031c1.896,3.281,5.417,5.302,9.208,5.302h37.917
                                            c5.875,0,10.667,4.781,10.667,10.667V64c0,11.76-9.563,21.333-21.333,21.333H192c-11.771,0-21.333-9.573-21.333-21.333V53.333z
                                             M426.667,469.333c0,11.76-9.563,21.333-21.333,21.333H106.667c-11.771,0-21.333-9.573-21.333-21.333v-384
                                            c0-11.76,9.563-21.333,21.333-21.333h42.667c0,23.531,19.146,42.667,42.667,42.667h128c23.521,0,42.667-19.135,42.667-42.667
                                            h42.667c11.771,0,21.333,9.573,21.333,21.333V469.333z"/>
                                        <path d="M160,170.667c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                            C192,185.021,177.646,170.667,160,170.667z M160,213.333c-5.875,0-10.667-4.781-10.667-10.667
                                            c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667C170.667,208.552,165.875,213.333,160,213.333z"/>
                                        <path d="M160,277.333c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                            C192,291.688,177.646,277.333,160,277.333z M160,320c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667
                                            s10.667,4.781,10.667,10.667C170.667,315.219,165.875,320,160,320z"/>
                                        <path d="M160,384c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32C192,398.354,177.646,384,160,384z
                                             M160,426.667c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667
                                            C170.667,421.885,165.875,426.667,160,426.667z"/>
                                        <path d="M373.333,192h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                            c5.896,0,10.667-4.771,10.667-10.667C384,196.771,379.229,192,373.333,192z"/>
                                        <path d="M373.333,298.667h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                            c5.896,0,10.667-4.771,10.667-10.667C384,303.438,379.229,298.667,373.333,298.667z"/>
                                        <path d="M373.333,405.333h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                            c5.896,0,10.667-4.771,10.667-10.667C384,410.104,379.229,405.333,373.333,405.333z"/>
                                    </g>
                                </g>
                            </g>
                    </svg>
                </div>
                <div class="pl-4">
                    <p class="card-text fs-18">Completed Courses</p>
                    <h5 class="card-title pt-2 fs-26">6</h5>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col-lg-4 -->
    <div class="col-lg-4 responsive-column-half">
        <div class="card card-item dashboard-info-card">
            <div class="card-body d-flex align-items-center">
                <div class="icon-element flex-shrink-0 bg-4 text-white">
                    <svg class="svg-icon-color-white" width="40" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 490.667 490.667" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M245.333,85.333c-41.173,0-74.667,33.493-74.667,74.667s33.493,74.667,74.667,74.667S320,201.173,320,160
                                        C320,118.827,286.507,85.333,245.333,85.333z M245.333,213.333C215.936,213.333,192,189.397,192,160
                                        c0-29.397,23.936-53.333,53.333-53.333s53.333,23.936,53.333,53.333S274.731,213.333,245.333,213.333z"/>
                                </g>
                            </g>
                        <g>
                                <g>
                                    <path d="M394.667,170.667c-29.397,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333S448,253.397,448,224
                                        S424.064,170.667,394.667,170.667z M394.667,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32
                                        C426.667,241.643,412.309,256,394.667,256z"/>
                                </g>
                            </g>
                        <g>
                                <g>
                                    <path d="M97.515,170.667c-29.419,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333s53.333-23.936,53.333-53.333
                                        S126.933,170.667,97.515,170.667z M97.515,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32c17.643,0,32,14.357,32,32
                                        C129.515,241.643,115.157,256,97.515,256z"/>
                                </g>
                            </g>
                        <g>
                                <g>
                                    <path d="M245.333,256c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667S128,400.555,128,394.667
                                        c0-64.704,52.629-117.333,117.333-117.333s117.333,52.629,117.333,117.333c0,5.888,4.779,10.667,10.667,10.667
                                        c5.888,0,10.667-4.779,10.667-10.667C384,318.208,321.792,256,245.333,256z"/>
                                </g>
                            </g>
                        <g>
                                <g>
                                    <path d="M394.667,298.667c-17.557,0-34.752,4.8-49.728,13.867c-5.013,3.072-6.635,9.621-3.584,14.656
                                        c3.093,5.035,9.621,6.635,14.656,3.584C367.637,323.712,380.992,320,394.667,320c41.173,0,74.667,33.493,74.667,74.667
                                        c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667C490.667,341.739,447.595,298.667,394.667,298.667z"/>
                                </g>
                            </g>
                        <g>
                                <g>
                                    <path d="M145.707,312.512c-14.955-9.045-32.149-13.845-49.707-13.845c-52.928,0-96,43.072-96,96
                                        c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667C21.333,353.493,54.827,320,96,320
                                        c13.675,0,27.029,3.712,38.635,10.752c5.013,3.051,11.584,1.451,14.656-3.584C152.363,322.133,150.741,315.584,145.707,312.512z"
                                    />
                                </g>
                            </g>
                    </svg>
                </div>
                <div class="pl-4">
                    <p class="card-text fs-18">Total Students</p>
                    <h5 class="card-title pt-2 fs-26">30,405</h5>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col-lg-4 -->
    <div class="col-lg-4 responsive-column-half">
        <div class="card card-item dashboard-info-card">
            <div class="card-body d-flex align-items-center">
                <div class="icon-element flex-shrink-0 bg-5 text-white">
                    <svg class="svg-icon-color-white" width="40" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path d="M405.333,42.667h-44.632c-4.418-12.389-16.147-21.333-30.035-21.333h-32.229C288.417,8.042,272.667,0,256,0
                                            s-32.417,8.042-42.438,21.333h-32.229c-13.888,0-25.617,8.944-30.035,21.333h-44.631C83.146,42.667,64,61.802,64,85.333v384
                                            C64,492.865,83.146,512,106.667,512h298.667C428.854,512,448,492.865,448,469.333v-384C448,61.802,428.854,42.667,405.333,42.667
                                            z M170.667,53.333c0-5.885,4.792-10.667,10.667-10.667h37.917c3.792,0,7.313-2.021,9.208-5.302
                                            c5.854-10.042,16.146-16.031,27.542-16.031s21.688,5.99,27.542,16.031c1.896,3.281,5.417,5.302,9.208,5.302h37.917
                                            c5.875,0,10.667,4.781,10.667,10.667V64c0,11.76-9.563,21.333-21.333,21.333H192c-11.771,0-21.333-9.573-21.333-21.333V53.333z
                                             M426.667,469.333c0,11.76-9.563,21.333-21.333,21.333H106.667c-11.771,0-21.333-9.573-21.333-21.333v-384
                                            c0-11.76,9.563-21.333,21.333-21.333h42.667c0,23.531,19.146,42.667,42.667,42.667h128c23.521,0,42.667-19.135,42.667-42.667
                                            h42.667c11.771,0,21.333,9.573,21.333,21.333V469.333z"/>
                                        <path d="M160,170.667c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                            C192,185.021,177.646,170.667,160,170.667z M160,213.333c-5.875,0-10.667-4.781-10.667-10.667
                                            c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667C170.667,208.552,165.875,213.333,160,213.333z"/>
                                        <path d="M160,277.333c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                            C192,291.688,177.646,277.333,160,277.333z M160,320c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667
                                            s10.667,4.781,10.667,10.667C170.667,315.219,165.875,320,160,320z"/>
                                        <path d="M160,384c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32C192,398.354,177.646,384,160,384z
                                             M160,426.667c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667
                                            C170.667,421.885,165.875,426.667,160,426.667z"/>
                                        <path d="M373.333,192h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                            c5.896,0,10.667-4.771,10.667-10.667C384,196.771,379.229,192,373.333,192z"/>
                                        <path d="M373.333,298.667h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                            c5.896,0,10.667-4.771,10.667-10.667C384,303.438,379.229,298.667,373.333,298.667z"/>
                                        <path d="M373.333,405.333h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                            c5.896,0,10.667-4.771,10.667-10.667C384,410.104,379.229,405.333,373.333,405.333z"/>
                                    </g>
                                </g>
                            </g>
                    </svg>
                </div>
                <div class="pl-4">
                    <p class="card-text fs-18">Total Courses</p>
                    <h5 class="card-title pt-2 fs-26">11</h5>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col-lg-4 -->
    <div class="col-lg-4 responsive-column-half">
        <div class="card card-item dashboard-info-card">
            <div class="card-body d-flex align-items-center">
                <div class="icon-element flex-shrink-0 bg-6 text-white">
                    <svg class="svg-icon-color-white" width="40" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m498.667 366.464c-9.551-14.036-25.752-17.463-43.352-9.181l-9.328 4.107c14.708-31.35 16.533-66.297 9.211-99.307-8.409-37.913-28.72-74.641-60.368-109.164-2.798-3.053-7.541-3.259-10.595-.46-3.053 2.798-3.259 7.541-.46 10.595 29.846 32.556 48.95 66.967 56.782 102.276 8.249 37.193 3.45 75.549-17.601 106.2l-93.342 41.099.077-10.542c.002-.266-.01-.532-.037-.797-2.155-21.667-18.717-38.93-40.276-41.98-.064-.01-.128-.018-.193-.025l-82.961-9.552c-31.901-4.541-40.117-23.658-83.321-34.559-2.985-25.33.994-52.299 11.9-79.336 16.425-40.718 48.558-80.278 93.104-114.711 16.603 11.772 90.676 13.237 107.252-1.949 8.492 6.449 16.597 13.095 24.147 19.822 1.429 1.274 3.211 1.9 4.986 1.9 2.064 0 4.12-.847 5.601-2.51 2.755-3.092 2.481-7.832-.611-10.587-8.276-7.373-17.178-14.648-26.515-21.679 2.188-9.278-.874-20.137-8.954-26.601 23.479-35.612 30.308-58.921 20.875-71.133-6.479-8.389-14.539-4.452-17.981-2.77-5.834 2.848-9.015 2.998-14.383-.514-10.241-6.701-21.005-6.917-31.576 0-5.436 3.557-9.717 3.557-15.151 0-10.242-6.701-21.002-6.917-31.575 0-5.43 3.554-8.623 3.334-14.365.48-3.438-1.709-11.489-5.711-18.009 2.679-9.221 11.868-3.052 34.442 18.843 68.843-1.341.725-2.619 1.576-3.812 2.548-8.708-9.196-22.975-18.787-43.607-16.483-17.113 1.915-29.732-3.74-37.306-8.82-3.44-2.304-8.098-1.386-10.404 2.052-2.306 3.44-1.387 8.098 2.052 10.404 9.655 6.473 25.701 13.679 47.322 11.268 15.94-1.788 26.756 6.358 33.489 14.648-.092.32-.177.642-.256.964-5.743.09-14.326.626-23.778 2.592-22.732 4.729-39.606 15.532-48.799 31.244-2.091 3.574-.889 8.168 2.685 10.26 3.575 2.091 8.168.888 10.259-2.686 13.674-23.369 47.051-26.227 60.308-26.406.057.165.124.328.184.492-47.308 36.493-80.244 77.19-97.932 121.04-11.18 27.717-15.646 55.485-13.379 81.874-7.191-1.064-14.465-1.635-21.774-1.685v-4.535c0-11.999-9.762-21.76-21.761-21.76h-34.424c-11.999 0-21.761 9.762-21.761 21.76v174.644c0 12 9.762 21.761 21.761 21.761h34.423c11.999 0 21.761-9.762 21.761-21.761v-2.136l75.091 27.949c10.091 3.755 20.667 5.66 31.434 5.66h111.886c17.106 0 33.785-4.84 48.233-13.995 149.259-94.62 140.195-88.733 141.057-89.497 12.023-10.672 14.269-28.746 5.224-42.04zm-177.58-256.172c-27.422 6.924-54.084 6.924-81.512 0-11.769-2.975-8.359-23.965 4.289-20.793 24.538 6.16 48.394 6.16 72.934 0 12.428-3.12 16.247 17.771 4.289 20.793zm-98.279-91.361c.059.029.118.059.174.087 10.149 5.044 19.042 5.318 29.251-1.361 12.776-8.363 14.163 5.046 30.938 5.046 8.076 0 12.533-2.916 15.787-5.046 5.437-3.558 9.719-3.556 15.155 0 10.254 6.71 18.932 6.379 29.376 1.342 1.543 5.562-1.949 22.143-24.185 55.249-11.042-.188-27.066 10.657-72.428.562-22.188-33.534-25.619-50.276-24.068-55.879zm261.085 377.99-139.534 88.417c-12.043 7.631-25.946 11.666-40.205 11.666h-111.886c-8.975 0-17.791-1.588-26.203-4.719l-80.323-29.897v-80.755c0-4.142-3.357-7.499-7.498-7.499s-7.498 3.357-7.498 7.499v98.894c0 3.73-3.035 6.764-6.764 6.764h-34.424c-3.73 0-6.764-3.035-6.764-6.764v-174.644c0-3.73 3.034-6.763 6.764-6.763h34.423c3.73 0 6.764 3.034 6.764 6.763v40.694c0 4.142 3.357 7.499 7.498 7.499s7.498-3.357 7.498-7.499v-21.162c62.031.475 75.978 33.17 118.476 39.181.064.01.128.018.192.025l82.957 9.551c14.526 2.097 25.705 13.664 27.323 28.227l-.104 14.264h-77.365c-4.141 0-7.499 3.357-7.499 7.499s3.357 7.499 7.499 7.499h84.809c.947 0 2.041-.21 2.993-.625.153-.068 136.263-59.995 136.422-60.065 9.811-4.36 18.756-4.983 24.822 3.931 4.716 6.927 3.672 16.292-2.373 22.019z"/><path d="m282.307 340.22c4.141 0 7.499-3.357 7.499-7.499v-12.43c21.051-3.416 33.334-20.455 36.006-36.351 3.338-19.857-7.063-37.126-26.497-43.995-3.434-1.214-6.594-2.375-9.51-3.496v-47.812c8.871 1.471 14.197 6.062 14.585 6.405 3.046 2.77 7.76 2.565 10.555-.465 2.808-3.044 2.616-7.788-.428-10.596-.529-.488-9.713-8.757-24.712-10.486v-10.664c0-4.142-3.357-7.499-7.499-7.499-4.141 0-7.498 3.357-7.498 7.499v11.27c-1.808.346-3.66.786-5.563 1.359-12.72 3.831-22.228 14.738-24.815 28.463-2.347 12.455 1.602 24.433 10.305 31.259 4.997 3.919 11.287 7.507 20.073 11.343v59.301c-8.672-.367-14.01-1.995-23.322-8.087-3.465-2.266-8.113-1.297-10.38 2.17-2.267 3.465-1.296 8.113 2.17 10.38 12.241 8.008 20.424 10.097 31.532 10.529v11.903c0 4.142 3.357 7.499 7.499 7.499zm-18.316-116.838c-4.281-3.358-6.13-9.75-4.823-16.681 1.212-6.428 5.631-14.238 14.403-16.88.417-.126.827-.234 1.237-.344v40.505c-4.49-2.242-8.011-4.399-10.817-6.6zm30.326 30.703c18.66 6.595 17.504 22.617 16.705 27.37-1.654 9.841-8.878 20.347-21.217 23.509v-52.504c1.46.534 2.951 1.073 4.512 1.625z"/></g></g></svg>
                </div>
                <div class="pl-4">
                    <p class="card-text fs-18">Total Earnings</p>
                    <h5 class="card-title pt-2 fs-26">289.12</h5>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col-lg-4 -->
    <div class="col-lg-4 responsive-column-half">
        <div class="card card-item">
            <div class="card-body">
                <h3 class="fs-18 font-weight-semi-bold pb-4">Total Sales</h3>
                <canvas id="doughnut-chart"></canvas>
                <div id="legend" class="mt-40px text-center"></div>
            </div>
        </div><!-- end card -->
    </div><!-- end col-lg-4 -->
    <div class="col-lg-4 responsive-column-half">
        <div class="card card-item">
            <div class="card-body">
                <h3 class="fs-18 font-weight-semi-bold pb-4">Net Income</h3>
                <canvas id="bar-chart"></canvas>
                <ul class="chart-legend mt-40px text-center">
                    <li>Sales for this month</li>
                </ul>
            </div>
        </div><!-- end card -->
    </div><!-- end col-lg-4 -->
    <div class="col-lg-4">
        <div class="card card-item">
            <div class="card-body">
                <h3 class="fs-18 font-weight-semi-bold pb-4">Earning by Location</h3>
                <div class="my-course-progress-bar-wrap">
                    <div class="d-flex flex-wrap align-items-center mb-2 position-relative">
                        <p class="skillbar-title">USA:</p>
                        <div class="skillbar-box">
                            <div class="skillbar skillbar-skillbar-2" data-percent="80%">
                                <div class="skillbar-bar skillbar--bar-2 bg-1"></div>
                            </div><!-- End Skill Bar -->
                        </div>
                        <div class="skill-bar-percent">80%</div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mb-2 position-relative">
                        <p class="skillbar-title">UK:</p>
                        <div class="skillbar-box">
                            <div class="skillbar skillbar-skillbar-2" data-percent="70%">
                                <div class="skillbar-bar skillbar--bar-2 bg-2"></div>
                            </div><!-- End Skill Bar -->
                        </div>
                        <div class="skill-bar-percent">70%</div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mb-2 position-relative">
                        <p class="skillbar-title">China:</p>
                        <div class="skillbar-box">
                            <div class="skillbar skillbar-skillbar-2" data-percent="60%">
                                <div class="skillbar-bar skillbar--bar-2 bg-3"></div>
                            </div><!-- End Skill Bar -->
                        </div>
                        <div class="skill-bar-percent">60%</div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mb-2 position-relative">
                        <p class="skillbar-title">Canada:</p>
                        <div class="skillbar-box">
                            <div class="skillbar skillbar-skillbar-2" data-percent="50%">
                                <div class="skillbar-bar skillbar--bar-2 bg-4"></div>
                            </div><!-- End Skill Bar -->
                        </div>
                        <div class="skill-bar-percent">50%</div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mb-2 position-relative">
                        <p class="skillbar-title">Brazil:</p>
                        <div class="skillbar-box">
                            <div class="skillbar skillbar-skillbar-2" data-percent="40%">
                                <div class="skillbar-bar skillbar--bar-2 bg-5"></div>
                            </div><!-- End Skill Bar -->
                        </div>
                        <div class="skill-bar-percent">40%</div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mb-2 position-relative">
                        <p class="skillbar-title">Russia:</p>
                        <div class="skillbar-box">
                            <div class="skillbar skillbar-skillbar-2" data-percent="30%">
                                <div class="skillbar-bar skillbar--bar-2 bg-6"></div>
                            </div><!-- End Skill Bar -->
                        </div>
                        <div class="skill-bar-percent">30%</div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mb-2 position-relative">
                        <p class="skillbar-title">Australia:</p>
                        <div class="skillbar-box">
                            <div class="skillbar skillbar-skillbar-2" data-percent="20%">
                                <div class="skillbar-bar skillbar--bar-2 bg-7"></div>
                            </div><!-- End Skill Bar -->
                        </div>
                        <div class="skill-bar-percent">20%</div>
                    </div>
                </div><!-- end my-course-progress-bar-wrap -->
            </div>
        </div><!-- end card -->
    </div><!-- end col-lg-4 -->
    <div class="col-lg-7 responsive-column-half">
        <div class="card card-item">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center pb-4">
                    <h3 class="fs-18 font-weight-semi-bold pb-4">Earning Statistics</h3>
                    <div class="select-container w-auto">
                        <select class="select-container-select">
                            <option value="this-week">This Week</option>
                            <option value="this-month">This Month</option>
                            <option value="last-months">Last 6 Months</option>
                            <option value="this-year">This Year</option>
                        </select>
                    </div>
                </div>
                <canvas id="line-chart"></canvas>
                <ul class="chart-legend mt-40px text-center">
                    <li>Earnings for this month</li>
                </ul>
            </div>
        </div><!-- end card -->
    </div><!-- end col-lg-7 -->
    <div class="col-lg-5 responsive-column-half">
        <div class="card card-item">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center pb-4">
                    <h3 class="fs-18 font-weight-semi-bold">Notifications</h3>
                    <span class="fs-15 cursor-pointer">Mark all as read</span>
                </div>
                <div class="notification-body scrolled-box custom-scrollbar-styled">
                    <a href="dashboard.html" class="media media-card align-items-center">
                        <div class="icon-element icon-element-sm flex-shrink-0 bg-1 mr-3 text-white">
                            <i class="la la-bolt"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="fs-15">Your resume updated!</h5>
                            <span class="d-block lh-18 pt-1 text-gray fs-13">1 hour ago</span>
                        </div>
                    </a>
                    <a href="dashboard.html" class="media media-card align-items-center">
                        <div class="icon-element icon-element-sm flex-shrink-0 bg-2 mr-3 text-white">
                            <i class="la la-lock"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="fs-15">You changed password</h5>
                            <span class="d-block lh-18 pt-1 text-gray fs-13">November 12, 2019</span>
                        </div>
                    </a>
                    <a href="dashboard.html" class="media media-card align-items-center">
                        <div class="icon-element icon-element-sm flex-shrink-0 bg-3 mr-3 text-white">
                            <i class="la la-user"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="fs-15">Your account has been created successfully</h5>
                            <span class="d-block lh-18 pt-1 text-gray fs-13">November 12, 2019</span>
                        </div>
                    </a>
                    <a href="dashboard.html" class="media media-card align-items-center">
                        <div class="icon-element icon-element-sm flex-shrink-0 bg-4 mr-3 text-white">
                            <i class="la la-lock"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="fs-15">You changed password</h5>
                            <span class="d-block lh-18 pt-1 text-gray fs-13">November 12, 2019</span>
                        </div>
                    </a>
                    <a href="dashboard.html" class="media media-card align-items-center">
                        <div class="icon-element icon-element-sm flex-shrink-0 bg-5 mr-3 text-white">
                            <i class="la la-user"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="fs-15">Your account has been created successfully</h5>
                            <span class="d-block lh-18 pt-1 text-gray fs-13">November 12, 2019</span>
                        </div>
                    </a>
                    <a href="dashboard.html" class="media media-card align-items-center">
                        <div class="icon-element icon-element-sm flex-shrink-0 bg-6 mr-3 text-white">
                            <i class="la la-briefcase"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="fs-15">You applied for a job Front-end Developer</h5>
                            <span class="d-block lh-18 pt-1 text-gray fs-13">November 12, 2019</span>
                        </div>
                    </a>
                    <a href="dashboard.html" class="media media-card align-items-center">
                        <div class="icon-element icon-element-sm flex-shrink-0 bg-7 mr-3 text-white">
                            <i class="la la-upload"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="fs-15">Your course uploaded successfully</h5>
                            <span class="d-block lh-18 pt-1 text-gray fs-13">November 12, 2019</span>
                        </div>
                    </a>
                </div>
            </div>
        </div><!-- end card -->
    </div><!-- end col-lg-5 -->
</div><!-- end row -->

@endsection