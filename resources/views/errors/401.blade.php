@extends('layouts.auth')

@section('title', '404')

@section('style')
@endsection

@section('content')
    <section class="cd-intro">
        <div class="cd-intro-content mask">
            <h1 data-content="401">
                <span>401</span>

            </h1>
            <p>Not authorized. Click <a href="{{url('/home')}}"> here</a> to go home.</p>
        </div>
    </section>

@endsection

@section('script')
@endsection
