@extends('visitors.sub_layouts.master')

@section('title', __('الرئيسية'))

@section('content')
    <!-- Dashboard Center Content -->
    <div class="rbt-dashboard-content">
        <div class="content-page">

            <div class="chat-box-section">
                <div class="chat-top-bar">
                    <div class="section-title">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icons/document-file.png') }}" alt="">
                        </div>
                        <h6 class="title">
                            <span class="theme-gradient">Result</span>
                        </h6>
                    </div>

                </div>
                <div class="chat-box-list" id="chatContainer">
                    <div class="chat-box ai-speech">
                        <div class="inner">
                            <div class="chat-section">
                                <div class="author">
                                    <img class="w-100" src="{{ asset('assets/images/team/avater.png') }}" alt="AiWave">
                                </div>
                                <div class="chat-content">
                                    <h6 class="title mr--10">BOAD AI<span class="rainbow-badge-card"><i
                                                class="fa-sharp fa-regular fa-check"></i> Bot</span></h6>
                                    <p class="mb--20 mr--10">{!! nl2br(e($problem->disease)) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
